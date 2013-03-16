<?php
/**
 * The Header for foldy child theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

<?php wp_head(); ?>

<!-- PrettyPhoto  -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript"> 
jQuery(document).ready(function($) {
   $("a[href$='.jpg'], a[href$='.jpeg'], a[href$='.gif'], a[href$='.png']").prettyPhoto({
	animationSpeed: 'normal', /* fast/slow/normal */
	padding: 40, /* padding for each side of the picture */
        opacity: 0.8, /* Value betwee 0 and 1 */
	showTitle: false /* true/false */			
	});
})
</script>
<!-- end PrettyPhoto  -->
</head>
<body <?php body_class(); ?>>
<a href="https://github.com/art209/foldy-toolbox" target="_blank"><img style="position: fixed; top: 0; right: 0; border: 0; z-index:9999;" src="<?php bloginfo('stylesheet_directory'); ?>/images/forkme_right_gray_6d6d6d-76.png" alt="Fork me on GitHub"></a>
<div class="container">
<div class="row">
<div class="grid-3"><h1 class="logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></div>
<div class="grid-3 top-right-widget"><?php include ('sidebar-header.php'); ?></div>
</div><!-- .row  -->
<div class="row">
<div class="grid-6">
<h1 id="site-description"><?php bloginfo( 'description' ); ?></h1>
</div><!-- .grid-6  -->
</div><!-- .row  -->
<nav id="fixed-nav">
<?php wp_nav_menu( array('theme_location' => 'secondary','items_wrap' => '%3$s' ) ); ?></nav>

<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">

    <nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>

<?php if(is_front_page() ) { 
echo get_template_part('frontpage','frontpage');
} else {
echo get_template_part('secondarypage','secondarypage');
} ?>
	</header><!-- #branding -->
	<div id="main">
