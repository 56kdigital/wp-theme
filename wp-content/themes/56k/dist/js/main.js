jQuery(document).ready(function($) {

  var mobileNav = function() {
    var mobileNavTrigger = $('.hamburger');
    var mobileNavContainer = $('#menu-main-menu');
    var body = $('body');

    mobileNavTrigger.on('click', function(e) {
      e.preventDefault();
      $(this).toggleClass('js-is-active');
      mobileNavContainer.toggleClass('js-is-visible');
      body.toggleClass('js-no-scroll');
    });
  }

  $(".testimonial-slider").slick({
    prevArrow: '<button type="button" class="slick-prev"><svg class="icon-prev"><use xlink:href="#icon-prev" /></svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg class="icon-next"><use xlink:href="#icon-next" /></svg></button>',
  });

  mobileNav();

});
