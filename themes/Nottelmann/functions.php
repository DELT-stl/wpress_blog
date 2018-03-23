<?php
//Add featured image to page
add_theme_support('post-thumbnails');
function setup_types() {
	register_post_type('mytype', array(
		'label' => __('My type'),
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'show_ui' => true,
	));
}
add_action('init', 'setup_types');

function nottelmann_scripts() {
 wp_enqueue_script( 'fontawesome', get_stylesheet_directory_uri() . '/js/font-awesome.js' );
 wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
 wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
 wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
// wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
wp_enqueue_style( 'iwr8dkq', get_stylesheet_directory_uri() . '/css/iwr8dkq.css' );
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
wp_enqueue_script( 'accordion', get_stylesheet_directory_uri() . '/js/accordion.js');
}
add_action('wp_enqueue_scripts', 'nottelmann_scripts');
//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
?>
