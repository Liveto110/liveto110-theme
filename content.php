<?php
/**
 * @package LiveTo110 Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( '' !== has_post_thumbnail('small')) : ?>
			<?php //the_post_thumbnail(); ?>
		<?php $wrapper_class = 'floated' ?>
	<?php else : ?>
		<?php $wrapper_class = 'unfloated' ?>
	<?php endif; ?>

	<div class="content-wrap <?php echo $wrapper_class; ?>">
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

					edit_post_link( __( 'Edit', 'liveto110' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div><!-- /.content-wrap -->
</article><!-- #post-## -->
