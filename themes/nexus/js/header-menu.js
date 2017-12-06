(function($) {
  console.log("hi");
    $('.menu-content').hide();
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    
    $('.menu-content').toggle().focus();
  
  
  });
  
  
    $('.menu-content').on('click', function(){
  
      $('.menu-content').toggle().focus();
  
  
    });
  })(jQuery);