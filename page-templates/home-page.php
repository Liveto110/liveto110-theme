<?php
/**
 * Template Name: Home Page
 *
 */
global $smof_data;
get_header(); ?>
<!-- ========== INTRO SECTION ========== -->
<div id="intro" class="clearfix">
	<?php
		$args = array(
			'post_type' => 'homeslide',
			'order' => 'ASC'
		);
		$slides = new WP_Query( $args );
	?>
	<?php if ( $slides->have_posts()) : ?>
		<div class="flexslider">
			<ul class="slides">
				<?php while ( $slides->have_posts()) : $slides->the_post(); ?>
					<li>
						<?php if(get_field('slide_layout') == "simple" && get_field('homeslide_link_url') !== '') { ?>
							<a href="<?php the_field('homeslide_link_url'); ?>" target="_blank">
						<?php } ?>
								<article <?php post_class( 'home-slide' ); ?>>
									<?php
										$slide_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homeslide' );
										$url = $slide_image['0'];
									?>
									<div class="image-wrap">
										<div class="img-block" style="background-image: url(<?php echo $url; ?>);"></div>
									</div><!-- /.image-wrap -->

									<div class="content-wrap">
										<div class="container">
											<?php if(get_field('slide_layout') == "simple") { ?>
												<div class="simple-layout">
													<div class="slide-header">
														<h1 class="header-title">Join the</h1><!-- /.header-title -->
														<h1 class="header-subtitle">Live To 110 <span>community</span></h1><!-- /.header-title -->
													</div><!-- /.slide-header -->

													<div class="slide-subheader">
														<h2 class="subheader-title">Start Changing Your Life Today</h2><!-- /.subheader-title -->
													</div><!-- /.slide-subheader -->

													<section class="slide-content">
														<header class="content-header">
															<h3 class="content-title">Content title</h3><!-- /.content-title -->
														</header><!-- /.content-header -->

														<div class="content-entry">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
														</div><!-- /.content-entry -->

														<div class="content-image">
															<img src="<?php echo get_template_directory_uri(); ?>/img/books.png" class="img-responsive" alt="Free Gifts">
														</div><!-- /.content-image -->
													</section><!-- /.slide-content -->
												</div><!-- /.simple-layout -->
											<?php } ?>

											<?php if(get_field('slide_layout') == "complex") { ?>
												<div class="complex-layout">
													<?php if( have_rows('blurbs') ): ?>	
														<div class="row">
															<?php while( have_rows('blurbs') ): the_row();
																// vars
																$blurb_linkurl = get_sub_field('blurb_link_url');
															?>
																<div class="col-xs-4">
																	<article class="blurb">
																		<?php if( $blurb_linkurl ): ?>
																			<a href="<?php echo $blurb_linkurl; ?>" target="_blank">
																				<?php
																					$attachment_id = get_sub_field('blurb_image');
																					$size = "square-thumbnail";
																					$blurb_image = wp_get_attachment_image_src( $attachment_id, $size );
																				?>
																				<?php if( $blurb_image ): ?>
																					<img src="<?php echo $blurb_image[0]; ?>" class="img-responsive">
																				<?php endif; ?>
																			</a>
																		<?php endif; ?>
																	</article><!-- /.blurb -->
																</div><!-- /.col-xs-4 -->
															<?php endwhile; ?>
														</div><!-- /.row -->
													<?php endif; ?>
												</div><!-- /.complex-layout -->
											<?php } ?>
										</div><!-- /.container -->
									</div><!-- /.content-wrap -->
								</article><!-- /.home-slide -->
						<?php if(get_field('slide_layout') == "simple" && get_field('homeslide_link_url') !== '') { ?>
							</a>
						<?php } ?>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</ul><!-- /.slides -->
		</div><!-- /.flexslider -->
	<?php endif; ?>
</div><!-- /#intro -->

<!-- ========== About LiveTo110 SECTION ========== -->
<div id="about-liveto110" class="clearfix">
	<div class="container">
		<?php if ($smof_data['aboutliveto110_title']) { ?>
			<h1 class="section-title text-center"><?php echo $smof_data['aboutliveto110_title']; ?></h1>
		<?php } ?>

		<?php if ($smof_data['aboutliveto110_subtitle']) { ?>
			<h2 class="section-subtitle text-center"><?php echo $smof_data['aboutliveto110_subtitle']; ?></h2>
		<?php } ?>

		<?php while(have_posts()) : the_post(); ?>

			<?php if( have_rows('home_teasers') ): ?>
				<div class="blurbs-wrap">
					<div class="row">
						<?php while( have_rows('home_teasers') ): the_row(); ?>
							<?php
								// vars
								$teaser_icon = get_sub_field('home_teaser_icon');
								$teaser_title = get_sub_field('home_teaser_title');
								$teaser_content = get_sub_field('home_teaser_content');
								$teaser_button_text = get_sub_field('home_teaser_button_text');
								$teaser_button_url = get_sub_field('home_teaser_button_url');
							?>
							<div class="col-sm-6 col-md-3">
								<article class="blurb">
									<header class="blurb-header">
										<?php if( $teaser_icon ): ?>
											<div class="icon-wrap">
												<i class="fa fa-<?php echo $teaser_icon; ?>"></i>
											</div><!-- /.icon-wrap -->
										<?php endif; ?>

										<?php if( $teaser_title ): ?>
											<h1 class="blurb-title"><?php echo $teaser_title; ?></h1><!-- /.blurb-title -->
										<?php endif; ?>
									</header><!-- /.blurb-header -->

									<div class="blurb-entry">
										<?php if( $teaser_title ): ?>
											<p><?php echo $teaser_content; ?></p>
										<?php endif; ?>
									</div><!-- /.blurb-entry -->

									<footer class="blurb-footer">
										<?php if( $teaser_button_url && $teaser_button_text ) : ?>
											<a href="<?php echo $teaser_button_url; ?>" class="read-more-link">
												<span class="btn-text"><?php echo $teaser_button_text; ?></span><!-- /.btn-text -->
												<span class="go-to-icon"><i class="fa fa-angle-right"></i></span><!-- /.goto-icon -->
											</a><!-- /.read-more-link -->
										<?php endif; ?>
									</footer><!-- /.blurb-footer -->
								</article><!-- /.blurb -->
							</div><!-- /.col-sm-6 col-md-3 -->
						<?php endwhile; ?>
					</div><!-- /.row -->
				</div><!-- /.blurbs-wrap -->
			<?php endif; ?>

		<?php endwhile; ?>
	</div><!-- /.container -->
</div><!-- /#about-liveto110 -->

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
				?>

				<?php while ( $special_offers->have_posts() ) : $special_offers->the_post(); ?>
						<div class="col-sm-6">
							<a href="<?php the_permalink(); ?>" class="offer" title="<?php the_title(); ?>">
								<?php
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'special-offer-homepage' );
									$url = $thumb['0'];
								?>
								<img src="<?php echo $url; ?>" class="img-responsive">
							</a><!-- /.offer -->
						</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.offers-wrap -->
</div><!-- /#special-offers -->

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

<?php get_footer(); ?>