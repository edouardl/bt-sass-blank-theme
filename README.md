# Bootstrap Sass Blank Theme
Bootstrap Sass Blank Theme is a WordPress Blank Theme, with Bootstrap and Sass included. This theme is based on [Minimal Blank Theme](https://github.com/edouardl/minimal-blank-theme) for all the WordPress/PHP code and well inspired by [MonsieurPress](https://github.com/davidmanson/monsieurpress/) for the use of Gulp and some great hierarchical ideas.

The main purpose of Bootstrap Sass Blank Theme is to give you a complete theme architecture (with Boostrap and Sass including, like the name said) to start developping your own theme.
It's a blank theme, you don't need to delete any code, just add yours.


## Prerequisites
- know Sass
- npm installed
- git installed
- active WordPress installation
- (optional) livereload plugin installed in your browser


## How to
    $ git clone https://github.com/edouardl/bt-sass-blank-theme [your_theme_name]
    $ cd [your_theme_name]
    $ npm install
    $ gulp

then you can start coding


## Gulp Tasks
- `gulp`: watch js/sass/img directories ; compile sass ; minify js ; optimize images
- `gulp watch`: watch js/sass/img directories
- `gulp sass`: compile sass to style.css
- `gulp lint`: Validate main theme Javascript file (main.js)
- `gulp js`: Minify the js files
- `gulp img`: Compress theme images
- `gulp font`:  Move fonts from assets to dist (including Boostrap Font from npm package)


## Optimizations
### Menus
if your need full implementation of Boostrap Menu in WordPress, I recommand the great custom walker : https://github.com/wp-bootstrap/wp-bootstrap-navwalker
### Boostrap-sass
By default all modules are loaded, but you can create a bootstrap-custom in "assets/scss/vendors" and import only the modules you need. (don't forget to replace import of boostrap-sass/boostrap by your custom bt in assets/scss/style.scss file)


## Known issue(s)
- Message during sass gulp task execution : "boostrap-sass is incompatible with eyeglass 1.2.1, needed eyeglass ^0.7.1" ; in fact it works so it doesn't matter


## Changelog
Version 1.0
- Initial
