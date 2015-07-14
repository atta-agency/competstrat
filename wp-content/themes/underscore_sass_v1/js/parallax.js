$(document).ready(function() {


/* Parallax*/

$(window).scroll(function(){
	
	/*Clouds*/
	$("#cloud1").css({
  		top: function(index, value) {
    		return 350 - $(window).scrollTop() * 1.3;
  		}
  	});	
	$("#cloud2").css({
  		top: function(index, value) {
    		return 500 - $(window).scrollTop() * 1.5;
  		}
	});		
	$("#cloud3").css({
  		top: function(index, value) {
    		return 590- $(window).scrollTop() * .2;
  		}
	});	
	$("#cloud4").css({
  		top: function(index, value) {
    		return 420- $(window).scrollTop() * .5;
  		}
	});	
	$("#cloud5").css({
  		top: function(index, value) {
    		return 775- $(window).scrollTop() * 1.7;
  		}
	});	
	$("#cloud6").css({
  		top: function(index, value) {
    		return 1550- $(window).scrollTop() * .6;
  		}
	});	
	$("#cloud7").css({
  		top: function(index, value) {
    		return 1050- $(window).scrollTop() * .4;
  		}
	});	
	$("#cloud8").css({
  		top: function(index, value) {
    		return 1800- $(window).scrollTop() * 1.3;
  		}
	});	
	$("#cloud9").css({
  		top: function(index, value) {
    		return 2500- $(window).scrollTop() * 1.1;
  		}
	});

	
	/*Rig*/
	$("#clouda").css({
  		top: function(index, value) {
    		return 3400- $(window).scrollTop() * .4;
  		}
	});
	$("#cloudb").css({
  		top: function(index, value) {
    		return 9400- $(window).scrollTop() * 1.3;
  		}
	});
	$("#cloudc").css({
  		top: function(index, value) {
    		return 2500- $(window).scrollTop() * .3;
  		}
	});
	$("#cloudc2").css({
  		top: function(index, value) {
    		return 10500- $(window).scrollTop() * 1.3;
  		}
	});

	$("#cloudd").css({
  		top: function(index, value) {
    		return 7200- $(window).scrollTop() * .3;
  		}
	});
	$("#cloude").css({
  		top: function(index, value) {
    		return 22200- $(window).scrollTop() * 1.0;
  		}
	});
	$("#cloudf").css({
  		top: function(index, value) {
    		return 17400- $(window).scrollTop() * .8;
  		}
	});
		
});	
	
				
/*Disappear*/ 
			
	$(window).scroll(function() {
		if(isScrolledIntoView('#home_description')) {
			$("#drop").css({"display": "none"});
			}
		else {
			$("#drop").css({"display": ""});
			}

	});


/*Articles*/
			
	function isScrolledIntoView(elem) {
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();
	
	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();
	
	    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
		}  
		
		var myelement = $('#cloud6');
		var mymessage = $('#description');
		$(window).scroll(function() {
		    if(isScrolledIntoView(myelement)) {
		        mymessage.fadeIn('500'); 
		    }
		     else {
		        mymessage.fadeOut('200')
		    }

		var myelement1 = $('#hill');
		var mymessage1 = $('#red');
		    if(isScrolledIntoView(myelement1)) {
		        mymessage1.fadeIn('500'); 
		    }
		     else {
		        mymessage1.fadeOut('200')
		    }

		var myelement2 = $('#targettruck');
		var mymessage2 = $('#texttrucks');
		    if(isScrolledIntoView(myelement2)) {
		        mymessage2.fadeIn('500'); 
		    }
		     else {
		        mymessage2.fadeOut('200')
		    }

		var myelement3 = $('#targettruck2');
		var mymessage3 = $('#texttrucks2');
		    if(isScrolledIntoView(myelement3)) {
		        mymessage3.fadeIn('500'); 
		    }
		     else {
		        mymessage3.fadeOut('200')
		    }

		var myelement5 = $('#targetchemical');
		var mymessage5 = $('#chemicals');
		    if(isScrolledIntoView(myelement5)) {
		        mymessage5.fadeIn('500'); 
		    }
		     else {
		        mymessage5.fadeOut('200')
		    }

		var myelement7 = $('#chemicaltrigger');
		var mymessage7 = $('#chemicals2');
		    if(isScrolledIntoView(myelement7)) {
		        mymessage7.fadeIn('500'); 
		    }
		     else {
		        mymessage7.fadeOut('200')
		    }
		    
		var myelement4 = $('#pipe');
		var mymessage4 = $('#chemicals2wrapper');
		    if(isScrolledIntoView(myelement4)) {
		        mymessage4.fadeIn('500'); 
		    }
		     else {
		        mymessage4.fadeOut('200')
		    }

		var myelement8 = $('#ground3');
		var mymessage8 = $('#chemicals3');
		    if(isScrolledIntoView(myelement8)) {
		        mymessage8.fadeIn('500'); 
		    }
		     else {
		        mymessage8.fadeOut('200')
		    }
		
		var myelement9 = $('#trigger1');
		var mymessage9 = $('#chemicals4');
		    if(isScrolledIntoView(myelement9)) {
		        mymessage9.fadeIn('500'); 
		    }
		     else {
		        mymessage9.fadeOut('200')
		    }
		
		var myelement10 = $('#trigger2');
		var mymessage10 = $('#math');
		    if(isScrolledIntoView(myelement10)) {
		        mymessage10.fadeIn('500'); 
		    }
		     else {
		        mymessage10.fadeOut('200')
		    }
		var myelement11 = $('#pipecurve');
		var mymessage11 = $('#methane');
		    if(isScrolledIntoView(myelement11)) {
		        mymessage11.fadeIn('500'); 
		    }
		     else {
		        mymessage11.fadeOut('200')
		    }
		    
		var myelement12 = $('#meter');
		var mymessage12 = $('#cracks');
		    if(isScrolledIntoView(myelement12)) {
		        mymessage12.fadeIn('500'); 
		    }
		     else {
		        mymessage12.fadeOut('200')
		    }
		    
		var myelement13 = $('#trigger3');
		var mymessage13 = $('#cracks3');
		    if(isScrolledIntoView(myelement13)) {
		        mymessage13.fadeIn('500'); 
		    }
		     else {
		        mymessage13.fadeOut('200')
		    }

		var myelement14 = $('#tox2');
		var mymessage14 = $('#methane2');
		    if(isScrolledIntoView(myelement14)) {
		        mymessage14.fadeIn('500'); 
		    }
		     else {
		        mymessage14.fadeOut('200')
		    }

		var myelement15 = $('#citypipe');
		var mymessage15 = $('#citywater');
		    if(isScrolledIntoView(myelement15)) {
		        mymessage15.fadeIn('500'); 
		    }
		     else {
		        mymessage15.fadeOut('200')
		    }
		    
		var myelement16 = $('#pit1');
		var mymessage16 = $('#recovered');
		    if(isScrolledIntoView(myelement16)) {
		        mymessage16.fadeIn('500'); 
		    }
		     else {
		        mymessage16.fadeOut('200')
		    }
		var myelement17 = $('#cloudf');
		var mymessage17 = $('#voc');
		    if(isScrolledIntoView(myelement17)) {
		        mymessage17.fadeIn('500'); 
		    }
		     else {
		        mymessage17.fadeOut('200')
		    }
	});




});



