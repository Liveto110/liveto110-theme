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
		selector: ".slides > li",
		directionNav: false,
		// controlNav: false,
		animation: "fade",
		pauseOnHover: true,
	});

	// Videos Page Slideshow
	// The slider being synced must be initialized first
	$('#videos-page-template #videos-carousel').flexslider({
		selector: ".slides > li",
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 5,
		asNavFor: '#videos-slider',
		minItems: 4,
		maxItems: 5,
		move: 0,
		allowOneSlide: true
	});

	$('#videos-page-template #videos-slider').flexslider({
		selector: ".slides > li",
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#videos-carousel"
	});

	// Amazon target _blank
	$('.product_type_external.button').attr('target', '_blank');
    
   $('.dropdown-toggle').dropdownHover();
});