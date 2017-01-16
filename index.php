<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Je suis Thomas Sancéo, Développeur web passionné par le sport " />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <script src="js/jquery/jquery-3.1.1.min.js"></script>
    <title>Thomas Sanceo</title>
</head>

<body>
    <div class="container-fluid">

        <div class="left">
            <div class="profil"></div>

            <div class="name">Thomas Sanceo</div>
            <div class="describe">Développeur Web, passionné par le sport, les technologies et le webmarketing</div>
            <div class="social">
            <div class="social-1">
            <a href="https://www.facebook.com/sanceo.thomas" target="_blank" class=" facebook ico-perso">
                <i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/foch_01" target="_blank" class="twitter ico-perso">
                <i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/sanceothomas" target="_blank" class="linkedin ico-perso">
                <i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
            </a>
            </div>
            <div class="social-2">
            <a href="http://www.viadeo.com/p/00228elbfqkxbvsk" target="_blank" class="viadeo ico-perso">
                <i class="fa fa-viadeo-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="https://github.com/foch01" target="_blank" class="github ico-perso">
                <i class="fa fa-github-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="http://code-academie.fr/cv/SANCEO_Thomas/index.html" target="_blank" class="cv ico-perso">
                <i class="fa fa-file fa-4x" aria-hidden="true"></i>
            </a>
            </div>
                </div>
            <div class="center-contact">
                <button type="button" class="contact btn btn-primary btn-lg">
                    <a href="#contact" class="link-contact">Contact</a>
                </button>
            </div>
        </div>
        </div>
        <div class="right">
            <div class="portfolio">
                <div class="hover">
                <a href="#" class="wrapper">
                    <div class="text">
                           Projet CREATE PRO
                    </div>
                    <img src="images/createpro.png" alt="" class="img">
                </a>
                    <div class="box-desc-projet">
                        <div class="desc-projet">
                            HTML5 - CSS3
                        </div>
                    </div>
                </div>

                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet BOOTSTRAP
                            </div>
                            <img src="images/bootstrap.png" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                HTML5 - CSS3 - JavaScript
                            </div>
                        </div>
                    </div>
                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet Pastime
                            </div>
                            <img src="images/pastime.png" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                HTML5 - CSS3 - JavaScript
                            </div>
                        </div>
                    </div>
                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet Traiteur
                            </div>
                            <img src="images/fedala.png" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                Wordpress
                            </div>
                        </div>
                    </div>
                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet DDCSPP
                            </div>
                            <img src="images/ddcspp.png" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                HTML5 - CSS3 - JavaScript - PHP
                            </div>
                        </div>
                    </div>
                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet 123itech
                            </div>
                            <img src="images/123itech.png" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                Webmarketing
                            </div>
                        </div>
                    </div>
                    <div class="hover">
                        <a href="#" class="wrapper">
                            <div class="text">
                                Projet Youtube
                            </div>
                            <img src="images/youtube.jpg" alt="" class="img">
                        </a>
                        <div class="box-desc-projet">
                            <div class="desc-projet">
                                Webmarketing
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-contact none-contact" id="modal">
                <i class="fa fa-times fa-4x cross" aria-hidden="true"></i>
                <?php if(array_key_exists('errors', $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                    <?php endif; ?>
                <?php if(array_key_exists('success', $_SESSION)): ?>
                    <div class="alert alert-success">
                        Votre email a bien été envoyé.
                    </div>
                <?php endif; ?>
                <form class="col-sm-8 form-contact" action="contact.php" method="post">
                    <div class="form-group">
                        <input required class="form-control input-lg input-contact" type="text" placeholder="Nom" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                    </div>
                    <div class="form-group">
                        <input required class="form-control input-lg input-contact" type="email" placeholder="Mail" name="mail" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['mail'] : ''; ?>">
                    </div>
                    <div class="form-group">
                        <input required class="form-control input-lg input-contact" type="text" placeholder="Sujet" name="subject" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                    </div>
                    <div class="form-group">
                        <textarea required class="input-lg input-contact form-control area-resize" rows="10" placeholder="Message..." name="message"><?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary contact">Envoyer</button>
                </form>
            </div>
        </div>
        <script>
$(document).ready(function(){


    var hash = window.location.hash;


    if (hash == '#contact'){
        $(".modal-contact").removeClass("none-contact");
        $("body").addClass("overflow-y");
    }


    $(".contact").click(function(){
        $(".modal-contact").removeClass("none-contact");
        $("body").addClass("overflow-y");
    }),
        $(".cross").click(function(){
            $(".modal-contact").addClass("none-contact");
            $("body").removeClass("overflow-y");
        });
});
        </script>
</body>

</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);


?>