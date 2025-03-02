const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
const path = require('path')
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();
mix.alias({
    '@': path.join(__dirname, '../../public')
})
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/social.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/social.css');

if (mix.inProduction()) {
    mix.version();
}
