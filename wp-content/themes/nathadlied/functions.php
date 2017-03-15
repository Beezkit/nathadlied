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

register_post_type(
  'print-project',
  array(
    'label' => 'Mes print',
    'labels' => array(
      'name' => 'Mes print',
      'singular_name' => 'Print',
      'all_items' => 'Tous les print',
      'add_new_item' => 'Ajouter un print',
      'edit_item' => 'Éditer le print',
      'new_item' => 'Nouveau print',
      'view_item' => 'Voir le print',
      'search_items' => 'Rechercher parmi les print',
      'not_found' => 'Pas de print trouvé',
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

register_taxonomy(
  'print',
  'print-project',
  array(
    'label' => 'Catégories',
    'labels' => array(
    'name' => 'Catégories',
    'singular_name' => 'Catégories',
    'all_items' => 'Toutes les Catégories',
    'edit_item' => 'Éditer une catégorie',
    'view_item' => 'Voir la catégorie',
    'update_item' => 'Mettre à jour une catégorie',
    'add_new_item' => 'Ajouter une catégorie',
    'new_item_name' => 'Nouvelle catégorie',
    'search_items' => 'Rechercher parmi les catégories',
    'popular_items' => 'Catégories les plus utilisés'
  ),
  'hierarchical' => true
  )
);
register_taxonomy_for_object_type( 'print', 'print-project' );

// CUSTOM POST TYPE Web
register_post_type(
   'Projet Web',
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

// CUSTOM POST TYPE Personnel
register_post_type(
   'Personnal',
   array(
        'label' => 'Personnel',
        'labels' => array(
            'name' => 'Personnel',
            'singular_name' => 'Personnel',
            'all_items' => 'Tout mes projet personnel',
            'add_new_item' => 'Personnel',
            'edit_item' => 'Personnel',
            'new_item' => 'Personnel',
            'view_item' => 'Personnel',
            'search_items' => 'Personnel',
            'not_found' => 'Personnel',
            'not_found_in_trash'=> 'Personnel'
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

// CUSTOM POST TYPE Personnel
register_post_type(
   'Confiance',
   array(
        'label' => 'Groupe confiance',
        'labels' => array(
            'name' => 'Groupe confiance',
            'singular_name' => 'Groupe confiance',
            'all_items' => 'Tout mes Groupe confiance',
            'add_new_item' => 'Groupe confiance',
            'edit_item' => 'Groupe confiance',
            'new_item' => 'Groupe confiance',
            'view_item' => 'Groupe confiance',
            'search_items' => 'Groupe confiance',
            'not_found' => 'Groupe confiance',
            'not_found_in_trash'=> 'Groupe confiance'
            ),
        'public' => true,
        'capability_type' => 'post',
        'has_archive' => true
    )
);
