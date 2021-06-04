<?php
/*
    Plugin Name: Simple Example Plugin
    Description: Welcome to WordPress Plugin Development
    Plugin URI: https://plugin-planet.com
    Author: Gilbert Rabut Tsurwa
    Version: 1.0
    License: GPLv2 or later
    License URI: https://www.gnu.org/licenses/gpl-2.0.txt
*/

// NOTE: Action Hook Example
function myplugin_action_hook_example() {
    wp_mail("tsurwagilbert@gmail.com", "You're a don", "PHP et WordPress, j'y suis beaucoup plus confiant");
}

add_action("init", "myplugin_action_hook_example");

// =====================================

// NOTE: Filter Hook Example

function myplugin_filter_hook_example($content) {
    $content = $content . "<p>Custom Content...</p>";
    return $content;
}

add_filter("the_content", "myplugin_filter_hook_example");

// =======================================