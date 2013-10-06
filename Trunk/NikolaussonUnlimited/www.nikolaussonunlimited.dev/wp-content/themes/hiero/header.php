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
				
                            <div class="site-title"><a href='<?php echo home_url(); ?>'><img style="width:100%;height:100%" src="/wp-content/themes/hiero/images/logo7.png"></a></img></div>
                                				
			<!-- .site-branding --></div>
                      
                    
                        <div id="flags">
                            <?php include 'inc/CustomLanguageSelector.php'; ?>
                        </div>
                    
                      
			<?php 
                        if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
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
                    
                 