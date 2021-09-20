const tailwindcss = require("tailwindcss");
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', "/dist/js/theme.js")
    .sass(__dirname + '/Resources/assets/sass/app.scss', "/dist/css/theme.css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss(__dirname + "/tailwind.config.js")],
    })
    .copyDirectory(__dirname + "/Resources/assets/fonts", "../../public/dist/fonts")
    .copyDirectory(__dirname + "/Resources/assets/images", "../../public/dist/images");
// .sourceMaps();


if (mix.inProduction()) {
    mix.version();
}
