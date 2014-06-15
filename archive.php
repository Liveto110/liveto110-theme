<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LiveTo110 Theme
 */

get_header(); ?>

<div id="custom-archive-template" class="clearfix">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title">
				<?php
					if ( is_category() ) :
						single_cat_title();
					elseif ( is_tag() ) :
						single_tag_title();
					elseif ( is_author() ) :
						printf( __( 'Author: %s', 'liveto110' ), '<span class="vcard">' . get_the_author() . '</span>' );
					elseif ( is_day() ) :
						printf( __( 'Day: %s', 'liveto110' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Month: %s', 'liveto110' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'liveto110' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Year: %s', 'liveto110' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'liveto110' ) ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
						_e( 'Galleries', 'liveto110');
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'liveto110');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
						_e( 'Statuses', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
						_e( 'Audios', 'liveto110' );
					elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
						_e( 'Chats', 'liveto110' );
					else :
						_e( 'Archives', 'liveto110' );
					endif;
				?>
			</h1><!-- /.page-title -->

			<?php
				// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
		</header><!-- /.page-header -->
	</div><!-- /.container -->

	<div class="blog-roll">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="posts-wrap">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php $count = 1; ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php if ($count == 1) { ?>
									<article class="featured-post">
										<?php
											$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-width-slide' );
											$url = $thumb['0'];
										?>
										<?php if ('' != $url ) { ?>
											<div class="img-block" style="background-image: url('<?php echo $url; ?>');"></div>
										<?php } ?>

										<div class="post-content">
											<header class="post-header">
												<h1 class="post-title">
													<a href="<?php the_permalink(); ?>" class="permalink"><?php the_title(); ?></a><!-- /.permalink -->
												</h1><!-- /.post-title -->

												<div class="post-metadata">
													<?php liveto110_posted_on(); ?>
												</div>
											</header><!-- /.post-header -->
										</div><!-- /.post-content -->
									</article><!-- /.featured-post -->
								<?php } ?>

								<?php if ($count != 1) { ?>
									<div class="posts">
										<article <?php post_class(); ?>>
											<?php
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'square-thumbnail' );
												$url = $thumb['0'];
											?>
											<?php if ('' != $url ) { ?>
												<div class="image-wrap">
													<div class="img-block" style="background-image: url('<?php echo $url; ?>');"></div>
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
									</div><!-- /.posts -->
								<?php } ?>
								
								<?php $count++; ?>
							<?php endwhile; ?>

							<?php liveto110_paging_nav(); ?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>
					</div><!-- /.posts-wrap -->
				</div><!-- /.col-sm-8 -->

				<div class="hidden-phone col-sm-4">
					<?php get_sidebar(); ?>
				</div><!-- /.hidden-phone .col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.blog-roll -->
</div><!-- /#custom-archive-template -->

<?php get_footer(); ?>
