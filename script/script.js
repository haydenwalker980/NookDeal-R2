$(document).ready(function(){

// =============================================================================
// Some global variables such as deviceWidth, scrollPosition, etc.
// =============================================================================
  var deviceWidth = $(window).width() + 15;
  var scrollPosition = $(window).scrollTop();
  // For development purpose
  $(window).on('resize', function() {
    deviceWidth = $(window).width() + 15;
    // console.log(deviceWidth);
  })
  $(window).on('scroll', function() {
    scrollPosition = $(window).scrollTop();
    // console.log(scrollPosition);
  })

// =============================================================================
// NAVBAR BEHAVIORS
// =============================================================================
  // Products menu dropdown
  $(".product-dropdown-button").click(function(e) {
    e.preventDefault();
    $('.product-dropdown-button').toggleClass('active');
    $('.product-dropdown').stop(true,true).slideToggle(300);
  });
  $('main, .upper-nav, footer').click(function() {
    $('.product-dropdown-button').removeClass('active');
    $('.product-dropdown').stop(true,true).slideUp(200);
  });

  // Mobile Collapse Menu button
  $(".collapse-btn").click(function(){
    $(this).toggleClass("expand");
    $(".lower-nav").stop(true,true).slideToggle(300);
    $("body").toggleClass("no-scroll");
  });

  // Lower navbar fixed on scroll down
  // works only for desktop and tablet view
  // if(deviceWidth >= 580) {
  //   $(window).scroll(function() {
  //     scrollPosition = $(window).scrollTop();
  //     if(scrollPosition >= 80) {
  //       // change lower navbar to fixed
  //       $('.lower-nav').addClass("fixed");
  //     } else {
  //       // change lower navbar to normal
  //       $('.lower-nav').removeClass("fixed");
  //     }
  //   })
  // }
  function lowerNavFixed() {
    if(deviceWidth >= 580 && scrollPosition >= 80) {
      $('.lower-nav').addClass("fixed");
    } else {
      $('.lower-nav').removeClass("fixed");
    }
  }
  lowerNavFixed();

  // $(window).resize(function() {
  //   lowerNavFixed();
  // });
  $(window).scroll(function() {
    lowerNavFixed();
  });



// =============================================================================
// HOME PAGE
// =============================================================================

  // banner btn slide down to featured
  $('.banner-btn').click(function(e) {
    e.preventDefault();
    var featuredTop = $('.container-featured').offset().top;
    $('html,body').animate({
      scrollTop: featuredTop - 100
    },500);
  })

});

// =============================================================================
// PRODUCTS PAGE
// =============================================================================
  // size btns
  $('.size-btn-group>.col-4').on('click', function() {
    var selectedSize = $(this).data("select");
    $(this).toggleClass("selected");
    $('#size>input[value='+selectedSize+']').trigger('click');
  });
