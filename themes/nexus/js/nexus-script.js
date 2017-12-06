(function($) {
  console.log("hi");
    $('.menu-content').hide();
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    
    $('.menu-content').toggle().focus();
  
  
  });
  
  
    $('search-form').on('blur', function(){
  
      $(this).toggle();
  
  
    });



  $(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });


  })(jQuery);