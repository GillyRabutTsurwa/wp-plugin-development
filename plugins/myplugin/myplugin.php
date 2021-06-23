
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


// exit if the file is called directly
if (!defined("ABSPATH")) {
    exit;
}

// NOTE: display the plugin settings page
function myplugin_display_settings_page() {
    // check if user is has permission
    if (!current_user_can("manage_options")) return;
    ?>

    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <!-- NOTE: form action must always be options.php -->
        <!-- ... and form method must always be post -->
        <form action="options.php" method="POST">
            <?php
                // output security fields
                settings_fields("myplugin_options");
                // output setting sections
                do_settings_sections("myplugin");
                // submit button
                submit_button();
            ?>
        </form>
    </div>
            <?php
}

/**
 * NOTE: this function adds a top-level administrative menu
 */
function myplugin_add_toplevel_menu() {
    // IMPORTANT: hover over the add_menu_page() to get further details on the function's parametre
    add_menu_page(
        "MyPlugin Settings", 
        "MyPlugin", 
        "manage_options", 
        "myplugin", 
        "myplugin_display_settings_page", 
        "dashicons-admin-generic", 
        null
    );
}

/**
 * NOTE:
 * whereas this one adds a sublevel menu (unlike Jeff, I'm including both in this file)
 * IMPORTANT: the first parametre of the add_submenu_page() is the parent slug.
 * in other words, it is the section in which the sublevel menu will be found
 * options-general.php usually refers to the settings menu (i may explore the other values later)
 * other than this, all the other parametres are the same ones as the ones used in the add_menu_page()
 */
function myplugin_add_sublevel_menu() {
    add_submenu_page(
        "options-general.php",
        "MyPlugin Settings",
        "MyPlugin",
        "manage_options",
        "myplugin",
        "myplugin_display_settings_page"
    );
}

add_action("admin_menu", "myplugin_add_toplevel_menu");
add_action("admin_menu", "myplugin_add_sublevel_menu");