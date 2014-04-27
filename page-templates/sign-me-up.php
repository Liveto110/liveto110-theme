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

		<section class="page-welcome clearfix"><?php the_content(); ?></section><!-- /.page-welcome -->
	<?php endwhile; ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<div class="freebies-wrap">
								<ul>
									<li>Freebie 1</li>
									<li>Freebie 2</li>
									<li>Freebie 3</li>
								</ul>
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