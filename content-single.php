<?php
/**
 * @package LiveTo110 Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php liveto110_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail()) { ?>
		<div class="image-wrap">
			<?php the_post_thumbnail( 'single-post' ); ?>
		</div><!-- /.image-wrap -->
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'liveto110' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			$tag_list = get_the_tag_list( '', __( ', ', 'liveto110' ) );

			if ( '' != $tag_list ) {
				$meta_text = __( 'This article was filed in %1$s.', 'liveto110' );
			}

			printf( $meta_text, $tag_list );
		?>

		<?php edit_post_link( __( 'Edit', 'liveto110' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
