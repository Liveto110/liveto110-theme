<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package LiveTo110 Theme
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'liveto110' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'liveto110' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>