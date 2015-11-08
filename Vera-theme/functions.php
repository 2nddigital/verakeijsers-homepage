<?php
// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'header-menu' => __( 'Hoofd Menu', 'text_domain' ),
		'social-menu' => __( 'Social Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );

$args = array(
'default-image' => get_template_directory_uri() . '/images/banner.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//voegt de vershillende post types toe
add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio'
	) );

//voegt uitgelichte afbeeldingen toe
add_theme_support( 'post-thumbnails', array( 'post', 'page',  ) );


?>