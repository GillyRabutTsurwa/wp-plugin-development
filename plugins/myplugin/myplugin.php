
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
}

// =========================== CALLBACK FUNCTIONS ===========================

// NOTE: this function will validate plugin settings 
function myplugin_validate_options($input) {
    // NOTE: functionality will be added later, pour le moment, on renvoie la valeur $input
    return $input;
}

// NOTE: I think these next two functions simply render some markup to customise the plugin login screen and admin area respectively
function myplugin_callback_section_login() {
    $markup = "<p>These settings enable you to customise the WP Login screen</p>";
    echo $markup;
}

function myplugin_callback_section_admin() {
    $markup = "<p>These settings enable you to customise the WP Admin area</p>";
    echo $markup;
}

/**
 * NOTE:
 * below are the callback functions (5 of them) that will display the respective fields
 * these fields, are usually (could say always, but not sure if that's totally true yet) HTML input elements
 * 
 * the callback functionality for all these functions will come later
 */

function myplugin_callback_field_text( $args ) {
	echo 'This will be a text field.';
}



function myplugin_callback_field_radio( $args ) {
	echo 'This will be a radio field.';
}



function myplugin_callback_field_textarea( $args ) {
	echo 'This will be a textarea.';
}



function myplugin_callback_field_checkbox( $args ) {
	echo 'This will be a checkbox.';
}



function myplugin_callback_field_select( $args ) {
	echo 'This will be a select menu.';
}


// ===========================================================================


//NOTE: register plugin settings
function myplugin_register_settings() {
    /**
     * NOTE:
     * first parametre should match our parametre for the settings_fields() in myplugin/admin/settings-page.php
     * the "myplugin_options" value of that function is what is being used here
     */
    register_setting("myplugin_options", "myplugin_options", "myplugin_callback_validate_options");

    // NOTE: adding sections to our settings
    add_settings_section(
        "myplugin_section_login",
        "Customise Login Page",
        "myplugin_callback_section_login",
        "myplugin"
    );

    add_settings_section(
        "myplugin_section_admin",
        "Customise Admin Area",
        "myplugin_callback_section_admin",
        "myplugin"
    );



    /**
     * NOTE: 
     * below are functions (7 of them) whose parametres will be responsible for adding fields to a particular section of a settings page
     * IMPORTANT: hover over the function to get a good definition of itself, as well as its parametres
     */
    add_settings_field(
        "custom_url",
        "Custom URL",
        "myplugin_callback_field_text",
        "myplugin",
        "myplugin_section_login",
        ["id" => "custom_url", "label" => "Custom URL for the login logo link"]
    );

    add_settings_field(
        "custom_title",
        "Custom Title",
        "myplugin_callback_field_text",
        "myplugin",
        "myplugin_section_login",
        ["id" => "custom_title", "label" => "Custom title attribute the login logo link"]
    );

    add_settings_field(
        "custom_style",
        "Custom Style",
        "myplugin_callback_field_radio",
        "myplugin",
        "myplugin_section_login",
        ["id" => "custom_style", "label" => "Custom CSS for the Login screen"]
    );

    add_settings_field(
        "custom_message",
        "Custom Message",
        "myplugin_callback_field_textarea",
        "myplugin",
        "myplugin_section_login",
        ["id" => "custom_message", "label" => "Custom text and/or markup"]
    );

    add_settings_field(
        "custom_footer",
        "Custom footer",
        "myplugin_callback_field_text",
        "myplugin",
        "myplugin_section_admin",
        ["id" => "custom_footer", "label" => "Custom footer text"]
    );

    add_settings_field(
        "custom_toolbar",
        "Custom Toolbar",
        "myplugin_callback_field_checkbox",
        "myplugin",
        "myplugin_section_admin",
        ["id" => "custom_toolbar", "label" => "Remove new post and comment links from the toolbar"]
    );

    add_settings_field(
        "custom_scheme",
        "Custom Scheme",
        "myplugin_callback_field_select",
        "myplugin",
        "myplugin_section_admin",
        ["id" => "custom_scheme", "label" => "Default colour scheme for new users"]

    );
}

// NOTE: hooking our action to the admin_init hook
add_action("admin_init", "myplugin_register_settings");









