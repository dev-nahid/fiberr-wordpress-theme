( function( $ ) {
    $(document).ready(function () {
        $(".theme-mobile-menu").click(function () {
            $(".side-item").css("opacity", "1");
        });
    
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 220) {
                $('.theme-header').addClass('header-appear');
            }
            else {
                $('.theme-header').removeClass('header-appear');
            }
        });
    
    
    });
}( jQuery ) );


var body = document.querySelector("body");

function openNav() {
    document.getElementById("navoverlay").style.left = "0%";
    body.classList.add('shadow');
}
function closeNav() {
    document.getElementById("navoverlay").style.left = "-100%";
    body.classList.remove('shadow');
}

