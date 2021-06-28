[wp-settings-api]: https://developer.wordpress.org/plugins/settings/settings-api/
[wp-add-settings-section-link]: https://developer.wordpress.org/reference/functions/add_settings_section/
[wp-add-settings-field-link]: https://developer.wordpress.org/reference/functions/add_settings_field/
## Summary
- **OK**, a lot was done in this commit, mainly involving the [Settings API][wp-settings-api]
- all relevant code is written in the [myplugin.php](plugins/myplugin/myplugin.php) file
- to attempt to summarise, i am using the ```myplugin_register_settings()``` to do the following:
  - using the [```add_settings_section()```][wp-add-settings-section-link] to add section settings in the plugin page in the login screen and in the admin area
  - using the [```add_settings_field()```][wp-add-settings-field-link] to add certain fields inside a section (in our case, the login screen section or the admin area section)
- the list of callback functions that are used in these two functions, that will later add the markup and functionality for the sections and fields respectively can be found towards the top of the file. for now, they just echo some text to the screen

<br>
<br>

**NOTE:** the ```add_settings_section()``` and ```add_settings_field()``` found above are actually links. they just don't render as links because the code render is overriding it. they are clickable.