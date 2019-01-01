const mix = require('laravel-mix');

mix.browserSync({proxy: 'roman.test'});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.styles([
//     'resources/assets/css/lib/admin/*'
// ], 'public/css/admin-lib.css');

mix.js('resources/js/home.js', 'public/js').version().sourceMaps();

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
