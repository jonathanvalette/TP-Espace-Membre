
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

let html = `<img src="${logoPath}" alt="ACME logo">`;

