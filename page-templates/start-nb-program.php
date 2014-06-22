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

			<nav id="nb-section-anchors" class="section-anchors" role="navigation">
				<ul class="nav nav-pills nav-justified">
					<?php
						// if 'how_it_works' flexible-content has rows of data
						if ( have_rows('how_it_works') ) {
							// loop through the rows of data
							while ( have_rows('how_it_works') ) : the_row();
								if( get_row_layout() == 'how_it_works_nav_link_text' ):
									echo '<li><a href="#how-it-works">';
										the_sub_field('how_it_works_link_text');
									echo '</a></li>';
								endif;
							endwhile;
						}

						// if 'core_components' flexible-content has rows of data
						if ( have_rows('core_components') ) {
							// loop through the rows of data
							while ( have_rows('core_components') ) : the_row();
								if( get_row_layout() == 'core_components_nav_link_text' ):
									echo '<li><a href="#core-components">';
										the_sub_field('core_components_link_text');
									echo '</a></li>';
								endif;
							endwhile;
						}

						// if 'learn' flexible-content has rows of data
						if ( have_rows('learn') ) {
							// loop through the rows of data
							while ( have_rows('learn') ) : the_row();
								if( get_row_layout() == 'learn_nav_link_text' ):
									echo '<li><a href="#learn">';
										the_sub_field('learn_link_text');
									echo '</a></li>';
								endif;
							endwhile;
						}

						// if 'faqs' flexible-content has rows of data
						if ( have_rows('faqs') ) {
							// loop through the rows of data
							while ( have_rows('faqs') ) : the_row();
								if( get_row_layout() == 'faqs_nav_link_text' ):
									echo '<li><a href="#faqs">';
										the_sub_field('faqs_link_text');
									echo '</a></li>';
								endif;
							endwhile;
						}
					?>

					<li><a href="#pricing">Pricing</a></li>
				</ul><!-- /.nav -->
			</nav><!-- /#nb-section-anchors .section-anchors -->

			<div id="nb-page-sections" class="page-sections">				
				<?php if ( have_rows( 'how_it_works')) : ?>
					<section id="how-it-works">
						<?php while ( have_rows( 'how_it_works')) : the_row(); ?>
							<?php if ( get_row_layout() == 'how_it_works_intro' ) : ?>
								<div class="sections-intro">							
									<h2 class="intro-title">
										<?php the_sub_field('how_it_works_intro_title'); ?>
									</h2><!-- /.intro-title -->

									<div class="intro-content">
										<div class="row">
											<div class="col-sm-6">
												<div class="left-content">
													<?php the_sub_field('how_it_works_intro_left_content'); ?>
												</div><!-- /.left-content -->
											</div><!-- /.col-sm-6 -->

											<div class="col-sm-6">
												<div class="right-content">
													<?php the_sub_field('how_it_works_intro_right_content'); ?>
												</div><!-- /.right-content -->
											</div><!-- /.col-sm-6 -->
										</div><!-- /.row -->
									</div><!-- /.intro-content -->
								</div><!-- /.sections-intro -->
							
							<?php elseif ( get_row_layout() == 'how_it_works_intro_video' ) : ?>
								<div class="media-wrap">
									<div class="video-wrapper">
										<?php
											$video_id = get_sub_field('how_it_works_intro_video_url_id');
											$video_url = '//www.youtube.com/embed/' . $video_id;
										?>
										<iframe src="<?php echo $video_url; ?>"></iframe>
									</div><!-- /.video-wrapper -->
								</div><!-- /.media-wrap -->

							<?php elseif ( get_row_layout() == 'how_it_works_section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('how_it_works_title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->

							<?php elseif ( get_row_layout() == 'how_it_works_section_content' ) : ?>
								<div class="section-content">
									<div class="row">
										<div class="col-sm-6">
											<p><?php the_sub_field('how_it_works_left_col_content'); ?></p>
										</div>

										<div class="col-sm-6">
											<p><?php the_sub_field('how_it_works_right_col_content'); ?></p>
										</div>
									</div><!-- /.row -->

									<p><?php the_sub_field('how_it_works_full_width_content'); ?></p>
								</div><!-- /.section-content -->

							<?php elseif ( get_row_layout() == 'how_it_works_section_footer' ) : ?>
								<footer class="section-footer">
									<h4 class="footer-title"><?php the_sub_field('how_it_works_footer_title'); ?></h4><!-- /.footer-title -->

									<aside class="custom-program-design">
										<div class="aside-content">
											<div class="row">
												<div class="col-sm-6">
													<div class="image-wrap">
														<img src="<?php the_sub_field('how_it_works_aside_image'); ?>" alt="What is Hair Mineral Analysis?" class="img-responsive">
													</div><!-- /.image-wrap -->
												</div>

												<div class="col-sm-6">
													<?php the_sub_field('how_it_works_aside_content'); ?>
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
							<?php if ( get_row_layout() == 'core_components_section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('core_components_title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->

							<?php elseif ( get_row_layout() == 'core_components_section_content' ) : ?>
								<div class="section-content">
									<?php if( have_rows('core_components_blurb') ): ?>						
										<div class="row">
											<?php while( have_rows('core_components_blurb') ): the_row();
												// vars
												$blurb_icon = get_sub_field('core_components_blurb_icon');
												$blurb_title = get_sub_field('core_components_blurb_title');
												$blurb_content = get_sub_field('core_components_blurb_content');
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

							<?php elseif ( get_row_layout() == 'core_components_section_footer' ) : ?>
								<footer class="section-footer">
									<article id="pricing" class="starter">
										<header class="starter-header">
											<h1 class="starter-title"><?php the_sub_field('core_components_section_footer_title_text'); ?></h1><!-- /.starter-title -->

											<h2 class="starter-subtitle"><?php the_sub_field('core_components_section_footer_sub_title_text'); ?></h2><!-- /.starter-subtitle -->
										</header><!-- /.starter-header -->

										<div class="row">
											<div class="col-sm-5">
												<?php
													$posts = get_sub_field('core_components_section_footer_pricing_table');

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
																</div><!-- /.table-content -->

																<div class="table-footer">
																	<div class="button-wrap text-center">
																		<a href="<?php the_permalink(); ?>" rel="nofollow" class="btn btn-primary">Buy Now!</a>
																	</div><!-- /.button-wrap -->
																</div><!-- /.table-footer -->
															</div><!-- /.pricing-table -->
														<?php endforeach; ?>
														<?php wp_reset_postdata(); ?>
													<?php endif;
												?>
											</div>

											<div class="col-sm-7">
												<div class="starter-content">
													<?php the_sub_field('core_components_section_footer_footer_content'); ?>
												</div><!-- /.starter-content -->
											</div>
										</div><!-- /.row -->
									</article><!-- /.get-started -->
								</footer><!-- /.section-footer -->
							<?php endif; ?>
						<?php endwhile; ?>
					</section><!-- /#core-components -->
				<?php endif; ?>

				<?php if ( have_rows('learn') )  : ?>
					<section id="learn">
						<?php while ( have_rows('learn') ) : the_row(); ?>
							<?php if ( get_row_layout() == 'learn_section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('learn_title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->
							
							<?php elseif ( get_row_layout() == 'learn_left_content' ) : ?>
								<div class="section-content">
									<div class="row">
										<div class="col-sm-6">
											<h4 class="sub-title"><?php the_sub_field('learn_left_section_title'); ?></h4>

											<?php if( have_rows('learn_left_items') ): ?>
												<div class="articles">
													<ul class="list-unstyled">
														<?php while ( have_rows('learn_left_items') ) : the_row(); ?>
															<li>
																<a href="<?php the_sub_field('learn_left_item_url'); ?>">
																	<?php the_sub_field('learn_left_item_title'); ?>
																</a>
															</li>
														<?php endwhile; ?>
													</ul>
												</div><!-- /.articles -->
											<?php endif; ?>
										</div><!-- /.col-sm-6 -->
								
							<?php elseif ( get_row_layout() == 'learn_right_content' ) : ?>
										<div class="col-sm-6">
											<h4 class="sub-title"><?php the_sub_field('learn_right_section_title'); ?></h4>

											<?php if( have_rows('learn_right_items') ): ?>
												<div class="podcasts">
													<ul class="list-unstyled">
														<?php while ( have_rows('learn_right_items') ) : the_row(); ?>
															<li>
																<a href="<?php the_sub_field('learn_right_item_url'); ?>">
																	<?php the_sub_field('learn_right_item_title'); ?>
																</a>
															</li>
														<?php endwhile; ?>
													</ul>
												</div><!-- /.podcasts -->
											<?php endif; ?>
										</div><!-- /.col-sm-6 -->
									</div><!-- /.row -->
								</div><!-- /.section-content -->

							<?php endif; ?>
						<?php endwhile; ?>
					</section><!-- /#learn -->
				<?php endif; ?>

				<?php if ( have_rows( 'faqs')) : ?>
					<section id="faqs">
						<?php while ( have_rows('faqs') ) : the_row(); ?>
							<?php if ( get_row_layout() == 'faqs_section_title' ) : ?>
								<header class="section-header">
									<h3 class="section-title"><?php the_sub_field('faqs_title_text'); ?></h3><!-- /.section-title -->
								</header><!-- /.section-header -->

							<?php elseif ( get_row_layout() == 'faqs_section_content' ) : ?>
								<div class="section-content">
									<?php if( have_rows('faqs_faq_items') ): ?>
										<div class="panel-group" id="faq-accordion">
											<?php
												$id_number = 1;
												while ( have_rows('faqs_faq_items') ) : the_row(); ?>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<span class="icon-wrap">
																	<i class="fa fa-plus"></i>
																</span><!-- /.icon-wrap -->

																<a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-<?php echo $id_number; ?>"><?php the_sub_field('faqs_faq_items_question'); ?></a>
															</h4>
														</div>
														<div id="faq-<?php echo $id_number; ?>" class="panel-collapse collapse">
															<div class="panel-body">
																<p><?php the_sub_field('faqs_faq_items_answer'); ?></p>
															</div>
														</div>
													</div><!-- /.panel -->
													<?php $id_number++;
												endwhile;
											?>
										</div><!-- /#faq-accordion .panel-group -->
									<?php endif; ?>
								</div><!-- /.section-content -->
							<?php endif; ?>
						<?php endwhile; ?>
					</section><!-- /#faqs -->
				<?php endif; ?>
			</div><!-- /.page-sections -->
		</div><!-- /.container -->

		<div class="custom-bottom-bg"></div>
	</div><!-- /#content -->	
</div><!-- /#start-nb-template -->

<?php get_footer(); ?>