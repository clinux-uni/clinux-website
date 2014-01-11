
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

$(document).ready(function(){
	$("#hamburger").click(function(){
		var menubarra = document.querySelector('.barra');
		var menu = document.querySelector('.men');
		menubarra.style.padding = "0px";
		menubarra.style.float = "left";
		if(menubarra.style.display=='none' /*|| menu.style.display==''*/){
			menubarra.style.display='block';
			//menu.style.display='block';
		}
		else{
			menubarra.style.display='none';
		}
	
	});
	
});
