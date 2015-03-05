<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package hockey
 */

/* This following code is meant to call in the widget area created in functions.php. This 'if statement' determines if there is a widget in the sidebar and is set to true, this returns the functions and termines this template file which doesnt run the rest of this code. If you add the widgets to the footer-sidebar, the secondary peice of this code will be activated*/ 

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

