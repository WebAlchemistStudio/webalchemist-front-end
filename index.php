<?php
    include "lib/Parsedown.php";
?>
<!doctype html>
<html>
    <head>
        <title>Web Artisan Studio</title>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
        <link rel="manifest" href="images/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link href="https://fonts.googleapis.com/css?family=Lato|Oswald" rel="stylesheet">
        <link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="css/main.css" type="text/css" rel="stylesheet" />
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="lib/typed.min.js"></script>
        <script src="lib/jquery.sticky-kit.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default" id="primary-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/webartisan.png" /></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?p=home"><span class='glyphicon glyphicon-home'></span> &nbsp; Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class='glyphicon glyphicon-console'></span> &nbsp; Services <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Website Development</a></li>
                                <li><a href="#">Managed Hosting</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-book"></span> &nbsp; About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            if(!isset($_GET["p"]) || $_GET["p"] == "home"){
                include "pages/home.php";
            } else if ($_GET["p"] == "document"){
                include "pages/document.php";
            }
        ?>
        
        <footer>
            <div class="row">
                <div class="col-md-12" style='text-align:center;'>
                    <img src="images/webartisan.png" width="60" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>Policies</h4>
                    <a href="?p=privacy_policy">Privacy Policy</a><br>
                    <a href="#">Refund</a><br>
                    <a href="#">Warranty</a><br>
                    <a href="#">Hosting Terms of Service</a>
                </div>
                <div class="col-md-4">
                    <h4>Join Us</h4>
                    <a href="#">About Web Artisan</a><br>
                    <a href="#">What We Do</a>
                </div>
                <div class="col-md-4">
                    <h4>Contact</h4>
                    <a href="#">(306) 341-1035</a><br>
                    <a href="#">xx@example.com</a><br>
                    <a href="#">Create an Account</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style='text-align:center;'>
                    &copy; Web Artisan Studio 2017 All Rights Reserved
                </div>
            </div>
        </footer>
    </body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        Typed.new('#main-typed', {
            strings: ["works.", "is beautiful.", "is optimized.", "is fast to load.", "is affordble."],
            typeSpeed: 0,
            loop: true,
            backDelay: 1500
        });
    });

    $(function(){
        $(".stick-parent").stick_in_parent({
            offset_top:100
        });
    });
</script>