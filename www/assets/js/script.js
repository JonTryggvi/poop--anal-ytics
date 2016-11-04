$(document).ready(function(){



  $('.radio-container').click(function(){
     $('.radio-container').not(this).each(function(){
       $(this).addClass('not-checked');
     })
  });



});
