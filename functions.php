<?php  function add_scipts() {
	
// Add Scripts
	if (!is_admin()) {
		wp_deregister_script( 'jquery' );
	
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', true, '');
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts_min.js', array('jquery'), '1.0', true );
	}
}
add_action('init', 'add_scipts');


// Add Styles
function prefix_add_footer_styles() {
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Material+Icons',true,'1.1','all');
	wp_enqueue_style( 'lato', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap',true,'1.1','all');
	wp_enqueue_style( 'oswald', '//fonts.googleapis.com/css2?family=Oswald&display=swap',true,'1.1','all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/main_min.css',true,'1.1','all');
    wp_enqueue_style( 'mods', get_template_directory_uri() . '/css/mods.css',true,'1.1','all');

};
add_action( 'get_footer', 'prefix_add_footer_styles' );


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

//Register Menus

function register_my_menu() {
  register_nav_menu('main_menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Add SVG Mime Type

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function preview_stuff()
	// Adds preview stuff.
	{ 
	  wp_enqueue_style( 'lato', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap',true,'1.1','all');
	  wp_enqueue_style( 'oswald', '//fonts.googleapis.com/css2?family=Oswald&display=swap',true,'1.1','all');
	  wp_enqueue_style( 'mods', get_template_directory_uri() . '/css/mods.css',true,'1.1','all');
	}
	add_action('admin_footer', 'preview_stuff');
	
/**
 * Register our sidebars and widgetized areas.
 *
 */
function primary_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header',
		'id'            => 'header',
		'before_widget' => '<div class="header">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div class="footer">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'primary_widgets_init' );