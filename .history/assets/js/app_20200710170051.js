/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// loads the jquery package from node_modules
// var $ = require('jquery');

// import the function from test.js (the .js extension is optional)
// ./ (or ../) means to look for a local file

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';
// you can use import or require
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'
import 'datatables.net-bs4/js/'

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';







console.log('Hello Webpack Encore! Edit me in assets/js/app.js');