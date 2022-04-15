<?php

function woodlandgroove_register_post_type() {
    $singular = 'Custom post type name'; // Book
	$plural = 'Custom post type names';  // Books

    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'woodlandgroove' ),
        'singular_name' 	  => __( $singular, 'woodlandgroove' ),
        'add_new' 		      => _x( 'Add New', 'woodlandgroove', 'woodlandgroove' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'woodlandgroove' ),
        'edit'		          => __( 'Edit', 'woodlandgroove' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'woodlandgroove' ),
        'new_item'	          => __( 'New ' . $singular, 'woodlandgroove' ),
        'view' 			      => __( 'View ' . $singular, 'woodlandgroove' ),
        'view_item' 		  => __( 'View ' . $singular, 'woodlandgroove' ),
        'search_term'   	  => __( 'Search ' . $plural, 'woodlandgroove' ),
        'parent' 		      => __( 'Parent ' . $singular, 'woodlandgroove' ),
        'not_found'           => __( 'No ' . $plural .' found', 'woodlandgroove' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'woodlandgroove' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'woodlandgroove_register_post_type' );