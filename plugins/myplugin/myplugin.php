<?php
/*
    Plugin Name: MyPlugin
    Description: This is the plugin that will be used to teach me about plugins as we go through the rest of the course. It will be coo at the end.
    Plugin URI: https://rabuttsurwa.netlify.app
    Author: Gilbert Rabut Tsurwa
    Version: 1.0
    Text Domain: myplugin
    Domain Path: /languages
    License: GPLv2 or later
    License URI: https://www.gnu.org/licenses/gpl-2.0.txt
*/


if (!defined("ABSPATH")) {
    exit;
}

if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . "admin/admin-menu.php";
    require_once plugin_dir_path(__FILE__) . "admin/settings-page.php";
    require_once plugin_dir_path(__FILE__) . "admin/settings-register.php";
    require_once plugin_dir_path(__FILE__) . "admin/settings-callbacks.php";
}

// default plugin options
function myplugin_options_default() {
	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);
}