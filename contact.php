<?php

/*var_dump($_POST);*/
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom.";
}
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Vous n'avez pas renseigné un email valide.";
}
if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "Vous n'avez pas renseigné le sujet.";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message.";
}

/*var_dump($errors);*/

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#contact');
}else {
    $_SESSION['success'] = 1;
    $object = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'FROM: ' . $_POST['mail'];
    mail('foch29310@gmail.com', $object, $message, $headers);
    header('Location: index.php#contact');
}



