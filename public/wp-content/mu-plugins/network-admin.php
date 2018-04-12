<?php

// add_filter('network_admin_url', function($path, $url) {
//     echo $path, $url; exit;
//     $wordpressUrl = [
//         '/(wp-admin)/',
//         '/(wp-login\.php)/',
//         '/(wp-activate\.php)/',
//         '/(wp-signup\.php)/',
//     ];
//     $multiSiteUrl = [
//         'wordpress'.'/wp-admin',
//         'wordpress'.'/wp-login.php',
//         'wordpress'.'/wp-activate.php',
//         'wordpress'.'/wp-signup.php',
//     ];
//     return preg_replace($wordpressUrl, $multiSiteUrl, $path, 1);

// }, 10, 2);

// add_filter('includes_url', function($url, $path) {
//     $networkPath = str_replace( '/wp-admin/', WP_ADMIN_DIR . '/wp-admin/', $url );
//     return $networkPath;

// }, 10, 2);

// add_filter('admin_url', function($url, $path) {
//    // var_dump($url); exit;
//     $networkPath = str_replace( '/wp-admin/', WP_ADMIN_DIR . '/wp-admin/', $url );
//     return $networkPath;

// }, 10, 2);
// add_filter('admin_url', function($url, $path) {
//     return 'http://167.99.196.25/wordpress/funfunfunction/wp-admin/';
//     $networkPath = str_replace( '/wp-admin/', WP_ADMIN_DIR . '/wp-admin/', $url );
//     return $networkPath;

// }, 10, 2);

// add_filter('user_admin_url', function($url, $path) {
//     return 'http://167.99.196.25/wordpress/funfunfunction/wp-admin/';
//     $networkPath = str_replace( '/wp-admin/', WP_ADMIN_DIR . '/wp-admin/', $url );
//     return $networkPath;

// }, 10, 2);


echo get_admin_url() . "<br>";
echo plugins_url() . "<br>";
echo user_admin_url() . "<br>";
echo self_admin_url() . "<br>";
echo _config_wp_siteurl();

//exit;