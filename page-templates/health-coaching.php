<?php
/**
 * Template Name: Health Coaching
 *
 */
global $smof_data;
get_header(); ?>

<div id="health-coaching-template" class="clearfix">
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php while ( have_posts() ) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="page-header entry-header">
										<h1 class="page-title entry-title"><?php the_title(); ?></h1>
									</header><!-- .entry-header -->

									<div class="rates-wrap">
										<?php
											$left_item_args = array(
												'post_type' => 'product',
												'posts_per_page' => '1',
												'tax_query' => array(
													array(
														'taxonomy' => 'product_cat',
														'field' => 'slug',
														'terms' => 'health-coaching'
													)
												),
												'offset' => '1'
											);
											$right_item_args = array(
												'post_type' => 'product',
												'posts_per_page' => '1',
												'tax_query' => array(
													array(
														'taxonomy' => 'product_cat',
														'field' => 'slug',
														'terms' => 'health-coaching'
													)
												)
											);

											$left_item = new WP_Query( $left_item_args );
											$right_item = new WP_Query( $right_item_args );
										?>

										<div class="row">
											<?php if ( $left_item->have_posts()) : ?>
												<div class="col-sm-6">
													<?php while ( $left_item->have_posts()) : $left_item->the_post(); ?>
														<div class="pricing-table well">
															<div class="table-header">
																<h1 class="table-title text-center"><?php the_title(); ?></h1><!-- /.table-title -->

																<h2 class="price-amount text-center">
																	<span class="text-wrap"><?php echo $product->get_price_html(); ?></span>
																</h2><!-- /.price-amount -->
															</div><!-- /.table-header -->

															<div class="table-content">
																<?php the_excerpt(); ?>
															</div><!-- /.table-content -->

															<div class="table-footer">
																<div class="button-wrap text-center">
																	<?php echo '<a href="' . $product->add_to_cart_url() . '" rel="nofollow" data-product_id="' . $product->id . '" data-product_sku="' . $product->get_sku() . '" class="btn btn-primary">Get Started!</a>'; ?>
																</div><!-- /.button-wrap -->
															</div><!-- /.table-footer -->
														</div><!-- /.pricing-table -->
													<?php endwhile; ?>
													<?php wp_reset_postdata(); ?>
												</div>
											<?php endif; ?>

											<?php if ( $right_item->have_posts()) : ?>
												<div class="col-sm-6">
													<?php while ( $right_item->have_posts()) : $right_item->the_post(); ?>
														<div class="pricing-table well">
															<div class="table-header">
																<h1 class="table-title text-center"><?php the_title(); ?></h1><!-- /.table-title -->

																<h2 class="price-amount text-center">
																	<span class="text-wrap"><?php echo $product->get_price_html(); ?></span>
																</h2><!-- /.price-amount -->
															</div><!-- /.table-header -->

															<div class="table-content">
																<?php the_excerpt(); ?>
															</div><!-- /.table-content -->

															<div class="table-footer">
																<div class="button-wrap text-center">
																	<?php echo '<a href="' . $product->add_to_cart_url() . '" rel="nofollow" data-product_id="' . $product->id . '" data-product_sku="' . $product->get_sku() . '" class="btn btn-primary">Get Started!</a>'; ?>
																</div><!-- /.button-wrap -->
															</div><!-- /.table-footer -->
														</div><!-- /.pricing-table -->
													<?php endwhile; ?>
													<?php wp_reset_postdata(); ?>
												</div>
											<?php endif; ?>
										</div><!-- /.row -->
									</div><!-- /.rates-wrap -->

									<div class="entry-content">
										<?php the_content(); ?>

										<?php
											wp_link_pages( array(
												'before' => '<div class="page-links">' . __( 'Pages:', 'liveto110' ),
												'after'  => '</div>',
											) );
										?>
									</div><!-- .entry-content -->

									<footer class="entry-footer"></footer>
								</article><!-- #post-## -->

							<?php endwhile; // end of the loop. ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- /.col-sm-8 -->

				<div class="hidden-phone col-sm-4">
					<?php get_sidebar(); ?>
				</div><!-- /.hidden-phone .col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#content -->
</div><!-- /#health-coaching-template -->

<?php get_footer(); ?>