$(document).ready(function(){
// Some global variables such as deviceWidth, scrollPosition, etc.
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

// Navbar behaviors ****************************************
  // Products menu dropdown
    $(".product-dropdown-button").click(function(e) {
      e.preventDefault();
      $('.product-dropdown-button').toggleClass('active');
      $('.product-dropdown').stop(true,true).slideToggle(300);
    });

// Mobile Collapse Menu button
    $(".collapse-btn").click(function(){
      $(this).toggleClass("expand");
      $(".lower-nav").stop(true,true).slideToggle(300);
      $("body").toggleClass("no-scroll");
    });

  // Lower navbar fixed on scroll down
  // works only for desktop and tablet view
  if(deviceWidth >= 480) {
    $(window).scroll(function() {
      scrollPosition = $(window).scrollTop();
      if(scrollPosition >= 80) {
        // change lower navbar to fixed
        $('.lower-nav').addClass("fixed");
      } else {
        // change lower navbar to normal
        $('.lower-nav').removeClass("fixed");
      }
    })
  }



// Home page ******************************************|

  // banner btn slide down to featured
  $('.banner-btn').click(function(e) {
    e.preventDefault();
    var featuredTop = $('.container-featured').offset().top;
    $('html,body').animate({
      scrollTop: featuredTop - 100
    },500);
  })

});

// Products **************************************************/
var minPrice;
var maxPrice;
$( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        minPrice = ui.values[0];
        maxPrice = ui.values[1];
        // console.log(minPrice+" - "+maxPrice);
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
minPrice = $('#slider-range').slider("values", 0);
maxPrice = $('#slider-range').slider("values", 1);
// console.log(minPrice+" - "+maxPrice);

// size btns
$('.size-btn-group>.col-4').on('click', function() {
  var selectedSize = $(this).data("select");
  $(this).toggleClass("selected");
  $('#size>input[value='+selectedSize+']').prop("checked")?
  $('#size>input[value='+selectedSize+']').prop("checked", false) :
  $('#size>input[value='+selectedSize+']').prop("checked", true);
});
