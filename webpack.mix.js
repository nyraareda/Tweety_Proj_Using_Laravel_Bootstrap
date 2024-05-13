mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .browserSync({
       proxy: 'http://127.0.0.1:8000'
   });