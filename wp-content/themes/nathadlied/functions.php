<?php

/* Thumbnails */
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );
add_image_size('print', 510, '', true);
add_image_size('web', 510, 275, true);

remove_filter( 'the_excerpt', 'wpautop' );
function custom_excerpt_length( $length ) {
    return 30;
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

// CUSTOM POST TYPE NATH
register_post_type(
   'Nath',
   array(
        'label' => 'Nath',
        'labels' => array(
            'name' => 'Nath',
            'singular_name' => 'Nath',
            'all_items' => 'Nath',
            'add_new_item' => 'Nath',
            'edit_item' => 'Nath',
            'new_item' => 'Nath',
            'view_item' => 'Nath',
            'search_items' => 'Nath',
            'not_found' => 'Nath',
            'not_found_in_trash'=> 'Nath'
            ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
        	'title',
        	'editor',
            'thumbnail'
        ),
        'has_archive' => true
    )
);

// CUSTOM POST TYPE PRINT
register_post_type(
   'Print',
   array(
        'label' => 'Mes Print',
        'labels' => array(
            'name' => 'Mes Print',
            'singular_name' => 'Mes Print',
            'all_items' => 'Tous Mes Print',
            'add_new_item' => 'Ajouter un Print',
            'edit_item' => 'Éditer le Print',
            'new_item' => 'Nouveau Print',
            'view_item' => 'Voir le print',
            'search_items' => 'Rechercher parmi les Print',
            'not_found' => 'Pas de print trouvée',
            'not_found_in_trash'=> 'Pas de print dans la corbeille'
            ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
        	'title',
        	'editor',
            'thumbnail'
        ),
        'has_archive' => true
    )
);

// CUSTOM POST TYPE PRINT
register_post_type(
   'Web',
   array(
        'label' => 'Mes Web',
        'labels' => array(
            'name' => 'Mes Web',
            'singular_name' => 'Mes Web',
            'all_items' => 'Tous Mes Web',
            'add_new_item' => 'Ajouter un Web',
            'edit_item' => 'Éditer le Web',
            'new_item' => 'Nouveau Web',
            'view_item' => 'Voir le Web',
            'search_items' => 'Rechercher parmi les Web',
            'not_found' => 'Pas de Web trouvée',
            'not_found_in_trash'=> 'Pas de Web dans la corbeille'
            ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
        	'title',
        	'editor',
            'thumbnail'
        ),
        'has_archive' => true
    )
);
