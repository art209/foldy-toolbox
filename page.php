<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="row">
<div class="grid-4">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
</div><!-- .grid-4 -->
<div class="grid-2">
<?php get_sidebar(); ?>
</div><!-- .grid-2 -->
</div><!-- end row -->
<div class="row">
<div class="grid-6">
<?php get_footer(); ?>