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

});
