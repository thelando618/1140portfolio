$(document).ready(function() {
	$('.get-in-touch .icons img').hover(function() {
		console.log('this is being hovered');
		$(this).animate({
    		top: '-=5',
  		}, 500, function() {
    		// Animation complete.
  		});
	}, function() {
  		$(this).animate({
    		top: '+=5',
  		}, 250, function() {
	    	// Animation complete.
  		});	
	});
});