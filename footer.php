<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hockey
 */
?>
	<!-- This calls the function for the sidebar footer --!>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	   <?php get_sidebar ('footer'); ?>
		<div class="site-info">
			
			
		<i class="fa fa-copyright"></i>
	<!-- at the bottom of the page, it will display this description as an indicator of the site--!>
		<?php printf( __( 'The Offical Fan Site of Team Muck', 'hockey' ), 'Team Muck' ); ?>
			
</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>