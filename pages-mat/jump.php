<!DOCTYPE html>
<html lang="en">
    <head>
        <? include "../sitewide-mat/globals-top.php"; ?>

        <title>www.myuikit.com - Materialize</title>
    </head>
    <body>

        <? include "../sitewide-mat/a-header.php"; ?>

        <!--button style start-->
        <section class="button-style section-padding">
            <div class="container">
                <h2>Buttons</h2>

                <div class="row">
                    <div class="col-md-12 mb-50">
                        <h4 class="mb-30">with amazing interactions</h4>
                        <a class="waves-effect waves-light btn">Default Button</a>
                        <a class="waves-effect waves-light btn pink">Pink Button</a>
                        <a class="waves-effect waves-light btn green">Green Button</a>
                        <a class="waves-effect waves-light btn purple">Purple Button</a>
                        <a class="waves-effect waves-light btn blue">Blue Button</a>
                        <a class="waves-effect waves-light btn yellow">Yellow Button</a>
                        <a class="waves-effect waves-light btn black">Black Button</a>
                        <a class="waves-effect waves-light btn grey lighten-1">Grey Button</a>
                        <a class="waves-effect waves-light btn red">Red Button</a>
                        <a class="waves-effect waves-light btn cyan">Cyan Button</a>
                        <a class="waves-effect waves-light btn indigo">Indigo Button</a>
                        <a class="waves-effect waves-light btn orange">Orange Button</a>
                    </div>
                    <div class="col-md-12 mb-50">
                        <h4 class="mb-30">with icons</h4>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8AE;</i> Default
                            Button</a>
                        <a class="waves-effect waves-light btn pink"><i class="material-icons left">&#xE0D9;</i> Pink
                            Button</a>
                        <a class="waves-effect waves-light btn green"><i class="material-icons left">&#xE876;</i> Green
                            Button</a>
                        <a class="waves-effect waves-light btn purple"><i class="material-icons left">&#xE037;</i>
                            Purple Button</a>
                        <a class="waves-effect waves-light btn blue"><i class="material-icons left">&#xE0B8;</i> Blue
                            Button</a>
                        <a class="waves-effect waves-light btn yellow"><i class="material-icons left">&#xE040;</i>
                            Yellow Button</a>
                        <a class="waves-effect waves-light btn black"><i class="material-icons left">&#xE044;</i> Black
                            Button</a>
                        <a class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">
                                &#xE8DE;</i> Grey Button</a>
                        <a class="waves-effect waves-light btn red"><i class="material-icons left">&#xE02B;</i> Red
                            Button</a>
                        <a class="waves-effect waves-light btn cyan"><i class="material-icons left">&#xE8B6;</i> Cyan
                            Button</a>
                        <a class="waves-effect waves-light btn indigo"><i class="material-icons left">&#xE029;</i>
                            Indigo Button</a>
                        <a class="waves-effect waves-light btn orange"><i class="material-icons left">&#xE899;</i>
                            Orange Button</a>
                    </div>
                    <div class="col-md-12 mb-80">
                        <h4 class="mb-30">Flat Buttons</h4>
                        <a class="waves-effect waves-red btn-flat red-text">Button</a>
                        <a class="waves-effect waves-green btn-flat green-text">Button</a>
                        <a class="waves-effect waves-purple btn-flat purple-text">Button</a>
                        <a class="waves-effect waves-orange btn-flat orange-text">Button</a>
                        <a class="waves-effect waves-teal btn-flat teal-text">Button</a>
                    </div>
                    <div class="col-md-12 mb-50">
                        <h4>Circle Buttons</h4>
                        <br>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large">
                            <i class="material-icons">&#xE8A7;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large pink">
                            <i class="material-icons">&#xE03F;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large green">
                            <i class="material-icons">&#xE859;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large blue">
                            <i class="material-icons">&#xE0BE;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large purple">
                            <i class="material-icons">&#xE049;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large  grey lighten-2">
                            <i class="material-icons">&#xE8A2;</i>
                        </button>
                        <button class="waves-effect waves-circle waves-light btn-floating btn-large black">
                            <i class="material-icons">&#xE55A;</i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- button style end -->
        <hr/>
        <section class="section-padding">
            <div class="container">
                <h2>Accordions</h2>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-30">Accordion Style One</h4>

                        <div class="panel-group flat-accordion brand-accordion z-depth-1" id="flat-one">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#flat-one" href="#collapse-flat-one">
                                            Matrix Mission
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-flat-one" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                        placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                        commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                        veritatis?
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                           href="#collapse-flat-two">
                                            Super Creative
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-flat-two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                        placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                        commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                        veritatis?
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                           href="#collapse-flat-three">
                                            Awesome Customer Servicers
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-flat-three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                           href="#collapse-flat-four">
                                            Hard Working Team
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-flat-four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <h4 class="mb-30">Accordion Style Two</h4>

                        <div class="panel-group feature-accordion pink-accordion icon plus-icon" id="accordion-two">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-two" href="#collapse-v2-one">
                                            Matrix Mission
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-v2-one" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                        placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                        commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                        veritatis?
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#collapse-v2-two">
                                            Super Creative
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-v2-two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                        placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                        commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                        veritatis?
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#collapse-v2-three">
                                            Awesome Customer Servicers
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-v2-three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#collapse-v2-four">
                                            Hard Working Team
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse-v2-four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
            </div>
        </section>
        <hr/>
        <section class="section-padding ">
            <div class="container">
                <div class="text-center mb-50">
                    <h2>Progress Bars</h2>

                    <p>Dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress-section">
                            <span class="progress-title">Web Design</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-sm-6">
                        <div class="progress-section">
                            <span class="progress-title">Web Design</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                <div class="text-center mb-50">
                    <p>Dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress-section">
                            <span class="progress-title">Web Design</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-sm-6">
                        <div class="progress-section">
                            <span class="progress-title">Web Design</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                        <div class="progress-section">
                            <span class="progress-title">Mobile Interface</span>

                            <div class="progress">
                                <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar"
                                     aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    <span>86%</span>
                                </div>
                            </div>
                        </div>
                        <!-- progress-section end -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <hr/>

        <section class="section-padding">
            <div class="container">
                <h2>Alerts</h2>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--info-->
                        <div class="alert info-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                        </div>
                        <!--success-->
                        <div class="alert success-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-thumbs-o-up"></i> Success Message: Your message comes here
                        </div>
                        <!--warning-->
                        <div class="alert warning-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-warning"></i> Warning Message: Your message comes here
                        </div>
                        <!--danger-->
                        <div class="alert danger-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-times-circle"></i> Error Message: Your message comes here
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--info-->
                        <div class="alert info-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                        </div>
                        <!--success-->
                        <div class="alert success-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-thumbs-o-up"></i> Success Message: Your message comes here
                        </div>
                        <!--warning-->
                        <div class="alert warning-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-warning"></i> Warning Message: Your message comes here
                        </div>
                        <!--danger-->
                        <div class="alert danger-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-times-circle"></i> Error Message: Your message comes here
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--info-->
                        <div class="alert info-icon icon" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                        </div>
                        <!--success-->
                        <div class="alert success-icon icon" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-lg fa-thumbs-o-up"></i> Success Message: Your message comes here
                        </div>
                        <!--warning-->
                        <div class="alert warning-icon icon" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-lg fa-warning"></i> Warning Message: Your message comes here
                        </div>
                        <!--danger-->
                        <div class="alert danger-icon icon" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <i class="fa fa-lg fa-times-circle"></i> Error Message: Your message comes here
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--info-->
                        <div class="alert alert-box info-box" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <div class="icon-wrap">
                                <i class="fa fa-check-circle-o"></i>
                            </div>
                            <!-- /.icon-wrap -->
                            <div class="info-wrap">
                                <strong>Info Message: Your message comes here</strong>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                            </div>
                            <!-- /.info-wrap -->
                        </div>
                        <!-- /.info-->
                        <!--success-->
                        <div class="alert alert-box success-box" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <div class="icon-wrap">
                                <i class="fa fa-lg fa-thumbs-o-up"></i>
                            </div>
                            <!-- /.icon-wrap -->
                            <div class="info-wrap">
                                <strong>Success Message: Your message comes here</strong>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                            </div>
                            <!-- /.info-wrap -->
                        </div>
                        <!-- /.success-->
                        <!--warning-->
                        <div class="alert alert-box warning-box" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <div class="icon-wrap">
                                <i class="fa fa-lg fa-warning"></i>
                            </div>
                            <!-- /.icon-wrap -->
                            <div class="info-wrap">
                                <strong>Warning Message: Your message comes here</strong>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                            </div>
                            <!-- /.info-wrap -->
                        </div>
                        <!-- /.warning-->
                        <!--danger-->
                        <div class="alert alert-box danger-box" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <div class="icon-wrap">
                                <i class="fa fa-lg fa-times-circle"></i>
                            </div>
                            <!-- /.icon-wrap -->
                            <div class="info-wrap">
                                <strong>Error Message: Your message comes here</strong>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                            </div>
                            <!-- /.info-wrap -->
                        </div>
                        <!-- /.danger-->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
            </div>
        </section>
        <hr/>
        <section id="middle" class="section-padding">
            <div class="container">
                <h2>Parallax</h2>
            </div>
            <div class="rev_slider_wrapper">
                <div class="materialize-parallax rev_slider" data-version="5.0">
                    <ul>
                        <li data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1500"
                            data-thumb="../assets-mat/img/parallax/notgeneric.jpg" data-rotate="0"
                            data-saveperformance="off" data-title="Parallax" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="../assets-mat/img/parallax/notgeneric.jpg" alt="" data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-fontsize="['70','70','70','45']"
                                 data-lineheight="['70','70','70','50']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style="z-index: 5; white-space: nowrap;">Move Your Mouse
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; white-space: nowrap;">Awesome Parallax Effect
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-style_hover="cursor:default;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;"><i class="fa fa-paper-plane-o"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme rev-btn  rs-parallaxlevel-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-style_hover="cursor:default;"
                                 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_out="x:inherit;y:inherit;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 8; white-space: nowrap;">
                                <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                            </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption rev-scroll-btn  rs-parallaxlevel-0"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']"
                                 data-width="35"
                                 data-height="55"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-style_hover="cursor:pointer;"
                                 data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                <span></span>
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-8"
                                 data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
                                 data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;s:1000;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 10;">
                                <div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20"
                                     data-enddeg="360" data-speed="35" data-origin="50% 50%"><img
                                        src="../assets-mat/img/parallax/blurflake4.png" alt="" width="240" height="240"
                                        data-ww="['240px','240px','240px','240px']"
                                        data-hh="['240px','240px','240px','240px']" data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                                 data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
                                 data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;s:1000;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 11;">
                                <div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px"
                                     data-origin="50% 50%"><img src="../assets-mat/img/parallax/blurflake3.png" alt=""
                                                                width="170" height="170"
                                                                data-ww="['170px','170px','170px','170px']"
                                                                data-hh="['170px','170px','170px','170px']"
                                                                data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-4"
                                 data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
                                 data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;s:1000;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 12;">
                                <div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20"
                                     data-enddeg="360" data-speed="20" data-origin="50% 50%"><img
                                        src="../assets-mat/img/parallax/blurflake2.png" alt="" width="50" height="51"
                                        data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']"
                                        data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-6"
                                 data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
                                 data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;s:1000;"
                                 data-start="2000"
                                 data-responsive_offset="on"
                                 style="z-index: 13;">
                                <div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10"
                                     data-origin="50% 50%"><img src="../assets-mat/img/parallax/blurflake1.png" alt=""
                                                                width="120" height="120"
                                                                data-ww="['120px','120px','120px','120px']"
                                                                data-hh="['120px','120px','120px','120px']"
                                                                data-no-retina>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end revolution slider -->
            </div>
            <!-- end of slider wrapper -->

        </section>
        <hr/>
        <section class="section-padding">
            <div class="container">
                <h2>Fun Facts</h2>

                <div id="count1" class="padding-top-50">
                    <div class="container-fluid">
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
                </div>
                <div id="count2" class="section-padding gray-bg">
                    <div class="container">
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
                </div>
                <div id="count3" class="facts-two">
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
                </div>
            </div>
        </section>
        <hr/>
        <section class="section-padding">
            <div class="container">
                <h2>Typography</h2>
                <section class="ptb-50">
                    <div class="container">
                        <h2>Heading Style</h2>
                        <hr class="mb-40">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>H1 Heading</h1>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quis, tempora!
                                    Suscipit ex reprehenderit eius nulla adipisci ipsum in eaque perferendis laboriosam
                                    ad accusantium, architecto aliquid, voluptates culpa minus, ab!</p>
                            </div>
                            <div class="col-md-6">
                                <h2>H2 Heading</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi vel culpa magnam ea,
                                    aliquam dolores dolor architecto, facere nesciunt. Temporibus reiciendis culpa
                                    quidem nemo ex, deleniti, quod eveniet nihil voluptatibus.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>H3 Heading</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consequuntur
                                    recusandae fugiat, qui dicta autem. Quam magni, nobis culpa, iusto inventore fuga
                                    tempora dolores eaque voluptates nesciunt debitis expedita adipisci.</p>
                            </div>
                            <div class="col-md-6">
                                <h4>H4 Heading</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ullam eaque
                                    eligendi at accusantium natus debitis tempora quibusdam! Voluptatibus et illo ex
                                    adipisci, voluptate nihil dolor numquam. Modi iste, eum.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>H5 Heading</h5>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ad perspiciatis
                                    provident dolores voluptatem, rem nostrum porro, delectus neque adipisci deserunt
                                    consectetur natus, enim quibusdam dicta placeat eum. Cumque, nesciunt.</p>
                            </div>
                            <div class="col-md-6">
                                <h6>H6 Heading</h6>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur
                                    consequatur, ut, eius distinctio omnis. Necessitatibus vel eaque officia?
                                    Consequatur laboriosam voluptates ut quaerat ad mollitia error veritatis neque
                                    porro.</p>
                            </div>
                        </div>
                        <br>

                        <p><strong>This is Only Bold Text</strong> eget diam posuere sollicitudin eu tincidunt nulla.
                            <b><i>This is Bold italic Text</i></b> magna, in scelerisque urna placerat vel. egestas quis
                            facilisis metus.Phasellus <b><a href="#"><u>This is Link Text</u></a></b> diam posuere
                            llicitudin eu tincidunt nulla rabitur eleifen tempor inted magna in scelerisqu urna placerat
                            vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.Phasellus vehicula
                            justo eget diam posuere sollicitudin eu tincidunt nulla ma gna elerisque urna placerat vel.
                            Phsellus eget sem id justo consequ egestas quis facilisis metus.</p>
                        <br>
                        <br>

                        <h2>Blockquote</h2>
                        <hr class="mb-40">
                        <blockquote>
                            <p>Continually underwhelm visionary models with cross-unit synergy. Uniquely leverage
                                other's premium convergence before progressive data. Proactively monetize performance
                                based expertise through intuitive alignments. Monotonectally promote worldwide portals
                                through ubiquitous relationships.</p>
                            <footer>Ralph Waldo Emerson</footer>
                        </blockquote>
                        <br>

                        <h2>List Style</h2>
                        <hr class="mb-40">
                        <div class="row">
                            <div class="col-sm-3">
                                <ol>
                                    <li>Ordered List Style</li>
                                    <li>Ordered List Style</li>
                                    <li>Ordered List Style</li>
                                    <li>Ordered List Style</li>
                                    <li>Ordered List Style</li>
                                </ol>
                            </div>
                            <div class="col-sm-3">
                                <ul class="unorder-list">
                                    <li>Unordered List Style</li>
                                    <li>Unordered List Style</li>
                                    <li>Unordered List Style</li>
                                    <li>Unordered List Style</li>
                                    <li>Unordered List Style</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="list-unstyled">
                                    <li>Default list-unstyled</li>
                                    <li>Default list-unstyled</li>
                                    <li>Default list-unstyled</li>
                                    <li>Default list-unstyled</li>
                                    <li>Default list-unstyled</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul>
                                    <li class="">Default List One</li>
                                    <li class="text-info">Default List Two</li>
                                    <li class="text-success">Default List Three</li>
                                    <li class="text-warning">Default List Four</li>
                                    <li class="text-danger">Default List Five</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-80"></div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h3>Check Circle List</h3>
                                <ul class="check-circle-list">
                                    <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                    <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                    <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                    <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                    <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Check Circle List</h3>
                                <ul class="check-circle-list">
                                    <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                    <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                    <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                    <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                    <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Check List Style</h3>
                                <ul class="check-circle-list">
                                    <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                    <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                    <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                    <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                    <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h3>Check Mark Style</h3>
                                <ul class="check-circle-list">
                                    <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                    <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                    <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                    <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                    <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr class="mb-40">
                        <h3>Full Column</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem deleniti, iusto
                            porro quasi aut est incidunt eum. Aliquid earum, culpa dolores aspernatur tempore velit
                            beatae porro totam. Et, saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut
                            eos assumenda, mollitia tenetur atque recusandae dignissimos optio cum molestiae possimus
                            adipisci minima, aliquam perferendis eius et repellat soluta magni, delectus!</p>
                        <hr class="mb-40">
                        <div class="row ">
                            <div class="col-sm-6">
                                <h3>One Half</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem
                                    deleniti, iusto porro quasi aut est incidunt eum. Aliquid earum, culpa dolores
                                    aspernatur tempore velit beatae porro totam. Et, saepe. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ut eos assumenda, mollitia tenetur atque recusandae
                                    dignissimos optio cum molestiae possimus adipisci minima.</p>
                            </div>
                            <div class="col-sm-6">
                                <h3>One Half</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem
                                    deleniti, iusto porro quasi aut est incidunt eum. Aliquid earum, culpa dolores
                                    aspernatur tempore velit beatae porro totam. Et, saepe. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Ut eos assumenda, mollitia tenetur atque recusandae
                                    dignissimos optio cum molestiae possimus adipisci minima.</p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr class="mb-40">
                        <div class="row ">
                            <div class="col-sm-4">
                                <h3>One Third</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                    asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet, consec
                                    tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>One Third</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                    asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet, consec
                                    tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>One Third</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                    asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet, consec
                                    tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr class="mb-40">
                        <div class="row ">
                            <div class="col-sm-3">
                                <h3>One Fourth</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                    dolores asper natur tempore.</p>
                            </div>
                            <div class="col-sm-3">
                                <h3>One Fourth</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                    dolores asper natur tempore.</p>
                            </div>
                            <div class="col-sm-3">
                                <h3>One Fourth</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                    dolores asper natur tempore.</p>
                            </div>
                            <div class="col-sm-3">
                                <h3>One Fourth</h3>

                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                    deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                    dolores asper natur tempore.</p>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
            </div>
        </section>
        <hr/>

        <div style="color:#cccccc">
            <?php
            $count_my_page = ("countlog-mat.txt");
            $hits = file($count_my_page);
            $hits[0]++;
            $fp = fopen($count_my_page, "w");
            fputs($fp, "$hits[0]");
            fclose($fp);
            echo $hits[0];
            ?>
        </div>
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

        <!-- RS5.0 Core JS Files -->
        <script src="../assets-mat/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../assets-mat/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery(".materialize-parallax").revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                    },
                    fullScreenOffsetContainer: ".tt-nav",
                    responsiveLevels: [1240, 1024, 778, 480],
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        disable_onmobile: "on"
                    }

                });
            });

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
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->


        <script type="text/javascript"
                src="../assets-mat/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    </body>
</html>
