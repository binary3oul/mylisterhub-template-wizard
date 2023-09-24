const mix = require('laravel-mix');
const fs = require('fs');

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

mix
    .options({
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true,
                },
            },
        },
    })
    .webpackConfig(require('./webpack.config'))
    .sass('resources/assets/styles/main.scss', './')
    .ts('resources/js/main.ts', 'resources/dist')
    .copy('resources/assets/images', 'resources/dist/images')
    .setPublicPath('resources/dist')
    .extract()
    .version()
    .vue();
