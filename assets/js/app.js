
// Popper included in .bundle.js
require('bootstrap/dist/js/bootstrap.bundle.js');

import 'jquery';

// SCSS style
require('../scss/app.scss');
require('../scss/theme-1.css');

// loads the code syntax highlighting library
import './highlight.js';

// Creates links to the Symfony documentation
import './doclinks.js';

import logoPath from '../img/unnamed.jpg';

import logoPath2 from '../img/pkd.jpg';

import logoPath3 from '../img/cvjonathanvalette.png';

let html = `<img src="${logoPath}" alt="ACME logo">`;


let html2 = `<img src="${logoPath2}" alt="ACME logo">`;

let html3 = `<a class="navbar-brand" href="${logoPath3}">`;


