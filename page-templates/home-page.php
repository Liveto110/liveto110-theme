<?php
/**
 * Template Name: Home Page
 *
 */
global $smof_data;
get_header(); ?>

<?php $smof_data['homepage_blocks'];
foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
	switch ($block) {
		case 'Intro' :
			?>
			<!-- ========== INTRO SECTION ========== -->
			<div id="intro" class="clearfix">
				<?php if ( function_exists( 'putRevSlider' ) ) {
					putRevSlider( $smof_data['hp_slider_id'] );
				} ?>
			</div><!-- /#intro -->
			<?php break;
		case 'About LiveTo110' :
			?>
			<!-- ========== About LiveTo110 SECTION ========== -->
			<div id="about-liveto110" class="clearfix">
				<div class="container">
					<?php if ($smof_data['aboutliveto110_title']) { ?>
						<h1 class="section-title text-center"><?php echo $smof_data['aboutliveto110_title']; ?></h1>
					<?php } ?>
					<?php if ($smof_data['aboutliveto110_subtitle']) { ?>
						<h2 class="section-subtitle text-center"><?php echo $smof_data['aboutliveto110_subtitle']; ?></h2>
					<?php } ?>

					<div class="blurbs-wrap">
						<div class="row">
							<?php
								$args = array(
									'post_type' => 'service-post',
									'posts_per_page' => 4
								);
								$service_posts = new WP_Query( $args );

								while ( $service_posts->have_posts() ) : $service_posts->the_post(); ?>
									<div class="col-sm-6 col-md-3">
										<article class="blurb">
											<header class="blurb-header">
												<h1 class="blurb-title"><?php the_title(); ?></h1><!-- /.blurb-title -->

												<div class="icon-wrap">
													<i class="fa <?php the_field('field_53580a1df276b', get_the_ID()); ?>"></i>
												</div><!-- /.icon-wrap -->
											</header><!-- /.blurb-header -->

											<div class="blurb-entry">
												<p>
													<?php
														$content = get_the_content();
														$trimmed_content = wp_trim_words( $content, 20, '&hellip;' );
														echo $trimmed_content;
													?>
												</p>
											</div><!-- /.blurb-entry -->

											<footer class="blurb-footer">
												<a href="<?php the_permalink(); ?>" class="read-more-link">
													<span class="btn-text"><?php the_field( "field_53569c497bf1d", get_the_ID() ); ?></span><!-- /.btn-text -->
													<span class="go-to-icon"><i class="fa fa-angle-right"></i></span><!-- /.goto-icon -->
												</a><!-- /.read-more-link -->
											</footer><!-- /.blurb-footer -->
										</article><!-- /.blurb -->
									</div>
								<?php endwhile;
								wp_reset_postdata();
							?>
						</div><!-- /.row -->
					</div><!-- /.blurbs-wrap -->
				</div><!-- /.container -->
			</div><!-- /#about-liveto110 -->
			<?php break;
		case 'Special Offers' :
			?>
			<!-- ========== SPECIAL OFFERS SECTION ========== -->
			<div id="special-offers" class="clearfix">
				<?php if ($smof_data['specialoffers_title']) { ?>
					<h1 class="section-title text-center"><?php echo $smof_data['specialoffers_title']; ?></h1>
				<?php } ?>

				<div class="offers-wrap">
					<div class="container">
						<div class="row">
							<?php
								$args = array(
									'category_name' => 'special-offer',
									'post_type' => 'post',
									'posts_per_page' => $smof_data['specialoffers_totalcount']
								);
								$special_offers = new WP_Query( $args );

								while ( $special_offers->have_posts() ) : $special_offers->the_post(); ?>
									<div class="col-sm-6">
										<a href="<?php the_permalink(); ?>" class="offer" title="<?php the_title(); ?>">
											<?php
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'special-offer-homepage' );
												$url = $thumb['0'];
											?>
											<img src="<?php echo $url; ?>" class="img-responsive">
										</a><!-- /.offer -->
									</div>
								<?php
								endwhile;
								wp_reset_postdata();
							?>
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.offers-wrap -->
			</div><!-- /#special-offers -->
			<?php break;
		case 'Recent Posts' :
			?>
			<!-- ========== RECENT POSTS OFFERS SECTION ========== -->
			<div id="latest-articles" class="clearfix">
				<div class="container">
					<?php if ($smof_data['recentposts_title']) { ?>
						<h1 class="section-title text-center"><?php echo $smof_data['recentposts_title']; ?></h1>
					<?php } ?>

					<div class="posts-wrap">
						<div class="row">
							<?php
								$podcasts_cat_id = get_cat_ID('podcast');
								$recipes_cat_id = get_cat_ID('recipes');

								$article_args = array(
									'category__not_in' => array($podcasts_cat_id, $recipes_cat_id),
									'post_type' => 'post',
									'posts_per_page' => 1
								);
								
								$podcast_args = array(
									'category_name' => 'podcast',
									'post_type' => 'post',
									'posts_per_page' => 1
								);
								
								$recipe_args = array(
									'category_name' => 'recipes',
									'post_type' => 'post',
									'posts_per_page' => 1
								);
								
								$articles = new WP_Query( $article_args );
								$podcasts = new WP_Query( $podcast_args );
								$recipes = new WP_Query( $recipe_args );
							?>

							<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
								<div class="col-sm-4">
									<article class="post article-post">
										<header class="post-header">
											<div class="icon-wrap text-center">
												<i class="fa fa-file-o article-icon"></i>
											</div><!-- /.icon-wrap -->

											<h1 class="post-title text-center"><?php the_title(); ?></h1><!-- /.post-title -->
										</header><!-- /.post-header -->

										<div class="image-wrap">
											<?php
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
												$url = $thumb['0'];
											?>
											<img src="<?php echo $url; ?>" class="img-responsive" title="<?php the_title(); ?>">
										</div><!-- /.image-wrap -->

										<div class="entry">
											<?php
												global $more;
												$more = 0;
												the_content( '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>', true ); 
											?>
										</div><!-- /.entry -->

										<footer class="post-footer">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/blog-and-podcast/" class="read-more-link btn btn-primary">More Articles <i class="fa fa-fw fa-angle-right"></i></a>
										</footer><!-- /.post-footer -->
									</article><!-- /.post .article-post -->
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

							<?php while( $podcasts->have_posts() ) : $podcasts->the_post(); ?>
								<div class="col-sm-4">
									<article class="post podcast-post">
										<header class="post-header">
											<div class="icon-wrap text-center">
												<i class="fa fa-headphones podcast-icon"></i>
											</div><!-- /.icon-wrap -->
											
											<h1 class="post-title text-center"><?php the_title(); ?></h1><!-- /.post-title -->
										</header><!-- /.post-header -->

										<div class="image-wrap">
											<?php
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
												$url = $thumb['0'];
											?>
											<img src="<?php echo $url; ?>" class="img-responsive" title="<?php the_title(); ?>">
										</div><!-- /.image-wrap -->

										<div class="entry">
											<?php
												global $more;
												$more = 0;
												the_content( '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>', true ); 
											?>
										</div><!-- /.entry -->

										<footer class="post-footer">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/podcast/" class="read-more-link btn btn-primary">More Podcasts <i class="fa fa-fw fa-angle-right"></i></a>
										</footer><!-- /.post-footer -->
									</article><!-- /.post .podcast-post -->
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

							<?php while( $recipes->have_posts() ) : $recipes->the_post(); ?>
								<div class="col-sm-4">
									<article class="post recipe-post">
										<header class="post-header">
											<div class="icon-wrap text-center">
												<i class="fa fa-cutlery recipe-icon"></i>
											</div><!-- /.icon-wrap -->
											
											<h1 class="post-title text-center"><?php the_title(); ?></h1><!-- /.post-title -->
										</header><!-- /.post-header -->

										<div class="image-wrap">
											<?php
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
												$url = $thumb['0'];
											?>
											<img src="<?php echo $url; ?>" class="img-responsive" title="<?php the_title(); ?>">
										</div><!-- /.image-wrap -->

										<div class="entry">
											<?php
												global $more;
												$more = 0;
												the_content( '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>', true ); 
											?>
										</div><!-- /.entry -->

										<footer class="post-footer">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/recipes/" class="read-more-link btn btn-primary">More Recipes <i class="fa fa-fw fa-angle-right"></i></a>
										</footer><!-- /.post-footer -->
									</article><!-- /.post .recipe-post -->
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div><!-- /.row -->
					</div><!-- /.posts-wrap -->
				</div><!-- /.container -->
			</div><!-- /#latest-articles -->
			<?php break;
		default :
			break;
	}
}
?>

<?php get_footer(); ?>