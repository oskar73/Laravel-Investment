const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
const path = require('path')
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();
mix.alias({
    '@': path.join(__dirname, '../../public')
})
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/landingpages.js')
    .sass( __dirname + '/Resources/assets/scss/app.scss', 'css/landingpages.css');

if (mix.inProduction()) {
    mix.version();
}
