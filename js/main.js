jQuery( document ).ready( function($) {
	// Local Scroll
	$.localScroll({
		// target: '#nb-page-sections'
		offset: {
			top: '50px'
		}
	});

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
		slideshow: true,
        slideshowSpeed: 5000
	});
	$('#intro .flexslider .simple-layout .slide-header .header-title').arctext({
		radius: 80
	});
	
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
    
    $(window).load(function() {
        if (matchMedia('only screen and (min-width: 768px)').matches && $('#secondary.widget-area').length) {
            var main_height = 10000;
            var sidebar_height = 0;
            
            if ($('#primary.content-area').length)
                main_height = $('#primary.content-area').height();
                
            if ($('#custom-archive-template .posts-wrap').length)
                main_height = $('#custom-archive-template .posts-wrap').height();
            
            $('#secondary.widget-area .widget').each(function() {
                sidebar_height += $(this).height();
                
                if (sidebar_height > main_height) $(this).hide();
            });
        }
    });
    
    if ($('.shipping-calculator-button').length)
        $('.shipping-calculator-button').removeClass();
});