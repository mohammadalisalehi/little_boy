<?php

add_theme_support( 'menus' );


// Add Your Menu Locations
function register_my_menus()
{
	register_nav_menus(
	[
		'menu_header'  => 'منوی بالای صفحه',
		'menu_footer'  => 'منوی فوتر',
		'menu_footer_right'  => 'فوتر راست',
		'menu_footer_center'  => 'فوتر وسط',
		'menu_footer_left'  => 'فوتر چپ',
	]
	);
}
add_action( 'init', 'register_my_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function theme_widgets_init()
{
	register_sidebar( [
		'name'          => 'widget-goods1',
		'before_widget' => '<div class="span4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-goods2',
		'before_widget' => '<div class="span4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-goods3',
		'before_widget' => '<div class="span4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-goods4',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

		register_sidebar( [
		'name'          => 'widget-sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

}

add_action( 'widgets_init', 'theme_widgets_init' );
add_theme_support( 'post-thumbnails');




function func_bio( $atts )
{
	$result = get_the_author_meta('nicename'). "<br /><br />";
	$result .= get_the_author_meta('description');
	return $result;
}
add_shortcode( 'bio', 'func_bio' );
?>