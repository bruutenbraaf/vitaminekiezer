jQuery( document ).ready(function() {
    jQuery('.i-titel').on('click',function (e) {
        // e.preventDefault();
        jQuery(this).toggleClass('i-open');
        jQuery(this).next('ul').slideToggle(300);
    });
});


jQuery( document ).ready(function() {
    jQuery('.v-btn').on('click',function (e) {
        // e.preventDefault();
        jQuery(this).toggleClass('load');
    });
});


jQuery( "body" ).on('click', '.hamburger', function() {
    jQuery('.mobile-menu').animate({'width': 'toggle'}, 200);
    jQuery('.hamburger div:nth-child(1)').toggleClass('firsts');
    jQuery('.hamburger div:nth-child(2)').toggleClass('middle-n');
    jQuery('.hamburger div:nth-child(3)').toggleClass('last');
});


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        $(".v-mobiletitels").addClass("sticky");
    } else {
        $(".v-mobiletitels").removeClass("sticky");
    }
});