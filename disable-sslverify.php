<?php
/**
 * Plugin Name: Disable SSL for Local Environments
 * Description:
 * Version: 1.0.0
 * Author: Daan van den Bergh
 * Author URI: https://daan.dev
 * License: GPL2v2 or later
 * Text Domain: woosh-licensing
 */
defined('ABSPATH') || exit;

function disable_sslverify($params, $url)
{
    $params['sslverify'] = false;

    return $params;
}
add_filter('http_request_args', 'disable_sslverify', 10, 2);
