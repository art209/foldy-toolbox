<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
  
	</div><!-- #main -->  
 
<footer id="colophon" role="contentinfo"><!-- role for screen readers -->
<div id="footer-sidebar1"><?php if ( ! dynamic_sidebar( 'Footer Widget 1' ) ) :?><?php endif;?></div>
<div id="footer-sidebar2"><?php if ( ! dynamic_sidebar( 'Footer Widget 2' ) ) :?><?php endif;?></div>
<div id="footer-sidebar3"><?php if ( ! dynamic_sidebar( 'Footer Widget 3' ) ) :?><?php endif;?></div>
</footer><!-- #colophon -->
 <div class="clear"></div>
	    </div><!-- #page -->
<div id="copy">
<p>2013 GNU GPL + WTFPL</p>
<p>Foldy is a child theme for <a href="http://wordpress.org/extend/themes/toolbox" target="_blank">Toolbox</a></p>
</div><!-- #copy -->
<a href="#" class="scrollup"></a>
</div><!-- .grid-6 -->
</div><!-- .row -->
</div><!-- .container -->
 <script type="text/javascript">
   jQuery(document).ready(function($) {
 			$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });
 
    });
</script>
<!-- End JS -->
</body>
</html>