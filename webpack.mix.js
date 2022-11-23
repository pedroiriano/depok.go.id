const mix = require('laravel-mix');

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

mix.sass('resources/sass/filepond.scss', 'public/css')
   .js('resources/js/filepond', 'public/js/plugin')
   .js('resources/js/app.js', 'public/js')
   .js('resources/js/public.js', 'public/js')
   .sass('resources/sass/admin.scss', 'public/css');
    // mix.webpackConfig({
    //     devServer: {
    //         proxy: {
    //             '*': 'http://localhost:8000'
    //         }
    //     }
    // });
mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');
mix.options({
    processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});
