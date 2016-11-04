$(document).ready(function(){



  $('.radio-texture-container').click(function(){
     $('.radio-texture-container').not(this).each(function(){
       $(this).addClass('not-checked');
     })
  });



});
