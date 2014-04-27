<?php
/**
 * The Sidebar containing the signup-page widget areas.
 *
 * @package LiveTo110 Theme
 */
?>
	<div id="signmeup-secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-signup' ) ) : ?>
			<aside id="sign-me-up-widget" class="widget widget_signmeup">
				<header class="widget-header">
					<h1 class="widget-title">Sign me up!</h1><!-- /.widget-title -->
				</header><!-- /.widget-header -->

				<div class="widget-content">
					<form role="form">
						<fieldset class="form-group">
							<label class="sr-only">E-Mail</label>
							<input type="email" class="form-control" placeholder="Your Email">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label class="sr-only">First Name</label>
							<input type="text" class="form-control" placeholder="First Name">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label class="sr-only">Last Name</label>
							<input type="text" class="form-control" placeholder="Last Name">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label>Top Interests include:</label>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Nutritional Balancing
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Detox
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Modern Paleo
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Weight Loss
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Everything!
								</label>
							</div>
						</fieldset><!-- /.form-group -->

						<button id="signmeup-submit" class="btn btn-primary btn-lg">Join Now</button>
					</form>
				</div><!-- /.widget-content -->
			</aside><!-- /#sign-me-up-widget .widget_signmeup -->
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
