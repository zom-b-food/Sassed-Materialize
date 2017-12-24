<!DOCTYPE html>
<html lang="en">
    <head>
        <? include "../sitewide-mat/globals-top.php"; ?>

        <title>Shortcode Fun Facts</title>
    </head>
    <body id="top" class="has-header-search">

        <? include "../sitewide-mat/header.php"; ?>

        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Fun Facts</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shortcodes</a></li>
                            <li class="active">Fun Facts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <section id="count1" class="padding-top-100">
            <div class="container-fluid">
                <div class="text-center padding-bottom-50">
                    <h2 class="section-title">Fun Facts One</h2>

                    <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                        quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="row text-center">
                    <div class="col-sm-3 counter-wrap light-blue">
                        <strong class="white-text"><span class="timer">545</span>+</strong>
                        <span class="count-description white-text">Client Work With Us</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap deep-purple">
                        <strong class="white-text"><span class="timer">535</span>+</strong>
                        <span class="count-description white-text">Happy Clients</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap light-blue">
                        <strong class="white-text"><span class="timer">1544</span>+</strong>
                        <span class="count-description white-text">Cups Of Coffee</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap deep-purple">
                        <strong class="white-text"><span class="timer">111</span>+</strong>
                        <span class="count-description white-text">Awards Won</span>
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <section id="count2" class="section-padding gray-bg">
            <div class="container">
                <div class="text-center padding-bottom-50">
                    <h2 class="section-title">Fun Facts Plus Box</h2>

                    <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                        quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="count-plus-box">
                            <li>
                                <i class="material-icons brand-color">&#xE90F;</i>
                                <span class="timer">320</span>
                                <span class="count-description">Ideas</span>
                            </li>
                            <li>
                                <i class="material-icons brand-color">&#xE863;</i>
                                <span class="timer">220</span>
                                <span class="count-description">Experiments</span>
                            </li>
                            <li>
                                <i class="material-icons brand-color">&#xE8F8;</i>
                                <span class="timer">145</span>
                                <span class="count-description">Project Run</span>
                            </li>
                            <li>
                                <i class="material-icons brand-color">&#xE87E;</i>
                                <span class="timer">140</span>
                                <span class="count-description">Success</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <section id="count3" class="facts-two">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE90F;</i>
                        <span class="timer">545</span>
                        <span class="count-description">Project run</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE863;</i>
                        <span class="timer">535</span>
                        <span class="count-description">Ideas</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE8F8;</i>
                        <span class="timer">1544</span>
                        <span class="count-description">Experiments</span>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-3 counter-wrap">
                        <i class="material-icons brand-color">&#xE87E;</i>
                        <span class="timer">111</span>
                        <span class="count-description">success</span>
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <div class="links-sites">
            <a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
            <a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                www.irisandpith.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                http://www.irisandpith.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
        </div>
        <? include "../sitewide-mat/footer.php"; ?>

        <? include "../sitewide-mat/globals-bottom.php"; ?>

        <script>
            $('#count1').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });

            $('#count2').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });


            $('#count3').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });
        </script>
    </body>
</html>