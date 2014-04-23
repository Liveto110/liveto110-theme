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