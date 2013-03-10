<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<script></script>
<div class="row">
<div class="grid-6">
		<div id="primary" class="full-width">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
</div><!-- .grid-6 -->
</div><!-- .row -->
<div class="row">
<div class="grid-6">
<?php get_footer(); ?>