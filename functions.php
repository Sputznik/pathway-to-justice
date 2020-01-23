<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('pathway-style', get_stylesheet_directory_uri().'/assets/css/pathway.css', array('sp-core-style'), time() ); //'1.0.0
});

// Include Custom Post Type
include( get_stylesheet_directory().'/cpt/cpt.php' );


//Sidebar widget for single-resource posts
add_action( 'widgets_init', function(){
  register_sidebar( array(
    'name' 			    => 'Single Resource Sidebar',
    'id' 			      => 'single-resource-sidebar',
    'description' 	=> 'Sidebar appears in the single resources post',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' 	=> '</aside>',
    'before_title' 	=> '<h3 class="widget-title">',
    'after_title' 	=> '</h3>',
  ) );
});
