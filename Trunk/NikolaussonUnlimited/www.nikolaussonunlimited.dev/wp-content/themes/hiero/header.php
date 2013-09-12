<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package aThemes
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
	<header id="masthead" class="site-header" role="banner">
                
		<div class="clearfix container">
			<div class="site-branding">
				
                                <div class="site-title"><img style="width:150%;height:150%" src="/wp-content/themes/hiero/images/logo7.png"></img></div>
                                				
			<!-- .site-branding --></div>
                        <div id="flags" style="max-width: 980px;display:block;margin-left: auto;margin-right: auto;margin-top: 0px;">
                    <div id="flags" style="float: right;margin-top: 0px;">
                        <a href="http://www.nikolaussonunlimited.dev/"><img style="width:30px;height:25px;" src="/wp-content/themes/hiero/Flags/Dirty Flag Folders Sweden.png"></img></a>
                        <a href="http://www.nikolaussonunlimited.dev/pt"><img style="width:30px;height:25px;" src="/wp-content/themes/hiero/Flags/Dirty Flag Folders Brazil.png"></img></a>
                        <a href="http://www.nikolaussonunlimited.dev/en"><img style="width:30px;height:25px;" src="/wp-content/themes/hiero/Flags/Dirty Flag Folders Uk.png"></img></a>
                    </div>
    </div>
                    <!--<div class="widget" style="width: 20%;height:20%;margin-right: 80px;">
                         <div class="site-title"><img style="" src="/wp-content/themes/hiero/images/test2.png"></img></div>
                    </div>-->
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<?php endif; ?>
                            
			<nav id="main-navigation" class="main-navigation" role="navigation">
				<a href="#main-navigation" class="nav-open">Menu</a>
				<a href="#" class="nav-close">Close</a>
				<?php wp_nav_menu( array( 'container_class' => 'clearfix sf-menu', 'theme_location' => 'main' ) ); ?>
			<!-- #main-navigation --></nav>
		</div>
	<!-- #masthead --></header>

	<div id="main" class="site-main">
		<div class="clearfix container">
                    
                 