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

function register_my_menu() {
		register_nav_menu('main_menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );


// Add Styles
function prefix_add_footer_styles() {
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Material+Icons',true,'1.1','all');
	wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Oswald:wght@300;400&family=Yesteryear&display=swap',true,'1.1','all');
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


// New generation image formats compatibility
function wphelp_compatibility_new_image_formats( $mime_types ) {
	$mime_types['webp'] = 'image/webp';
	$mime_types['heic'] = 'image/heic';
	$mime_types['heif'] = 'image/heif';
	$mime_types['heics'] = 'image/heic-sequence';
	$mime_types['heifs'] = 'image/heif-sequence';
	$mime_types['avif'] = 'image/avif';
	$mime_types['avis'] = 'image/avif-sequence';
	$mime_types['svg'] = 'image/svg';
	return $mime_types;
}
add_filter( 'upload_mimes', 'wphelp_compatibility_new_image_formats', 1, 1 );

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


function preview_stuff()
	// Adds preview stuff.
	{ 

	  wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Oswald:wght@300;400&family=Yesteryear&display=swap',true,'1.1','all');
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
	
	register_sidebar( array(
		'name'          => 'Main Navigation',
		'id'            => 'main_navigation',
		'before_widget' => '<div class="main-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="menu-title">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'primary_widgets_init' );