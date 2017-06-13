<?php

define('TEXT_DOMAIN', 'carhouse');

require_once(dirname(__FILE__) . '/inc/framework/ReduxCore/framework.php');
require_once(dirname(__FILE__) . '/inc/framework/sample/car-house-theme-config.php');
require_once(dirname(__FILE__) . '/inc/meta-box/meta-box.php');

/**
 *
 */
function carHouseThemeSetup()
{
    /**
     *
     */
    load_theme_textdomain(TEXT_DOMAIN);

    /**
     *
     */
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'carHouseThemeSetup');


function custom_post_type_vehicle()
{
    $labels = array(
        'name' => _x('Vehicles', 'Post Type General Name', TEXT_DOMAIN),
        'singular_name' => _x('Vehicle', 'Post Type Singular Name', TEXT_DOMAIN),
        'menu_name' => __('Manage Vehicles', TEXT_DOMAIN),
        'parent_item_colon' => __('Parent Vehicle:', TEXT_DOMAIN),
        'all_items' => __('All Vehicles', TEXT_DOMAIN),
        'view_item' => __('View Vehicle', TEXT_DOMAIN),
        'add_new_item' => __('Add New Vehicle', TEXT_DOMAIN),
        'add_new' => __('Add New', TEXT_DOMAIN),
        'edit_item' => __('Edit Vehicle', TEXT_DOMAIN),
        'update_item' => __('Update Vehicle', TEXT_DOMAIN),
        'search_items' => __('Search Vehicle', TEXT_DOMAIN),
        'not_found' => __('Not found', TEXT_DOMAIN),
        'not_found_in_trash' => __('Not found in Trash', TEXT_DOMAIN),
    );
    $args = array(
        'label' => __('vehicles', TEXT_DOMAIN),
        'description' => __('custom post type for vehicles', TEXT_DOMAIN),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats',),
        'taxonomies' => array('models'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 25,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('vehicles', $args);

    register_taxonomy('vehicle_features', 'vehicles', array(
        'hierarchical' => true,
        'label' => 'Features',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Features', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Feature', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Features', TEXT_DOMAIN),
            'all_items' => __('All Features', TEXT_DOMAIN),
            'parent_item' => __('Parent Feature', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Feature:', TEXT_DOMAIN),
            'new_item_name' => __('New Feature Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Feature', TEXT_DOMAIN),
            'edit_item' => __('Edit Feature', TEXT_DOMAIN),
            'update_item' => __('Update Feature', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Features with commas', TEXT_DOMAIN),
            'search_items' => __('Search Features', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Features', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Features', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));

    register_taxonomy('vehicle_transmissions', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Transmissions',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Transmissions', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Transmission', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Transmissions', TEXT_DOMAIN),
            'all_items' => __('All Transmissions', TEXT_DOMAIN),
            'parent_item' => __('Parent Transmission', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Transmission:', TEXT_DOMAIN),
            'new_item_name' => __('New Transmission Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Transmission', TEXT_DOMAIN),
            'edit_item' => __('Edit Transmission', TEXT_DOMAIN),
            'update_item' => __('Update Transmission', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Transmissions with commas', TEXT_DOMAIN),
            'search_items' => __('Search Transmissions', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Transmissions', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Transmissions', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));

    register_taxonomy('vehicle_fuels', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Fuels',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Fuels', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Fuel', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Fuels', TEXT_DOMAIN),
            'all_items' => __('All Fuels', TEXT_DOMAIN),
            'parent_item' => __('Parent Fuel', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Fuel:', TEXT_DOMAIN),
            'new_item_name' => __('New Fuel Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Fuel', TEXT_DOMAIN),
            'edit_item' => __('Edit Fuel', TEXT_DOMAIN),
            'update_item' => __('Update Fuel', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Fuels with commas', TEXT_DOMAIN),
            'search_items' => __('Search Fuels', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Fuels', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Fuels', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));

    register_taxonomy('vehicle_conditions', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Conditions',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Conditions', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Condition', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Conditions', TEXT_DOMAIN),
            'all_items' => __('All Conditions', TEXT_DOMAIN),
            'parent_item' => __('Parent Condition', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Condition:', TEXT_DOMAIN),
            'new_item_name' => __('New Condition Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Condition', TEXT_DOMAIN),
            'edit_item' => __('Edit Condition', TEXT_DOMAIN),
            'update_item' => __('Update Condition', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Conditions with commas', TEXT_DOMAIN),
            'search_items' => __('Search Conditions', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Conditions', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Conditions', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));

    register_taxonomy('vehicle_brands', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Brands',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Brands', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Brand', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Brands', TEXT_DOMAIN),
            'all_items' => __('All Brands', TEXT_DOMAIN),
            'parent_item' => __('Parent Brand', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Brand:', TEXT_DOMAIN),
            'new_item_name' => __('New Brand Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Brand', TEXT_DOMAIN),
            'edit_item' => __('Edit Brand', TEXT_DOMAIN),
            'update_item' => __('Update Brand', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Brands with commas', TEXT_DOMAIN),
            'search_items' => __('Search Brands', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Brands', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Brands', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));

    register_taxonomy('vehicle_categories', 'vehicles', array(
        'hierarchical' => false,
        'label' => 'Categories',
        'query_var' => true,
        'rewrite' => true,
        'description' => '',
        'labels' => [
            'name' => _x('Manage Vehicle\'s Categories', 'Taxonomy General Name', TEXT_DOMAIN),
            'singular_name' => _x('Categorie', 'Taxonomy Singular Name', TEXT_DOMAIN),
            'menu_name' => __('Categories', TEXT_DOMAIN),
            'all_items' => __('All Categories', TEXT_DOMAIN),
            'parent_item' => __('Parent Categorie', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Categorie:', TEXT_DOMAIN),
            'new_item_name' => __('New Categorie Name', TEXT_DOMAIN),
            'add_new_item' => __('Add New Categorie', TEXT_DOMAIN),
            'edit_item' => __('Edit Categorie', TEXT_DOMAIN),
            'update_item' => __('Update Categorie', TEXT_DOMAIN),
            'separate_items_with_commas' => __('Separate Categories with commas', TEXT_DOMAIN),
            'search_items' => __('Search Categories', TEXT_DOMAIN),
            'add_or_remove_items' => __('Add or remove Categories', TEXT_DOMAIN),
            'choose_from_most_used' => __('Choose from the most used Categories', TEXT_DOMAIN),
            'not_found' => __('Not Found', TEXT_DOMAIN),
        ]
    ));
}

add_action('init', 'custom_post_type_vehicle');

/**
 * *********************************************
 * ***** Start Adding Vehicle Custom Fields ****
 * *********************************************
 */

/**
 * @param $meta_boxes
 * @return array
 */
function vehicle_specifications($meta_boxes)
{
    $prefix = TEXT_DOMAIN . '_';

    $meta_boxes[] = array(
        'id' => 'vehicle_specifications_section',
        'title' => esc_html__('Vehicle Specifications', TEXT_DOMAIN),
        'post_types' => array('vehicles'),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_main_image',
                'type' => 'image_advanced',
                'name' => esc_html__('Main Image', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_brands',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Brands', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle Brand', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Brand', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_brands',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_categories',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Categories', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle category', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Category', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_categories',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_conditions',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Conditions', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle condition', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Catgory', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_conditions',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_fuels',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Fuels', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle fuel', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Fuel', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_fuels',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_transmissions',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Transmissions', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle transmission', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Transmission', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_transmissions',
                'field_type' => 'select',
            ),
            array(
                'id' => $prefix . 'vehicle_model',
                'type' => 'text',
                'name' => esc_html__('Model', TEXT_DOMAIN),
                'placeholder' => esc_html__('Model', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_listing_price',
                'type' => 'number',
                'name' => esc_html__('Listing Price', TEXT_DOMAIN),
                'placeholder' => esc_html__('Listing Price', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_sale_price',
                'type' => 'number',
                'name' => esc_html__('Sale Price', TEXT_DOMAIN),
                'placeholder' => esc_html__('Sale Price', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_stock',
                'type' => 'number',
                'name' => esc_html__('Stock', TEXT_DOMAIN),
                'placeholder' => esc_html__('Stock', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_vin',
                'type' => 'number',
                'name' => esc_html__('#VIN', TEXT_DOMAIN),
                'placeholder' => esc_html__('VIN', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_for',
                'name' => esc_html__('Select', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose One', TEXT_DOMAIN),
                'options' => array(
                    'Sale' => 'Sale',
                    'Rent' => 'Rent',
                ),
            ),
            array(
                'id' => $prefix . 'vehicle_is_featured',
                'name' => esc_html__( 'Featured Vehicle?', TEXT_DOMAIN ),
                'type' => 'checkbox',
                'desc' => esc_html__( 'is it featured vehicle?', TEXT_DOMAIN ),
            ),
            array(
                'id' => $prefix . 'vehicle_expiry',
                'type' => 'date',
                'name' => esc_html__('Expire', TEXT_DOMAIN),
                'placeholder' => esc_html__('Expire', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_manufacture_year',
                'type' => 'date',
                'name' => esc_html__('Manufacture', TEXT_DOMAIN),
                'placeholder' => esc_html__('Manufacture', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_engine',
                'type' => 'text',
                'name' => esc_html__('Engine', TEXT_DOMAIN),
                'placeholder' => esc_html__('Engine', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_horse_power',
                'type' => 'text',
                'name' => esc_html__('Horse Power', TEXT_DOMAIN),
                'placeholder' => esc_html__('Horse Power', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_interior_color',
                'name' => esc_html__('Select', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose Color', TEXT_DOMAIN),
                'options' => array(
                    'Black' => 'Black',
                    'Silver' => 'Silver',
                    'Gray' => 'Gray',
                    'Red' => 'Red',
                    'Blue' => 'Blue',
                    'Beige' => 'Beige',
                    'Green' => 'Green',
                    'Gold' => 'Gold',
                    'Yellow' => 'Yellow',
                    'Burgundy' => 'Burgundy',
                    'Charcoal' => 'Charcoal',
                    'Pink' => 'Pink',
                    'Tan' => 'Tan',
                    'Turquoise' => 'Turquoise',
                    'Other' => 'Other',
                ),
            ),
            array(
                'id' => $prefix . 'vehicle_exterior_color',
                'name' => esc_html__('Select', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose Color', TEXT_DOMAIN),
                'options' => array(
                    'Black' => 'Black',
                    'Silver' => 'Silver',
                    'Gray' => 'Gray',
                    'Red' => 'Red',
                    'Blue' => 'Blue',
                    'Beige' => 'Beige',
                    'Green' => 'Green',
                    'Gold' => 'Gold',
                    'Yellow' => 'Yellow',
                    'Burgundy' => 'Burgundy',
                    'Charcoal' => 'Charcoal',
                    'Pink' => 'Pink',
                    'Tan' => 'Tan',
                    'Turquoise' => 'Turquoise',
                    'Other' => 'Other',
                ),
            ),
            array(
                'id' => $prefix . 'vehicle_top_speed',
                'type' => 'number',
                'name' => esc_html__('Top Speed', TEXT_DOMAIN),
                'placeholder' => esc_html__('Top Speed', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_doors',
                'type' => 'number',
                'name' => esc_html__('Doors', TEXT_DOMAIN),
                'placeholder' => esc_html__('Doors', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_body_style',
                'type' => 'text',
                'name' => esc_html__('Body Style', TEXT_DOMAIN),
                'placeholder' => esc_html__('Body Style', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_passengers',
                'type' => 'text',
                'name' => esc_html__('Passengers', TEXT_DOMAIN),
                'placeholder' => esc_html__('Passengers', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_odometer',
                'type' => 'text',
                'name' => esc_html__('Odometer', TEXT_DOMAIN),
                'placeholder' => esc_html__('Odometer (Km)', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_torque',
                'type' => 'number',
                'name' => esc_html__('Torque', TEXT_DOMAIN),
                'placeholder' => esc_html__('Torque', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_drive_train',
                'type' => 'text',
                'name' => esc_html__('Drive Train', TEXT_DOMAIN),
                'placeholder' => esc_html__('Drive Train', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_towing_capacity',
                'type' => 'text',
                'name' => esc_html__('Towing Capacity', TEXT_DOMAIN),
                'placeholder' => esc_html__('Towing Capacity', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_mileage',
                'type' => 'number',
                'name' => esc_html__('Mileage', TEXT_DOMAIN),
                'placeholder' => esc_html__('Mileage', TEXT_DOMAIN),
            ),
            array(
                'id' => $prefix . 'vehicle_miles',
                'type' => 'number',
                'name' => esc_html__('Miles', TEXT_DOMAIN),
                'placeholder' => esc_html__('Miles', TEXT_DOMAIN),
            ),
        ),
    );

    return $meta_boxes;
}

/**
 * @param $meta_boxes
 * @return array
 */
function vehicle_features($meta_boxes)
{
    $prefix = TEXT_DOMAIN . '_';

    $meta_boxes[] = array(
        'id' => 'vehicle_features_section',
        'title' => esc_html__('Vehicle Features', TEXT_DOMAIN),
        'post_types' => array('vehicles'),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_features',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Featured', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_features',
                'field_type' => 'checkbox_list',
            ),
        )
    );

    return $meta_boxes;
}

/**
 * @param $meta_boxes
 * @return array
 */
function vehicle_gullaries($meta_boxes)
{
    $prefix = TEXT_DOMAIN . '_';

    $meta_boxes[] = array(
        'id' => 'vehicle_features_gullaries',
        'title' => esc_html__('Vehicle Gullaries', TEXT_DOMAIN),
        'post_types' => array('vehicles'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'vehicle_gullaries',
                'type' => 'image_advanced',
                'name' => esc_html__('Imges', TEXT_DOMAIN),
                'desc' => esc_html__('Enter vehicle imges', TEXT_DOMAIN),
                'max_file_uploads' => '20',
                'max_clone' => 20,
                'max_status' => true,
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'vehicle_specifications');
add_filter('rwmb_meta_boxes', 'vehicle_features');
add_filter('rwmb_meta_boxes', 'vehicle_gullaries');

/**
 * *********************************************
 * ****** End Adding Vehicle Custom Fields *****
 * *********************************************
 */
