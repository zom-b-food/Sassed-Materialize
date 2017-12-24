<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Grid - Materialize</title>
        <? include "../sitewide-mat/globals-top.php"; ?>
    </head>
    <body>

        <? include "../sitewide-mat/header.php"; ?>
        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Template</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shortcodes</a></li>
                            <li class="active">Template</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <main>
            <div class="container" id="portion1">
                <div class="row">
                    <div class="col s12 m9 l10">
                        <div>
                            <div id="grid-container" class="section scrollspy">
                                <p class="caption">We are using a standard 12 column fluid responsive grid system. The
                                    grid helps you layout your page in an ordered, easy fashion.</p>

                                <h3 class="header">Container</h3>

                                <p>The container class is not strictly part of the grid but is important in laying out
                                    content. It allows you to center your page content. The <code
                                        class="language-markup">container</code> class is set to ~70% of the window
                                    width. It helps you center and contain your page content. We use the container to
                                    contain our body content.
                                <h4>Demo</h4>
                            </div>
                            <!-- Grid visual demo -->
                            <div id="grid-intro" class="scrollspy">
                                <h3 class="header">Introduction</h3>

                                <p>Take a look at this section to quickly understand how the grid works!</p>
                                <h4>12 Columns</h4>

                                <p>Our standard grid has 12 columns. No matter the size of the browser, each of these
                                    columns will always have an equal width.</p>

                                <div class="row">
                                    <div class="col s1 grid-example"><span class="flow-text">1</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">2</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">3</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">4</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">5</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">6</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">7</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">8</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">9</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">10</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">11</span></div>
                                    <div class="col s1 grid-example"><span class="flow-text">12</span></div>
                                </div>
                                <p>To get a feel of how the grid is used in HTML, take a look at the code below which
                                    will produce a similar result to the one above.</p>

                                <p>Note: For now, just know that the <code class="language-markup">s1</code> stands for
                                    small-1 which in plain English means "1 column on small screens".</p>
                                <br>
                                <h4>Columns live inside Rows</h4>

                                <p>Remember when you are creating your layout that all columns must be contained inside
                                    a row and that you must add the <code class="language-markup">col</code> class to
                                    your inner divs to make them into columns</p>

                                <div class="row">
                                    <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                                    </div>
                                    <div class="col s6 grid-example"><span class="flow-text">6-columns (one-half)</span>
                                    </div>
                                    <div class="col s6 grid-example"><span class="flow-text">6-columns (one-half)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid Offsets -->
                            <div id="grid-offsets" class="section scrollspy">
                                <h2 class="header">Offsets</h2>

                                <p>To offset, simply add <code class="language-markup">offset-s2</code> to the class
                                    where <code class="language-markup">s</code> signifies the screen class-prefix (s =
                                    small, m = medium, l = large) and the number after is the number of columns you want
                                    to offset by.</p>

                                <div class="row">
                                    <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                                    </div>
                                    <div class="col s6 offset-s6 grid-example"><span class="flow-text">6-columns (offset-by-6)</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Grid push and pull -->
                            <div id="grid-push" class="section scrollspy">
                                <h2 class="header">Push and Pull</h2>

                                <p>You can easily change the order of your columns with push and pull. Simply add <code
                                        class="language-markup">push-s2</code> or <code
                                        class="language-markup">pull-s2</code> to the class where <code
                                        class="language-markup">s</code> signifies the screen class-prefix (s = small, m
                                    = medium, l = large) and the number after is the number of columns you want to push
                                    or pull by.</p>

                                <div class="row">
                                    <div class="col s7 push-s5 grid-example"><span style="font-size: 14px;">This div is 7-columns wide on pushed to the right by 5-columns.</span>
                                    </div>
                                    <div class="col s5 pull-s7 grid-example"><span style="font-size: 14px;">5-columns wide pulled to the left by 7-columns.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Creating Layouts -->
                            <div id="grid-layouts" class="scrollspy">
                                <h3 class="header">Creating Layouts</h3>

                                <p>Here we will show you how to create some commonly used layouts with our grid system.
                                    Hopefully these will get you more comfortable with laying out elements. To keep
                                    these demos simple, the ones here will not be responsive.</p>

                                <div class="row">
                                    <div class="col s12 m6">
                                        <h4>Section</h4>

                                        <p>The section class is used for simple top and bottom padding. Just add the
                                            <code class="language-markup">section</code> class to your div's containing
                                            large blocks of content.</p>
                                    </div>
                                    <div class="col s12 m6">
                                        <h4>Divider</h4>

                                        <p>Dividers are 1 pixel lines that help break up your content. Just add the
                                            <code class="language-markup">divider</code> to a div in between your
                                            content.</p>
                                    </div>
                                </div>
                                <h4>Example Sections and Dividers</h4>

                                <div class="divider"></div>
                                <div class="section">
                                    <h5>Section 1</h5>

                                    <p>Stuff</p>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5>Section 2</h5>

                                    <p>Stuff</p>
                                </div>
                                <div class="divider"></div>
                                <div class="section">
                                    <h5>Section 3</h5>

                                    <p>Stuff</p>
                                </div>
                                <div class="divider"></div>
                                <br>
                                <h4>Example Promotion Table</h4>

                                <p>If we want 3 divs that are equal size, we define the divs with a width of 4-columns,
                                    as 4+4+4 nicely adds up to 12. Inside those divs, we can put our content. Take our
                                    front page content for example. We've modified it slightly for the sake of this
                                    example.</p>

                                <div class="row">
                                    <div class="col s4">
                                        <div class="center promo promo-example">
                                            <i class="material-icons">flash_on</i>

                                            <p class="promo-caption">Speeds up development</p>

                                            <p class="light center">We did most of the heavy lifting for you to provide
                                                a default stylings that incorporate our custom components.</p>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="center promo promo-example">
                                            <i class="material-icons">group</i>

                                            <p class="promo-caption">User Experience Focused</p>

                                            <p class="light center">By utilizing elements and principles of Material
                                                Design, we were able to create a framework that focuses on User
                                                Experience.</p>
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="center promo promo-example">
                                            <i class="material-icons">settings</i>

                                            <p class="promo-caption">Easy to work with</p>

                                            <p class="light center">We have provided detailed documentation as well as
                                                specific code examples to help new users get started.</p>
                                        </div>
                                    </div>
                                </div>
                                <h4>Example Side Navigation Layout</h4>

                                <p>You can see how easy it is to create layouts using the grid system. Just remember to
                                    make sure your column numbers add up to 12 for an even layout.</p>

                                <div class="row">
                                    <div class="col s12">
                                        <div class='browser-window'>
                                            <div class='top-bar'>
                                                <div class='circles'>
                                                    <div id="close-circle" class="circle"></div>
                                                    <div id="minimize-circle" class="circle"></div>
                                                    <div id="maximize-circle" class="circle"></div>
                                                </div>
                                            </div>
                                            <div class='content'>
                                                <div class="row">
                                                    <div id="site-layout-example-top" class="col s12">
                                                        <!-- <p class="flat-text-logo"></p> -->
                                                    </div>
                                                    <div id="site-layout-example-left" class="col s3">
                                                        <p class="flat-text-header"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>
                                                    </div>
                                                    <div id="site-layout-example-right" class="col s9">
                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Creating Responsive Layouts -->
                            <div id="grid-responsive" class="scrollspy">
                                <h3 class="header">Creating Responsive Layouts</h3>

                                <p>Above we showed you how to layout elements using our grid system. Now we'll show you
                                    how to design your layouts so that they look great on all screen sizes.</p>
                                <h4>Screen Sizes</h4>
                                <table class="highlight">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th data-field="id">Mobile Devices
                                                <br>&lt;= 600px
                                            </th>
                                            <th data-field="name">Tablet Devices
                                                <br>&gt; 600px
                                            </th>
                                            <th data-field="price">Desktop Devices
                                                <br>&gt; 992px
                                            </th>
                                            <th data-field="price">Large Desktop Devices
                                                <br>&gt; 1200px
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Class Prefix</strong></td>
                                            <td><code class="language-markup">.s</code></td>
                                            <td><code class="language-markup">.m</code></td>
                                            <td><code class="language-markup">.l</code></td>
                                            <td><code class="language-markup">.xl</code></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Container Width</strong></td>
                                            <td>90%</td>
                                            <td>85%</td>
                                            <td>70%</td>
                                            <td>70%</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Columns</strong></td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td>12</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h4>Adding Responsiveness</h4>

                                <p>In the previous examples, we only defined the size for small screens using <code
                                        class="language-markup">"col s12"</code>. This is fine if we want a fixed layout
                                    since the rules propagate upwards. By just saying s12, we are essentially saying
                                    <code class="language-markup">"col s12 m12 l12"</code>. But by explicitly defining
                                    the size we can make our website more responsive.</p>

                                <div class="row">
                                    <div class="grid-example col s12 teal lighten-2"><span class="flow-text">I am always full-width (col s12)</span>
                                    </div>
                                    <div class="grid-example col s12 m6 teal lighten-2"><span class="flow-text">I am full-width on mobile (col s12 m6)</span>
                                    </div>
                                </div>
                                <br>
                                <h4>Responsive Side Navigation Layout</h4>

                                <p>In this example below, we take the same layout from above, but we make it responsive
                                    by defining how many columns the div should take up on each screen size. Try
                                    resizing your browser and watch the layout change below.</p>

                                <div class="row">
                                    <div class="col s12">
                                        <div class='browser-window'>
                                            <div class='top-bar'>
                                                <div class='circles'>
                                                    <div id="close-circle" class="circle"></div>
                                                    <div id="minimize-circle" class="circle"></div>
                                                    <div id="maximize-circle" class="circle"></div>
                                                </div>
                                            </div>
                                            <div class='content'>
                                                <div class="row">
                                                    <div id="site-layout-example-top" class="col s12">
                                                        <!-- <p class="flat-text-logo"></p> -->
                                                    </div>
                                                    <div id="site-layout-example-left" class="col s12 m4 l3">
                                                        <p class="flat-text-header"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>
                                                    </div>
                                                    <div id="site-layout-example-right" class="col s12 m8 l9">
                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>

                                                        <p class="flat-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>More Responsive Grid Examples</h4>

                                <div class="row">
                                    <div class="col grid-example s12 blue lighten-1"><span class="flow-text">s12</span>
                                    </div>
                                    <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span>
                                    </div>
                                    <div class="col grid-example s12 m4 l8 teal lighten-1"><span class="flow-text">s12 m4 l8</span>
                                    </div>
                                    <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span>
                                    </div>
                                    <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span>
                                    </div>
                                    <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span>
                                    </div>
                                    <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span>
                                    </div>
                                    <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m3 l2">
                        <div class="toc-wrapper pinned">
                            <div style="height: 1px;">
                                <ul class="section table-of-contents">
                                    <li><a href="badges.php">badges</a></li>
                                    <li><a href="buttons.php">buttons</a></li>
                                    <li><a href="cards.php">cards</a></li>
                                    <li><a href="carousel.php">carousel</a></li>
                                    <li><a href="chips.php">chips</a></li>
                                    <li><a href="collapsible.php">collapsible</a></li>
                                    <li><a href="dropdown.php">dropdown</a></li>
                                    <li><a href="forms.php">forms</a></li>
                                    <li><a href="grid.php">grid</a></li>
                                    <li><a href="home.php">home</a></li>
                                    <li><a href="materialbox.php">materialbox</a></li>
                                    <li><a href="multiple_modals.php">multiple_modals</a></li>
                                    <li><a href="multiple_sidenav.php">multiple_sidenav</a></li>
                                    <li><a href="overlayZindex.php">overlayZindex</a></li>
                                    <li><a href="parallax.php">parallax</a></li>
                                    <li><a href="pushpin.php">pushpin</a></li>
                                    <li><a href="scrollfire.php">scrollfire</a></li>
                                    <li><a href="scrollspy.php">scrollspy</a></li>
                                    <li><a href="tabs.php">tabs</a></li>
                                    <li><a href="template.php">template</a></li>
                                    <li><a href="waves.php">waves</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
    </body>
</html>
