<?php
// Enqueue Scripts and Styles
function enqueue_styles() {
	wp_enqueue_style( 'google_fonts',
      '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700'
  );

  wp_enqueue_style( 'main_style',
      get_stylesheet_directory_uri() . '/css/main.css'
  );

	wp_enqueue_script( 'main_script',
		get_stylesheet_directory_uri() . '/js/site.js',
		array('jquery'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


// Register Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  //register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}


// Image sizes
add_theme_support('post-thumbnails');
add_image_size( 'blog-image', 940, 999999 );
add_image_size( 'column-image', 687, 999999 );
add_image_size( 'background-mobile', 564, 1004, true );
add_image_size( 'project-listing', 440, 300, true );
add_image_size( 'project-listing-dw', 900, 300, true );
add_image_size( 'project-listing-dt', 440, 620, true );
add_image_size( 'project-listing-dtw', 900, 620, true );

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'blog-image' => __( 'Blog Image' ),
    ) );
}

// Register Custom Post Type
function custom_post_type() {

	// Projects
	$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Projects', 'text_domain' ),
			'name_admin_bar'        => __( 'Projects', 'text_domain' ),
			'archives'              => __( 'All Projects', 'text_domain' ),
			'attributes'            => __( '', 'text_domain' ),
			'parent_item_colon'     => __( '', 'text_domain' ),
			'all_items'             => __( 'All Projects', 'text_domain' ),
			'add_new_item'          => __( 'Add New Project', 'text_domain' ),
			'add_new'               => __( 'Add New Project', 'text_domain' ),
			'new_item'              => __( 'New Project', 'text_domain' ),
			'edit_item'             => __( 'Edit Project', 'text_domain' ),
			'update_item'           => __( 'Update Project', 'text_domain' ),
			'view_item'             => __( 'View Project', 'text_domain' ),
			'view_items'            => __( 'View Project', 'text_domain' ),
			'search_items'          => __( 'Search Projects', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Projects', 'text_domain' ),
			'description'           => __( 'Projects and Case Studies', 'text_domain' ),
			'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'query_var' => true,
	    'menu_icon' => 'dashicons-hammer',
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'menu_position' => null,
	    'supports' => array( 'title', 'custom-fields', 'editor', 'page-attributes'),
	    'has_archive' => true,
			'rewrite' => array(
				'slug' => 'project'),
		);
		register_post_type( 'projects', $args );

		flush_rewrite_rules();
}

add_action( 'init', 'custom_post_type', 0 );

function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'Intro Text',
			'block' => 'p',
			'classes' => 'intro-text',
			'wrapper' => false,
		)
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
/*
http://omfgitsnater.com/2012/06/using-flush_rewrite_rules-with-your-custom-post-types/
*/
