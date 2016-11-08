$('document').ready(function(){

  $("#button").click(function(){
    $("#content").hide();
});

$("#demo").click(function(){
  $(".commentboxinfo").show();
});


    $(".countries").chosen({disable_search_threshold: 10});

    $('.confirmation').on('click', function () {
       return confirm('Are you sure you want to delete your story?');
   });


     $('.radio-texture-container').click(function(){
          $(this).addClass('not-checked');

     });

     $('.radio-shade-container').click(function(){
          $(this).siblings('not-checked');
         //  $(this).siblings('.bidbutton');
         $('#formSubmit').click();
     });


   function showDiv() {
   document.getElementById('userInfo').style.display = "block";
}

    // $('.demo').click(function(){
    //      $(this).find('commentboxinfo2');
    //      $('.commentboxinfo2').css('height','100px');
    //
    // });


});
