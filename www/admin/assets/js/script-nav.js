/* Nav */

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
});

/* User Modal Window */

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
