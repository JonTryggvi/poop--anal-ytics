$(document).ready(function(){



  $('.radio-texture-container').click(function(){
       $(this).addClass('not-checked');
  });

  $('.radio-shade-container').click(function(){
       $(this).addClass('not-checked');
      //  $('#test-form').submit();
  });

  $('input[name=shade]').change(function(){
       $('form').submit();
  });


});
