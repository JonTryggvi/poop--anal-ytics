/* Nav */

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
});

/* User Modal Window */

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
function openNav() {
    document.getElementById("disclaimer-overlay").style.height = "100%";
}

function closeNav() {
    document.getElementById("disclaimer-overlay").style.height = "0%";
}
