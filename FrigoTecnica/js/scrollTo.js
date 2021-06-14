$(document).ready(function (){

	$(".MenuChiSiamo").click(function() {
		var offset = -60; //Offset of 60px
		$('#liContatti').removeClass("active");
		$("#liLavori").removeClass("active");
		
		$('#liChiSiamo').addClass('active');
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#about").offset().top + offset
		}, 2000);
	});
	
	$(".MenuLavori").click(function() {
		var offset = -60; //Offset of 60px
		$('#liChiSiamo').removeClass('active');
		$('#liContatti').removeClass("active");
		
		$('#liLavori').addClass('active');
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#portfolio").offset().top + offset
		}, 2000);
	});

	$(".MenuContatti").click(function() {
		var offset = -60; //Offset of 60px
		$('#liChiSiamo').removeClass('active');
		$('#liLavori').removeClass('active');
		
		$('#liContatti').addClass('active');
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#contatti").offset().top + offset
		}, 2000);
	});
	
	$("#MenuLogo").click(function() {
		var offset = -60; //Offset of 60px
		$('#liChiSiamo').removeClass('active');
		$('#liLavori').removeClass('active');
		$('#liContatti').removeClass("active");
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#welcome").offset().top + offset
		}, 2000);
	});
	
	// Buttons
	
	$(".btn-success").click(function() {
		var offset = -60; //Offset of 60px
		$('#liContatti').removeClass("active");
		$("#liLavori").removeClass("active");
		
		$('#liChiSiamo').addClass('active');
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#about").offset().top + offset
		}, 2000);
	});
	
	$(".btn-primary").click(function() {
		var offset = -60; //Offset of 60px
		$('#liChiSiamo').removeClass('active');
		$('#liLavori').removeClass('active');
		
		$('#liContatti').addClass('active');
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#contatti").offset().top + offset
		}, 2000);
	});
});