<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package LiveTo110 Theme
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<aside id="search" class="widget widget_search">
			<div class="widget-content">
				<?php get_search_form(); ?>
			</div><!-- /.widget-content -->
		</aside>
		
		<aside id="categories-widget" class="widget widget_categories">
			<header class="widget-header">
				<h1 class="widget-title">Categories</h1>
			</header>

			<div class="widget-content">
				<?php
					$categories = get_categories('orderby=count&number=10');
					sort($categories);
					echo '<ul>';
					foreach ($categories as $category) { ?>
						<li><a href="<?php echo get_category_link( $category->term_id ); ?>" title="View all posts in <?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
					<?php }
					echo '</ul>';
				?>
			</div>
		</aside><!-- #categories-widget -->

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<div class="widget-content">
					<?php get_search_form(); ?>
				</div><!-- /.widget-content -->
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'liveto110' ); ?></h1>

				<div class="widget-content">
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div><!-- /.widget-content -->
			</aside>

			<aside id="meta" class="widget">

				<h1 class="widget-title"><?php _e( 'Meta', 'liveto110' ); ?></h1>

				<div class="widget-content">
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</div><!-- /.widget-content -->
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
