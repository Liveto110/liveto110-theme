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
					<form accept-charset="UTF-8" action="https://hi138.infusionsoft.com/app/form/process/fd2079bfa7f5a59c0b15331f56d83fea" method="POST" role="form">
						<input name="inf_form_xid" type="hidden" value="fd2079bfa7f5a59c0b15331f56d83fea" />
						<input name="inf_form_name" type="hidden" value="Request information" />
						<input name="infusionsoft_version" type="hidden" value="1.29.11.21" />

						<fieldset class="form-group">
							<label for="inf_field_Email" class="sr-only">Email *</label>
							<input id="inf_field_Email" name="inf_field_Email" type="text" class="form-control" placeholder="Your Email">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label for="inf_field_FirstName" class="sr-only">First Name *</label>
							<input id="inf_field_FirstName" name="inf_field_FirstName" type="text" class="form-control" placeholder="First Name">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label for="inf_field_LastName" class="sr-only">Last Name *</label>
							<input id="inf_field_LastName" name="inf_field_LastName" type="text" class="form-control" placeholder="Last Name">
						</fieldset><!-- /.form-group -->

						<fieldset class="form-group">
							<label for="inf_option_WhatareyourInterests">Top Interests include:</label>

							<div class="radio-wrap">
								<div class="radio">
									<label for="inf_option_WhatareyourInterests_659">
										<input id="inf_option_WhatareyourInterests_659" name="inf_option_WhatareyourInterests" type="radio" value="659" />
										Nutritional Balancing
									</label>
								</div>
								<div class="radio">
									<label for="inf_option_WhatareyourInterests_661">
										<input id="inf_option_WhatareyourInterests_661" name="inf_option_WhatareyourInterests" type="radio" value="661" />
										Detox
									</label>
								</div>
								<div class="radio">
									<label for="inf_option_WhatareyourInterests_663">
										<input id="inf_option_WhatareyourInterests_663" name="inf_option_WhatareyourInterests" type="radio" value="663" />
										Modern Paleo
									</label>
								</div>
								<div class="radio">
									<label for="inf_option_WhatareyourInterests_665">
										<input id="inf_option_WhatareyourInterests_665" name="inf_option_WhatareyourInterests" type="radio" value="665" />
										Weight Loss
									</label>
								</div>
								<div class="radio">
									<label for="inf_option_WhatareyourInterests_667">
										 <input id="inf_option_WhatareyourInterests_667" name="inf_option_WhatareyourInterests" type="radio" value="667" />
										Everything!
									</label>
								</div>
							</div><!-- /.radio-wrap -->
						</fieldset><!-- /.form-group -->						
						
						<div class="captcha-wrap">
							<img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://hi138.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." />
							<script type="text/javascript">
								function reloadJcaptcha() {
									var now = new Date();
									if (document.images) {
										document.images.captcha.src = 'https://hi138.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now;
									}
								}
							</script>

							<fieldset class="captcha-form-group">
								<label for="captcha.typed">Enter the above code:</label>
								<input id="captcha.typed" name="captcha.typed" type="text" class="captcha-input form-control">
							</fieldset>
						</div>

						<button id="signmeup-submit" class="btn btn-primary btn-lg">Join Now</button>
					</form>
				</div><!-- /.widget-content -->
			</aside><!-- /#sign-me-up-widget .widget_signmeup -->
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
