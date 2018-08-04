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


// =============================================================================
// Product Review
// =============================================================================
// Star rating dynamic
$('#add-review-modal').on('hidden.bs.modal', function() {
  $('.star-rating i').removeClass("fas").addClass("far").removeClass('hold');
  $('#overall-rating').html("");
  $('#rating-hidden').val(0);
});

$('.star-rating i').on("click", function() {
  var starClicked = $(this).index() + 1;
  console.log(starClicked);

  $('.star-rating i').removeClass('fas').addClass('far').removeClass('hold');
  for (var i = 1; i <= starClicked; i++) {
    $('.star-rating i:nth-child(' + i + ')').removeClass('far').addClass('fas').addClass('hold');
  }
  $("#rating-hidden").val(starClicked);
});

$('.star-rating i').on("mouseenter", function() {
  var starOn = $('.star-rating .fas').length;
  var starPos = $(this).index() + 1;
  var overallRating = $('.star-rating i:nth-child('+starPos+')').data("rating");
  if (starOn < starPos) {
    $('#overall-rating').html(overallRating);
    for (var i = 1; i <= starPos; i++) {
      $('.star-rating i:nth-child(' + i + ')').removeClass('far').addClass('fas');
    }
  } else {
    if(!$('.star-rating i:nth-child('+(starPos+1)+')').is('.hold')) {
      $('#overall-rating').html(overallRating);
      $('.star-rating i:nth-child('+(starPos+1)+')').removeClass('fas').addClass('far');
    }
  }
});

$('.star-rating').on("mouseleave", function() {
  if($('.star-rating i').is('.hold')) {
    var holdPos = $('#rating-hidden').val();
    // console.log(holdPos);
    var overallRating = $('.star-rating i:nth-child('+holdPos+')').data("rating");
    $('#overall-rating').html(overallRating);
    for (var i = 5; i > holdPos; i--) {
      $('.star-rating .fas:nth-child(' + i + ')').removeClass('fas').addClass('far');
    }
  } else {
    $('#overall-rating').html("");
    for (var i = 1; i <= 5; i++) {
      $('.star-rating .fas:nth-child(' + i + ')').removeClass('fas').addClass('far');
    }
  }
});
