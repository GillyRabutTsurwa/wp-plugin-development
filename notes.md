[php-require-once-link]: https://www.php.net/manual/en/function.require-once.php
[wp-plugin-dir-path-link]: https://developer.wordpress.org/reference/functions/plugin_dir_path/
## Summary
- separated the code from the last commit into different php files (organisation things)
- we then "required" those files in our main plugin php file (where the code originally was) using [require_once][php-require-once-link] keyword and the [plugin_dir-path()][php-require-once-link]
- this functionality is very similar to how *import* and *require* work in Javascript
- in our case, the order in which we write the require code doesn't matter. are there any instances in which it does?
- also, i deleted all of the comments (not including the native PHP ones, of course), as code is the exact same in the last commit
  - to reference the code comments, go to the previous commit



