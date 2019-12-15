mix = require('laravel-mix');

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

mix
        .js(['resources/assets/js/app.js',
            'resources/assets/js/bootstrap.js',
            'resources/assets/js/popper.js',
            'resources/assets/js/jquery.js',
            'resources/assets/js/buttons.html5.js',
            'resources/assets/js/dataTables.bootstrap4.js',
            'resources/assets/js/dataTables.buttons.js',
            'resources/assets/js/jquery-3.3.1.js',
            'resources/assets/js/jquery-ui.js',
            'resources/assets/js/jquery.dataTables.js',
            'resources/assets/js/jszip.js',
            'resources/assets/js/pdfmake.js',
            'resources/assets/js/vfs_fonts.js'
        ], 'public/js/app.js')

        .sass('resources/assets/sass/app.scss', 'public/css')

        .styles(['resources/assets/css/customlayout.css',
            'resources/assets/css/w3.css',
            'resources/assets/css/all.css',
            'resources/assets/css/jquery-ui.css',
            'resources/assets/css/bootstrap4.css',
            'resources/assets/css/buttons.dataTables.css',
            'resources/assets/css/bootstrap.css'
        ], 'public/css/customlayout.min.css'
                );