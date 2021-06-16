
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

/**
 * NOTE:
 * the code below prevent direct access to our php files, for security
 * it should appear before any other code, ideally right below the plugin metadata info (look on top)
 */


// exit if the file is called directly
if (!defined("ABSPATH")) {
    exit;
}