/* Nav */

$(document).ready(function() {
  $('#toggle').click(function() {
     $(this).toggleClass('active');
     $('#overlay').toggleClass('open');
  });
});


/* Footer disclaimer */

// $('#toggle-footer').click(function() {
//    $(this).toggleClass('active');
//    $('#overlay-footer').toggleClass('open');
// });

function openNav() {
    document.getElementById("disclaimer-overlay").style.height = "100%";
}

function closeNav() {
    document.getElementById("disclaimer-overlay").style.height = "0%";
}
