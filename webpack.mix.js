const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/argon.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .stylus('resources/stylus/app.styl', 'public/css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/icons', 'public/icons')
    .disableNotifications()
    .sourceMaps();


if (mix.inProduction()) {
    mix.version();

    mix.extract([
        'vue',
        'vform',
        'axios',
        'vuex',
        'vue-i18n',
        'vue-meta',
        'js-cookie',
        'vue-router',
        'vuetify',
        'vee-validate',
        'vuex-router-sync'
    ])
} else {
    mix.webpackConfig({
        devtool: 'inline-source-map'
    })
}

mix.webpackConfig({
    plugins: [],
    resolve: {
        alias: {
            '~': path.join(__dirname, './resources/js')
        }
    }
});

