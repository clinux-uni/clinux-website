
$('.bandera').css('height', (window.innerHeight-55));
console.log(window.innerHeight);

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
