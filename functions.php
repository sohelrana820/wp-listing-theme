<?php

define('TEXT_DOMAIN', 'Transmission');

require_once (dirname(__FILE__) . '/inc/framework/ReduxCore/framework.php');
require_once (dirname(__FILE__) . '/inc/framework/sample/car-house-theme-config.php');
require_once (dirname(__FILE__) . '/inc/meta-box/meta-box.php');

/**
 *
 */
function carHouseThemeSetup()
{
    /**
     *
     */
    load_theme_textdomain( TEXT_DOMAIN );

    /**
     *
     */
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'carHouseThemeSetup');



function custom_post_type_vehicle()
{
    $labels = array(
        'name'                => _x( 'Vehicles', 'Post Type General Name', TEXT_DOMAIN ),
        'singular_name'       => _x( 'Vehicle', 'Post Type Singular Name', TEXT_DOMAIN ),
        'menu_name'           => __( 'Manage Vehicles', TEXT_DOMAIN ),
        'parent_item_colon'   => __( 'Parent Vehicle:', TEXT_DOMAIN ),
        'all_items'           => __( 'All Vehicles', TEXT_DOMAIN ),
        'view_item'           => __( 'View Vehicle', TEXT_DOMAIN ),
        'add_new_item'        => __( 'Add New Vehicle', TEXT_DOMAIN ),
        'add_new'             => __( 'Add New', TEXT_DOMAIN ),
        'edit_item'           => __( 'Edit Vehicle', TEXT_DOMAIN ),
        'update_item'         => __( 'Update Vehicle', TEXT_DOMAIN ),
        'search_items'        => __( 'Search Vehicle', TEXT_DOMAIN ),
        'not_found'           => __( 'Not found', TEXT_DOMAIN ),
        'not_found_in_trash'  => __( 'Not found in Trash', TEXT_DOMAIN ),
    );
    $args = array(
        'label'               => __( 'vehicles', TEXT_DOMAIN ),
        'description'         => __( 'custom post type for vehicles', TEXT_DOMAIN ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
        'taxonomies'          => array( 'models' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 25,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'vehicles', $args );

    register_taxonomy('vehicle_features', 'vehicles', array(
        'hierarchical' => true,
        'label' => 'Features',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Features', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Feature', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Features', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Features', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Feature', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Feature:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Feature Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Feature', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Feature', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Feature', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Features with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Features', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Features', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Features', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));

    register_taxonomy('vehicle_transmissions', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Transmissions',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Transmissions', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Transmission', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Transmissions', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Transmissions', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Transmission', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Transmission:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Transmission Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Transmission', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Transmission', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Transmission', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Transmissions with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Transmissions', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Transmissions', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Transmissions', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));

    register_taxonomy('vehicle_fuels', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Fuels',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Fuels', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Fuel', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Fuels', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Fuels', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Fuel', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Fuel:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Fuel Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Fuel', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Fuel', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Fuel', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Fuels with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Fuels', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Fuels', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Fuels', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));

    register_taxonomy('vehicle_conditions', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Conditions',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Conditions', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Condition', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Conditions', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Conditions', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Condition', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Condition:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Condition Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Condition', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Condition', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Condition', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Conditions with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Conditions', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Conditions', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Conditions', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));

    register_taxonomy('vehicle_brands', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Brands',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Brands', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Brands', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Brands', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Brand', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Brand:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Brand Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Brand', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Brand', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Brand', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Brands with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Brands', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Brands', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Brands', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));

    register_taxonomy('vehicle_categories', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Categories',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name'                       => _x( 'Manage Vehicle\'s Categories', 'Taxonomy General Name', TEXT_DOMAIN ),
            'singular_name'              => _x( 'Categorie', 'Taxonomy Singular Name', TEXT_DOMAIN ),
            'menu_name'                  => __( 'Categories', TEXT_DOMAIN ),
            'all_items'                  => __( 'All Categories', TEXT_DOMAIN ),
            'parent_item'                => __( 'Parent Categorie', TEXT_DOMAIN ),
            'parent_item_colon'          => __( 'Parent Categorie:', TEXT_DOMAIN ),
            'new_item_name'              => __( 'New Categorie Name', TEXT_DOMAIN ),
            'add_new_item'               => __( 'Add New Categorie', TEXT_DOMAIN ),
            'edit_item'                  => __( 'Edit Categorie', TEXT_DOMAIN ),
            'update_item'                => __( 'Update Categorie', TEXT_DOMAIN ),
            'separate_items_with_commas' => __( 'Separate Categories with commas', TEXT_DOMAIN ),
            'search_items'               => __( 'Search Categories', TEXT_DOMAIN ),
            'add_or_remove_items'        => __( 'Add or remove Categories', TEXT_DOMAIN ),
            'choose_from_most_used'      => __( 'Choose from the most used Categories', TEXT_DOMAIN ),
            'not_found'                  => __( 'Not Found', TEXT_DOMAIN ),
        ]
    ));
}

