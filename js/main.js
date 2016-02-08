if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $(window).stellar({
        responsive: true,
        horizontalScrolling: false,
        verticalOffset: 0,
        horizontalOffset: 0,
        positionProperty: 'transform',
    });
    $("#services-choices .item a").mouseover(function () {
        if ( !$(this).parent().closest('div').hasClass( "active" ) ) {      
            $(this).children("img.not-active").hide();
            $(this).children("img.active").show();
        }
    });
    $("#services-choices .item a").mouseout(function () {
         if ( !$(this).parent().closest('div').hasClass( "active" ) ) {      
            $(this).children("img.not-active").show();
            $(this).children("img.active").hide();
        }
    });
}
else{
   $("html").addClass("mobile");
}

if(navigator.userAgent.match('CriOS')){
    $("html").addClass("crios");
}
//animate onscroll not working on chrome mobile 
else{

    $('#intro').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-home a').addClass('is-active');
    }, { offset: 250 });
    $('#welcome').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-services a').addClass('is-active');
    }, { offset: 250 });
    $('#text-separator-timers').waypoint(function() {
        $('#hamburger-icon .line').css('background', '#ecf0f1');
    }, { offset: 250 });
    $('#prices').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-portfolio a').addClass('is-active');
        $('#hamburger-icon .line').css('background', '#00debc');
    }, { offset: 250 });
    $('#portfolio').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-clients a').addClass('is-active');
        $('#hamburger-icon .line').css('background', '#ecf0f1');
    }, { offset: 250 });
    $('#clients').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-clients a').addClass('is-active');
        $('#hamburger-icon .line').css('background', '#00debc');
    }, { offset: 250 });
    $('#aboutme').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-about a').addClass('is-active');
        $('#hamburger-icon .line').css('background', '#ecf0f1');
    }, { offset: 250 });
    $('#contact').waypoint(function() {
        $('.menu.fullpage .categories > li a').removeClass('is-active');
        $('.menu.fullpage #menu-contact a').addClass('is-active');
    }, { offset: 250 });


    $('.animated').waypoint(function() {
        var orientation = $(this).attr('data-orientation');
        $(this).addClass(orientation);
    }, { offset: $(window).height() });
}


$(window).scroll(function(){
    var posFromTop = $(window).scrollTop();

    if(posFromTop > 200){
        $(".pointDown").fadeOut();
    }
    else {
        $(".pointDown").fadeIn();
    }
});

$('.scrollTo').click( function() { 
    var page = $(this).attr('href');
    var speed = 750;
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
    return false;
});

$('#hamburger-icon').click(function() {
    $('#hamburger-icon').toggleClass('active');
    $(".menu").fadeToggle();
    if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        if ($('#total-container').hasClass('blur')) {
             $('#total-container').removeClass('blur');
        }
    }
    if ($(this).hasClass('active')) {           
        $("#menu-home").delay(200).fadeIn();
        $("#menu-services").delay(400).fadeIn();
        $("#menu-portfolio").delay(600).fadeIn();
        $("#menu-clients").delay(800).fadeIn();
        $("#menu-about").delay(1000).fadeIn();
        $("#menu-contact").delay(1200).fadeIn();
        if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('#total-container').addClass('blur');
        }
        $('body').addClass('deactivate')
    }
    else{
        $(".menu .categories li").delay(300).fadeOut();
        $('body').removeClass('deactivate')
    }
});

$(".menu .categories li a").click(function () {
    $('body').removeClass('deactivate')
    $(".menu").delay(1400).fadeOut();
    $(".menu .categories li a").removeClass("is-active");
    $('#hamburger-icon').delay(1000).toggleClass('active');
    if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        setTimeout(function () {
            $("#total-container").removeClass('blur');
        }, 1400);
    }
    $("#menu-home").delay(1000).fadeOut();
    $("#menu-services").delay(800).fadeOut();
    $("#menu-portfolio").delay(600).fadeOut();
    $("#menu-clients").delay(400).fadeOut();
    $("#menu-about").delay(200).fadeOut();
    $("#menu-contact").fadeOut();
});

