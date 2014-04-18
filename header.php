<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LiveTo110 Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="searchform-drawer" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form">
						<input type="search" class="form-control">
						<button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#searchform-drawer -->

	<div id="header" class="clearfix">
		<div id="primary-navigation" class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".primary-links-container">
						<span class="sr-only"><?php _e( 'Toggle Navigation', 'liveto110' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><!-- /.navbar-header -->

				<div class="navbar-collapse collapse primary-links-container">
					<!-- Primary Navigation START -->
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav primary-links',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						) );
					?>
					<!-- Primary Navigation END -->

					<!-- Search & Shop Navigation START -->
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'search-and-shop',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav navbar-right search-and-shop',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						) );
					?>
					<!-- Search & Shop Navigation END -->
				</div><!--/.navbar-collapse -->
			</div><!-- /.container -->
		</div><!-- /#primary-navigation .navbar -->

		<header id="masthead" role="banner">
			<div class="container">
				<div id="site-branding">				
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<span class="title-text"><?php bloginfo( 'name' ); ?></span>

							<?php if ( get_header_image() ) : ?>
								<div class="logo-image">
									<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" class="img-responsive">
								</div><!-- /.logo-image -->
							<?php endif; // End header image check. ?>
						</a>
					</h1><!-- /.site-title -->

					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2><!-- /.site-description -->	
				</div><!-- /.site-branding -->
			</div><!-- /.container -->
		</header><!-- /#masthead -->

		<div id="secondary-navigation" class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".secondary-links-container">
						<span class="sr-only"><?php _e( 'Toggle Navigation', 'liveto110' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><!-- /.navbar-header -->

				<div class="navbar-collapse collapse secondary-links-container">
					<!-- Social Links START -->
					<?php wp_nav_menu( array( 
						'theme_location' => 'social-links',
						'container' => false,
						'menu_class' => 'menu nav navbar-nav navbar-left social-links'
					 ) ); ?>
					 <!-- Social Links END -->

					 <!-- Secondary Navigation START -->
					<?php wp_nav_menu( array( 
						'theme_location' => 'secondary',
						'container' => false,
						'menu_class' => 'menu nav navbar-nav navbar-right secondary-links'
					 ) ); ?>
					 <!-- Secondary Navigation END -->
				</div><!--/.navbar-collapse -->
			</div><!-- /.container -->
		</div><!-- /#secondary-navigation .navbar -->
	</div><!-- /#header -->