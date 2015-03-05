<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hockey
 
 The i class function will allow the copyrifght logo to be shown on the theme beside Official team muck text in the footer section. The get_sidebar functions shows the intended footer wdiget on the theme as selected in the WordPress dashboaord.
 
 */
 
 
 
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	   <?php get_sidebar ('footer'); ?>
		<div class="site-info">
			
			
		<i class="fa fa-copyright"></i>
		<?php printf( __( 'The Offical Fan Site of Team Muck', 'hockey' ), 'Team Muck' ); ?>
			
</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>