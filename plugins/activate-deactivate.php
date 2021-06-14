<?php
/*
    Plugin Name: Activation & Deactivation
    Description: Examples of the uses of activating, deactivating, and uninstalling hooks
    Plugin URI: https://plugin-planet.com
    Author: Gilbert Rabut Tsurwa
    Version: 1.0
*/

// NOTE: this function will eventually run whenever a plugin is activated
function myplugin_on_activation() {
    if (!current_user_can("activate_plugins")) return;

    add_option("myplugin_posts_per_page", 10);
    add_option("myplugin_show_welcome_page", true);
}

/**
 * NOTE: 
 * this hook will fire when a plugin is activated
 * the first arguement, _FILE_, is a PHP constant that specifies that path to the current file
 * second argument is the our callback function
 */
register_activation_hook(__FILE__, "myplugin_on_activation");

// NOTE: whereas this function will eventually run whenever a plugin is deactivated
function myplugin_on_deactivation() {
    /**
     * NOTE:
     * you can uncomment line below pour verifier que le fonction marche bien
     * PASS: la fonction marche comme désiré
     */
    // wp_die( "This plugin has been deactivated");

    if (!current_user_can("activate_plugins")) return;
    // don't really care about this function, but i do understand the code in this entire file.
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, "myplugin_on_deactivation");

function myplugin_on_uninstall() {
    if (!current_user_can("activate_plugins")) return;

    delete_option("myplugin_posts_per_page", 10);
    delete_option("myplugin_show_welcome_page", true);
}

register_uninstall_hook(__FILE__, "myplugin_on_uninstall"); 