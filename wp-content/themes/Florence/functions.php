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

function post() {

	$labels = array(
		'name'                  => _x( 'Blog', 'Post Type General Name', 'florence' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'florence' ),
		'menu_name'             => __( 'Blog', 'florence' ),
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
		'label'                 => __( 'Blog', 'florence' ),
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
	register_post_type( 'Blog', $args );

}
add_action( 'init', 'post', 0 );