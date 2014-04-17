jQuery( window ).load(function() {
	jQuery('#intro .flexslider').flexslider({
		selector: ".slides > li",
		animation: "fade",
		easing: "swing",
		slideshow: true,
		slideshowSpeed: 10000,
		animationSpeed: 1200,
		initDelay: 0,
		directionNav: false
	});
});

jQuery( document ).ready( function($) {
	// Searchform Drawer
	var $drawer = $('#searchform-drawer');
	var toggler = $('#primary-navigation a[title="search"]');

	toggler.on('click', function() {
		$(this).parent().toggleClass('active');
		$drawer.slideToggle("fast");
	});
});