(function($) {
  
    $('.menu-content').hide();
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    
    $('.menu-content').toggle().focus();
  
  
  });
  
  
    $('search-form').on('blur', function(){
  
      $(this).toggle();
  
  
    });
  })(jQuery);