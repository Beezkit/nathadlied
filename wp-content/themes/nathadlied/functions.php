<?php

/* Thumbnails */
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );

remove_filter( 'the_excerpt', 'wpautop' );
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//empêche la conversion des certaines entités texte en entités HTML
//remove_filter( 'the_content', 'wpautop' );


register_nav_menus( array(
 'Top' => 'Navigation principale'
) );

// CUSTOM POST TYPE PRESENTATION
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'PRESENTATION',
		array(
			'labels' => array(
				'name' => __( 'Ma présentation' ),
				'singular_name' => __( 'Ma présentation' )
			),
		'public' => true,
		'has_archive' => true,
        'supports' => array(
        	'title',
        	'editor',
            'thumbnail'
        ),
		)
	);
}
