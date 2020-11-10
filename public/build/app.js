(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_app_css__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // Need jQuery? Install it with "yarn add jquery", then uncomment to import it.


console.log('Hello Webpack Encore! Edit me in assets/js/app.js'); // scroll

jquery__WEBPACK_IMPORTED_MODULE_1___default()('a').click(function () {
  var target = jquery__WEBPACK_IMPORTED_MODULE_1___default()(this.getAttribute('href'));

  if (target.length) {
    event.preventDefault();
    jquery__WEBPACK_IMPORTED_MODULE_1___default()('html, body').animate({
      scrollTop: target.offset().top
    }, 2000);
  }
}); // ScrollReveal

var sr = ScrollReveal(); // Title

sr.reveal('h2', {
  origin: 'left',
  distance: '50px',
  reset: true,
  duration: 2000
}); // Feedbacks

sr.reveal('#feedback2', {
  duration: 4000,
  origin: 'bottom',
  distance: '10px',
  reset: true
}); // Form //

sr.reveal('#feedback-title', {
  duration: 2000,
  origin: 'top',
  distance: '50px',
  reset: true
});
sr.reveal('#feedback-content', {
  duration: 2000,
  origin: 'right',
  distance: '50px',
  reset: true
});
sr.reveal('#feedback-author', {
  duration: 2000,
  origin: 'left',
  distance: '50px',
  reset: true
});
sr.reveal('#feedback-submit', {
  duration: 2000,
  origin: 'bottom',
  distance: '50px',
  reset: true
});
sr.reveal('.feedbacks-title', {
  duration: 2000,
  origin: 'bottom',
  distance: '50px',
  reset: true
}); // Nav-item //
// Main item

sr.reveal('.nav-item', {
  interval: 500,
  origin: 'top',
  distance: '10px'
}); // Paragraph

sr.reveal('p', {
  origin: 'right',
  distance: '50px',
  reset: true,
  duration: 2000
}); // Button to top

sr.reveal('.btn-circle', {
  origin: 'bottom',
  delay: 200,
  distance: '50px',
  reset: true,
  duration: 2000
}); // Newsletter

sr.reveal('#newsletter1', {
  origin: 'top',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#email', {
  origin: 'left',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#newsletter2', {
  origin: 'right',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#emailHelp', {
  origin: 'bottom',
  distance: '50px',
  reset: true,
  duration: 2000
}); // End Newsletter

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiJCIsImNsaWNrIiwidGFyZ2V0IiwiZ2V0QXR0cmlidXRlIiwibGVuZ3RoIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsImFuaW1hdGUiLCJzY3JvbGxUb3AiLCJvZmZzZXQiLCJ0b3AiLCJzciIsIlNjcm9sbFJldmVhbCIsInJldmVhbCIsIm9yaWdpbiIsImRpc3RhbmNlIiwicmVzZXQiLCJkdXJhdGlvbiIsImludGVydmFsIiwiZGVsYXkiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBLHVDOzs7Ozs7Ozs7Ozs7QUNBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7Ozs7OztBQU9BO0NBRUE7O0FBQ0E7QUFFQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksbURBQVosRSxDQUVBOztBQUNBQyw2Q0FBQyxDQUFDLEdBQUQsQ0FBRCxDQUFPQyxLQUFQLENBQWEsWUFBVztBQUNwQixNQUFJQyxNQUFNLEdBQUdGLDZDQUFDLENBQUMsS0FBS0csWUFBTCxDQUFrQixNQUFsQixDQUFELENBQWQ7O0FBQ0EsTUFBR0QsTUFBTSxDQUFDRSxNQUFWLEVBQWlCO0FBQ2JDLFNBQUssQ0FBQ0MsY0FBTjtBQUNBTixpREFBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQk8sT0FBaEIsQ0FBd0I7QUFDcEJDLGVBQVMsRUFBRU4sTUFBTSxDQUFDTyxNQUFQLEdBQWdCQztBQURQLEtBQXhCLEVBRUcsSUFGSDtBQUdIO0FBQ0osQ0FSRCxFLENBVUE7O0FBRUEsSUFBTUMsRUFBRSxHQUFHQyxZQUFZLEVBQXZCLEMsQ0FFQTs7QUFDQUQsRUFBRSxDQUFDRSxNQUFILENBQVUsSUFBVixFQUFnQjtBQUNaQyxRQUFNLEVBQUUsTUFESTtBQUVaQyxVQUFRLEVBQUUsTUFGRTtBQUdaQyxPQUFLLEVBQUUsSUFISztBQUlaQyxVQUFRLEVB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RSxDQU1BLGlCIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuLi9jc3MvYXBwLmNzcyc7XHJcbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gaW1wb3J0IGl0LlxyXG5pbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuY29uc29sZS5sb2coJ0hlbGxvIFdlYnBhY2sgRW5jb3JlISBFZGl0IG1lIGluIGFzc2V0cy9qcy9hcHAuanMnKTtcclxuXHJcbi8vIHNjcm9sbFxyXG4kKCdhJykuY2xpY2soZnVuY3Rpb24gKCl7XHJcbiAgICB2YXIgdGFyZ2V0ID0gJCh0aGlzLmdldEF0dHJpYnV0ZSgnaHJlZicpKTtcclxuICAgIGlmKHRhcmdldC5sZW5ndGgpe1xyXG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcclxuICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgIHNjcm9sbFRvcDogdGFyZ2V0Lm9mZnNldCgpLnRvcFxyXG4gICAgICAgIH0sIDIwMDApO1xyXG4gICAgfVxyXG59KTtcclxuXHJcbi8vIFNjcm9sbFJldmVhbFxyXG5cclxuY29uc3Qgc3IgPSBTY3JvbGxSZXZlYWwoKTtcclxuXHJcbi8vIFRpdGxlXHJcbnNyLnJldmVhbCgnaDInLCB7XHJcbiAgICBvcmlnaW46ICdsZWZ0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBGZWVkYmFja3Ncclxuc3IucmV2ZWFsKCcjZmVlZGJhY2syJywge1xyXG4gICAgZHVyYXRpb246IDQwMDAsXHJcbiAgICBvcmlnaW46ICdib3R0b20nLFxyXG4gICAgZGlzdGFuY2U6ICcxMHB4JyxcclxuICAgIHJlc2V0OiB0cnVlXHJcbn0pXHJcblxyXG4vLyBGb3JtIC8vXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrLXRpdGxlJywge1xyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbiAgICBvcmlnaW46ICd0b3AnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG59KVxyXG5zci5yZXZlYWwoJyNmZWVkYmFjay1jb250ZW50Jywge1xyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbiAgICBvcmlnaW46ICdyaWdodCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbn0pXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrLWF1dGhvcicsIHtcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbn0pXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrLXN1Ym1pdCcsIHtcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAnYm90dG9tJyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxufSlcclxuXHJcblxyXG5zci5yZXZlYWwoJy5mZWVkYmFja3MtdGl0bGUnLCB7XHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ2JvdHRvbScsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbn0pXHJcblxyXG4vLyBOYXYtaXRlbSAvL1xyXG4vLyBNYWluIGl0ZW1cclxuXHJcbnNyLnJldmVhbCgnLm5hdi1pdGVtJywge1xyXG4gICAgaW50ZXJ2YWw6IDUwMCxcclxuICAgIG9yaWdpbjogJ3RvcCcsXHJcbiAgICBkaXN0YW5jZTogJzEwcHgnLFxyXG59KVxyXG5cclxuLy8gUGFyYWdyYXBoXHJcbnNyLnJldmVhbCgncCcsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBCdXR0b24gdG8gdG9wXHJcbnNyLnJldmVhbCgnLmJ0bi1jaXJjbGUnLCB7XHJcbiAgICBvcmlnaW46ICdib3R0b20nLFxyXG4gICAgZGVsYXk6IDIwMCxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBOZXdzbGV0dGVyXHJcbnNyLnJldmVhbCgnI25ld3NsZXR0ZXIxJywge1xyXG4gICAgb3JpZ2luOiAndG9wJyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnI2VtYWlsJywge1xyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5zci5yZXZlYWwoJyNuZXdzbGV0dGVyMicsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnI2VtYWlsSGVscCcsIHtcclxuICAgIG9yaWdpbjogJ2JvdHRvbScsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG4vLyBFbmQgTmV3c2xldHRlclxyXG5cclxuIl0sInNvdXJjZVJvb3QiOiIifQ==