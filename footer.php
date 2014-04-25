<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LiveTo110 Theme
 */
?>
<?php global $smof_data;  save_smof_option();?>

<div id="signup-section" class="clearfix" style="background-image: url('<?php echo $smof_data[ 'signupsection_bg_img' ]; ?>');">
	<div class="signup-wrapper">
		<div class="container">
			<h1 class="section-title text-center"><?php echo $smof_data[ 'signupsection_title' ]; ?></h1>	

			<article class="signup-form">
				<header class="form-header">
					<h2 class="section-subtitle text-center"><?php echo $smof_data[ 'signupsection_subtitle' ]; ?></h2>
				</header><!-- /.form-header -->

				<div class="form-wrap">
					<div class="image-wrap">
						<?php if ($smof_data['signupsection_graphics']) { ?>
							<img src="<?php echo $smof_data['signupsection_graphics']; ?>" class="img-responsive">
						<?php } ?>
					</div><!-- /.image-wrap -->

					<div class="button-wrap">
						<?php if ($smof_data['signupsection_btn_linkto_url']) { ?>
							<a href="<?php echo $smof_data[ 'signupsection_btn_linkto_url' ]; ?>" class="btn btn-primary">
								<span class="btn-text">
									<?php echo $smof_data['signupsection_btn_text']; ?>
									<i class="fa fa-chevron-right"></i>
								</span>
							</a>
						<?php } ?>
					</div><!-- /.button-wrap -->					
				</div><!-- /.form-wrap -->
			</article><!-- /.signup-form -->
		</div><!-- /.container -->
	</div><!-- /.signup-wrapper -->
</div><!-- /#signup-section -->

<div id="megafooter" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<aside class="widget logo-widget">
					<div class="image-wrap">
						<?php if ($smof_data['footer_logo']) { ?>
							<img src="<?php echo $smof_data['footer_logo']; ?>" class="img-responsive" alt="">
						<?php } ?>
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
			<?php //if ( $smof_data['footer_copyright'] && $smof_data['footer_theme'] ) { ?>
				<p class="copyright-text text-center">
					<?php echo $smof_data['footer_copyright']; ?>

					Designed by <?php echo $smof_data['footer_theme']; ?>
				</p><!-- /.copyright-text -->
			<?php //} ?>
		</footer><!-- /#colophon -->
	</div><!-- /container -->
</div><!-- /#footer -->

<?php wp_footer(); ?>

</body>
</html>
