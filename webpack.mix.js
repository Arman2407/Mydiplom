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

mix.styles([
    'resources/admin/CSS/normalize.css',
    'resources/admin/CSS/styles.css',
], 'public/css/admin.css');

mix.styles([
    'resources/client/css/normalize.css',
    'resources/client/css/styles.css'
], 'public/css/client.css');

mix.scripts([
    'resources/admin/js/accordeon.js',
], 'public/js/admin.js');

mix.copy('resources/admin/fonts', 'public/fonts');
mix.copy('resources/admin/i', 'public/i');
mix.copy('resources/client/i', 'public/i');
