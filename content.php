<?php
/**
 * @package LiveTo110 Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<?php if ('' == has_post_thumbnail()) { ?>
			<?php $wrapper_class = 'col-xs-12'; ?>
		<?php } else { ?>
			<div class="col-xs-4">
				<div class="image-wrap">
					<?php
						the_post_thumbnail('blog-index');
						$wrapper_class = 'col-xs-8';
					?>
				</div><!-- /.image-wrap -->
			</div>
		<?php } ?>

		<div class="<?php echo $wrapper_class; ?>">
			<div class="content-wrap">
				<header class="entry-header">
					<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
						endif;
					?>

					<div class="entry-meta">
						<?php
							if ( 'post' == get_post_type() )
								liveto110_posted_on();
						?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</div><!-- /.content-wrap -->
		</div>
	</div><!-- /.row -->
</article><!-- #post-## -->