$(document).ready(function(){



  $('.radio-texture-container').click(function(){
       $(this).addClass('not-checked');
  });

  $('.radio-shade-container').click(function(){
       $(this).siblings('not-checked');
      //  $(this).siblings('.bidbutton');
      $('#formSubmit').click();
  });




});
