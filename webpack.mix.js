const mix = require('laravel-mix');
const path = require('path')
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
require('laravel-mix-merge-manifest');

if(process.env.MIX_PUBLIC_PATH !== null && process.env.MIX_PUBLIC_PATH !== undefined && process.env.MIX_PUBLIC_PATH !== '') {
    mix.setPublicPath('public')
      .webpackConfig({
        output: {publicPath: process.env.MIX_PUBLIC_PATH}
      });
}

mix.setPublicPath('public').mergeManifest();
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
mix.js('resources/js/libs.js', 'public/js/core/libs.min.js')
    .js('resources/js/external.js', 'public/js/core/external.min.js')
    .js('resources/js/app-landing.js', 'public/js/app-landing.min.js')
    .js('resources/js/vue.js', 'public/js/vue.min.js')
    .js('public/js/iqonic-script/setting.js', 'public/js/iqonic-script/setting.min.js')
    .js('public/js/iqonic-script/utility.js', 'public/js/iqonic-script/utility.min.js')
    .sass('resources/sass/libs.scss','public/css/libs.min.css')
    .sass('public/scss/hope-ui.scss', 'public/css')
    .sass('public/scss/custom.scss', 'public/css')
    .sass('public/scss/rtl.scss', 'public/css')
    .sass('public/scss/customizer.scss', 'public/css')
    .sass('public/scss/pro.scss', 'public/css')
    .vue()
    .options({
        processCssUrls: false
    });


    const Modules = require("./modules_statuses.json");
    const Fs = require("fs");



    for (const key in Modules) {
        if (Object.hasOwnProperty.call(Modules, key)) {
            mix.alias({
                '@': path.join(__dirname, 'public')
            })
            mix
            if (
                Fs.existsSync(
                    `${__dirname}/Modules/${key}/Resources/assets/js/app.js`
                )
            ) {
                mix.js(
                    `${__dirname}/Modules/${key}/Resources/assets/js/app.js`,
                    `js/${key.toLocaleLowerCase()}.js`
                )
                    .vue()
                    .sourceMaps();
            }
            if (
                Fs.existsSync(
                    `${__dirname}/Modules/${key}/Resources/assets/sass/app.scss`
                )
            ) {
                mix.sass(
                    `${__dirname}/Modules/${key}/Resources/assets/sass/app.scss`,
                    `css/${key.toLocaleLowerCase()}.css`
                ).sourceMaps();
            }
        }
    }

       // !For Production Build Added To Version on File for cache
if (mix.inProduction()) {
    mix.version();
}

