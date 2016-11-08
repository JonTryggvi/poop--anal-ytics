$('document').ready(function(){

  $("#button").click(function(){
    $("#content").hide();
});

  // $("#hide").click(function(){
  //     $("p").hide();
  // });
  // $("#show").click(function(){
  //     $("#story").toggle();
  // });

    $(".countries").chosen({disable_search_threshold: 10});

    $('.confirmation').on('click', function () {
       return confirm('Are you sure you want to delete your story?');
   });



// test scripts

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

     $('#shadeID').click(function(){
         $('.radio-shade-container').addClass('not-checked');
         $('.texture').css('opacity','0.2');
         $('.shade').css('opacity', '0.2');

     });


   function showDiv() {
   document.getElementById('userInfo').style.display = "block";
}


});
