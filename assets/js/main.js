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

    $(".contact").on("click", function(e) {
        $(".contact-us").validate({
            submitHandler: function() {
                var form_data = new FormData(this.currentForm); //constructs key/value pairs representing fields and values  
                for (var pair of form_data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                };  
            $.ajax({
                url: "../assets/ajax/mailer.php",
                type: "POST",
                data : form_data,
                contentType: false,
                cache: false,
                processData:false,
                }).done(function(res){ //fetch server "json" messages when done
                    console.log(res);
                    if (res) {
                        $(".messageSent").show(); 
                    }
                    else {
                        $(".messageError").show();
                    }
            });
            }
        });
    });    
})