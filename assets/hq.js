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
    $(".map-marker").removeClass("active");
    $(".map-marker.mm-"+curr).addClass("active");
};

var setCountDown = function(){
    var seconds = moment("2017-04-06 00:00:00").diff( moment(), 'seconds');

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

// ******************* Random blinking of markers on home screen ****************/

    setInterval( setMarker, 1500);


// ***************** Hack to hide markers when mobile menu collapsed ************/

    $(".yga").on("click", function(e){
        var targ = $(this).data("ya-target");
        yaCounter41508869.reachGoal(targ);
        //fbq('track', 'Lead');
        //ga('send', 'pageview');
        ga ('send', 'event', "other", "click" );//, [eventLabel], [eventValue], [fieldsObject]);
        console.log("Track:" + targ);
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

            yaCounter41508869.reachGoal(targ);
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

/*
    $("#subForm").validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            var dataOut = {};
            $("#subForm .form-control").each(function(idx, el){
                dataOut[$(this).prop('name')] = $(this).val();
            });
            dataOut['mail'] = dataOut['EMAIL'];


            yaCounter41508869.reachGoal('SUBEMAIL1');

            $("#subForm .formBody").fadeOut(0);
            $("#subForm .formProcess").fadeIn(0);

            $.ajax( {
                // url: "assets/emailpost.php",
                url: "https://script.google.com/macros/s/AKfycbwnmfROKNV77OD0usnY3tFE9rlNlZThSAisTylcjd5rMRjTWVo/exec",
                data: dataOut,
                method: "POST",
                //dataType:"jsonp",
                success: function( data, textStatus, jqXHR ){
                    if(data.success!=0) {
                        $("#subForm .formProcess").html("Thank you! <b>We'll contact you asap!</b>").addClass("success");
                    }
                    else $("#subForm .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                },
                error: function ( jqXHR, textStatus, errorThrown) {
                    $("#subForm .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                }
            });
        }
        return true;
    });


    $("#subForm2").validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
            // handle the invalid form...
        } else {
            var dataOut = {};
            $("#subForm2 .form-control").each(function(idx, el){
                dataOut[$(this).prop('name')] = $(this).val();
            });

            dataOut['mail'] = dataOut['EMAIL'];

            yaCounter41508869.reachGoal('SUBEMAIL2');


            $("#subForm2 .formBody").fadeOut(0);
            $("#subForm2 .formProcess").fadeIn(0);

            $.ajax( {
                // url: "assets/emailpost.php",
                url: "https://script.google.com/macros/s/AKfycbwnmfROKNV77OD0usnY3tFE9rlNlZThSAisTylcjd5rMRjTWVo/exec",
                data: dataOut,
                method: "POST",
                //dataType:"jsonp",
                success: function( data, textStatus, jqXHR ){
                    if(data.success!=0) {
                        $("#subForm2 .formProcess").html("Thank you! <b>We'll contact you asap!</b>").addClass("success");
                    }
                    else $("#subForm2 .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                },
                error: function ( jqXHR, textStatus, errorThrown) {
                    $("#subForm2 .formProcess").html("Error :( <b>Please try again later...</b>").addClass("error");
                }
            });
        }
        return true;
    });

*/

})(jQuery);