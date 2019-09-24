<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 

/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/


// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'florence' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'florence' ),
		'menu_name'             => __( 'Banner', 'florence' ),
		'name_admin_bar'        => __( 'Post Type', 'florence' ),
		'archives'              => __( 'Archivo', 'florence' ),
		'attributes'            => __( 'Atributos', 'florence' ),
		'parent_item_colon'     => __( 'Artículo principal', 'florence' ),
		'all_items'             => __( 'Todos los artículos', 'florence' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'florence' ),
		'add_new'               => __( 'Añadir nuevo', 'florence' ),
		'new_item'              => __( 'Nuevo artículo', 'florence' ),
		'edit_item'             => __( 'Editar elemento', 'florence' ),
		'update_item'           => __( 'Actualizar artículo', 'florence' ),
		'view_item'             => __( 'Ver ítem', 'florence' ),
		'view_items'            => __( 'Ver artículos', 'florence' ),
		'search_items'          => __( 'Buscar artículo', 'florence' ),
		'not_found'             => __( 'Extraviado', 'florence' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'florence' ),
		'featured_image'        => __( 'Foto principal', 'florence' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'florence' ),
		'remove_featured_image' => __( 'Remove featured image', 'florence' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'florence' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'florence' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'florence' ),
		'items_list'            => __( 'Lista de artículos', 'florence' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'florence' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'florence' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'florence' ),
		'description'           => __( 'Post Type Description', 'florence' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Custom Post Type
function team() {

	$labels = array(
		'name'                  => _x( 'Equipo', 'Post Type General Name', 'florence' ),
		'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'florence' ),
		'menu_name'             => __( 'Equipo', 'florence' ),
		'name_admin_bar'        => __( 'Post Type', 'florence' ),
		'archives'              => __( 'Archivo', 'florence' ),
		'attributes'            => __( 'Atributos', 'florence' ),
		'parent_item_colon'     => __( 'Artículo principal', 'florence' ),
		'all_items'             => __( 'Todos los artículos', 'florence' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'florence' ),
		'add_new'               => __( 'Añadir nuevo', 'florence' ),
		'new_item'              => __( 'Nuevo artículo', 'florence' ),
		'edit_item'             => __( 'Editar elemento', 'florence' ),
		'update_item'           => __( 'Actualizar artículo', 'florence' ),
		'view_item'             => __( 'Ver ítem', 'florence' ),
		'view_items'            => __( 'Ver artículos', 'florence' ),
		'search_items'          => __( 'Buscar artículo', 'florence' ),
		'not_found'             => __( 'Extraviado', 'florence' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'florence' ),
		'featured_image'        => __( 'Foto principal', 'florence' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'florence' ),
		'remove_featured_image' => __( 'Remove featured image', 'florence' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'florence' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'florence' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'florence' ),
		'items_list'            => __( 'Lista de artículos', 'florence' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'florence' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'florence' ),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'florence' ),
		'description'           => __( 'Equipo mejor contiza', 'florence' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipo', $args );

}
add_action( 'init', 'team', 0 );

function gallery() {

	$labels = array(
		'name'                  => _x( 'Galería', 'Post Type General Name', 'florence' ),
		'singular_name'         => _x( 'Galería', 'Post Type Singular Name', 'florence' ),
		'menu_name'             => __( 'Galería', 'florence' ),
		'name_admin_bar'        => __( 'Post Type', 'florence' ),
		'archives'              => __( 'Archivo', 'florence' ),
		'attributes'            => __( 'Atributos', 'florence' ),
		'parent_item_colon'     => __( 'Artículo principal', 'florence' ),
		'all_items'             => __( 'Todos los artículos', 'florence' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'florence' ),
		'add_new'               => __( 'Añadir nuevo', 'florence' ),
		'new_item'              => __( 'Nuevo artículo', 'florence' ),
		'edit_item'             => __( 'Editar elemento', 'florence' ),
		'update_item'           => __( 'Actualizar artículo', 'florence' ),
		'view_item'             => __( 'Ver ítem', 'florence' ),
		'view_items'            => __( 'Ver artículos', 'florence' ),
		'search_items'          => __( 'Buscar artículo', 'florence' ),
		'not_found'             => __( 'Extraviado', 'florence' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'florence' ),
		'featured_image'        => __( 'Foto principal', 'florence' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'florence' ),
		'remove_featured_image' => __( 'Remove featured image', 'florence' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'florence' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'florence' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'florence' ),
		'items_list'            => __( 'Lista de artículos', 'florence' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'florence' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'florence' ),
	);
	$args = array(
		'label'                 => __( 'Galería', 'florence' ),
		'description'           => __( 'Galería mejor contiza', 'florence' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Galería', $args );

}
add_action( 'init', 'gallery', 0 );

// function post() {

// 	$labels = array(
// 		'name'                  => _x( 'Blog', 'Post Type General Name', 'florence' ),
// 		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'florence' ),
// 		'menu_name'             => __( 'Blog', 'florence' ),
// 		'name_admin_bar'        => __( 'Post Type', 'florence' ),
// 		'archives'              => __( 'Archivo', 'florence' ),
// 		'attributes'            => __( 'Atributos', 'florence' ),
// 		'parent_item_colon'     => __( 'Artículo principal', 'florence' ),
// 		'all_items'             => __( 'Todos los artículos', 'florence' ),
// 		'add_new_item'          => __( 'Agregar ítem nuevo', 'florence' ),
// 		'add_new'               => __( 'Añadir nuevo', 'florence' ),
// 		'new_item'              => __( 'Nuevo artículo', 'florence' ),
// 		'edit_item'             => __( 'Editar elemento', 'florence' ),
// 		'update_item'           => __( 'Actualizar artículo', 'florence' ),
// 		'view_item'             => __( 'Ver ítem', 'florence' ),
// 		'view_items'            => __( 'Ver artículos', 'florence' ),
// 		'search_items'          => __( 'Buscar artículo', 'florence' ),
// 		'not_found'             => __( 'Extraviado', 'florence' ),
// 		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'florence' ),
// 		'featured_image'        => __( 'Foto principal', 'florence' ),
// 		'set_featured_image'    => __( 'Establecer imagen destacada', 'florence' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'florence' ),
// 		'use_featured_image'    => __( 'Usar como imagen destacada', 'florence' ),
// 		'insert_into_item'      => __( 'Insertar en el elemento', 'florence' ),
// 		'uploaded_to_this_item' => __( 'Subido a este artículo', 'florence' ),
// 		'items_list'            => __( 'Lista de artículos', 'florence' ),
// 		'items_list_navigation' => __( 'Lista de elementos de navegación', 'florence' ),
// 		'filter_items_list'     => __( 'Lista de elementos de filtro', 'florence' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Blog', 'florence' ),
// 		'description'           => __( 'Post Type Description', 'florence' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'taxonomies'            => array(  ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-format-image',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'Blog', $args );

// }
// add_action( 'init', 'post', 0 );

// Register Custom Post Type
function menus() {

	$labels = array(
		'name'                  => _x( 'menus', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Menu Banqueteria', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Menu', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( '', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'menus', $args );

}
add_action( 'init', 'menus', 0 );

// register a taxonomy called 'menus banqueteria'
function wptp_register_taxonomy() {
    register_taxonomy( 'menus_cat', 'menus',
        array(
            'labels' => array(
                'name'              => 'menus banqueteria',
                'singular_name'     => 'menus banqueteria',
                'search_items'      => 'Search menus banqueteria',
                'all_items'         => 'All menus banqueteria',
                'edit_item'         => 'Edit menus banqueteria',
                'update_item'       => 'Update menus banqueteria',
                'add_new_item'      => 'Add New menus banqueteria',
                'new_item_name'     => 'New menus banqueteria Name',
                'menu_name'         => 'menus banqueteria',
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'menus-banqueteria' ),
            'show_admin_column' => true
        )
    );
}
add_action( 'init', 'wptp_register_taxonomy' );