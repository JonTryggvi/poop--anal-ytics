/* Nav */

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
});

console.log("Halló Kalló Bimbó");

/* User Modal Window */

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
