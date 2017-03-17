var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    cssmin = require('gulp-cssmin'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    jshint = require('gulp-jshint'),
    plumber = require('gulp-plumber'),
    eyeglass = require('eyeglass');

var source = 'assets/';
var dest = 'dist/';

var boostrapSassSrc = './node_modules/bootstrap-sass/';

// Fonts, including bootstrap fonts
var fonts = {
    in: [ source +  'fonts/*.*', boostrapSassSrc + 'assets/fonts/**/*' ],
    out: dest + 'fonts/'
};


/**
 * Fonts :
 * copy to dist, with Bootstrap fonts too
 *
 */
gulp.task('fonts', function () {
    gulp
        .src( fonts.in )
        .pipe( gulp.dest( fonts.out ) );
});

/**
 * Style :
 * Sass compilation including bootstrap-sass
 *
 */
gulp.task('sass', ['fonts'], function() {
    gulp.src( source + '/scss/style.scss')
        .pipe( plumber() )
        .pipe( sass( eyeglass() ) )
        .pipe( autoprefixer() )
        .pipe( cssmin() )
        .pipe( gulp.dest( '.' ) )
        .pipe( livereload() );
});

/**
 * Javascript
 *
 */
gulp.task('js', ['lint'], function() {
    // Js librairies used on current theme
    gulp.src( source + '/js/libs/**/*.js' )
        .pipe( plumber() )
        .pipe( concat( 'libs.js' ) )
        .pipe( gulp.dest( dest + 'js/' ) )
        .pipe( livereload() );

    // Theme main js file
    gulp.src( source + '/js/main.js')
        .pipe( plumber() )
        .pipe( uglify() )
        .pipe( gulp.dest( dest + 'js/' ) );
});

/**
 * Js lint of main.js
 * stop gulp task on error
 *
 */
gulp.task('lint', function () {
  gulp.src( source + '/js/main.js' )
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});


/**
 * Image compression
 *
 */
gulp.task( 'img', function() {
    gulp.src( source + '/img/*.{png,jpg,gif}' )
        .pipe( imagemin() )
        .pipe( gulp.dest( dest + 'images/' ) );
});

/**
 * Watch task
 *
 */
gulp.task( 'watch', function() {
    gulp.watch( 'assets/scss/**/*.scss', ['sass'] );
    gulp.watch( 'assets/js/**/*.js', ['js'] );
    gulp.watch( 'assets/img//*.{png,jpg,gif}', ['img'] );
});

/**
 * Default
 * Should be launch at the beginning of every coding session
 *
 */
gulp.task('default', ['sass', 'img', 'js', 'watch'], function() {
    livereload.listen();
});
