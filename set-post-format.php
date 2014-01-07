<?php
/**
* Plugin Name: Convert Post Format From Custom Fields
* Plugin URI: https://github.com/marcelosomers/wordpress-convert-to-linkpost
* Description: Converts a post to a specified format automatically when a custom field is set
* Version: 1.0
* Author: Marcelo Somers
* Author URI: http://behindcompanies.com/about
* License: MIT
*/

function set_post_format( $post_id ) {

    // Set your linked list custom field name
    $custom_field = "YOUR_CUSTOM_FIELD";    // The custom field name that should trigger this plugin
    $post_format = "YOUR_DESIRED_FORMAT";   // The desired format to set your post (e.g., link, video, etc.)

    // Get the post's current format
    $current_format = get_post_format( $post_id );

    // Get the custom field value
    $custom_field_value = get_post_meta($post_id, $custom_field, true);

    if ( $current_format == FALSE && $custom_field_value != "" ) {

        // If the post format is standard, and there is a value in your custom field, then set the post format
        set_post_format($post_id, $post_format);

    } elseif ( $current_format == $post_format && $custom_field_value == "" ) {

        // If you remove your custom field, but the custom value is still set, undo it
        set_post_format($post_id, NULL);
    }
}

add_action('save_post', 'set_post_format');

?>