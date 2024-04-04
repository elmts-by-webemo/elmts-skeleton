$(document).ready(function(){
// -------------------------- //

  // ------------- TOGGLE SIDEBAR ------------- //
  function toggleSidebar() {
      $(".nav-left").toggleClass("active");
      $(".header-sidebar").toggleClass("active");
      $(".header-sidebar-cover").toggleClass("active");
      $(".body-wrapper").toggleClass("active");
      $(".section-header").toggleClass("active");
      $(".section-footer").toggleClass("active");
      $(".inner-wrapper").toggleClass("active");
      $(".cards-flexbox").toggleClass("active");
  }

  $(".nav-left").on("click tap", function() {
      toggleSidebar();
  });

  // ------------- SIDEBAR TOGGLE ------------- //
  $('.has-child').on('click', function(e) {
      $(this).toggleClass("active");
      e.preventDefault();
  });

  // ------------- BUTTONS FIXED BOTTOM ------------- //

  $(window).scroll(function() {
     $(".buttons-fixed").removeClass("body-bottom");
     if($(window).scrollTop() + $(window).height() > ($(document).height() - 57) ) {
         //you are at bottom
         $(".buttons-fixed").addClass("body-bottom");
     }
  });

  $('.buttons-fixed').mouseenter(function() {
      $(this).addClass("active");
  });

  $('.buttons-fixed').mouseleave(function() {
      if ($(this).find('.dropdown-toggle').hasClass('show')) {
        console.log('asd');
      } else {
        $(this).removeClass("active");
      }
  });

  $(window).click(function() {
    $('.buttons-fixed').removeClass("active");
  });

  $('.buttons-fixed').click(function(event) {
    event.stopPropagation();
  });


// -------------------------- //
});

$(document).ready(function(){
    var doc = $(document).height();
    var win = $(window).height();

    if (doc == win || $(window).scrollTop() + $(window).height() >= doc) {
        $(".buttons-fixed").addClass("body-bottom");
    }
});