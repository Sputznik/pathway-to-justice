<?php

// CREATES CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $orbit_types ){

	$orbit_types['resources'] = array(
		'slug' 		=> 'resources',
		'labels'	=> array(
			'name' 					=> 'Resources',
			'singular_name' => 'Resource',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Resource',
      'all_items'     =>  'All Resources',
		),
		'taxonomies'		=> array( 'category', 'post_tag' ),
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);
	return $orbit_types;
} );

//Creates a meta field for media nad external links
add_filter( 'orbit_meta_box_vars', function( $meta_box ){
	$meta_box['resources'] = array(
		array(
			'id'			=> 'resources-meta-fields',
			'title'		=> 'Additional Fields',
			'fields'	=> array(
				'external-link'	=> array(
					'type' => 'text',
					'text' => 'External Link'
				),
				'media-link'	=> array(
					'type' => 'text',
					'text' => 'Media Link'
				),
			)
		)
	);
	return $meta_box;
});

/* PUSH INTO THE GLOBAL VARS OF ORBIT TAXNOMIES */
// add_filter( 'orbit_taxonomy_vars', function( $orbit_tax ){
//
//   $resources_taxonomies = array(
//     'locations'       => 'Locations',
//     'services'        => 'Services'
//   );
//
//   foreach( $resources_taxonomies as $slug => $label ){
//     $orbit_tax[ $slug ]	= array(
//       'label'			  => $label,
//       'slug' 			  => $slug,
//       'post_types'	=> array( 'resources' )
//     );
//   }
//
//   return $orbit_tax;
//
// } );
