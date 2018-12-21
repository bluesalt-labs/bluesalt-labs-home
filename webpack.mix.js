let mix = require('laravel-mix');

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

// Compile application assets
mix
   .js('resources/assets/js/base.js', 'public/js')
   .js('resources/assets/js/public.js', 'public/js')
   .js('resources/assets/js/dashboard.js', 'public/js')
   .js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/public.scss', 'public/css')
   .sass('resources/assets/sass/dashboard.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css')
;

// Copy Sidebar Links Library
mix.copy('node_modules/sidebar-links/dist/sidebar-links.min.js', 'public/js');

// Copy Chart.js Library
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js');