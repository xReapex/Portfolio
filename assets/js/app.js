/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';
// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

// scroll
$('a').click(function (){
    var target = $(this.getAttribute('href'));
    if(target.length){
        event.preventDefault()
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 2000);
    }
});

// ScrollReveal

const sr = ScrollReveal();

// Title
sr.reveal('h2', {
    origin: 'left',
    distance: '50px',
    reset: true,
    duration: 2000
})

// Feedbacks
sr.reveal('#feedback2', {
    duration: 4000,
    origin: 'bottom',
    distance: '10px',
    reset: true
})

// Form //
sr.reveal('#feedback-title', {
    delay: 500,
    duration: 2000,
    origin: 'left',
    distance: '50px',
    reset: false,
})
sr.reveal('#feedback-content', {
    delay: 700,
    duration: 2000,
    origin: 'right',
    distance: '50px',
})
sr.reveal('#feedback-author', {
    delay: 900,
    duration: 2000,
    origin: 'left',
    distance: '50px',
})
sr.reveal('#feedback-submit', {
    delay: 1100,
    duration: 2000,
    origin: 'right',
    distance: '50px',
})


sr.reveal('.feedbacks-title', {
    duration: 2000,
    origin: 'bottom',
    distance: '50px',
})

// Nav-item //
// Main item

sr.reveal('.nav-item', {
    interval: 500,
    origin: 'top',
    distance: '10px',
})

// Paragraph
sr.reveal('p', {
    origin: 'right',
    distance: '50px',
    reset: true,
    duration: 2000
})

// Button to top
sr.reveal('.btn-circle', {
    origin: 'bottom',
    delay: 200,
    distance: '50px',
    reset: true,
    duration: 2000
})

// Newsletter
sr.reveal('#newsletter1', {
    origin: 'top',
    distance: '50px',
    reset: true,
    duration: 2000
})
sr.reveal('#email', {
    origin: 'left',
    distance: '50px',
    reset: true,
    duration: 2000
})
sr.reveal('#newsletter2', {
    origin: 'right',
    distance: '50px',
    reset: true,
    duration: 2000
})
sr.reveal('#emailHelp', {
    origin: 'bottom',
    distance: '50px',
    reset: true,
    duration: 2000
})
// End Newsletter

