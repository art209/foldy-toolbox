<?php
/**
 * Functions for Child-theme
 */
// Add extra widgets
function foldytoolbox_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Widget', 'toolbox' ),
		'id' => 'header-sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 1', 'toolbox' ),
		'id' => 'footer-widget-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 2', 'toolbox' ),
		'id' => 'footer-widget-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 3', 'toolbox' ),
		'id' => 'footer-widget-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'init', 'foldytoolbox_widgets_init' );
add_filter('widget_text', 'do_shortcode');
// Add jQuery
function insert_jquery(){
	wp_enqueue_script('jquery');
}
add_action('init', 'insert_jquery');


function ncop_comments_open_filter($open, $post_id=null)
{
    $post = get_post($post_id);
    return $open && $post->post_type !== 'page';
}

function ncop_comments_template_filter($file)
{
    return is_page() ? dirname(__FILE__).'/empty' : $file;
}
// Add no comment on pages filter
add_filter('comments_open', 'ncop_comments_open_filter', 10, 2);
add_filter('comments_template', 'ncop_comments_template_filter', 10, 1);
// Second Menu
register_nav_menus( array(
		'secondary' => __( 'Secondary Menu', 'foldytoolbox' ),
	) );