<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wildebeest
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
                <div class="social-menu"><?php if ( dynamic_sidebar('social-menu') ) : else : endif; ?>
                </div><!-- .social-menu -->
                
		<div class="site-info">
			
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wildebeest' ), 'wildebeest', '<a href="http://www.saracarbaugh.com">Sara Carbaugh</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
