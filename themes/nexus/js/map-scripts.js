// Province toggle
(function($) {
$(function() {
  console.log("prov");
    $('.choose-wrapper-bc').hide();  
  $('.bc').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-bc').slideToggle("swing").focus() 
  });
});
$(function() {
  console.log("prov");
    $('.choose-wrapper-ab').hide();  
  $('.ab').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-ab').slideToggle("swing").focus() 
  });
});
$(function() {
  console.log("prov");
    $('.choose-wrapper-man').hide();  
  $('.man').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-man').slideToggle("swing").focus() 
  });
});
$(function() {
  console.log("prov");
    $('.choose-wrapper-sk').hide();  
  $('.sk').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-sk').slideToggle("swing").focus() 
  });
});
$(function() {
  console.log("prov");
    $('.choose-wrapper-on').hide();  
  $('.on').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-on').slideToggle("swing").focus() 
  });
});
$(function() {
  console.log("prov");
    $('.choose-wrapper-qc').hide();  
  $('.qc').on('click', function(e) {
    $('.hide-prov').hide();  
    e.preventDefault();     
    $('.choose-wrapper-qc').slideToggle("swing").focus() 
  });
});
})(jQuery);