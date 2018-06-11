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
mix.autoload({
    'jquery': ['jQuery', '$'],
})

mix.js('assets/js/home.js', 'production/')
    .sass('assets/sass/home.scss','production')
    .minify('production/home.js')
    .disableNotifications()
    .options({
        purifyCss: false,
        processCssUrls: false
});

mix.js('assets/js/account.js', 'production/')
    .sass('assets/sass/account.scss','production')
    .minify('production/account.js')
    .disableNotifications()
    .options({
        purifyCss: false,
        processCssUrls: false
    });


mix.js('assets/js/communities.js', 'production/')
    .sass('assets/sass/communities.scss','production')
    .minify('production/communities.js')
    .disableNotifications()
    .options({
        purifyCss: false,
        processCssUrls: false
    });

mix.js('assets/js/stories.js', 'production/')
    .sass('assets/sass/stories.scss','production')
    .minify('production/stories.js')
    .disableNotifications()
    .options({
        purifyCss: false,
        processCssUrls: false
    });
