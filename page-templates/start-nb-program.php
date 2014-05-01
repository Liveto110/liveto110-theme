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

			<hr>

			<div class="page-sections">
				<div class="section-anchors">
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="#">How it works</a></li>
						<li><a href="#">Core Components</a></li>
						<li><a href="#">Learn</a></li>
						<li><a href="#">FAQ's</a></li>
						<li><a href="#">Pricing</a></li>
					</ul><!-- /.nav -->
				</div><!-- /.section-anchors -->

				<hr>

				<div class="sections-intro">
					<h2 class="intro-title">Start a long term detox today and heal your entire body!!!</h2><!-- /.intro-title -->

					<div class="intro-content">
						<div class="row">
							<div class="col-sm-6">
								<div class="left-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><!-- /.left-content -->
							</div>

							<div class="col-sm-6">
								<div class="right-content">
									<p><strong>Lorem ipsum dolor sit</strong><br>amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

									<p><strong>Duis aute irure dolor</strong><br>in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><!-- /.right-content -->
							</div>
						</div><!-- /.row -->
					</div><!-- /.intro-content -->
				</div><!-- /.sections-intro -->

				<hr>

				<section id="how-it-works">
					<div class="media-wrap">Image/Video</div>

					<header class="section-header">
						<h3 class="section-title">How nutritional balancing works</h3><!-- /.section-title -->
					</header><!-- /.section-header -->

					<div class="section-content">
						<div class="row">
							<div class="col-sm-6">
								<p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>

							<div class="col-sm-6">
								<p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div><!-- /.row -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- /.section-content -->

					<footer class="section-footer">
						<h4 class="footer-title">This PROGRAM IS DESIGNED to help you BEGIN AGAIN, IMPROVE YOUR HEALTH &amp; VITALITY and LIVE to 110</h4><!-- /.footer-title -->

						<aside class="custom-program-design">
							<header class="aside-header">
								<h1 class="aside-title">Your Custom Program is designed based upon a hair mineral analysis, which shows:</h1><!-- /.title -->
							</header>

							<div class="aside-content">
								<div class="row">
									<div class="col-sm-6">
										<div class="image-wrap">
											<img src="" alt="What is Hair Mineral Analysis?" class="img-responsive">
										</div><!-- /.image-wrap -->
									</div>

									<div class="col-sm-6">
										<ul class="list-unstyled">
											<li><i class="fa fa-angle-right"></i> Metabolic rate</li>
											<li><i class="fa fa-angle-right"></i> Mineral deficiencies</li>
											<li><i class="fa fa-angle-right"></i> Heavy metal toxicity</li>
											<li><i class="fa fa-angle-right"></i> Adrenal Fatigue</li>
											<li><i class="fa fa-angle-right"></i> Thyroid function</li>
											<li><i class="fa fa-angle-right"></i> Inflammation</li>
											<li class="text-right">And much more!</li>
										</ul>
									</div>
								</div><!-- /.row -->
							</div><!-- /.aside-content -->
						</aside><!-- /.custom-program-design -->
					</footer><!-- /.section-footer -->
				</section><!-- /#how-it-works -->

				<hr>

				<section id="core-components">
					<header class="section-header">
						<h3 class="section-title">Components of nutritional balancing</h3><!-- /.section-title -->
					</header><!-- /.section-header -->

					<div class="section-content">
						<div class="row">
							<div class="col-sm-6">
								<aside class="blurb">
									<header class="blurb-header">
										<h4 class="blurb-title">
											<span class="icon-wrap">
												<i class="fa fa-cutlery"></i>
											</span>
											<span class="text-wrap">Diet</span>
										</h4><!-- /.blurb-title -->
									</header><!-- /.blurb-header -->

									<div class="blurb-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- /.blurb-content -->
								</aside><!-- /.blurb -->
							</div>

							<div class="col-sm-6">
								<aside class="blurb">
									<header class="blurb-header">
										<h4 class="blurb-title">
											<span class="icon-wrap">
												<i class="fa fa-bug"></i>
											</span>
											<span class="text-wrap">Detox</span>
										</h4><!-- /.blurb-title -->
									</header><!-- /.blurb-header -->

									<div class="blurb-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- /.blurb-content -->
								</aside><!-- /.blurb -->
							</div>

							<div class="col-sm-6">
								<aside class="blurb">
									<header class="blurb-header">
										<h4 class="blurb-title">
											<span class="icon-wrap">
												<i class="fa fa-medkit"></i>
											</span>
											<span class="text-wrap">Supplements</span>
										</h4><!-- /.blurb-title -->
									</header><!-- /.blurb-header -->

									<div class="blurb-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- /.blurb-content -->
								</aside><!-- /.blurb -->
							</div>

							<div class="col-sm-6">
								<aside class="blurb">
									<header class="blurb-header">
										<h4 class="blurb-title">
											<span class="icon-wrap">
												<i class="fa fa-puzzle-piece"></i>
											</span>
											<span class="text-wrap">Lifestyle</span>
										</h4><!-- /.blurb-title -->
									</header><!-- /.blurb-header -->

									<div class="blurb-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div><!-- /.blurb-content -->
								</aside><!-- /.blurb -->
							</div>
						</div><!-- /.row -->
					</div><!-- /.section-content -->

					<footer class="section-footer">
						<article class="starter">
							<div class="row">
								<div class="col-sm-5">
									<div class="pricing-table well">
										<div class="table-header">
											<h1 class="table-title text-center">Hair Mineral Analysis</h1><!-- /.table-title -->

											<h2 class="price-amount text-center">
												<i class="fa fa-dollar"></i>300
											</h2><!-- /.price-amount -->
										</div><!-- /.table-header -->

										<div class="table-content">
											<ul class="list-unstyled text-center">
												<li>Increase metabolism</li>
												<li>Correct Nutrient Deficiencies</li>
												<li>Detox Heavy Metals and Chemicals</li>
											</ul>
										</div><!-- /.table-content -->

										<div class="table-footer">
											<div class="button-wrap text-center">
												<button class="btn btn-primary">Get Started!</button>
											</div><!-- /.button-wrap -->
										</div><!-- /.table-footer -->
									</div><!-- /.pricint-table -->
								</div>

								<div class="col-sm-7">
									<header class="starter-header">
										<h1 class="starter-title">Get Started!</h1><!-- /.starter-title -->

										<h2 class="starter-subtitle">What you get!</h2><!-- /.starter-subtitle -->
									</header><!-- /.starter-header -->

									<div class="starter-content">
										<ul class="list-unstyled">
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
				</section><!-- /#core-components -->

				<hr>

				<section id="learn">Learn</section><!-- /#learn -->

				<hr>

				<section id="faqs">FAQ's</section><!-- /#faqs -->

				<hr>

				<section id="pricing">Pricing</section><!-- /#pricing -->

				<hr>
			</div><!-- /.page-sections -->
		</div><!-- /.container -->
	</div><!-- /#content -->	
</div><!-- /#start-nb-template -->

<?php get_footer(); ?>