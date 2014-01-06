# Convert WordPress Posts to a Link Post

This WordPress Plugin will convert your post to a link-formatted post if there is content in the link custom field. This was created because the fantastic [MarsEdit](http://www.red-sweater.com/marsedit/) does not support setting the post format within the editing interface.

## Instructions
1. Clone this directory into your `wp-content/plugins/` directory
2. Open `convert-to-linkpost.php` and edit `$linked_list_field` to be the name of the custom field you use for links
3. Activate the plugin

## How it Works
This plugin will fire whenever you save a new post or update an existing post. It then checks if the Post Format is FALSE (which means it's a standard formatted post) and if your link custom field isn't blank. If both match, then it'll set the post format to Link.