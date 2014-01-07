# Convert WordPress Post Format Based on a Custom Field

This WordPress Plugin will convert your post format if there is content in a custom field.

I created this plugin because unfortunately, the fantastic [MarsEdit](http://www.red-sweater.com/marsedit/) does not support setting the WordPress post format within the app. I use it for link blogging - if I have a link set in my custom field, WordPress will set the post format to Link.

## Instructions
1. Save this plugin into your `wp-content/plugins/` directory
2. Open `convert-to-linkpost.php` and edit `$custom_field` and `$post_format` to be the name of the custom field you want to use, and the format you want it to change to
3. Activate the plugin