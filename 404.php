<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="row">
<div class="grid-6">
	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">Well this is somewhat embarrassing, isn&rsquo;t it?</h1>
				</header>

			
					<p>It seems I can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the tags below, can help.</p>

					<?php get_search_form(); ?>
					
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</article><!-- #post-0 -->

<p class="center"><img class="circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/pewpew.jpg" /></p>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- .grid-6 -->
</div><!-- .row -->
<div class="row">
<div class="grid-6">
<?php get_footer(); ?>