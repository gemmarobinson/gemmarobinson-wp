/* Vendor Scripts */
import $ from 'jquery';
import { WOW } from 'wowjs';

/* Our functions */
import exampleFunction from './components/example-function';
import smoothScroll from './components/smooth-scroll';

$(document).ready(() => {
    // exampleFunction();
    // smoothScroll();

    // Initiate WOWjs
    const wow = new WOW();
    wow.init();
});

$(window).scroll(function () {
    // add functions here
});

$(window).on('resize', function () {
    // add functions here
});
