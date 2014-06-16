<?php
/**
 * Template Name: Custom Blog
 *
 */
global $smof_data;
get_header(); ?>

<div id="custom-blog-template" class="clearfix">
	<?php while( have_posts()) : the_post(); ?>
		<div class="container">
			<div class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1><!-- /.page-title -->
			</div><!-- /.page-header -->
		</div><!-- /.container -->
	<?php endwhile; ?>

	<div class="blog-roll">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="featured-post-wrap">				
						<?php
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query();
							$wp_query->query('showposts=1');
						?>
						<article class="featured-post">
							<?php while( $wp_query->have_posts()) : $wp_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="permalink">
									<?php
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-width-slide' );
										$url = $thumb['0'];
									?>
									<?php if ('' != $url ) { ?>
										<img src="<?php echo $url; ?>" class="img-responsive">
									<?php } ?>
								</a><!-- /.permalink -->
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</article><!-- /.featured-post -->			
					</div><!-- /.featured-post-wrap -->

					<div class="posts-wrap">
						<?php
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query();
							$wp_query->query('offset=1&showposts=6' . '&paged='.$paged);
						?>
						<?php while( $wp_query->have_posts()) : $wp_query->the_post(); ?>
							<article <?php post_class(); ?>>
								<?php
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'square-thumbnail' );
									$url = $thumb['0'];
								?>
								<?php if ('' != $url ) { ?>
									<div class="image-wrap">
										<img src="<?php echo $url; ?>" class="img-responsive">
									</div>
								<?php } ?>

								<?php if ('' != $url ) { ?>
									<div class="content-wrap">
								<?php } else { ?>
									<div class="fullwidth-content-wrap">
								<?php } ?>
										<header class="post-header">
											<h1 class="post-title">
												<a href="<?php the_permalink(); ?>" title="Read more" class="permalink"><?php the_title(); ?></a><!-- /.permalink -->
											</h1><!-- /.post-title -->
										</header><!-- /.post-header -->

										<div class="entry">
											<?php the_excerpt(); ?>
										</div><!-- /.entry -->
								<?php if ('' != $url ) { ?>
									</div><!-- /.content-wrap -->
								<?php } else { ?>
									</div><!-- /.fullwidth-content-wrap -->
								<?php } ?>
							</article>
						<?php endwhile; ?>
					</div><!-- /.posts-wrap -->

					<?php if( $paged > 1 ) { ?>
						<nav id="nav-posts">
							<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
							<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
						</nav>
					<?php } else { ?>
						<nav id="nav-posts">
							<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						</nav>
					<?php } ?>

					<?php wp_reset_postdata(); ?>
				</div><!-- /.col-sm-8 -->

				<div class="hidden-xs col-sm-4">
					<?php get_sidebar(); ?>
				</div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.blog-roll -->
</div><!-- /#custom-blog-template -->

<?php get_footer(); ?>