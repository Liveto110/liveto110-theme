<?php
/**
 * Template Name: Start NB Page
 *
 */
global $smof_data;
get_header(); ?>

<div id="start-nb-template" class="clearfix">	
	<div id="content" class="site-content">
		<div class="container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php while( have_posts()) : the_post(); ?>
						<header class="page-header">
							<h1 class="page-title"><?php the_title(); ?></h1><!-- /.page-title -->
						</header><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-6">
								<?php
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post' );
									$url = $thumb['0'];
								?>
								<?php if ('' != $url ) { ?>
									<div class="image-wrap">
										<img src="<?php echo $url; ?>" class="img-responsive" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
									</div><!-- /.image-wrap -->
								<?php } ?>
							</div>

							<div class="col-sm-6">
								<div class="content-wrap">
									<?php the_content(); ?>
								</div><!-- /.content-wrap -->
							</div>
						</div><!-- /.row -->
					<?php endwhile; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<div class="page-sections">
				<nav id="nb-section-anchors" class="section-anchors" role="navigation">
					<ul class="nav nav-pills nav-justified">
						<?php
							// if 'how_it_works' flexible-content has rows of data
							if ( have_rows('how_it_works') ) {
								// loop through the rows of data
								while ( have_rows('how_it_works') ) : the_row();
									if( get_row_layout() == 'nav_link_text' ):
										echo '<li class="active"><a href="#how-it-works">';
											the_sub_field('link_text');
										echo '</a></li>';
									endif;
								endwhile;
							}

							// if 'core_components' flexible-content has rows of data
							if ( have_rows('core_components') ) {
								// loop through the rows of data
								while ( have_rows('core_components') ) : the_row();
									if( get_row_layout() == 'nav_link_text' ):
										echo '<li><a href="#core-components">';
											the_sub_field('link_text');
										echo '</a></li>';
									endif;
								endwhile;
							}

							// if 'learn' flexible-content has rows of data
							if ( have_rows('learn') ) {
								// loop through the rows of data
								while ( have_rows('learn') ) : the_row();
									if( get_row_layout() == 'nav_link_text' ):
										echo '<li><a href="#learn">';
											the_sub_field('link_text');
										echo '</a></li>';
									endif;
								endwhile;
							}

							// if 'faqs' flexible-content has rows of data
							if ( have_rows('faqs') ) {
								// loop through the rows of data
								while ( have_rows('faqs') ) : the_row();
									if( get_row_layout() == 'nav_link_text' ):
										echo '<li><a href="#faqs">';
											the_sub_field('link_text');
										echo '</a></li>';
									endif;
								endwhile;
							}

							// if 'pricing' flexible-content has rows of data
							if ( have_rows('pricing') ) {
								// loop through the rows of data
								while ( have_rows('pricing') ) : the_row();
									if( get_row_layout() == 'nav_link_text' ):
										echo '<li><a href="#pricing">';
											the_sub_field('link_text');
										echo '</a></li>';
									endif;
								endwhile;
							}
						?>
					</ul><!-- /.nav -->
				</nav><!-- /#nb-section-anchors .section-anchors -->
				
				<?php if ( have_rows( 'how_it_works')) : ?>
					<section id="how-it-works">
						<?php while ( have_rows( 'how_it_works')) : the_row(); ?>
							<?php if ( get_row_layout() == 'intro' ) : ?>
								<div class="sections-intro">							
									<h2 class="intro-title">
										<?php the_sub_field('intro_title'); ?>
									</h2><!-- /.intro-title -->

									<div class="intro-content">
										<div class="row">
											<div class="col-sm-6">
												<div class="left-content">
													<?php the_sub_field('left_content'); ?>
												</div><!-- /.left-content -->
											</div><!-- /.col-sm-6 -->

											<div class="col-sm-6">
												<div class="right-content">
													<?php the_sub_field('right_content'); ?>
												</div><!-- /.right-content -->
											</div><!-- /.col-sm-6 -->
										</div><!-- /.row -->
									</div><!-- /.intro-content -->
								</div><!-- /.sections-intro -->
							
							<?php elseif ( get_row_layout() == 'video' ) : ?>
								<div class="media-wrap">
									<div class="video-wrapper">
										<?php
											$video_id = get_sub_field('video_url_id');
											$video_url = '//www.youtube.com/embed/' . $video_id;
										?>
										<iframe src="<?php echo $video_url; ?>"></iframe>
									</div><!-- /.video-wrapper -->
								</div><!-- /.media-wrap -->

							<?php elseif ( get_row_layout() == 'section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->

							<?php elseif ( get_row_layout() == 'section_content' ) : ?>
								<div class="section-content">
									<div class="row">
										<div class="col-sm-6">
											<p><?php the_sub_field('left_col_content'); ?></p>
										</div>

										<div class="col-sm-6">
											<p><?php the_sub_field('right_col_content'); ?></p>
										</div>
									</div><!-- /.row -->

									<p><?php the_sub_field('full_width_content'); ?></p>
								</div><!-- /.section-content -->

							<?php elseif ( get_row_layout() == 'section_footer' ) : ?>
								<footer class="section-footer">
									<h4 class="footer-title"><?php the_sub_field('footer_title'); ?></h4><!-- /.footer-title -->

									<aside class="custom-program-design">
										<header class="aside-header">
											<h1 class="aside-title"><?php the_sub_field('aside_title'); ?></h1><!-- /.title -->
										</header>

										<div class="aside-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="image-wrap">
														<img src="<?php the_sub_field('aside_image'); ?>" alt="What is Hair Mineral Analysis?" class="img-responsive">
													</div><!-- /.image-wrap -->
												</div>

												<div class="col-sm-6">
													<?php the_sub_field('aside_content'); ?>
												</div>
											</div><!-- /.row -->
										</div><!-- /.aside-content -->
									</aside><!-- /.custom-program-design -->
								</footer><!-- /.section-footer -->
							<?php endif; ?>
						<?php endwhile; ?>
					</section><!-- /#how-it-works -->
				<?php endif; ?>

				<?php if ( have_rows( 'core_components')) : ?>
					<section id="core-components">
						<?php while ( have_rows( 'core_components')) : the_row(); ?>
							<?php if ( get_row_layout() == 'section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->

							<?php elseif ( get_row_layout() == 'section_content' ) : ?>
								<div class="section-content">
									<?php if( have_rows('blurb') ): ?>						
										<div class="row">
											<?php while( have_rows('blurb') ): the_row();
												// vars
												$blurb_icon = get_sub_field('blurb_icon');
												$blurb_title = get_sub_field('blurb_title');
												$blurb_content = get_sub_field('blurb_content');
											?>

												<div class="col-sm-6">
													<aside class="blurb">
														<header class="blurb-header">
															<h4 class="blurb-title">
																<?php if( $blurb_icon ): ?>
																	<span class="icon-wrap">
																		<i class="fa fa-<?php echo $blurb_icon; ?>"></i>
																	</span>
																<?php endif; ?>

																<?php if( $blurb_title ): ?>
																	<span class="text-wrap">
																		<?php echo $blurb_title; ?>
																	</span>
																<?php endif; ?>
															</h4><!-- /.blurb-title -->
														</header><!-- /.blurb-header -->

														<div class="blurb-content">
															<?php if( $blurb_content ): ?>
																<p><?php echo $blurb_content; ?></p>
															<?php endif; ?>
														</div><!-- /.blurb-content -->
													</aside><!-- /.blurb -->
												</div>
											<?php endwhile; ?>
										</div><!-- /.row -->
									<?php endif; ?>
								</div><!-- /.section-content -->

							<?php elseif ( get_row_layout() == 'section_footer' ) : ?>
								<footer class="section-footer">
									<article class="starter">
										<div class="row">
											<div class="col-sm-5">
												<?php
													$posts = get_sub_field('pricing_table');

													if( $posts ):

														foreach( $posts as $post):
															setup_postdata($post); ?>
															<div class="pricing-table well">
																<div class="table-header">
																	<h1 class="table-title text-center"><?php the_title(); ?></h1><!-- /.table-title -->

																	<h2 class="price-amount text-center">
																		<span class="text-wrap"><?php echo $product->get_price_html(); ?></span>
																	</h2><!-- /.price-amount -->
																</div><!-- /.table-header -->

																<div class="table-content">
																	<?php the_excerpt(); ?>
																	<!-- <ul class="list-unstyled text-center">
																		<li>Increase metabolism</li>
																		<li>Correct Nutrient Deficiencies</li>
																		<li>Detox Heavy Metals and Chemicals</li>
																	</ul> -->
																</div><!-- /.table-content -->

																<div class="table-footer">
																	<div class="button-wrap text-center">
																		<?php echo '<a href="' . $product->add_to_cart_url() . '" rel="nofollow" data-product_id="' . $product->id . '" data-product_sku="' . $product->get_sku() . '" class="btn btn-primary">Get Started!</a>'; ?>
																	</div><!-- /.button-wrap -->
																</div><!-- /.table-footer -->
															</div><!-- /.pricing-table -->
														<?php endforeach; ?>
														<?php wp_reset_postdata(); ?>
													<?php endif;
												?>
											</div>

											<div class="col-sm-7">
												<header class="starter-header">
													<h1 class="starter-title"><?php the_sub_field('title_text'); ?></h1><!-- /.starter-title -->

													<h2 class="starter-subtitle"><?php the_sub_field('sub_title_text'); ?></h2><!-- /.starter-subtitle -->
												</header><!-- /.starter-header -->

												<div class="starter-content">
													<?php the_sub_field('footer_content'); ?>
													<ul>
														<li><i class="fa fa-angle-right"></i> 1.5 hours of health coaching</li>
														<li><i class="fa fa-angle-right"></i> Interpretation of your hair mineral analysis</li>
														<li><i class="fa fa-angle-right"></i> 17-page interpretive report of your hair mineral analysis</li>
														<li><i class="fa fa-angle-right"></i> Diet recommendations</li>
														<li><i class="fa fa-angle-right"></i> Customized supplement recommendations</li>
														<li><i class="fa fa-angle-right"></i> Lifestyle recommendations</li>
														<li><i class="fa fa-angle-right"></i> Unlimited email support until your next hair test</li>
													</ul>
												</div><!-- /.starter-content -->
											</div>
										</div><!-- /.row -->
									</article><!-- /.get-started -->
								</footer><!-- /.section-footer -->
							<?php endif; ?>
						<?php endwhile; ?>
					</section><!-- /#core-components -->
				<?php endif; ?>

				<?php if ( have_rows( 'learn')) : ?>
					<section id="learn">
						<header class="section-header">
							<h3 class="section-title">Learn about how nutritional balancing works</h3><!-- /.section-title -->
						</header><!-- /.section-header -->

						<div class="section-content">
							<div class="row">
								<div class="col-sm-6">
									<div class="articles">
										<h4 class="sub-title">Articles</h4>
										<ul class="list-unstyled">
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
											<li><a href="#">Article Title...</a></li>
										</ul>
									</div><!-- /.articles -->
								</div>

								<div class="col-sm-6">
									<div class="podcasts">
										<h4 class="sub-title">Podcasts</h4>
										<ul class="list-unstyled">
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
											<li><a hhref="#">Podcast Title...</a></li>
										</ul>
									</div><!-- /.podcasts -->
								</div>
							</div><!-- /.row -->
						</div><!-- /.section-content -->

						<footer class="section-footer">
							<aside>
								<header>
									<h4>Dr. Lawrence Wilson's Website</h4>
								</header>

								<div class="entry">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div><!-- /.entry -->
							</aside>
						</footer><!-- /.section-footer -->
					</section><!-- /#learn -->
				<?php endif; ?>

				<?php if ( have_rows( 'faqs')) : ?>
					<section id="faqs">
						<header class="section-header">
							<h3 class="section-title">FAQ</h3><!-- /.section-title -->
						</header><!-- /.section-header -->

						<div class="section-content">
							<div class="panel-group" id="faq-accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<span class="icon-wrap">
												<i class="fa fa-plus-circle"></i>
											</span><!-- /.icon-wrap -->

											<a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-1">Is this a question?</a>
										</h4>
									</div>
									<div id="faq-1" class="panel-collapse collapse">
										<div class="panel-body">
											<p><strong>Yes!</strong> It is is a question!</p>
										</div>
									</div>
								</div><!-- /.apnel -->

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<span class="icon-wrap">
												<i class="fa fa-plus-circle"></i>
											</span><!-- /.icon-wrap -->
											
											<a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-2">Is this a question as well?</a>
										</h4>
									</div>
									<div id="faq-2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>I this this too is a question. What do you think?</p>
										</div>
									</div>
								</div><!-- /.panel -->
							</div><!-- /#faq-accordion .panel-group -->
						</div><!-- /.section-content -->
					</section><!-- /#faqs -->
				<?php endif; ?>

				<?php if ( have_rows( 'pricing')) : ?>
					<section id="pricing">
						<header class="section-header">
							<h3 class="section-title">Pricing</h3><!-- /.section-title -->
						</header><!-- /.section-header -->

						<div class="section-content"></div><!-- /.section-content -->
					</section><!-- /#pricing -->
				<?php endif; ?>
			</div><!-- /.page-sections -->
		</div><!-- /.container -->
	</div><!-- /#content -->	
</div><!-- /#start-nb-template -->

<?php get_footer(); ?>