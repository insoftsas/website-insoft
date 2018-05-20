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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .webpackConfig({
        resolve: {
            alias: {
              '@': path.resolve('resources/assets/sass/_variables.scss'),
              "TweenLite": path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
              "TweenMax": path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
              "TimelineLite": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineLite.js'),
              "TimelineMax": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
              "ScrollMagic": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
              "animation.gsap": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
               "debug.addIndicators": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
            }
        }
   });
