let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('assets/js/home.js', 'production/')
    .sass('assets/sass/home.scss','production')
    .minify('production/home.js')
    .minify('production/home.css')
    .disableNotifications()
    .options({
        purifyCss: false,
        processCssUrls: false
});
