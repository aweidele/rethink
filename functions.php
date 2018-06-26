<?php
// Enqueue Scripts and Styles
function enqueue_styles() {
	// wp_enqueue_style( 'google_fonts',
  //     '//fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700|Open+Sans:300'
  // );

  wp_enqueue_style( 'main_style',
      get_stylesheet_directory_uri() . '/css/main.css'
  );

	// wp_enqueue_script( 'main_script',
	// 	get_stylesheet_directory_uri() . '/js/site.js',
	// 	array('jquery'),
	// 	wp_get_theme()->get('Version'),
	// 	true
	// );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
