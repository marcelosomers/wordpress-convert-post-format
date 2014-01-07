<?php
/**
* Plugin Name: Convert Link Posts
* Plugin URI: https://github.com/marcelosomers/wordpress-convert-to-linkpost
* Description: Converts a post to Link format when there is a link URL custom field
* Version: 1.0
* Author: Marcelo Somers
* Author URI: http://behindcompanies.com/about
* License: MIT
*/

function set_link_post( $post_id ) {

    // Set your linked list custom field name
    $custom_field = "linked_list_url";
    $post_format = "Link";

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

add_action('save_post', 'set_link_post');

?>