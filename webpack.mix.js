let mix = require('laravel-mix');
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;

mix.webpackConfig( {
    plugins: [
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '70-90',
			},
			jpegtran: {
				progressive: false,
			},
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
} )

mix.copy( 'public/assets/images', 'public/dist/images');

mix.styles([    
	'public/assets/css/bootstrap.min.css',
	'public/assets/css/normalize.css',
	'public/assets/css/font-awesome.min.css',
	'public/assets/css/icomoon.css',
	'public/assets/css/owl.carousel.css',
	'public/assets/css/scrollbar.css',
	'public/assets/css/prettyPhoto.css',
	'public/assets/css/transitions.css',
	'public/assets/css/royalslider.css',
	'public/assets/css/main.css',
	'public/assets/css/color.css',
	'public/assets/css/responsive.css',
], 'public/dist/css/app.css');  

mix.scripts([
    'public/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
    'public/assets/js/vendor/jquery-library.js',
	'public/assets/js/vendor/bootstrap.min.js',
	'public/assets/js/jquery.singlePageNav.min.js',
	'public/assets/js/jquery-scrolltofixed.js',
	'public/assets/js/owl.carousel.min.js',
	'public/assets/js/jquery.vide.min.js',
	'public/assets/js/royalslider.min.js',
	'public/assets/js/scrollbar.min.js',
	'public/assets/js/isotope.pkgd.js',
	'public/assets/js/prettyPhoto.js',
	'public/assets/js/sticky-kit.js',
	'public/assets/js/countdown.js',
	'public/assets/js/parallax.js',
	'public/assets/js/collapse.js',
	'public/assets/js/countTo.js',
	'public/assets/js/appear.js',
	'public/assets/js/gmap3.js',
	'public/assets/js/main.js'
], 'public/dist/js/app.js');

