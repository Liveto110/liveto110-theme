<?php
/**
 * Template Name: Left Sidebar Page
 *
 */
global $smof_data;
get_header(); ?>

<div id="left-sidebar-template" class="clearfix">
	<?php while( have_posts()) : the_post(); ?>
	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page-masthead' );
		$url = $thumb['0'];
	?>
	<?php if ('' != $url ) { ?>
		<section class="page-masthead clearfix">
			
			<div class="img-block" style="background-image: url('<?php echo $url; ?>');"></div>
		</section><!-- /.page-masthead -->
	<?php } ?>

		<div id="content" class="site-content">
			<div class="container">
				<div class="row">
					<div class="hidden-phone col-sm-4">
						<?php get_sidebar(); ?>
					</div><!-- /.hidden-phone .col-sm-4 -->

					<div class="col-sm-8">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">

								<?php get_template_part( 'content', 'page' ); ?>

							</main><!-- #main -->
						</div><!-- #primary -->
					</div><!-- /.col-sm-8 -->					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#content -->
	<?php endwhile; ?>
</div><!-- /#left-sidebar-template -->

<?php get_footer(); ?>