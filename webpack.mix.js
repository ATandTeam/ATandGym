let mix = require('laravel-mix');

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

mix.scripts([
	'resources/assets/js/jquery-3.2.1.min.js',
	'resources/assets/js/popper.min.js',
	'resources/assets/js/bootstrap.min.js',
	'resources/assets/js/toastr.js',
	'resources/assets/js/vue.js',
	'resources/assets/js/axios.js',
	'resources/assets/js/jquery.backstretch.min.js',
	'resources/assets/js/scripts.js',
	], 'public/js/app.js')
	.styles([
	'resources/assets/css/bootstrap.min.css',
	'resources/assets/css/toastr.css',
	'resources/assets/css/app.css',
	// 'resources/assets/css/form-elements.css',
	'resources/assets/css/style.css',
	], 'public/css/app.css');