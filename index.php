<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script src="./assets-mat/js/jquery-2.1.3.min.js"></script>
        <script src="./assets-mat/js/components/jquery.html5Loader.min.js"></script>
        <style type="text/css">
            html, body {
                background-color: #5d4141;
            }
                /* Paste this css to your style sheet file or under head tag */
                /* This only works with JavaScript,
                if it's not present, don't show loader */
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(./assets-mat/images/ui/loading.svg) center no-repeat;
                background-color: rgba(93,65,65,.9);
            }
        </style>
    </head>
    <body>
        <div class="se-pre-con"></div>
        <script type="text/javascript">
            //var loaderAnimation = $("#html5Loader").LoaderAnimation();
            $.html5Loader({filesToLoad: './files.json',
                //onUpdate: loaderAnimation.update,
                onUpdate: function () {
                    console.log("Asset updated!");
                },
                onElementLoaded: function () {
                    /* $("body").fadeOut(function () {*/
                        console.log("Asset loaded!");
                        window.location.href = "pages-mat/jump.php"
                    /*}) */ ;
                },
                onMediaError: function () {
                    console.log("wtf!");
                },
                debugMode: true
            });
        </SCRIPT>
    </body>
</html>

