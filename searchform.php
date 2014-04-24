<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field form-control" placeholder="Search <?php bloginfo('name'); ?>" value="" name="s" title="Search for:" />
	</label>
	<button class="search-submit btn btn-link" type="button"><i class="fa fa-search"></i></button>
</form>