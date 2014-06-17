<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<span class="post-format-icon"></span>
									<div class="row">
										<?php if ('' == has_post_thumbnail()) { ?>

											<?php $wrapper_class = 'col-xs-12'; ?>

										<?php } else { ?>

											<div class="col-xs-4 col-sm-5 col-md-6">
												<div class="image-wrap">
													<?php
														the_post_thumbnail('blog-index');
														$wrapper_class = 'col-xs-8 col-sm-7 col-md-6';
													?>
												</div><!-- /.image-wrap -->
											</div>

										<?php } ?>

										<div class="<?php echo $wrapper_class; ?>">
											<div class="content-wrap">
												<header class="entry-header">
													<?php
														if ( is_single() ) :
															the_title( '<h1 class="entry-title">', '</h1>' );
														else :
															the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
														endif;
													?>

													<div class="entry-meta">
														<?php
															if ( 'post' == get_post_type() )
																liveto110_posted_on();
														?>
													</div><!-- .entry-meta -->
												</header><!-- .entry-header -->

												<div class="entry-content">
													<?php
														global $more;
														$more = 0;
														the_content( '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>', true ); 
													?>
												</div><!-- /.entry -->
											</div><!-- /.content-wrap -->
										</div>
									</div><!-- /.row -->
								</article><!-- #post-## -->

							<?php endwhile; ?>

							<?php liveto110_paging_nav(); ?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone col-sm-4">
				<?php
                    if (is_page('Shop')) :
                        get_sidebar( 'shop' ); 
                    else :
                        get_sidebar(); 
                    endif;
                ?>
			</div><!-- /.hidden-phone .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>
