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


var setMarker = function(){
    var count = $(".map-marker").length;
    var curr = Math.ceil(Math.random()*count);
    $(".map-marker").removeClass("animated pulse infinite active");
    $(".map-marker.mm-"+curr).addClass("animated pulse infinite active");
};

var currScreen = 1;
var setScreens = function(){
    var count = $(".screen-gallery .item").length;
    $(".screen-gallery .item.i"+currScreen).removeClass("active");
    currScreen++;
    if(currScreen>count) currScreen = 1;
    $(".screen-gallery .item.i"+currScreen).addClass("active");
};

var currSlogan = 1;
var setSlogans = function(){
    var count = $(".home-screen .main h1").length;
    var cc = currSlogan;
    $(".home-screen .main h1.s"+currSlogan).addClass("animated fadeOut");
    $(".home-screen .main h1.s"+currSlogan).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(".home-screen .main h1.s"+currSlogan).removeClass("active animated fadeOut");
        currSlogan++;
        if(currSlogan>count) currSlogan = 1;
        $(".home-screen .main h1.s"+currSlogan).addClass("active animated fadeIn");
        $(".home-screen .main h1.s"+currSlogan).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(".home-screen .main h1.s" + currSlogan).removeClass("animated fadeOut");
        });
    });
};

var setCountDown = function(){
    var seconds = moment.utc("2017-04-06T00:00:00+01:00").diff( moment(), 'seconds');

    var days = Math.floor(seconds/(24*60*60));
    if(days>1) $(".countdown .units .days-s").fadeIn(0);
    else $(".countdown .units .days-s").fadeOut(0);
    seconds = seconds - (24*60*60)*days;
    var hours = Math.floor(seconds/3600);
    if(hours>1) $(".countdown .units .hours-s").fadeIn(0);
    else $(".countdown .units .hours-s").fadeOut(0);
    seconds = seconds - 3600*hours;
    var minutes = Math.floor(seconds/60);
    if(minutes>1) $(".countdown .units .minutes-s").fadeIn(0);
    else $(".countdown .units .minutes-s").fadeOut(0);
    seconds = seconds - 60*minutes;
    if(seconds>1) $(".countdown .units .seconds-s").fadeIn(0);
    else $(".countdown .units .seconds-s").fadeOut(0);
    if(days<10) days = "0" + days;
    if(hours<10) hours = "0" + hours;
    if(minutes<10) minutes = "0" + minutes;
    if(seconds<10) seconds = "0" + seconds;
    $(".countdown .figures .days").html(days);
    $(".countdown .figures .hours").html(hours);
    $(".countdown .figures .minutes").html(minutes);
    $(".countdown .figures .seconds").html(seconds);
};


(function($){

    setCountDown();
    setInterval( setCountDown, 1000);
    if( !$.isMobile() )    var s = skrollr.init();

    $(".bonus-fadein").on("mouseenter click", function (e) {
        $(".bonuses").addClass("active");
    }).on("mouseleave", function (e) {
        $(".bonuses").removeClass("active");
    });




    $(".supporters .item, .partners .item").on("click", function (e) {
        var pp = $(this).data("pp");
        if(pp) {
            $("#pp-" + pp).addClass("active");
            $(".supporters .backdrop").addClass("active");
        }
    });

    $(".popup .close").on("click", function (e) {
        $(this).parent().removeClass("active");
        $(".supporters .backdrop").removeClass("active");
    });

    $(".supporters .backdrop").on("click", function (e) {
        $(".supporters .popup, .partners  .popup").removeClass("active");
        $(".supporters .backdrop").removeClass("active");
    });

// ************************** Analitics click handler ***************************/

    $(".yga").on("click", function(e){
        var targ = $(this).data("ya-target");
        if (typeof(yaCounter41508869) !== 'undefined') yaCounter41508869.reachGoal(targ);
        if($(this).data("ga")){
            if (typeof(ga) !== 'undefined') ga ('send', 'event', "other", targ);
        }
        console.log("Track:" + targ);
    });



// ******************************* Preloader ************************************/

    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });

// ******************* Random blinking of markers on home screen ****************/

    setInterval( setMarker, 1500);
    setInterval( setScreens, 4000);
    setInterval( setSlogans, 4000);


//    $(".home-screen .circle").addClass("start");


// *************************** Smooth scroll cheap shit *************************/

    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        var target = $($ele.attr('href'));
        var offset = parseInt((target.data('offset'))?target.data('offset'):0);
        //console.log(offset);

        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - offset)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });


// ******************************* Skroller Plugin Init *************************/

//    if(!$.isMobile()) var s = skrollr.init();

// ******************************* Skroller Plugin Init *************************/



// ******************************* Inline Form handler *************************/


    $(".sub-form").validator().on('submit', function (e) {
        var formId = e.currentTarget.id;
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            var dataOut = {};
            $("#" + formId + " .form-control").each(function(idx, el){
                dataOut[$(this).prop('name')] = $(this).val();
            });
            dataOut['mail'] = dataOut['EMAIL'];

            var targ = $( "#" + formId ).data("ya-target");

            if (typeof(yaCounter41508869) !== 'undefined') yaCounter41508869.reachGoal(targ);
            if (typeof(ga) !== 'undefined') ga ('send', 'event', "other", targ);
            fbq('track', 'Lead');

            $("#" + formId + " .formBody").fadeOut(0);
            $("#" + formId + " .formProcess").fadeIn(0);

            $.ajax( {
                url: "https://script.google.com/macros/s/AKfycbwnmfROKNV77OD0usnY3tFE9rlNlZThSAisTylcjd5rMRjTWVo/exec",
                data: dataOut,
                method: "POST",
                //dataType:"jsonp",
                success: function( data, textStatus, jqXHR ){
                    if(data.success!=0) {
                        $("#" + formId + " .formProcess").html("Thank you! <b>We'll contact you asap!</b>").addClass("success");
                    }
                    else $("#" + formId + " .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                },
                error: function ( jqXHR, textStatus, errorThrown) {
                    $("#" + formId + " .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                }
            });
        }
        return true;
    });

})(jQuery);