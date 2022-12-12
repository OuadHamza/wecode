<?php

function init_myTheme() {
		
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

$template_directory_uri = get_template_directory();  

require_once $template_directory_uri ."/inc/nqv.php";

add_action('after_setup_theme', 'init_myTheme');

function myTheme_menus() {
    register_nav_menus(
        array(
            'top-menu' 	  => __( 'Top Menu', 'radeema' ),
            'bottom-menu' => __( 'Bottom Menu', 'radeema' ),
        )
    );
}

add_action( 'init', 'myTheme_menus' );


register_post_type( 'post-client',
		array(
			'labels'            => array(
				'name'               => __( 'Clients', 'radeema' ),
				'singular_name'      => __( 'Client', 'radeema' ),
				'add_new_item'       => __( 'Ajouter client procédure' ),
				'all_items'          => __( 'client procédure' ),
				'update_item'        => __( 'Update client procédure' ),
				'search_items'       => __( 'Search client procédure' ),
			),
			'public'            => true,			
			'has_archive'       => true,
			'show_in_nav_menus' => false,
			'menu_icon'         => 'dashicons-businessperson',
			'supports'          => array( 
				'title',
				'editor',
			),
			'register_meta_box_cb' => 'metabox_remove_seo',
		)
	);

	$labels = array(
		'name'              => _x( 'client categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'client category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search client categories' ),
		'popular_items'     => __( 'Popular client categories' ),
		'all_items'         => __( 'All client categories' ),
		'parent_item'       => __( 'Parent client category' ),
		'parent_item_colon' => __( 'Parent client category:' ),
		'edit_item'         => __( 'Edit client category' ),
		'update_item'       => __( 'Update client category' ),
		'add_new_item'      => __( 'Add New client category' ),
		'new_item_name'     => __( 'New client category Name' ),
	);
	register_taxonomy('client-cat',array('post-client'), array(
		'hierarchical' 	    => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_in_nav_menus' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'client-cat' ),
	));

?>