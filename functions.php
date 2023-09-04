<?php 

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'tess-style', get_stylesheet_uri() );
function custom_post_type() {
    $labels = array(
        'name'               => _x('Pricelist', 'post type general name'),
        'singular_name'      => _x('Price Item', 'post type singular name'),
        'add_new'            => __('Add New', 'book'),
        'add_new_item'       => __('Add New Price Item'),
        'edit_item'          => __('Edit Price Item'),
        'new_item'           => __('New Price Item'),
        'all_items'          => __('All Price Items'),
        'view_item'          => __('View Price Item'),
        'search_items'       => __('Search Price Item'),
        'not_found'          => __('No Price Item found'),
        'not_found_in_trash' => __('No Price Item found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Pricelist'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'supports'      => array('title','custom-fields')
        // Add more arguments as needed
    );

    register_post_type('custom_post', $args);
}

add_action('init', 'custom_post_type');

 ?>