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


/**
 * *********************************************
 * ******** Start Manage Vehicle Section *******
 * *********************************************
 */

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
 * @param $meta_boxes
 * @return array
 */
function vehicle_specifications($meta_boxes)
{
    $meta_boxes[] = array(
        'id' => 'vehicle_specifications_section',
        'title' => esc_html__('Vehicle Specifications', TEXT_DOMAIN),
        'post_types' => array('vehicles'),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => 'vehicle_main_image',
                'type' => 'image_advanced',
                'name' => esc_html__('Main Image', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_short_description',
                'type' => 'textarea',
                'name' => esc_html__( 'Short Description', TEXT_DOMAIN ),
                'placeholder' => esc_html__( 'Short Description', TEXT_DOMAIN ),
                'rows' => 5,
            ),
            array(
                'id' => 'vehicle_brand',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Brands', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle Brand', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Brand', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_brands',
                'field_type' => 'select',
            ),
            array(
                'id' => 'vehicle_category',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Categories', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle category', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Category', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_categories',
                'field_type' => 'select',
            ),
            array(
                'id' => 'vehicle_condition',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Conditions', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle condition', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Catgory', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_conditions',
                'field_type' => 'select',
            ),
            array(
                'id' => 'vehicle_fuel',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Fuels', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle fuel', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Fuel', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_fuels',
                'field_type' => 'select',
            ),
            array(
                'id' => 'vehicle_transmission',
                'type' => 'taxonomy_advanced',
                'name' => esc_html__('Transmissions', TEXT_DOMAIN),
                'std' => 'Choose',
                'desc' => esc_html__('Please enter your vehicle transmission', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Transmission', TEXT_DOMAIN),
                'taxonomy' => 'vehicle_transmissions',
                'field_type' => 'select',
            ),
            array(
                'id' => 'vehicle_listing_price',
                'type' => 'number',
                'name' => esc_html__('Listing Price', TEXT_DOMAIN),
                'placeholder' => esc_html__('Listing Price', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_sale_price',
                'type' => 'number',
                'name' => esc_html__('Sale Price', TEXT_DOMAIN),
                'placeholder' => esc_html__('Sale Price', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_stock',
                'type' => 'number',
                'name' => esc_html__('Stock', TEXT_DOMAIN),
                'placeholder' => esc_html__('Stock', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_vin',
                'type' => 'number',
                'name' => esc_html__('#VIN', TEXT_DOMAIN),
                'placeholder' => esc_html__('VIN', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_for',
                'name' => esc_html__('Select', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose One', TEXT_DOMAIN),
                'options' => array(
                    'Sale' => 'Sale',
                    'Rent' => 'Rent',
                ),
            ),
            array(
                'id' => 'vehicle_status',
                'name' => esc_html__('vehicle_status', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose Status', TEXT_DOMAIN),
                'options' => array(
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'paused' => 'Paused',
                    'invalid' => 'Invalid',
                    'denied' => 'Denied',
                ),
            ),
            array(
                'id' => 'vehicle_is_featured',
                'name' => esc_html__( 'Featured Vehicle?', TEXT_DOMAIN ),
                'type' => 'checkbox',
                'desc' => esc_html__( 'is it featured vehicle?', TEXT_DOMAIN ),
            ),
            array(
                'id' => 'vehicle_expiry',
                'type' => 'date',
                'name' => esc_html__('Expire', TEXT_DOMAIN),
                'placeholder' => esc_html__('Expire', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_manufacture_year',
                'type' => 'date',
                'name' => esc_html__('Manufacture', TEXT_DOMAIN),
                'placeholder' => esc_html__('Manufacture', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_engine',
                'type' => 'text',
                'name' => esc_html__('Engine', TEXT_DOMAIN),
                'placeholder' => esc_html__('Engine', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_horse_power',
                'type' => 'text',
                'name' => esc_html__('Horse Power', TEXT_DOMAIN),
                'placeholder' => esc_html__('Horse Power', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_interior_color',
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
                'id' => 'vehicle_exterior_color',
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
                'id' => 'vehicle_top_speed',
                'type' => 'number',
                'name' => esc_html__('Top Speed', TEXT_DOMAIN),
                'placeholder' => esc_html__('Top Speed', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_doors',
                'type' => 'number',
                'name' => esc_html__('Doors', TEXT_DOMAIN),
                'placeholder' => esc_html__('Doors', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_body_style',
                'type' => 'text',
                'name' => esc_html__('Body Style', TEXT_DOMAIN),
                'placeholder' => esc_html__('Body Style', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_passengers',
                'type' => 'text',
                'name' => esc_html__('Passengers', TEXT_DOMAIN),
                'placeholder' => esc_html__('Passengers', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_odometer',
                'type' => 'text',
                'name' => esc_html__('Odometer', TEXT_DOMAIN),
                'placeholder' => esc_html__('Odometer (Km)', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_torque',
                'type' => 'number',
                'name' => esc_html__('Torque', TEXT_DOMAIN),
                'placeholder' => esc_html__('Torque', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_drive_train',
                'type' => 'text',
                'name' => esc_html__('Drive Train', TEXT_DOMAIN),
                'placeholder' => esc_html__('Drive Train', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_towing_capacity',
                'type' => 'text',
                'name' => esc_html__('Towing Capacity', TEXT_DOMAIN),
                'placeholder' => esc_html__('Towing Capacity', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_mileage',
                'type' => 'number',
                'name' => esc_html__('Mileage', TEXT_DOMAIN),
                'placeholder' => esc_html__('Mileage', TEXT_DOMAIN),
            ),
            array(
                'id' => 'vehicle_miles',
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
    $meta_boxes[] = array(
        'id' => 'vehicle_features_section',
        'title' => esc_html__('Vehicle Features', TEXT_DOMAIN),
        'post_types' => array('vehicles'),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => 'vehicle_features',
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
    $meta_boxes[] = array(
        'id' => 'vehicle_features_gullaries',
        'title' => esc_html__('Vehicle Gullaries', TEXT_DOMAIN),
        'post_types' => array('Listing (list layout)'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => 'vehicle_gullaries',
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
 * Manage vehicles features header's column name
 */

function manage_vehicles_tables_headers()
{
    $columns = [
        'cb' => '<input type="checkbox"/>',
        'title' => 'Name of Vehicle',
        'price' => 'Price',
        'featured' => 'Featured',
        'status' => 'Status',
        'modified' => 'Last Modified'
    ];
    return $columns;
}
add_filter('manage_edit-vehicles_columns', 'manage_vehicles_tables_headers');


/**
 * Manage vehicles column's values
 * @param $column
 * @param $postID
 */
function manage_vehicles_columns_values($column, $postID)
{

    $result = '';
    switch ($column) {
        case 'status':
            $result = ucfirst(get_field('vehicle_status', $postID));
            if(!$result) {
                $result = 'N/A';
            }
            break;
        case 'featured':
            $result = get_field('vehicle_is_featured', $postID);
            if($result){
                $result = 'Yes';
            } else {
                $result = 'No';
            }
            break;
        case 'price':
            $result = '$'. number_format(get_field('vehicle_sale_price', $postID), 2);
            break;
        case 'modified':
            $result = the_modified_date('M j, Y');
            break;
    }
    echo $result;
}
add_filter('manage_vehicles_posts_custom_column', 'manage_vehicles_columns_values', 1, 2);

/**
 * @param $query
 * @return WP_Query
 */
function getActiveVehicles($query)
{
    $defaultQuery = array(
        'post_type' => 'vehicles',
        'meta_query' => array(
            array(
                'key'     => 'vehicle_status',
                'value'   => 'active',
                'compare' => '=',
            )
        ),
        'posts_per_page' => 3
    );

    $defaultQuery = array_merge($defaultQuery, $query);
    return new WP_Query($defaultQuery);
}

/**
 * *********************************************
 * ********* End Manage Vehicle Section ********
 * *********************************************
 */




/**
 * *********************************************
 * **********Start Testimonial Section *********
 * *********************************************
 */

function custom_post_type_testimonial()
{
    $labels = array(
        'name' => _x('Testimonial', 'Post Type General Name', TEXT_DOMAIN),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', TEXT_DOMAIN),
        'menu_name' => __('Manage Testimonials', TEXT_DOMAIN),
        'parent_item_colon' => __('Parent Testimonial:', TEXT_DOMAIN),
        'all_items' => __('All Testimonials', TEXT_DOMAIN),
        'view_item' => __('View Testimonial', TEXT_DOMAIN),
        'add_new_item' => __('Add New Testimonial', TEXT_DOMAIN),
        'add_new' => __('Add New', TEXT_DOMAIN),
        'edit_item' => __('Edit Testimonial', TEXT_DOMAIN),
        'update_item' => __('Update Testimonial', TEXT_DOMAIN),
        'search_items' => __('Search Testimonial', TEXT_DOMAIN),
        'not_found' => __('Not found', TEXT_DOMAIN),
        'not_found_in_trash' => __('Not found in Trash', TEXT_DOMAIN),
    );
    $args = array(
        'label' => __('testimonials', TEXT_DOMAIN),
        'description' => __('custom post type for testimonials', TEXT_DOMAIN),
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
    register_post_type('testimonials', $args);
}
add_action('init', 'custom_post_type_testimonial');

function testimonial_fields($meta_boxes)
{
    $meta_boxes[] = array(
        'id' => 'testimonial_section',
        'title' => esc_html__('General Information', TEXT_DOMAIN),
        'post_types' => array('testimonials'),
        'context' => 'advanced',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => 'testimonial_image',
                'type' => 'image_advanced',
                'name' => esc_html__('Client or Author Image', TEXT_DOMAIN),
            ),
            array(
                'id' => 'testimonial_client',
                'type' => 'text',
                'name' => esc_html__('Client or Customer Name', TEXT_DOMAIN),
                'desc' => esc_html__('Write client or customer name who gave testimonial', TEXT_DOMAIN),
                'placeholder' => esc_html__('Client or Customer Name', TEXT_DOMAIN),
            ),
            array(
                'id' => 'testimonial_rating',
                'name' => esc_html__('Rating', TEXT_DOMAIN),
                'type' => 'select',
                'desc' => esc_html__('Write testimonial rating', TEXT_DOMAIN),
                'placeholder' => esc_html__('Choose Rating', TEXT_DOMAIN),
                'options' => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ),
            ),
            array(
                'id' => 'testimonial_visibility',
                'name' => esc_html__('Visibility', TEXT_DOMAIN),
                'type' => 'select',
                'placeholder' => esc_html__('Choose Visibility', TEXT_DOMAIN),
                'options' => array(
                    'visible' => 'Visible',
                    'invisible' => 'Invisible',
                ),
            ),
        ),
    );

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'testimonial_fields');

function manage_testimonial_table_header()
{
    $column = [
        'cb' => '<input type="checkbox"/>',
        'title' => 'Client or Customer',
        'client' => 'Client or Customer',
        'rating' => 'Rating',
        'visibility' => 'Rating',
        'testimonial' => 'Testimonial',
    ];
    return $column;
}
add_filter('manage_edit-testimonials_columns', 'manage_testimonial_table_header');

function manage_testimonials_columns_values($column, $postID)
{
    $result = '';
    switch ($column) {
        case 'client':
            $result = get_field('testimonial_client', $postID);
            if(!$result) {
                $result = 'N/A';
            }
            break;
        case 'testimonial':
            $result = get_the_content();
            if(!$result) {
                $result = 'N/A';
            }
            break;
        case 'rating':
            $result = get_field('testimonial_rating', $postID);
            if(!$result) {
                $result = 'N/A';
            }
            break;
        case 'visibility':
            $result = ucfirst(get_field('testimonial_visibility', $postID));
            if(!$result) {
                $result = 'N/A';
            }
            break;
    }

    echo $result;
}
add_filter('manage_testimonials_posts_custom_column', 'manage_testimonials_columns_values', 1, 2);

/**
 * @param $query
 * @return WP_Query
 */
function getVisibleTestimonial($query)
{
    $defaultQuery = array(
        'post_type' => 'testimonials',
        'meta_query' => array(
            array(
                'key'     => 'testimonial_visibility',
                'value'   => 'visible',
                'compare' => '=',
            )
        ),
        'posts_per_page' => 3
    );

    $defaultQuery = array_merge($defaultQuery, $query);
    return new WP_Query($defaultQuery);
}

/**
 * *********************************************
 * ********** End Testimonial Section **********
 * *********************************************
 */


/**
 * *********************************************
 * ******* Start Page's Template Section *******
 * *********************************************
 */
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'home_page_listing_title',
        'title' => 'Listing Title',
        'fields' => array (
            array (
                'key' => 'field_5941848e73b23',
                'label' => 'Title',
                'name' => 'listing_title',
                'type' => 'text',
                'default_value' => 'Recent Vehicles',
                'placeholder' => 'Title',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_594184fc73b24',
                'label' => 'Subtitle',
                'name' => 'listing_subtitle',
                'type' => 'text',
                'default_value' => 'Check our recent motors',
                'placeholder' => 'Subtitle',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'index.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'home-page-testimonial',
        'title' => 'Home Page Testimonial',
        'fields' => array (
            array (
                'key' => 'field_59418674ae692',
                'label' => 'Enabled/Disable Testimonial Section?',
                'name' => 'enabled_disable_testimonial_section',
                'type' => 'select',
                'choices' => array (
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
                'default_value' => 'Yes',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_594186a5ae693',
                'label' => 'How Many Testimonial will Show?',
                'name' => 'how_many_testimonial_will_show',
                'type' => 'number',
                'default_value' => 5,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'index.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'listing_page_banners',
        'title' => 'Banner',
        'fields' => array (
            array (
                'key' => 'field_59430eaa39aad',
                'label' => 'Banner Image',
                'name' => 'banner_image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_59430ec139aae',
                'label' => 'Title',
                'name' => 'banner_title',
                'type' => 'text',
                'default_value' => 'Vehicle Listing',
                'placeholder' => 'Title',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_59430ede39aaf',
                'label' => 'Subtitle',
                'name' => 'banner_subtitle',
                'type' => 'text',
                'default_value' => 'Check our latest available collection',
                'placeholder' => 'Subtitle',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'listing.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'listing_page__listing_title',
        'title' => 'Listing Title',
        'fields' => array (
            array (
                'key' => 'field_5941848e73b23',
                'label' => 'Title',
                'name' => 'listing_title',
                'type' => 'text',
                'default_value' => 'Recent Vehicle',
                'placeholder' => 'Title',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_594184fc73b24',
                'label' => 'Subtitle',
                'name' => 'listing_subtitle',
                'type' => 'text',
                'default_value' => 'Check our recent vehicle',
                'placeholder' => 'Subtitle',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_59418674aed692',
                'label' => 'Listing View',
                'name' => 'listing_view',
                'type' => 'select',
                'choices' => array (
                    'Grid' => 'Grid',
                    'List' => 'List',
                ),
                'default_value' => 'List',
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'listing.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
/**
 * *********************************************
 * ******** End Page's Template Section ********
 * *********************************************
 */