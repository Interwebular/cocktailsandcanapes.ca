var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.less('admin-lte/AdminLTE.less');
    mix.less('bootstrap/bootstrap.less');
});

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/cnc.css')
       .scripts([
           'app.js'
       ], 'public/js/cnc.js')
       .version(['css/cnc.css', 'js/cnc.js']);
});
