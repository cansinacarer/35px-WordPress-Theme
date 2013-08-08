<?php

/*
temaDizin kısayolunu tanımla
<?php print temaDizin; ?>
*/
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'temaDizin', TEMPPATH. "/");



/* Menu */
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'primary' => 'Primary Navigation', 'your_theme_name',
		)
	);
}

include ('bootstrap-walker.php');



/* sidebar */
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Genel Sidebar',
'id' => 'genel-sidebar',
'description' => 'Genel index sayfalarındaki sidebar.',
'before_widget' => '<div class="widget-tasiyici">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-baslik">',
'after_title' => '</h3>',
));

register_sidebar(array(
'name' => 'Blog Sidebar',
'id' => 'blog-sidebar',
'description' => 'Blog archive ve single sayfalarındaki sidebar.',
'before_widget' => '<div class="widget-tasiyici">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-baslik">',
'after_title' => '</h3>',
));



}





// Adminbar a yer açma
function cansin_adminbar_stil() { ?>
	<style type="text/css">
	@media (min-width: 980px) {
		header {
			margin-top: 28px !important;
		}
	}
	</style>
<?php }
/* on backend area
add_action( 'admin_head', 'cansin_adminbar_stil' );
*/
// on frontend area
if ( is_admin_bar_showing() ) { 
add_action( 'wp_head', 'cansin_adminbar_stil' );
}





?>