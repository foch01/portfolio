<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
            <a href="#" class=" facebook ico-perso">
                <i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
            </a>
            <a href="#" class="twitter ico-perso">
                <i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="#" class="linkedin ico-perso">
                <i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
            </a>
            </div>
            <div class="social-2">
            <a href="#" class="viadeo ico-perso">
                <i class="fa fa-viadeo-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="#" class="github ico-perso">
                <i class="fa fa-github-square fa-4x" aria-hidden="true"></i>
            </a>
            <a href="#" class="cv ico-perso">
                <i class="fa fa-file fa-4x" aria-hidden="true"></i>
            </a>
            </div>
            </div>
        </div>
        <div class="right">
            <div class="portfolio">
                <div class="content-portfolio">
                <div class="hover">
                <a href="#">
                    <h4 class="name-project none">Projet CREATE PRO</h4>
                    <img src="images/createpro.png" alt="" class="img">
                </a>
                </div>
                <div class="hover">
                    <a href="#">
                        <img src="images/bootstrap.png" alt="" class="img">
                    </a>
                </div>
                <div class="hover">
                    <a href="#">
                        <img src="images/fedala.png" alt="" class="img">
                    </a>
                </div>
                <div class="hover">
                    <a href="#">
                        <img src="images/ddcspp.png" alt="" class="img">
                    </a>
                </div>
                <div class="hover">
                    <a href="#">
                        <img src="images/123itech.png" alt="" class="img">
                    </a>
                </div>
                    <div class="hover">
                        <a href="#">
                            <img src="images/youtube.jpg" alt="" class="img">
                        </a>
                    </div>

                </div>
            </div>
    </div>
        <script>
            $('.hover').hover(
                function () {
                    $('.name-project').fadeIn(1000);
                },
            function () {
                $('.name-project').fadeOut(1000);
            }
            );
        </script>

</body>

</html>