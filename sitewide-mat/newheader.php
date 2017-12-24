
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 20px;
    }

    div.body,
    .main {
        flex: 1 0 auto;
        /* Prevent Chrome, Opera, and Safari from letting these items shrink to smaller than their content's default minimum size. */
        padding: 20px;
    }

    #heading {
        margin: 0 auto;
        border: 1px solid white;
        background: url("../assets-mat/images/intro.jpg") repeat;
        background-position: cover;
        height:200px;
    }

    aside {
        text-align: right;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        font-size: 1em;
        position: fixed;
        width: 100%;
    }

    aside a {
        color: inherit;
        text-decoration: none;
        display: inline-block;
        padding: 2em 1em .5em;
        -webkit-transition: all .3s ease-in;
    }

    .small {
        padding: .5em 1em;
    }

    aside a:hover {
        text-decoration: underline;
    }

    .active {
        background: rgba(255, 255, 255, 0.3);
    }

    main {
        margin-top: 100px;
    }

    #toTop img {
        width: 50px;
    }

    #toTop img:hover {
        cursor: pointer;
    }

    aside img {
        z-index: 1000;
        height: 2.5em;
        position: absolute;
        left: 40px;
        top: 10px;
        transition: all 0.5s linear;
    }

    .move {
        top: -60px;
    }

    aside span {
        position: absolute;
        left: 40px;
        top: 10px;
        font-weight: bold;
        transition: all 0.5s ease-in;
    }

    h2 {
        color: green;
    }

    .movetext {
        top: -30px;
    }
    </style>


    <div id="heading">
        <aside>
            <span class="movetext">Company Name</span>
            <img class="" src="https://www.matchbook.com/assets-mat/images/icons/white/Twitter_logo_white.png">
            <a href="#section1" class="active">Section 1</a>
            <a href="#section2">Section 2</a>
            <a href="#section3">Section 3</a>
            <a href="#section4">Section 4</a>
        </aside>
    </div>

    <script>
    // Smooth Scroll on clicking nav items
    $('aside a').click(function() {
        var $href = $(this).attr('href');
        $('body').stop().animate({
            scrollTop: $($href).offset().top
        }, 1000);
        return false;
    });

    // back to top
    $('#toTop a').click(function() {
        $('body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    // Parallaxing + add class active on scroll
    $(document).scroll(function() {


        // add class active to nav a on scroll
        var scrollPos = $(document).scrollTop() + 100;
        $('aside a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('aside a').removeClass("active");
                currLink.addClass("active");
            }
        });

        // changing padding of nav a on scroll
        if (scrollPos > 250) {
            $('aside a').addClass('small');
            $('aside img').addClass('move');
            $('aside span').removeClass('movetext');
        } else {
            $('aside a').removeClass('small');
            $('aside img').removeClass('move');
            $('aside span').addClass('movetext');
        }

    });
    </script>

