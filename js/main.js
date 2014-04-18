jQuery( window ).load(function() {
	// Homepage Slideshow
	jQuery('#intro .flexslider').flexslider({
		selector: ".slides > li",
		animation: "fade",
		easing: "swing",
		slideshow: true,
		slideshowSpeed: 10000,
		animationSpeed: 1200,
		initDelay: 0,
		directionNav: false,
		controlNav: false
	});

	// YT Videos Slideshow
	jQuery('#youtubevideo-carousel .flexslider').flexslider({
		selector: ".slides > li",
		animation: "fade",
		easing: "swing",
		slideshow: true,
		slideshowSpeed: 10000,
		animationSpeed: 1200,
		initDelay: 0,
		// directionNav: false,
		// controlNav: false
	});
});

jQuery( document ).ready( function($) {
	// Searchform Drawer
	var $drawer = $('#searchform-drawer');
	var toggler1 = $('#primary-navigation a[title="search"]');
	var toggler2 = $('#primary-navigation a[title="Search"]');

	toggler1.on('click', function() {
		$(this).parent().toggleClass('active');
		$drawer.slideToggle("fast");
	});
	toggler2.on('click', function() {
		$(this).parent().toggleClass('active');
		$drawer.slideToggle("fast");
	});
});