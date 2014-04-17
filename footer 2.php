<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LiveTo110 Theme
 */
?>
<div id="megafooter" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<aside class="widget logo-widget">
					<div class="image-wrap">
						<img src="<?php echo get_template_directory_uri() . '/img/footer-site-logo.png'; ?>" class="img-responsive" alt="">
					</div><!-- /.image-wrap -->
				</aside><!-- /.widget .logo-widget -->
			</div>

			<div class="col-sm-6 col-md-3">
				<aside class="widget links-widget">
					<header class="widget-header">
						<h4 class="widget-title">Learn</h4>
					</header><!-- /.widget-header -->

					<div class="widget-content">
						<nav id="learn-navigation">
							<!-- Learn Navigation START -->
							<?php wp_nav_menu( array( 
								'theme_location' => 'learn',
								'container' => false,
								'menu_class' => 'menu list-unstyled'
							 ) ); ?>
							 <!-- Learn Navigation END -->
						</nav><!-- /#learn-navigation -->
					</div><!-- /.widget-content -->
				</aside><!-- /.widget .links-widget -->
			</div>

			<div class="col-sm-6 col-md-3">
				<aside class="widget links-widget">
					<header class="widget-header">
						<h4 class="widget-title">Support</h4>
					</header><!-- /.widget-header -->

					<div class="widget-content">
						<nav id="support-navigation">
							<!-- Support Navigation START -->
							<?php wp_nav_menu( array( 
								'theme_location' => 'support',
								'container' => false,
								'menu_class' => 'menu list-unstyled'
							 ) ); ?>
							 <!-- Support Navigation END -->
						</nav><!-- /#support-navigation -->
					</div><!-- /.widget-content -->
				</aside><!-- /.widget .links-widget -->
			</div>

			<div class="col-sm-6 col-md-3">
				<aside class="widget links-widget">
					<header class="widget-header">
						<h4 class="widget-title">Connect</h4>
					</header><!-- /.widget-header -->

					<div class="widget-content">
						<nav id="social-navigation">
							<!-- Social Links START -->
							<?php wp_nav_menu( array( 
								'theme_location' => 'social-links',
								'container' => false,
								'menu_class' => 'menu list-unstyled'
							 ) ); ?>
							 <!-- Social Links END -->
						</nav><!-- /#social-navigation -->
					</div><!-- /.widget-content -->
				</aside><!-- /.widget .links-widget -->
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#megafooter -->

<div id="footer" class="clearfix">
	<div class="container">
		<footer id="colophon" role="contentinfo">
			<p class="copyright-text text-center">
				<?php printf( __( '&copy; 2014 Live to 110, LLC. Designed by %2$s.', 'liveto110' ), 'LiveTo110 Theme', '<a href="#" rel="designer">TheBrandingHospital.com</a>' ); ?>
			</p><!-- /.copyright-text -->
		</footer><!-- /#colophon -->
	</div><!-- /container -->
</div><!-- /#footer -->

<?php wp_footer(); ?>

</body>
</html>
