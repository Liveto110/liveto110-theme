<?php
/**
 * Template Name: SignMeUp Page
 *
 */
global $smof_data;
get_header(); ?>

<div id="signup-page-template" class="clearfix">
	<?php while( have_posts()) : the_post(); ?>
		<div class="page-masthead clearfix">
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page-masthead' );
				$url = $thumb['0'];
			?>
			<div class="img-block" style="background-image: url('<?php echo $url; ?>');"></div>

			<section class="overlaid-content">
				<div class="container">
					<header class="section-header">
						<h1 class="section-title"><?php the_field('title'); ?></h1>
						<h2 class="section-subtitle"><?php the_field('subtitle'); ?></h2>
					</header><!-- /.section-header -->

					<div class="section-content">
						<h3 class="title"><?php the_field('sub-subtitle'); ?></h3><!-- /.title -->
						<?php the_field('short_description'); ?>
					</div><!-- /.section-content -->

					<div class="graphics-wrap">
						<div class="left-object">
							<img src="<?php the_field('left_image'); ?>" class="img-responsive">
						</div>
						<div class="right-object">
							<img src="<?php the_field('right_image'); ?>" class="img-responsive">
						</div>
					</div><!-- /.graphics-wrap -->
				</div><!-- /.container -->
			</section><!-- /.overlaid-content -->			
		</div><!-- /.page-masthead -->

		<section class="page-welcome clearfix">
			<div class="container">
				<div class="entry-content">
					<?php the_field('welcome_text'); ?>
				</div><!-- /.entry-content -->
			</div><!-- /.container -->
		</section><!-- /.page-welcome -->
	<?php endwhile; ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-7 col-lg-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php
								$args = array(
									'post_type' => 'freebies',
									'tax_query' => array(
										array(
											'taxonomy' => 'freebie-type',
											'field' => 'slug',
											'terms' => 'signup-freebie'
										)
									),
									'posts_per_page' => 3
								);
								$freebies = new WP_Query( $args );
							?>
							<?php if ( $freebies->have_posts()) : ?>
								<div class="freebies-wrap">
									<?php while ( $freebies->have_posts()) : $freebies->the_post(); ?>
										<article class="freebie">
											<div class="row">
												<div class="col-xs-3">
													<div class="image-wrap">
														<?php
															$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'freebie-signup' );
															$url = $thumb['0'];
														?>
														<img src="<?php echo $url; ?>" class="img-responsive" alt="Featured-image">
													</div><!-- /.image-wrap -->
												</div>

												<div class="col-xs-9">
													<div class="content-wrap">
														<header class="entry-header">
															<h4 class="entry-title"><?php the_title(); ?></h4>
														</header>

														<div class="entry-content">
															<?php the_content(); ?>
														</div><!-- /.entry-content -->
													</div><!-- /.content-wrap -->
												</div>
											</div><!-- /.row -->
										</article><!-- /.freebie -->
									<?php endwhile; ?>
								</div><!-- /.freebies-wrap -->
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- /.col-sm-6 -->

				<div class="col-sm-6 col-md-5 col-lg-4">
					<?php get_sidebar('signup'); ?>
				</div><!-- /.col-sm-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#content -->
	
</div><!-- /#signup-page-template -->

<?php get_footer(); ?>