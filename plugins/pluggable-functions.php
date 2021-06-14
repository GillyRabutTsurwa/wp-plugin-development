<?php
/*
    Plugin Name: Pluggable Functions
    Description: Learning about pluggable functions. I presume it is the same concept as they are in themes
    Plugin URI: https://plugin-planet.com
    Author: Gilbert Rabut Tsurwa
    Version: 1.0
*/

function myplugin_custom_logout() {
    wp_die("This is the result of logging out. I need to find something better to execute than this");
}

// I finally understand the difference between the use of hooks versus that of pluggable functions
// this (which will be commented out)....


// add_action("wp_logout", "myplugin_custom_logout"); // ...in hooks and filters is the equivalent to this...


function wp_logout() {
    $user_id = get_current_user_id();

    wp_destroy_current_session();
    wp_clear_auth_cookie();
    wp_set_current_user( 0 );
    myplugin_custom_logout(); //NOTE: our custom function added here


    /**
     * Fires after a user is logged out.
     *
     * @since 1.5.0
     * @since 5.5.0 Added the `$user_id` parameter.
     *
     * @param int $user_id ID of the user that was logged out.
     */
    do_action( 'wp_logout', $user_id );
}

// ...in pluggable functions in the sense that they allow for custom functionality in WordPress

//NOTE: note how for pluggable functions, i just added my custom function in addition to the other functions already present