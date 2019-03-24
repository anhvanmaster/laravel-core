const mix = require('laravel-mix');

// complie minifix library with css
mix.styles([
    'resources/assets/css/bootstrap-datepicker.css',
    'resources/assets/css/jquery.timepicker.min.css'
 ], 'public/css/app.css').version();
// complie minifix library with js
mix.scripts([
     'resources/assets/js/bootstrap-datepicker.js',
     'resources/assets/js/jquery.timepicker.min.js'
 ], 'public/js/app.js').version();