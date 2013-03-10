 <?php
/**
 * artStyle
 */
// Custom CSS to post
function artStyle() {
   global $post;
   if (is_single()) {
   $currentID = $post->ID;
   $serverfilepath = get_stylesheet_directory().'/art-direction/style-'.$currentID.'.css';
   $publicfilepath = get_bloginfo('stylesheet_directory');
   $publicfilepath .= '/art-direction/style-'.$currentID.'.css';
   if (file_exists($serverfilepath)) {
   echo "<link rel='stylesheet' type='text/css' href='$publicfilepath' media='screen' />"."\n";
   		}
	}
}
add_action('wp_head', 'artStyle');