<?php 
    /*
    Plugin Name: Archivist by Vadim Evard
    Plugin URI: https://evard.online/wp/archivist-plugin
    Description: Plugin for saving WordPress posts and other pages to the Archive.org's Wayback Machine
    Author: Vadim Evard
    Version: 1.0
    Author URI: https://evard.online/
    */
function ping_archive_org($post_ID) {
    wp_safe_remote_head("https://web.archive.org/save/" . get_permalink($post_ID));
}
 
add_action('publish_post', 'ping_archive_org');
add_action('post_updated', 'ping_archive_org');

?>