add_action('init', 'custom_post_type_vehicle');

// Adding custom fields in vehicle's
function vehicle_features( $meta_boxes ) {
    $prefix = 'prefix-';

    $meta_boxes[] = array(
        'id' => 'vehicle_features_section',
        'title' => esc_html__( 'Vehicle Features', 'metabox-online-generator' ),
        'post_types' => array( 'vehicles' ),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_features',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Featured', 'metabox-online-generator' ),
                'desc' => esc_html__( 'Please enter your vehicle condition', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_features',
                'field_type' => 'checkbox_list',
            ),
        )
    );

    return $meta_boxes;
}


function vehicle_specifications( $meta_boxes ) {
    $prefix = 'prefix-';

    $meta_boxes[] = array(
        'id' => 'vehicle_specifications_section',
        'title' => esc_html__( 'Vehicle Specifications', 'metabox-online-generator' ),
        'post_types' => array( 'vehicles' ),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_brands',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Brands', 'metabox-online-generator' ),
                'std' => 'Choose',
                'desc' => esc_html__( 'Please enter your vehicle Brand', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Choose Brand', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_brands',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_categories',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Categories', 'metabox-online-generator' ),
                'std' => 'Choose',
                'desc' => esc_html__( 'Please enter your vehicle category', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Choose Category', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_categories',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_conditions',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Conditions', 'metabox-online-generator' ),
                'std' => 'Choose',
                'desc' => esc_html__( 'Please enter your vehicle condition', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Choose Catgory', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_conditions',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_fuels',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Fuels', 'metabox-online-generator' ),
                'std' => 'Choose',
                'desc' => esc_html__( 'Please enter your vehicle fuel', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Choose Fuel', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_fuels',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_transmissions',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__( 'Transmissions', 'metabox-online-generator' ),
                'std' => 'Choose',
                'desc' => esc_html__( 'Please enter your vehicle transmission', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Choose Transmission', 'metabox-online-generator' ),
                'taxonomy' => 'vehicle_transmissions',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_model',
                'type' => 'text',
                'name' => esc_html__( 'Model', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Model', 'metabox-online-generator' ),
            ),
            array(
                'id' => $prefix . 'engine',
                'type' => 'text',
                'name' => esc_html__( 'Engine', 'metabox-online-generator' ),
                'placeholder' => esc_html__( 'Engine', 'metabox-online-generator' ),
            ),
            'validation' => array(
                'rules'    => array(
                    "vehicle_model" => array(
                        'required'  => true,
                        'minlength' => 7,
                    ),
                ),
                // Optional override of default error messages
                'messages' => array(
                    "vehicle_model" => array(
                        'required'  => __( 'Password is required', 'vehicle_model' ),
                        'minlength' => __( 'Password must be at least 7 characters', 'vehicle_model' ),
                    ),
                )
            )
        ),
    );

    return $meta_boxes;
}


function vehicle_gullary( $meta_boxes ) {
    $prefix = 'prefix-';

    $meta_boxes[] = array(
        'id' => 'vehicle_gullary_section',
        'title' => esc_html__( 'Vehicle Features', 'metabox-online-generator' ),
        'post_types' => array( 'page' ),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_gullary',
                'type' => 'image_advanced',
                'name' => esc_html__( 'Vehicle Gullary', 'metabox-online-generator' ),
                'max_status' => true,
                'clone' => true,
                'max_clone' => 100,
                'sort_clone' => true,
            ),
            array(
                'id' => $prefix . 'vehicle_files',
                'type' => 'file_advanced',
                'name' => esc_html__( 'Vehicle Files', 'metabox-online-generator' ),
                'max_file_uploads' => 20,
                'max_status' => true,
                'size' => 2048,
            )
        )
    );

    return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'vehicle_features' );
add_filter( 'rwmb_meta_boxes', 'vehicle_specifications' );
add_filter( 'rwmb_meta_boxes', 'vehicle_gullary' );


