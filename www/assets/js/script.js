$(document).ready(function(){



  $('.radio-texture-container').click(function(){
       $(this).addClass('not-checked');
       $('.texture').css('opacity','0.2');
       $('.shade').css('opacity', '1');
       $('.borderTest').css('left','466px');

  });

  $('.radio-shade-container').click(function(){
       $(this).siblings('not-checked');
      //  $(this).siblings('.bidbutton');
      $('#formSubmit').click();
  });


console.log ("Bjána drasl");

});
