<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package LiveTo110 Theme
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

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								// if ( comments_open() || '0' != get_comments_number() ) :
									// comments_template();
								// endif;
							?>

						<?php endwhile; // end of the loop. ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone col-sm-4">
				<?php 
                    //if (is_page( 'Shop' )) :
                    //    get_sidebar( 'shop' ); 
                    //else :
                        get_sidebar();
                    //endif;
                ?>
			</div><!-- /.hidden-phone .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>
