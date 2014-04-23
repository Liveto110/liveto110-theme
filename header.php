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

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php global $smof_data;  save_smof_option();?>

	<!-- ==SEO== -->
    <?php if (is_front_page()) {
    	if ($smof_data['site_keywords']) { ?>
    		<meta name="description" content="<?php echo $smof_data['site_keywords']; ?>">
    	<?php } ?>
    	<?php if ($smof_data['site_desc']) { ?>
    		<meta name="description" content="<?php echo $smof_data['site_desc']; ?>">
    	<?php } ?>
    	<?php if ($smof_data['site_title']) { ?>
            <title><?php echo $smof_data['site_title']; ?></title>
        <?php } else { ?>
            <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <?php }
    } else { ?>
        <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php } ?>

	<!-- ==Favicon== -->
    <?php if ($smof_data['custom_favicon_ie']) { ?>
        <link rel="shortcut icon" href="<?php echo $smof_data['custom_favicon_ie']; ?>" type="image/x-icon">
    <?php } ?>    
    <?php if ($smof_data['custom_favicon_mod']) { ?>
        <link rel="icon" href="<?php echo $smof_data['custom_favicon_mod']; ?>" type="image/png">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_iphone']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $smof_data['custom_favicon_iphone']; ?>">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_ipad']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $smof_data['custom_favicon_ipad']; ?>">
    <?php } ?>
    <?php if ($smof_data['custom_favicon_retina']) { ?>
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $smof_data['custom_favicon_retina']; ?>">
    <?php } ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if ( isset( $smof_data[ 'google_analytics' ] ) ) { ?>
        <script type="text/javascript">
            //<![CDATA[
                <?php  echo preg_replace('(<.script>)','',preg_replace('(<script.*?>)','',$smof_data['google_analytics']));?>
            //]]>
        </script>
    <?php } ?>

	<?php wp_head(); ?>

    <?php if ($smof_data['customcss_luigi']) { ?>
	    <style type="text/css">
	    	<?php echo $smof_data['customcss_luigi']; ?>
	    </style>
	<?php } ?>	
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
						<input type="search" class="form-control" placeholder="Search Live to 110">
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
							<div class="logo-image">
								<img src="<?php echo $smof_data['logo']; ?>" alt="<?php bloginfo('name');?>" class="img-responsive">
							</div><!-- /.logo-image -->
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
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'social-links',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav navbar-left social-links',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						) );
					?>
					 <!-- Social Links END -->

					 <!-- Secondary Navigation START -->
					 <?php
					 	wp_nav_menu( array(
					 		'theme_location'    => 'secondary',
					 		'depth'             => 2,
					 		'container'         => false,
					 		'menu_class'        => 'nav navbar-nav navbar-right secondary-links',
					 		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					 		'walker'            => new wp_bootstrap_navwalker()
					 	) );
					 ?>
					 <!-- Secondary Navigation END -->
				</div><!--/.navbar-collapse -->
			</div><!-- /.container -->
		</div><!-- /#secondary-navigation .navbar -->
	</div><!-- /#header -->