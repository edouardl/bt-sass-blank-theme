# The "WordPress Bootstrap Sass Blank" Theme
Bootstrap Sass Blank Theme is a WordPress Blank Theme, with Bootstrap 4 and Sass included. This theme is based on [Minimal Blank Theme](https://github.com/edouardl/minimal-blank-theme) for all the WordPress/PHP code and well inspired by [MonsieurPress](https://github.com/davidmanson/monsieurpress/) for the use of Gulp and some great hierarchical ideas.

The main purpose of Bootstrap Sass Blank Theme is to give you a complete theme architecture (with Boostrap 4 and Sass including, like the name said) to start developping your own theme.
It's a blank theme, you don't need to delete any code, just add yours.


## Prerequisites
- know Sass
- npm installed
- git installed
- update to Gulp 4 if you have version >4.0 installed
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
if your need full implementation of Boostrap Menu in WordPress, I recommand the great custom walker: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
### Boostrap-sass
By default all modules are loaded, but you can comment any Bootstrap module you don't need in assets/scss/style.scss
Morover, to create your own Bootstrap theme, you can use [Bootstrap Magic](https://pikock.github.io/bootstrap-magic/) to generate your variables.scss file
### WordPress snippets
If you're not comfortable with WordPress snippets to add components and customize them, you can use [WP Hasty](https://www.wp-hasty.com/) to generate them


## Known issue(s)
- Message during sass gulp task execution : "boostrap-sass is incompatible with eyeglass 1.2.1, needed eyeglass ^0.7.1" ; in fact it works so it doesn't matter


## Changelog
Version 1.4
- PSR2 format and useless elements removal

Version 1.3
- Bootstrap and others dependencies update

Version 1.2
- Gulp migration to v4.0.0

Version 1.1
- Update to Boostrap 4
- change the theme css file from style.css to dist/css/theme.css

Version 1.0
- Initial
