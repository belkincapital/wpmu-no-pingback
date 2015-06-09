<?php
/**
 * Plugin Name: WPMU No Pingback
 * Description: You can remove the XML-RPC pingback functionality completely with this WordPress Plugin.
 * Author: Jason Jersey
 * Version: 1.0
 */
 

function remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}

add_filter('wp_headers', 'remove_x_pingback');
