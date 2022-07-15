$(document).ready(function(){

  var src;

  src = $(this).find('.img__1').attr('src');
  src = src.slice(0,-12)
  src = src+'.jpg'  
  const bg = document.querySelector('.bg-image');
  bg.style.backgroundImage   = 'url(' + src + ')';

  })