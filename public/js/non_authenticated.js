$(document).ready(function() {
	if (getCookie('NSFW_CHECK') == 'TRUE') {
		$('.blurry').removeClass('blurry');
		$('.blurry-logo').remove();
	}
	$(document).on('click', '.blurry', function(event) {
		nsfwModal();
	});
	$(document).on('click', '.modal-close', function(event) {
		$('.modal').fadeOut('fast', function() {
			$('.modal').remove();
		})
	});
	$(document).on('click', '.modal-nsfw-allow', function(event) {
		document.cookie = "NSFW_CHECK=TRUE;path=/";
		$('.blurry-logo').remove();
		$('.blurry').removeClass('blurry');
		$('.modal').fadeOut('fast', function() {
			$('.modal').remove();
		})
	});
	$(document).on('click', '.modal-nsfw-deny', function(event) {
		$('.modal').fadeOut('fast', function() {
			$('.modal').remove();
		})
	});
	$('.required-auth').click(function(event) {	
		event.preventDefault();
		notifyUser("😁 Debes estar logeado para acceder a este contenido 😁");
	});
	window.onclick = function(event) {
	  	if (event.target.className == 'modal') {
	  		$('.modal').fadeOut('fast', function() {
	  			$(this).remove();
	  		})
	  	}
	}
	$(document).on('click', '.selector', function(event) {
		event.preventDefault();
		/* Act on the event */
	});
});