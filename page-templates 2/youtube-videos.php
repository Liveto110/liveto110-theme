<?php
/**
 * Template Name: YouTube Videos Page
 *
 */
get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div id="primary" class="content-area">

					<main id="main" class="site-main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>

						<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->

				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone hidden-tablet col-sm-4">
				<?php get_sidebar(); ?>
			</div><!-- /.hidden-phone .hidden-tablet .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>