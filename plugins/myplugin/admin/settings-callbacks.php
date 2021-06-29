<?php // MyPlugin - Settings Callbacks

if (!defined("ABSPATH")) {
    exit;
}

function myplugin_validate_options($input) {
    return $input;
}

// ===============================================================================

function myplugin_callback_section_login() {
    $markup = "<p>These settings enable you to customise the WP Login screen</p>";
    echo $markup;
}

function myplugin_callback_section_admin() {
    $markup = "<p>These settings enable you to customise the WP Admin area</p>";
    echo $markup;
}


// ===============================================================================



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
