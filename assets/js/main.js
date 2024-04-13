$(document).ready(function () {
  function initBgCover(context) {
    if (!context) context = $('body');
    context.find('.bg-cover').each(function () {
      var holder = $(this);
      var image = holder.find('> img').hide();
      var imageSrc = image.prop('src');
      holder.css({
        backgroundImage: 'url(' + imageSrc + ')',
      });
    });
  }

  initBgCover();

  /* smooth scroll*/
  $('a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  // $(window).scroll(function () {
  //     var scrollTop = $(window).scrollTop();
  //     var headerHeight = $('.site-header').innerHeight();
  //     if (scrollTop > headerHeight) {
  //         $('.site-header').addClass('sticky-header')
  //     } else {
  //         $('.site-header').removeClass('sticky-header');
  //     }
  // });

  //testimonial-slider
  $('.testimonial-slider').slick({
    dots: true,
    arrows: true,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.navbar-icon').click(function () {
    $(this).toggleClass("active");
    $(".site-nav nav").toggleClass("active");
    $('body').toggleClass("scroll");
  });

  $('#datePicker').datetimepicker({
    format: 'm/d/Y',
    timepicker: false,
    //minDate: '-1970/01/02', //yesterday is minimum date
    //maxDate: '+1970/01/02' //tomorrow is maximum date
  });

});