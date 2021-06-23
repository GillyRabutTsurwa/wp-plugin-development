[wp-add-menu-page-link]: https://developer.wordpress.org/reference/functions/add_menu_page/
[wp-add-submenu-page-link]: https://developer.wordpress.org/reference/functions/add_submenu_page/
[wp-admin-menu-page-link]: https://developer.wordpress.org/reference/hooks/admin_menu/
## Summary 

- used code to make our plugin appear on our WordPress admin as a top-level menu, and as a sublevel menu.
- went through the important [add_menu_page()][wp-add-menu-page-link] and [add_submenu_page()][wp-add-submenu-page-link] respectively
- unlike Jeff (the instructor), i included both the code to make our plugin appear on the menu *and* the submenu
- both sets of code (that are within functions) use the  myplugin_display_settings_page(), which can be found [here](plugins/myplugin/myplugin.php)
- lastly, but of more minour importance, i got exposed to the [admin_menu][wp-admin-menu-page-link] WordPress hook for the first time