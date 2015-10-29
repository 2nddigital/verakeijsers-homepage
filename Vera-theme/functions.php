<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Hoofd Menu' ),
      'social-menu' => __( 'Social Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>