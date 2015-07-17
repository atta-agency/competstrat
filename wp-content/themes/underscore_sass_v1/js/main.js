
$(document).ready(function() {
	$('.scrollTo').click( function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 1500; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	});



	$(window).scroll(function(){
		$("#test").addClass('revealOnScroll');
	});

	$( "#navbar .scrollTo" ).click(function() {
	  $(this).addClass('active');
	});

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 750) {
	        //clearHeader, not clearheader - caps H
	        $(".header").addClass("visible-header");
	    }
	    if (scroll < 750) {
	        //clearHeader, not clearheader - caps H
	        $(".header").removeClass("visible-header");
	    }
	}); //missing );
	
});
