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

	// HomePage Slideshow
	$('#intro .flexslider').flexslider({
		selector: ".slides > .home-slide",
		directionNav: false,
		// controlNav: false,
		animation: "slide",
		pauseOnHover: true,
	});
	// Videos Page Slideshow
	$('#videos-page-template .flexslider').flexslider({
		selector: ".slides > .video-post",
		directionNav: false,
		controlNav: false
	});
});