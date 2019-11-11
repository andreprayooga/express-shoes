$('.nav-link').on('click', function() {
	$('.nav-link').removeClass('active');
	$(this).addClass('active');
});

$("#sidebarToggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});