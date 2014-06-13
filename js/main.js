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
		animation: "fade",
		pauseOnHover: true,
		slideshow: false,
	});
	$('#intro .flexslider .simple-layout .slide-header .header-title').arctext({radius: 65});
	console.log($('#intro .flexslider .complex-layout').parent('content-wrap')); //.css('background', 'red');

	// Videos Page Slideshow
	// The slider being synced must be initialized first
	$('#videos-page-template #videos-carousel').flexslider({
		selector: ".slides > li",
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 120,
		itemHeight: 120,
		itemMargin: 0,
		asNavFor: '#videos-slider',
		move: 0,
		allowOneSlide: true,
	});

	$('#videos-page-template #videos-slider').flexslider({
		selector: ".slides > li",
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#videos-carousel",
		directionNav: false
	});

	// Amazon target _blank
	$('.product_type_external.button').attr('target', '_blank');
    
   $('.dropdown-toggle').dropdownHover();
});