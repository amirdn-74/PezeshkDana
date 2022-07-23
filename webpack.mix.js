const mix = require("laravel-mix");

mix.sass("resources/sass/app.scss", "public/styles/app.css")
    .js("resources/js/app.js", "public/scripts/app.js")
    .js("resources/js/panel/panel.js", "public/scripts/panel.js")
    .disableSuccessNotifications();
