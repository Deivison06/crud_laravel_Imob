const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// Adiciona Bootstrap
mix.styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.css');
