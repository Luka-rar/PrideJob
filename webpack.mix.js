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

mix
.sass('resources/scss/custom.scss','public/site/custom.css')
.copy('resources/img','public/images')

.scripts(['resources/js/jQuery-Mask/dist/jquery.mask.min.js'],'public/site/js/mask.js')
.scripts(['resources/js/jQuery-MaskMoney/dist/jquery.maskMoney.min.js'],'public/site/js/maskMoney.js')
.scripts(['resources/js/script.js'],'public/site/js/script.js' )
.scripts('node_modules/jquery/dist/jquery.js','public/site/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');

//admin area
