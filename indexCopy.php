<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <script src="./assets-mat/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="./assets-mat/compiled/_myuikit.min.js" type="text/javascript"></script>
        <link rel="icon" href="./assets-mat/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="./assets-mat/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon-precomposed" href="./assets-mat/images/apple-touch-icon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="./assets-mat/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./assets-mat/compiled/_myuikit.min.css"/>
        <link rel="stylesheet" href="./assets-mat/css/custom.css"/>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>SASS-ified UI Kits</title>
        <?php

        function quercus_test()
        {
            return function_exists("quercus_version");
        }

        ?>
        <style type="text/css">
            body {
                margin-bottom:0;
            }
            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                display: table;
                background-color: rgba(90, 82, 95, 0.8);
                z-index: 9999;
            }

            .preloder-wrap {
                display: table-cell;
                vertical-align: middle;
            }

            .preloder-inner {
                width: 200px;
                height: 200px;
                margin: 0 auto;
            }

            #fadeinvtx {
                text-align: center;
            }

            body {
                background-image: url('./assets-mat/images/ui/2.jpg');
            }

            .page-header .container {

                height: auto;
                z-index: 1;
                text-align: center;
                position: relative;
                background-color: transparent;
            }

            #heading-splash {
                border-bottom: 4px solid rgba(13, 18, 28, .3) !important;
                width: 100%;
                top: 125px;
            }

            .page-header {
                height: 94vh;
                padding: 0 !important;
                color: #dbe8eb;
                position: relative;
                border-bottom: none;
                background-position: center center;
                background-size: cover;

            &:after,
            &:before {
                position: absolute;
                z-index: 0;
                width: 100%;
                height: 100%;
                display: block;
                left: 0;
                top: 0;
                content: "";
            }

            &:before {
                background-color: rgba(0, 0, 0, .5);
            }

            &[filter-color="blue"] {
            @include linear-gradient ( rgba ( $ black, .20 ), rgba ( 94, 140, 167, 0.6 ) );
            }

                }

            #starter-template {
                background-color: transparent;
                position: relative;
                margin-top: 175px;
                color: #ffffff;
            }

            .counter {
                color: #d6cdcd;
                float: left;
                bottom: 0;
            }

            .message {
                color: #d6cdcd;
                padding: 6px;
                border: 1px rgba(4, 133, 125, .8);
                background: rgba(32, 43, 58, .5);

                text-align: center;
            }

            .blockquote-white {
                color: #ffffff;
            }

            h1.centered {
                text-align: center;
                margin-top: -28px;
            }

            .fauxcardmat {
                background: url(./assets-mat/images/ui/mat.png) center no-repeat transparent;
                max-width: 491px;
                height: 300px;
                border-radius: .1875rem;
                position: relative;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 5px 25px 0 rgba(0, 0, 0, .2);
            }

            .mattheme, .bstheme {
                text-align: center;
                margin: 20px auto !important;
                background-color: transparent;
            }

            .mattheme p {
                border: 1px solid #934fab;
                padding: 6px;
                width: 40%;
                margin: 100px auto;
                background-color: rgba(94, 48, 110, .8);
            }

            .mattheme p a, .bstheme p a {
                font-size: 16px;
                color: #ffffff;
            }

            .fauxcardbs {
                background: url(./assets-mat/images/ui/greentheme.png) center no-repeat transparent;
                max-width: 491px;
                height: 300px;
                border-radius: .1875rem;
                position: relative;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 5px 25px 0 rgba(0, 0, 0, .2);
            }

            .bstheme p {
                border: 1px solid green;
                padding: 6px;
                width: 40%;
                margin: 100px auto;
                background-color: rgba(2, 109, 14, .3);
            }

            a.bs:hover {
                color: green;
            }

            a.mat:hover {
                color: mediumpurple;
            }

            footer {
                background-color: rgba(0, 0, 0, .85) !important;

                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 64px;
                line-height: 60px; /* Vertically center the text there */
                text-align:center;
            }

            #failure {
            <?php echo "display: none;"; ?>
            }

            #failure_default_interpreter {
                display: none;
            <?php if (! quercus_test()) echo "display: block;"; ?>
            }

            #success_pro {
                display: none;
            <?php if (quercus_is_pro() && quercus_test()) echo "display: block;"; ?>
            }

            #success_open_source {
                display: none;
            <?php if (! quercus_is_pro() && quercus_test()) echo "display: block;"; ?>
            }
        </style>
    </head>
    <body class="sidebar-collapse">
        <div class="preloader">
            <div class="preloder-wrap">
                <div class="preloder-inner">
                    <br><br>

                    <div class="box loading"></div>
                    <br><br>

                    <div id="fadeinvtx"><img src="./assets-mat/images/ui/loading.svg"/></div>
                </div>
            </div>
        </div>
        <div class="page-header" filter-color="blue">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('./assets-mat/images/ui/2.jpg');"></div>
            <!-- First Parallax Section -->
            <header>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="200">
                    <div class="container">
                        <div class="dropdown button-dropdown">
                            <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                                <span class="button-bar"></span>
                                <span class="button-bar"></span>
                                <span class="button-bar"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-header">Dropdown header</a>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">One more separated link</a>
                            </div>
                        </div>
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#" rel="tooltip"
                               title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                                myuikit.com
                                <small>(sassified)</small>
                            </a>
                            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link Here</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link Here</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="LinkedIn Profile" data-placement="bottom"
                                       href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                        <i class="fa fa-linkedin"></i>

                                        <p class="d-lg-none d-xl-none">LinkedIn</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="My Github"
                                       data-placement="bottom"
                                       href="https://github.com/zom-b-food" target="_blank">
                                        <i class="fa fa-github-square"></i>

                                        <p class="d-lg-none d-xl-none">Github</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="Contact" data-placement="bottom"
                                       href="mailto:web@myuikit.com">
                                        <i class="fa fa-envelope"></i>

                                        <p class="d-lg-none d-xl-none">web@myuikit.com</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="heading container" id="heading-splash">
                    <h2 class="blockquote-white">SASS-ified Starter Kits</h2>

                    <p class="blockquote-white">Sassified with Grunt. Responsive and Modular. Guaranteed to compile ALL
                        your scss files.</p>
                </div>
            </header>
            <div id="starter-template">
                <div class="container">
                    <h1 class="centered">Pick Your SASS Starter Kit</h1>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="fauxcardbs bstheme"><p><a href="pages-bs/jump.php"
                                                                  class="bs">Bootstrap</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fauxcardmat mattheme"><p><a href="pages-mat/jump.php"
                                                                    class="mat">Materialize</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin page content -->
        <div class="counter d-none d-sm-block">
            <?php
            $count_my_page = ("countlog.txt");
            $hits = file($count_my_page);
            $hits[0]++;
            $fp = fopen($count_my_page, "w");
            fputs($fp, "$hits[0]");
            fclose($fp);
            echo $hits[0];
            ?>

            <span class="message" id="failure">
                    PHP files are not being interpreted by Quercus&#153;.
            </span>
            <span class="message" id="failure_default_interpreter">
                    PHP is being interpreted, but not by Quercus&#153;! Please check your configuration.
            </span>
            <span class="message" id="success_pro">
                    <img src="./assets-mat/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">
                    Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is compiling PHP pages.
            </span>
            <span class="message d-none d-md-block" id="success_open_source">
                    <img src="./assets-mat/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">
                    Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is interpreting PHP
                    pages.
            </span>
        </div>
        <footer>
            <div class="container">

                <span class="text-muted">
                     <br/>Created by Adam @ www.ui-design-engineering.com<br/>

Resin <sup><font size="-1">&#174;</font></sup> is a registered trademark,
and Quercus<sup>tm</sup>, Amber<sup>tm</sup>, and Hessian<sup>tm</sup>
are trademarks of Caucho Technology.</span>
            </div>
        </footer>
        <script>
            $(function () {
                $(".preloader").delay(2000).fadeOut();
            });
        </script>
        <script src="./assets-mat/js/components/popper.min.js" type="text/javascript"></script>
        <script src="./assets-mat/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets-mat/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/accordion.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/nouislider.min.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/wow.min.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/jquery.filtertable.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/tablesort.js" type="text/javascript"></script>
        <script src="./assets-mat/js/components/jquery.beefup.min.js"></script>
    </body>
</html>
