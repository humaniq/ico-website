/**
 * Created by Искандер on 15.01.2017.
 */

$.isMobile = function(type){
    var reg = [];
    var any = {
        blackberry : 'BlackBerry',
        android : 'Android',
        windows : 'IEMobile',
        opera : 'Opera Mini',
        ios : 'iPhone|iPad|iPod'
    };
    type = 'undefined' == $.type(type) ? '*' : type.toLowerCase();
    if ('*' == type) reg = $.map(any, function(v){ return v; });
    else if (type in any) reg.push(any[type]);
    return !!(reg.length && navigator.userAgent.match(new RegExp(reg.join('|'), 'i')));
};


var setCountDown = function(){
    var seconds = moment("2017-02-28 00:00:00").diff( moment(), 'seconds');

    var days = Math.floor(seconds/(24*60*60));
    if(days>1) $(".countdown .unit .days-s").fadeIn(0);
    else $(".countdown .unit .days-s").fadeOut(0);
    seconds = seconds - (24*60*60)*days;
    var hours = Math.floor(seconds/3600);
    if(hours>1) $(".countdown .units .hours-s").fadeIn(0);
    else $(".countdown .units .hours-s").fadeOut(0);
    seconds = seconds - 3600*hours;
    var minutes = Math.floor(seconds/60);
    seconds = seconds - 60*minutes;
    if(days<10) days = "0" + days;
    if(hours<10) hours = "0" + hours;
    if(minutes<10) minutes = "0" + minutes;
    if(seconds<10) seconds = "0" + seconds;
    $(".countdown .day .figure").html(days);
    $(".countdown .time .figure span.data").html(hours+":"+minutes+":"+seconds);
};



(function($){


    setCountDown();
    setInterval( setCountDown, 1000);


// ******************************* Preloader ************************************/

    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });


// ***************** Hack to hide markers when mobile menu collapsed ************/
    $(".navbar-toggle").on("click", function(e){
        if($(".navbar-collapse").hasClass("in")) $(".map-marker").fadeIn(0);
        else $(".map-marker").fadeOut(0);
    });


    $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({

    });

// ************************* Collapse mobile menu on click **********************/


    $(".nav.navbar-nav li a").on("click", function(){
        if ( $(this).data("drp")) return;
        if($(".navbar-collapse").hasClass("in")) $(".navbar-toggle").click();
    });

// *************************** Smooth scroll cheap shit *************************/

    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        var target = $($ele.attr('href'));
        var offset = parseInt((target.data('offset'))?target.data('offset'):80);
        console.log(offset);

        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - offset)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });


})(jQuery);