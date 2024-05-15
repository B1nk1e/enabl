<?php

/**
 * Register custom post type
 */

namespace App;

add_action('init', function () {
    register_post_type('cases', array(
        'labels' => array(
            'name' => __('Cases', 'sage'),
            'singular_name' => __('Case', 'sage'),
            'menu_name' => __('Cases', 'sage'),
            'name_admin_bar' => __('Referenties', 'sage'),
            'all_items' => __( 'Alle cases', 'sage' ),
            'add_new_item' => __( 'Case toevoegen', 'sage' ),
            'add_new' => __( 'Case toevoegen', 'sage' ),
            'new_item' => __( 'Case toevoegen', 'sage' ),
            'edit_item' => __( 'Case wijzigingen', 'sage' ),
            'update_item' => __( 'Case wijzigingen', 'sage' ),
            'view_item' => __( 'Case bekijken', 'sage' ),
            'view_items' => __( 'Case bekijken', 'sage' ),
        ),
        'description' => 'Cases',
        'supports' => array('title', 'custom-fields', 'page-attributes'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-grid-view',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'cases',
            'with_front' => true
        ),
    ));

    register_post_type('team', array(
        'labels' => array(
            'name' => __('Medewerkers', 'sage'),
            'singular_name' => __('Medewerker', 'sage'),
            'menu_name' => __('Medewerkers', 'sage'),
            'name_admin_bar' => __('Medewerkers', 'sage'),
            'all_items' => __( 'Alle medewerkers', 'sage' ),
            'add_new_item' => __( 'Medewerker toevoegen', 'sage' ),
            'add_new' => __( 'Mederwerker toevoegen', 'sage' ),
            'new_item' => __( 'Medewerker toevoegen', 'sage' ),
            'edit_item' => __( 'Medewerker wijzigingen', 'sage' ),
            'update_item' => __( 'Medewerker wijzigingen', 'sage' ),
            'view_item' => __( 'Medewerker bekijken', 'sage' ),
            'view_items' => __( 'Medewerker bekijken', 'sage' ),
        ),
        'description' => 'team',
        'supports' => array('title', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
    ));

    register_post_type('services', array(
        'labels' => array(
            'name' => __('Diensten', 'sage'),
            'singular_name' => __('Dienst', 'sage'),
            'menu_name' => __('Diensten', 'sage'),
            'name_admin_bar' => __('Diensten', 'sage'),
            'all_items' => __( 'Alle diensten', 'sage' ),
            'add_new_item' => __( 'Dienst toevoegen', 'sage' ),
            'add_new' => __( 'Dienst toevoegen', 'sage' ),
            'new_item' => __( 'Dienst toevoegen', 'sage' ),
            'edit_item' => __( 'Dienst wijzigingen', 'sage' ),
            'update_item' => __( 'Dienst wijzigingen', 'sage' ),
            'view_item' => __( 'Dienst bekijken', 'sage' ),
            'view_items' => __( 'Dienst bekijken', 'sage' ),
        ),
        'description' => 'services',
        'supports' => array('title', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-slides',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'services',
            'with_front' => true
        ),
    ));

    register_post_type('vacancy', array(
        'labels' => array(
            'name' => __('Vacatures', 'sage'),
            'singular_name' => __('Vacature', 'sage'),
            'menu_name' => __('Vacatures', 'sage'),
            'name_admin_bar' => __('Vacatures', 'sage'),
            'all_items' => __( 'Alle vacatures', 'sage' ),
            'add_new_item' => __( 'Vacature toevoegen', 'sage' ),
            'add_new' => __( 'Vacature toevoegen', 'sage' ),
            'new_item' => __( 'Vacature toevoegen', 'sage' ),
            'edit_item' => __( 'Vacature wijzigingen', 'sage' ),
            'update_item' => __( 'Vacature wijzigingen', 'sage' ),
            'view_item' => __( 'Vacature bekijken', 'sage' ),
            'view_items' => __( 'Vacature bekijken', 'sage' ),
        ),
        'description' => 'vacancy',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-id',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'vacancy',
            'with_front' => true
        ),
    ));

    flush_rewrite_rules(true);
});
