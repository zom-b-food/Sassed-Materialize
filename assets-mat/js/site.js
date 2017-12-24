(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space


/*$(window).bind("load", function () {
    $('#work-in-progress').fadeOut(900);
});*/


$image = $('img.true');
width = $image.width();
height = $image.height();

$image.css({
    left: 0 - (width / 2),
    top: 0 - (height / 2)
});


$(function(){
    var current_page_URL = location.href;
    $( "a.sidelink" ).each(function() {
    if ($(this).attr("href") !== "#") {
    var target_URL = $(this).prop("href");
    if (target_URL == current_page_URL) {
    $('uk-nav a').parents('li, ul').removeClass('am-active');
    $(this).parent('li').addClass('am-active');
    return false;
    }
}
});
});

$(function(){
    var current_page_URL = location.href;
    $( "a.toplink" ).each(function() {
        if ($(this).attr("href") !== "#") {
            var target_URL = $(this).prop("href");
            if (target_URL == current_page_URL) {
                $('uk-nav a').parents('li, ul').removeClass('am-active');
                $(this).parent('li').addClass('am-active');
                return false;
            }
        }
    });
});


$(window).load(function () {


    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function () {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        }
        else {
            $('a.back-to-top').fadeOut('slow');
        }
    });
    $('a.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });


});
