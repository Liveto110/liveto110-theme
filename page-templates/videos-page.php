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
												<div class="button-wrap">
													<button class="btn btn-primary" data-toggle="modal" data-target="#video-modal-<?php the_ID(); ?>">
														<i class="fa fa-play"></i>
													</button>
												</div><!-- /.button-wrap -->
												
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
												</div><!-- /.video-content -->
											</article><!-- /.video-post -->
										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>
									</div><!-- /.slides -->
								</div><!-- /.flexslider -->
							</div><!-- /.videos-wrap -->
						<?php endif; ?>						
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.container -->
		</div><!-- /#content -->
		
	<?php endwhile; ?>
</div><!-- /#videos-page-template -->

<div class="video-modals">
	<?php
		$args = array(
			'post_type' => 'video',
			'posts_per_page' => -1
		);
		$videos = new WP_Query( $args );
	?>
	<?php if ( $videos->have_posts()) : ?>
		<!-- Modals START -->
		<?php while ( $videos->have_posts()) : $videos->the_post(); ?>
			<div class="modal fade" id="video-modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="video-modal-label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

							<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
						</div>

						<div class="modal-body">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<!-- Modals END -->
	<?php endif; ?>	
</div><!-- /.video-modals -->

<?php get_footer(); ?>