var owl = $("#owl");
owl.owlCarousel({
    itemsCustom : [
        [0, 2],
        [450, 3],
        [600, 4],
        [750, 5],
        [1200, 8],
    ],
    navigation : true
});

$('#services-choices .item').attr("onclick","return true");


$('#services-choices').find('.scrollTo').click(function(){
    var part = $(this).attr('data-part');
    
    //To complete to avoid the fadeOut effect if clicked part is the same  
    // if (!$(this).hasClass('active'))
    // {
        $('.service-slider.active').fadeTo(800,0);
        $('.service-slider').removeClass('active');
        $("#"+part).fadeTo(800,1).addClass('active');
        $(".item").not($(this)).removeClass("active");
        $(this).parent().closest('div').addClass("active");
        $(".item a img.active").not($(this)).hide();
        $(".item a img.not-active").not($(this)).show();
        $(this).children(".not-active").hide();
        $(this).children(".active").show();
})

$(".show-more-clients").click(function () {
    $('.more-clients').slideToggle()
    $(this).text(function(i, v){
        if ($(this).hasClass('fr')) {
            return v === 'plus' ? 'moins' : 'plus'
        }
        else{
            return v === 'show more' ? 'show less' : 'show more'
        }
    });
});

$("#error, #success").click(function () {
    $(this).fadeOut();
});
$("#error").click(function () {
    $('html, body').animate({scrollTop: $('#contact').offset().top}, 2000);
});

// counters function
(function(e){e.fn.countTo=function(t){t=e.extend({},e.fn.countTo.defaults,t||{});var n=Math.ceil(t.speed/t.refreshInterval),r=(t.to-t.from)/n;return e(this).each(function(){function a(){o+=r;s++;e(i).html(o.toFixed(t.decimals));if(typeof t.onUpdate=="function"){t.onUpdate.call(i,o)}if(s>=n){clearInterval(u);o=t.to;if(typeof t.onComplete=="function"){t.onComplete.call(i,o)}}}var i=this,s=0,o=t.from,u=setInterval(a,t.refreshInterval)})};e.fn.countTo.defaults={from:0,to:100,speed:1e3,refreshInterval:100,decimals:0,onUpdate:null,onComplete:null}})(jQuery);
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/* timers */
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
$('#text-separator-timers').waypoint(function() {
    "use strict";
    // first timer
    $('.timer1').countTo({
        from: 0, 
        to: 1001, 
        speed: 3000,
        refreshInterval: 10
    });
    // second timer
    $('.timer2').countTo({
        from: 0,
        to: 40,
        speed: 3000,
        refreshInterval: 10
    });
    // third timer
    $('.timer3').countTo({
        from: 0,
        to: 4987,
        speed: 3000,
        refreshInterval: 10
    });
    // fourth timer
    $('.timer4').countTo({
        from: 0,
        to: 8734,
        speed: 3000,
        refreshInterval: 10,
    });
}, { offset: 300 });



(function ($) {
    var $container = $('.example'),
        colWidth = function () {
            var w = $container.width(), 
                columnNum = 1,
                columnWidth = 0;
            if (w > 1200) {
                columnNum  = 5;
            } else if (w > 900) {
                columnNum  = 4;
            } else if (w > 600) {
                columnNum  = 3;
            } else if (w > 300) {
                columnNum  = 2;
            }
            columnWidth = Math.floor(w/columnNum);
            $container.find('.item').each(function() {
                var $item = $(this),
                    multiplier_w = $item.attr('class').match(/item-w(\d)/),
                    multiplier_h = $item.attr('class').match(/item-h(\d)/),
                    width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                    height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                $item.css({
                    width: width,
                    height: height
                });
            });
            return columnWidth;
        },
        isotope = function () {
            $container.isotope({
                resizable: true,
                isFitWidth: true,
                itemSelector: '.item',
                masonry: {
                    columnWidth: colWidth(),
                    gutterWidth: 4
                }
            });
        };
    isotope();
    $(window).smartresize(isotope);
}(jQuery));

new WOW().init();

(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
            || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };

    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());