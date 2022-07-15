$(document).ready(function(){   

  $('.contact-form').on('keyup', function() {

  var name;

  name = $('.contact-form').val();

  $('.name_h').val(name);



  })
 });