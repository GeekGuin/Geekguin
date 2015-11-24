$(document).ready(function(){

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.10); /*Para cambiar la velocidad en que se movera el fondo lo haces cambiando el 0.10*/

        $('.header-image').css({
            'background-position': '0 -' + posicion + 'px'
        });

    });

});