$("#nav-item").find("a").click(function(e) {
    e.preventDefault();
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
})