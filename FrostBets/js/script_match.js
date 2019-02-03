$(document).ready(function() {
    var width;
    width = $(window).width();
    if (width <= 680) {
        $('.main_table').css({'border-right':'none'});
        $('.main_table').css({'border-left':'none'});
        $('.clock').css({'border-left':'none'});
        $('#time').css({'border-left':'none'});
    } else {
        $('.main_table').css({'border-right':'2.5vw solid transparent'});
        $('.main_table').css({'border-left':'2.5vw solid transparent'});
        $('.clock').css({'border-left':'2.5vw solid transparent'});
        $('#time').css({'border-left':'1.8vw solid transparent'});
    }
    $(window).resize(function() {
        width = $(window).width();
        if (width <= 680) {
            $('.main_table').css({'border-right':'none'});
            $('.main_table').css({'border-left':'none'});
            $('.clock').css({'border-left':'none'});
            $('#time').css({'border-left':'none'});
        } else {
            $('.main_table').css({'border-right':'2.5vw solid transparent'});
            $('.main_table').css({'border-left':'2.5vw solid transparent'});
            $('.clock').css({'border-left':'2.5vw solid transparent'});
            $('#time').css({'border-left':'1.8vw solid transparent'});
        }       
    });
});