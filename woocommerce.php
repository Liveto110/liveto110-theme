<?php
/**
 * The template for displaying all woocommerce pages.
 *
 * @package LiveTo110 Theme
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php global $post; echo get_the_title($post->ID); ?></h1>
        </header>
		<div class="row">
			<div class="col-sm-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php woocommerce_content(); ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone col-sm-4">
				<?php 
                    if (is_page( 'Shop' ) || is_page( 'Checkout' ) || is_page( 'Cart' )) :
                        get_sidebar( 'shop' ); 
                    else :
                        get_sidebar();
                    endif;
                ?>
			</div><!-- /.hidden-phone .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>
