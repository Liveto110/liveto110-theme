<?php
/**
 * Template Name: Home Page
 *
 */
get_header(); ?>

<div id="intro" class="clearfix">
	<?php putRevSlider( "HomePageSlider" ) ?>
</div><!-- /#intro -->

<div id="about-liveto110" class="clearfix">
	<div class="container">
		<h1 class="section-title text-center">About Live To 110</h1>
		<h2 class="section-subtitle text-center">Wendy is dedicated to helping you live a long, healthy life. Let's Get Started!</h2>

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
										<i class="fa fa-leaf"></i>
									</div><!-- /.icon-wrap -->
								</header><!-- /.blurb-header -->

								<div class="blurb-entry">
									<p>
										<?php
											$content = get_the_content();
											$trimmed_content = wp_trim_words( $content, 10, '&hellip;' );
											echo $trimmed_content;
										?>
									</p>
								</div><!-- /.blurb-entry -->

								<footer class="blurb-footer">
									<a href="<?php echo get_permalink(); ?>" class="read-more-link">
										<span class="btn-text">Button Text</span><!-- /.btn-text -->
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

<div id="special-offers" class="clearfix">
	<h1 class="section-title text-center">Special Offers</h1>

	<div class="offers-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<a href="#" class="offer">
						<img src="<?php echo get_template_directory_uri() . '/img/special-offers/offer-1.jpg'; ?>" class="img-responsive">
					</a><!-- /.offer -->
				</div>

				<div class="col-sm-6">
					<a href="#" class="offer">
						<img src="<?php echo get_template_directory_uri() . '/img/special-offers/offer-2.jpg'; ?>" class="img-responsive">
					</a><!-- /.offer -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.offers-wrap -->
</div><!-- /#special-offers -->

<div id="latest-articles" class="clearfix">
	<div class="container">
		<h1 class="section-title text-center">Recent Posts</h1>

		<div class="posts-wrap">
			<div class="row">
				<div class="col-sm-4">
					<article class="post article-post">
						<?php
							$args = array(
								'category_name' => 'blog-and-podcast',
								'post_type' => 'post',
								'posts_per_page' => 1
							);
							$articles = new WP_Query( $args );

							while ( $articles->have_posts() ) : $articles->the_post(); ?>
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
									<p>
										<?php
											$content = get_the_content();
											$trimmed_content = wp_trim_words( $content, 10, '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>' );
											echo $trimmed_content;
										?>
									</p>
								</div><!-- /.entry -->

								<footer class="post-footer">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/articles/" class="read-more-link btn btn-primary">More Articles <i class="fa fa-fw fa-angle-right"></i></a>
								</footer><!-- /.post-footer -->
							<?php endwhile;
							wp_reset_postdata();
						?>
					</article><!-- /.post .article-post -->
				</div>

				<div class="col-sm-4">
					<article class="post podcast-post">
						<?php
							$args2 = array(
								'category_name' => 'podcast',
								'post_type' => 'post',
								'posts_per_page' => 1
							);
							$podcasts = new WP_Query( $args2 );

							while( $podcasts->have_posts() ) : $podcasts->the_post(); ?>
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
									<p>
										<?php
											$content = get_the_content();
											$trimmed_content = wp_trim_words( $content, 10, '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>' );
											echo $trimmed_content;
										?>
									</p>
								</div><!-- /.entry -->

								<footer class="post-footer">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/podcasts/" class="read-more-link btn btn-primary">More Podcasts <i class="fa fa-fw fa-angle-right"></i></a>
								</footer><!-- /.post-footer -->
							<?php endwhile;
							wp_reset_postdata();
						?>
					</article><!-- /.post .podcast-post -->
				</div>

				<div class="col-sm-4">
					<article class="post recipe-post">
						<?php
							$args3 = array(
								'category_name' => 'recipes',
								'post_type' => 'post',
								'posts_per_page' => 1
							);
							$recipes = new WP_Query( $args3 );

							while( $recipes->have_posts() ) : $recipes->the_post(); ?>
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
									<p>
										<?php
											$content = get_the_content();
											$trimmed_content = wp_trim_words( $content, 10, '<a class="read-more-link" href="'. get_permalink() .'"><i class="fa fa-angle-right"></i> More</a>' );
											echo $trimmed_content;
										?>
									</p>
								</div><!-- /.entry -->

								<footer class="post-footer">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/recipes/" class="read-more-link btn btn-primary">More Recipes <i class="fa fa-fw fa-angle-right"></i></a>
								</footer><!-- /.post-footer -->
							<?php endwhile;
							wp_reset_postdata();
						?>
					</article><!-- /.post .recipe-post -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.posts-wrap -->
	</div><!-- /.container -->
</div><!-- /#latest-articles -->

<div id="signup-section" class="clearfix">
	<div class="signup-wrapper">
		<div class="container">
			<h1 class="section-title text-center">Join the Live to 110 community</h1>	

			<article class="signup-form">
				<h2 class="section-subtitle text-center">Start changing your life today!</h2>
				<header class="form-header">
					<h1 class="form-title text-center">Sign up to receive:</h1>
					<h2 class="form-subtitle text-center">
						Live to 110 by Weighing Less eGuide
						<br>
						+ The Modern Paleo Diet email series
						<br>
						+ Modern Paleo Survival Guides
						<br>
						+ email updates
					</h2><!-- /.form-subtitle -->
				</header><!-- /.form-header -->

				<div class="form-wrap">
					<form role="form">
							<label class="sr-only">Email</label>
							<input type="email" class="form-control" placeholder="Your Email">

						<button class="btn btn-primary">Join</button>
					</form>
				</div><!-- /.form-wrap -->
			</article><!-- /.signup-form -->
		</div><!-- /.container -->
	</div><!-- /.signup-wrapper -->
</div><!-- /#signup-section -->

<?php get_footer(); ?>