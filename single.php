<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="row">
<div class="grid-hm">
		<div id="primary">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
</div><!-- .grid-hm -->
</div><!-- end row -->
<div class="grid-6">
<?php get_footer(); ?>
