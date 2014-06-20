<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package LiveTo110 Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--
	<header class="page-header entry-header">
		<h1 class="page-title entry-title"><?php the_title(); ?></h1>
	</header>--><!-- .entry-header -->

	<div class="entry-content">
        <?php 
            if (has_post_thumbnail()) : 
                the_post_thumbnail();
            endif;
        ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'liveto110' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'liveto110' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
