let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

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

mix.js('resources/assets/js/app.js', 'public/js')
  .sass('resources/assets/sass/new-app.scss', 'public/css');

mix.options({
  processCssUrls: false,
  postCss: [tailwindcss('../tailwind.config.js')]
});
// .sourceMaps();

mix.browserSync({
  proxy: 'http://localhost:8000',
  browser: 'firefox'
});