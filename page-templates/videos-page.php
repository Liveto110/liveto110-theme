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
								'posts_per_page' => '-1'
							);
							$videos = new WP_Query( $args );
						?>
						<?php if ( $videos->have_posts()) : ?>
							<div id="videos-slider" class="flexslider">														
								<ul class="slides">
									<?php while ( $videos->have_posts()) : $videos->the_post(); ?>
										<li>
											<article <?php post_class( 'video-slide' ); ?>>
												<div class="video-wrapper">
													<?php the_field('video_embed_code'); ?>
												</div><!-- /.video-wrapper -->

												<div class="video-content">
													<header class="video-header">
														<h1 class="video-title h4"><?php the_title(); ?></h1><!-- /.video-title -->
													</header><!-- /.video-header -->

													<div class="video-entry">
														<?php the_content(); ?>
													</div><!-- /.video-entry -->
												</div><!-- /.video-content -->
											</article><!-- /.video-slide -->
										</li>
									<?php endwhile; ?>
								</ul><!-- /.slides -->
							</div><!-- /#videos-slider .flexslider -->

							<div id="videos-carousel" class="flexslider">
								<ul class="slides">
									<?php while ( $videos->have_posts()) : $videos->the_post(); ?>
										<li>
											<?php
												$slide_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'videos-carousel-thumbnail' );
												$slide_img = $slide_img['0'];
											?>
											<img src="<?php echo $slide_img; ?>" class="img-responsive">
										</li>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								</ul>
							</div><!-- /#videos-carousel .flexslider -->
						<?php endif; ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.container -->
		</div><!-- /#content -->
		
	<?php endwhile; ?>
</div><!-- /#videos-page-template -->

<?php get_footer(); ?>