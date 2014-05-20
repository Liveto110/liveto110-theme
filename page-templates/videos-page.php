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

						<?php
							$args = array(
								'post_type' => 'video',
								'posts_per_page' => -1
							);
							$videos = new WP_Query( $args );
						?>
						<?php if ( $videos->have_posts()) : ?>
							<div class="videos-wrap">
								<div class="flexslider">
									<div class="slides">
										<?php while ( $videos->have_posts()) : $videos->the_post(); ?>
											<article <?php post_class( 'video-post' ); ?>>
												<div class="image-wrap">
													<?php
														$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-width-slide' );
														$slide_img = $slide_img['0'];
													?>
													<?php if ('' != $slide_img ) { ?>
														<img src="<?php echo $slide_img; ?>" class="img-responsive">
													<?php } ?>
												</div><!-- /.image-wrap -->

												<div class="video-content">
													<header class="video-header">
														<h1 class="video-title h4"><?php the_title(); ?></h1><!-- /.video-title -->
													</header><!-- /.video-header -->

													<?php the_content(); ?>
												</div><!-- /.video-content -->
											</article><!-- /.video-post -->
										<?php endwhile; ?>
									</div><!-- /.slides -->
								</div><!-- /.flexslider -->
							</div><!-- /.videos-wrap -->
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.container -->
		</div><!-- /#content -->
		
	<?php endwhile; ?>
</div><!-- /#videos-page-template -->

<?php get_footer(); ?>