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
						<div id="youtubevideo-carousel">
							<div class="flexslider">
								<ul class="slides">
									<?php
										$args = array(
											'post_type' => 'youtubevideo-post',
											'posts_per_page' => 9
										);
										$youtubevideos = new WP_Query( $args );
									?>

									<?php while ( $youtubevideos->have_posts() ) : $youtubevideos->the_post(); ?>

										<li>
											<?php get_template_part( 'content', 'youtubevideo' ); ?>
										</li>

									<?php endwhile; // end of the loop. ?>
									<?php wp_reset_postdata(); ?>
								</ul><!-- /.slides -->
							</div><!-- /.flexslider -->
						</div><!-- /#youtubevideo-carousel -->
					</main><!-- #main -->

				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone hidden-tablet col-sm-4">
				<div id="youtubevideo-sidebar" class="widget-area" role="complementary">
					<ul class="list-unstyled">
						<?php
							$args = array(
								'post_type' => 'youtubevideo-post',
								'posts_per_page' => -1,
								// 'offset' => 9
							);
							$youtubevideos = new WP_Query( $args );
						?>
						<?php while ( $youtubevideos->have_posts() ) : $youtubevideos->the_post(); ?>
							
								<li>
									<h5 class="video-title"><a href="#"><?php the_title(); ?></a></h5>
									<div class="video-container">
										<?php the_content(); ?>
									</div><!-- /.video-container -->
								</li>
							
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_postdata(); ?>
					</ul>
				</div>
			</div><!-- /.hidden-phone .hidden-tablet .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>