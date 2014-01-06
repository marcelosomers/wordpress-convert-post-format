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
    $linked_list_field = "linked_list_url";

    // Get the post format
    $post_format = get_post_format( $post_id );

    // Get the Linked List URL
    $link_list_item = get_post_meta($post_id, 'linked_list_url', true);

    if($post_format == FALSE && $link_list_item != "") {
        set_post_format($post_id, 'Link');
    }
}

add_action('save_post', 'set_link_post');

?>