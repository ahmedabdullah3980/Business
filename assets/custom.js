jQuery(document).ready(function() {
    var totalItems = jQuery('.carousel-item').length;
    var currentIndex = jQuery('.carousel-item.active').index() + 1;
    jQuery('.num').html('<span>' + currentIndex + '</span>/' + totalItems + '');
    jQuery('#myCarousel').carousel({
        interval: 2000
    });


    jQuery('#myCarousel').bind('slid.bs.carousel', function (e) {
        currentIndex = jQuery('.carousel-item.active').index() + 1;
        jQuery('.num').html('<span>' + currentIndex + '</span>/' + totalItems + '');
    });
});

jQuery( document ).ready(function() {
    jQuery('.hm-slider').owlCarousel({
        loop:true,
        margin:10,
        nav: true,
        navText:["<div class='nav-btn prev-slide nav-slider prev'><img class=\"mw-100\" src=\"wp-content/themes/cablecustomerservices/assets/images/angle-left.svg\" alt=\"<\"></div>","<div class='nav-btn next-slide nav-slider next'><img class=\"mw-100\" src=\"wp-content/themes/cablecustomerservices/assets/images/angle-right.svg\" alt=\">\"></div>"],
        responsiveClass:true,
        dots: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            768:{
                items:4,
                nav:true
            },
            1200:{
                items:5,
                nav:true,
            }
        }
    });
});

jQuery(document).ready(function(){

    // hide #back-top first
    jQuery("#back-top").hide();

    // fade in #back-top
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#back-top').fadeIn();
            } else {
                jQuery('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        jQuery('#back-top a').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});

jQuery(document).ready(function(){
    //Call On Click
    jQuery(".call-tfn").on("click", function() {
        window.location.href = "tel:+1-855-858-0771";
    });

});