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

mix.js('resources/js/front/desktop/app.js', 'public/front/desktop/js/app.js').version()
    .js('resources/js/front/mobile/app.js', 'public/front/mobile/js/app.js').version()
    .js('resources/js/admin/desktop/app.js', 'public/admin/desktop/js/app.js').version()
    .js('resources/js/admin/mobile/app.js', 'public/admin/mobile/js/app.js').version()
    .sass('resources/sass/front/app.scss', 'public/front/desktop/css/app.css').version()
    .sass('resources/sass/front/app-mobile.scss', 'public/front/mobile/css/app-mobile.css').version()
    .sass('resources/sass/admin/app.scss', 'public/admin/desktop/css/app.css').version()
    .sass('resources/sass/admin/app-mobile.scss', 'public/admin/mobile/css/app-mobile.css').version()