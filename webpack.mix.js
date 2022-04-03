const mix = require('laravel-mix');
/*
|----------------------------------------------
| Mix Asset Management
|----------------------------------------------
*/
mix.sass('src/scss/app.scss', 'assets/css')
   .js('src/js/main.js', 'assets/scripts').sourceMaps()
   .vue()
   .setPublicPath('public');

module.exports = {
  presets: ['@vue/cli-plugin-babel/preset']
}
