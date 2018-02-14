<?php wp_deregister_script( 'jquery' );

function register_my_menu() {
  register_nav_menu('main_menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );