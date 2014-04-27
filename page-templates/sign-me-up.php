<?php
/**
 * Template Name: SignMeUp Page
 *
 */
if (!defined('ABSPATH')) exit;?>
<?php global $smof_data; ?>
<?php get_header(); ?>

<div id="signup-page-template" class="clearfix">
	<?php while( have_posts()) : the_post(); ?>
		<section class="page-masthead clearfix"><?php the_post_thumbnail(); ?></section><!-- /.page-masthead -->

		<section class="page-welcome clearfix">
			<div class="container">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- /.entry-content -->
			</div><!-- /.container -->
		</section><!-- /.page-welcome -->
	<?php endwhile; ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<div class="freebies-wrap">
								<article class="freebie">
									<div class="image-wrap">
										<img src="" alt="Post-Thumbnail / Featured-image">
									</div><!-- /.image-wrap -->

									<div class="content-wrap">
										<header class="entry-header">
											<h4 class="entry-title">Live to 110 by Weighing Less eGuide</h4>
										</header>

										<div class="entry-content">
											<p></p>
										</div><!-- /.entry-content -->
									</div><!-- /.content-wrap -->
								</article><!-- /.freebie -->

								<article class="freebie">
									<div class="image-wrap">
										<img src="" alt="Post-Thumbnail / Featured-image">
									</div><!-- /.image-wrap -->

									<div class="content-wrap">
										<header class="entry-header">
											<h4 class="entry-title">Modern Paleo Diet Email Series</h4>
										</header>

										<div class="entry-content">
											<p></p>
										</div><!-- /.entry-content -->
									</div><!-- /.content-wrap -->
								</article><!-- /.freebie -->

								<article class="freebie">
									<div class="image-wrap">
										<img src="" alt="Post-Thumbnail / Featured-image">
									</div><!-- /.image-wrap -->

									<div class="content-wrap">
										<header class="entry-header">
											<h4 class="entry-title">Survival Guides</h4>
										</header>

										<div class="entry-content">
											<p></p>
										</div><!-- /.entry-content -->
									</div><!-- /.content-wrap -->
								</article><!-- /.freebie -->
							</div><!-- /.freebies-wrap -->
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- /.col-sm-6 -->

				<div class="col-sm-6">
					<?php get_sidebar('signup'); ?>
				</div><!-- /.col-sm-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#content -->
	
</div><!-- /#signup-page-template -->

<?php get_footer(); ?>