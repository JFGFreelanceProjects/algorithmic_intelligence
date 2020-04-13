<?php
if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif;

//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Register portfolio post type
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    function tt_portfolio_post_type() {

        $labels = array(
            'name'               => _x('Portfolio', 'tt-pl-textdomain'),
            'singular_name'      => _x('Portfolio', 'tt-pl-textdomain'),
            'menu_name'          => __('Portfolio', 'tt-pl-textdomain'),
            'parent_item_colon'  => __('Parent Portfolio:', 'tt-pl-textdomain'),
            'all_items'          => __('All Portfolio', 'tt-pl-textdomain'),
            'view_item'          => __('View Portfolio', 'tt-pl-textdomain'),
            'add_new_item'       => __('Add New Portfolio', 'tt-pl-textdomain'),
            'add_new'            => __('Add New', 'tt-pl-textdomain'),
            'edit_item'          => __('Edit Portfolio', 'tt-pl-textdomain'),
            'update_item'        => __('Update Portfolio', 'tt-pl-textdomain'),
            'search_items'       => __('Search Portfolio', 'tt-pl-textdomain'),
            'not_found'          => __('No Portfolio found', 'tt-pl-textdomain'),
            'not_found_in_trash' => __('No Portfolio found in Trash', 'tt-pl-textdomain'),
        );
        $args = array(
            'description'         => __('Portfolio', 'tt-pl-textdomain'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'page-attributes','thumbnail', 'comments'),
            'taxonomies'          => array('tt-portfolio-cat'),
            'hierarchical'        => FALSE,
            'public'              => TRUE,
            'show_ui'             => TRUE,
            'show_in_menu'        => TRUE,
            'show_in_nav_menus'   => TRUE,
            'show_in_admin_bar'   => TRUE,
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-schedule',
            'can_export'          => TRUE,
            'has_archive'         => FALSE,
            'exclude_from_search' => TRUE,
            'publicly_queryable'  => TRUE,
            'rewrite'             => array( 'slug' => 'portfolio' ),
            'capability_type'     => 'post',
        );

        register_post_type('tt-portfolio', $args);
    }

    add_action('init', 'tt_portfolio_post_type');



//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Register taxonomy for portfolio 
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    function tt_register_taxonomy_portfolio_cat() {

        $labels = array(
            'name'                          => _x( 'Category', 'tt-pl-textdomain' ),
            'singular_name'                 => _x( 'Category', 'tt-pl-textdomain' ),
            'search_items'                  => _x( 'Search Category', 'tt-pl-textdomain' ),
            'popular_items'                 => _x( 'Popular Category', 'tt-pl-textdomain' ),
            'all_items'                     => _x( 'All Categories', 'tt-pl-textdomain' ),
            'parent_item'                   => _x( 'Parent Category', 'tt-pl-textdomain' ),
            'parent_item_colon'             => _x( 'Parent Category:', 'tt-pl-textdomain' ),
            'edit_item'                     => _x( 'Edit Category', 'tt-pl-textdomain' ),
            'update_item'                   => _x( 'Update Category', 'tt-pl-textdomain' ),
            'add_new_item'                  => _x( 'Add New Category', 'tt-pl-textdomain' ),
            'new_item_name'                 => _x( 'New Category', 'tt-pl-textdomain' ),
            'separate_items_with_commas'    => _x( 'Separate categories with commas', 'tt-pl-textdomain' ),
            'add_or_remove_items'           => _x( 'Add or remove categories', 'tt-pl-textdomain' ),
            'choose_from_most_used'         => _x( 'Choose from most used categories', 'tt-pl-textdomain' ),
            'menu_name'                     => _x( 'Categories', 'tt-pl-textdomain' ),
        );

        $args = array(
            'labels'            => $labels,
            'public'            => true,
            'show_in_nav_menus' => true,
            'show_ui'           => true,
            'show_tagcloud'     => false,
            'show_admin_column' => true,
            'hierarchical'      => true,
            'rewrite'           => array( 'slug' => 'portfolio-category' ),
            'query_var'         => true
        );

        register_taxonomy( 'tt-portfolio-cat', array('tt-portfolio'), $args );
    }

    add_action( 'init', 'tt_register_taxonomy_portfolio_cat' );




//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Register member post type
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    function tt_member_post_type() {

        $labels = array(
            'name'               => _x('Member', 'tt-pl-textdomain'),
            'singular_name'      => _x('Member', 'tt-pl-textdomain'),
            'menu_name'          => __('Members', 'tt-pl-textdomain'),
            'parent_item_colon'  => __('Parent Member:', 'tt-pl-textdomain'),
            'all_items'          => __('All Members', 'tt-pl-textdomain'),
            'view_item'          => __('View Member', 'tt-pl-textdomain'),
            'add_new_item'       => __('Add New Member', 'tt-pl-textdomain'),
            'add_new'            => __('Add New', 'tt-pl-textdomain'),
            'edit_item'          => __('Edit Member', 'tt-pl-textdomain'),
            'update_item'        => __('Update Member', 'tt-pl-textdomain'),
            'search_items'       => __('Search Member', 'tt-pl-textdomain'),
            'not_found'          => __('No Member found', 'tt-pl-textdomain'),
            'not_found_in_trash' => __('No Member found in Trash', 'tt-pl-textdomain'),
        );
        $args = array(
            'description'         => __('Member', 'tt-pl-textdomain'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'page-attributes','thumbnail', 'comments'),
            'taxonomies'          => array(),
            'hierarchical'        => FALSE,
            'public'              => TRUE,
            'show_ui'             => TRUE,
            'show_in_menu'        => TRUE,
            'show_in_nav_menus'   => TRUE,
            'show_in_admin_bar'   => TRUE,
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-admin-users',
            'can_export'          => TRUE,
            'has_archive'         => FALSE,
            'exclude_from_search' => TRUE,
            'publicly_queryable'  => TRUE,
            'rewrite'             => array( 'slug' => 'member' ),
            'capability_type'     => 'post',
        );

        register_post_type('tt-member', $args);
    }

    add_action('init', 'tt_member_post_type');