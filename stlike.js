$(function(){
	// hide logo
	var timer = false;
	$(window).scroll(function() {
    	if (timer !== false) {
        	clearTimeout(timer);
		}
		timer = setTimeout(function() {
			var scrolled = $(this).scrollTop();
        	console.log('scroll');
			if (scrolled == 0) {
				$('#fixed').animate({'marginTop': '0px'}, {queue:false});
			} else if (scrolled > 75) {
				var w = $(window).width();
				if (w > 640) {
					$('#fixed').animate({'marginTop': '-75px'}, {queue:false});
				} else { // css @media screen and (max-width: 640px)
					$('#fixed').animate({'marginTop': '-50px'}, {queue:false});
				}
			}
		}, 200);
	});
	
	
	// scroll to id
	$('a[href^=#]').click(function(){
		var speed = 700;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 104;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});