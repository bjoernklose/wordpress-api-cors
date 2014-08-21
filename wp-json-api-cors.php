<?php
/*/
Plugin Name: wp-json-api-cors
Plugin URI: https://github.com/bjoernklose/wordpress-api-cors
Description: enable CORS for the new JSON Wordpress API (temporary solution)
Version: 0.1
Author: Bjoern Klose
Author URI: https://github.com/bjoernklose
/*/

/**
 * enable CORS for WP-API
 * until
 * https://github.com/WP-API/WP-API/issues/144
 * is fixed
 */

add_action( 'init', 'handle_preflight' );

function handle_preflight() {
    header("Access-Control-Allow-Origin: " . get_http_origin());
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");

    if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
        status_header(200);
        exit();
    }
}



