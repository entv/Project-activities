const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/slider.js', 'public/js')
    .js('resources/js/login.js', 'public/js')
    .postCss('resources/css/login.css', 'public/css/', [])
    .postCss('resources/css/user-form.css', 'public/css/', [])
    .postCss('resources/css/comment.css', 'public/css/', [])
    .postCss('resources/css/home-style.css', 'public/css/', [])
    .postCss('resources/css/admin.css', 'public/css/', [])
    .postCss('resources/css/style.css', 'public/css/', [
        //
    ]);

   