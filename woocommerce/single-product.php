<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<?php
	/**
	 * woocommerce_before_main_content hook
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
?>

<div id="content" class="site-content">
	<div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php global $post; echo get_the_title($post->ID); ?></h1>
        </header>
		<div class="row">
			<div class="col-sm-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php wc_get_template_part( 'content', 'single-product' ); ?>
						<?php endwhile; // end of the loop. ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- /.col-sm-8 -->

			<div class="hidden-phone col-sm-4">
				<?php get_sidebar( 'shop' ); ?>
			</div><!-- /.hidden-phone .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php
	/**
	 * woocommerce_after_main_content hook
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>

<?php get_footer(); ?>