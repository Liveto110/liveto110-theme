<?php
/**
 * Template Name: Videos Page
 *
 */
global $smof_data;
get_header(); ?>

<div id="videos-page-template" class="clearfix">
	<?php while( have_posts()) : the_post(); ?>

		<div id="content" class="site-content">
			<div class="container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<div class="page-header">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</div>

						<div class="page-content">
							<?php the_content(); ?>
						</div><!-- /.page-content -->

						<div id="youtube-channel-gallery-wrapper" class="clearfix">
							<?php dynamic_sidebar( 'sidebar-youtube' ); ?>
						</div><!-- /#youtube-channel-gallery-wrapper -->
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.container -->
		</div><!-- /#content -->
		
	<?php endwhile; ?>
</div><!-- /#videos-page-template -->

<?php get_footer(); ?>