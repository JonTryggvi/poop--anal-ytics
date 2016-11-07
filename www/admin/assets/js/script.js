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

   function showDiv() {
   document.getElementById('userInfo').style.display = "block";
}

});
