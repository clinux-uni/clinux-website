
$('.bandera').css('height', (screen.height-170));

$(document).ready(function(){
    var menu = document.querySelector('.menu');
    var origOffsetY = menu.offsetTop;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.menu').addClass('sticky');
            $('#alpie').show();
            //$('.content').addClass('menu-padding');
        } else {
            $('.menu').removeClass('sticky');
            $('#alpie').hide();
            //$('.content').removeClass('menu-padding');
        }  
    }

    document.onscroll = scroll;
});