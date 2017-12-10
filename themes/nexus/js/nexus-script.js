(function($) {
  console.log("bye");
    $('.menu-content').hide();
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    
    $('.menu-content').slideToggle("swing").focus();
  
  });

    $('.menu-content').on('click', function(){
  
      $('.menu-content').toggle().focus();
  
    });

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      navText: ['<', '>'],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })

  $(function () {
    $('select').selectric();
  });

  //single-nexus_faq dropdown menus
  $(function () {
    $('.homestay-button').click(function () {
      $(this).next('.faq-dropdown').slideToggle("swing");

      $(this).parent().next().slideToggle();
      return false;
    })
  });
  
  //single-nexus-faq return to top button
  $('.return-to-top-button').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
  });  

  })(jQuery);