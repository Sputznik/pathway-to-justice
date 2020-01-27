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

// Returns taxonomy terms attached to resource-posts
function getResourceTerms( $post_id, $taxonomy ){
  // name,link
  $term_list = wp_get_post_terms( $post_id, $taxonomy );
  $final_terms = array();

  // Iterate through each terms
  foreach( $term_list as $term ){
    array_push( $final_terms, "<a href='".get_term_link( $term )."'>" . $term->name . "</a>" );
  }

  return $final_terms;
}

//Excerpt
function excerpt( $limit ) {

	global $post;

	$excerpt = $post->post_excerpt;

	if( !$excerpt && !strlen( $excerpt ) ){

    $excerpt = $post->post_content;
		$excerpt = strip_shortcodes( $excerpt );
		$excerpt = excerpt_remove_blocks( $excerpt );
		$excerpt = str_replace( ']]>', ']]&gt;', $excerpt );

	}

	$excerpt = wp_trim_words( $excerpt, $limit, '...' );

	return $excerpt;
}
//Excerpt
