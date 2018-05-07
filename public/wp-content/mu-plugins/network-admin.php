<?php

add_filter('network_admin_url', function($url, $path) {
    $networkPath = str_replace( '/wp-admin/', WP_ADMIN_DIR . '/wp-admin/', $url );
    return $networkPath;
}, 10, 2);
