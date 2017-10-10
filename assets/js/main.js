 $('.button-collapse').sideNav({
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
$(".nav-item").on('click', function(e) {
    e.preventDefault();
    console.log("clicked");
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});
$('#btn').on('click', function(e){
	e.preventDefault();
	console.log("will scroll");
    $("html, body").animate({
        scrollTop: $("#about").offset().top
    });
});

$('.carousel').carousel();