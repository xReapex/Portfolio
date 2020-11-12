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
  delay: 500,
  duration: 2000,
  origin: 'left',
  distance: '50px',
  reset: false
});
sr.reveal('#feedback-content', {
  delay: 700,
  duration: 2000,
  origin: 'right',
  distance: '50px'
});
sr.reveal('#feedback-author', {
  delay: 900,
  duration: 2000,
  origin: 'left',
  distance: '50px'
});
sr.reveal('#feedback-submit', {
  delay: 1100,
  duration: 2000,
  origin: 'right',
  distance: '50px'
});
sr.reveal('.feedbacks-title', {
  duration: 2000,
  origin: 'bottom',
  distance: '50px'
});
sr.reveal('.feedback-source', {
  duration: 2000,
  origin: "bottom",
  distance: '50px'
}); // Nav-item //

sr.reveal('.nav-item', {
  interval: 500,
  origin: 'top',
  distance: '10px',
  reset: false
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
// Login

sr.reveal('.login-left', {
  origin: 'left',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('.login-right', {
  origin: 'right',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('.login-button', {
  origin: 'right',
  distance: '40px',
  reset: true,
  duration: 2000,
  interval: 700
});

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiJCIsImNsaWNrIiwidGFyZ2V0IiwiZ2V0QXR0cmlidXRlIiwibGVuZ3RoIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsImFuaW1hdGUiLCJzY3JvbGxUb3AiLCJvZmZzZXQiLCJ0b3AiLCJzciIsIlNjcm9sbFJldmVhbCIsInJldmVhbCIsIm9yaWdpbiIsImRpc3RhbmNlIiwicmVzZXQiLCJkdXJhdGlvbiIsImRlbGF5IiwiaW50ZXJ2YWwiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBLHVDOzs7Ozs7Ozs7Ozs7QUNBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7Ozs7OztBQU9BO0NBRUE7O0FBQ0E7QUFFQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksbURBQVosRSxDQUVBOztBQUNBQyw2Q0FBQyxDQUFDLEdBQUQsQ0FBRCxDQUFPQyxLQUFQLENBQWEsWUFBVztBQUNwQixNQUFJQyxNQUFNLEdBQUdGLDZDQUFDLENBQUMsS0FBS0csWUFBTCxDQUFrQixNQUFsQixDQUFELENBQWQ7O0FBQ0EsTUFBR0QsTUFBTSxDQUFDRSxNQUFWLEVBQWlCO0FBQ2JDLFNBQUssQ0FBQ0MsY0FBTjtBQUNBTixpREFBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQk8sT0FBaEIsQ0FBd0I7QUFDcEJDLGVBQVMsRUFBRU4sTUFBTSxDQUFDTyxNQUFQLEdBQWdCQztBQURQLEtBQXhCLEVBRUcsSUFGSDtBQUdIO0FBQ0osQ0FSRCxFLENBVUE7O0FBRUEsSUFBTUMsRUFBRSxHQUFHQyxZQUFZLEVBQXZCLEMsQ0FFQTs7QUFDQUQsRUFBRSxDQUFDRSxNQUFILENBQVUsSUFBVixFQUFnQjtBQUNaQyxRQUFNLEVBQUUsTUFESTtBQUVaQyxVQUFRLEVBQUUsTUFGRTtBQUdaQyxPQUFLLEVBQUUsSUFISztBQUlaQyxVQUFRLEVB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QU1BTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxZQUFWLEVBQXdCO0FBQ3BCQyxRQUFNLEVBQUUsUUFEWTtBQUVwQkMsVUFBUSxFQUFFLE1BRlU7QUFHcEJDLE9BQUssRUFBRSxJQUhhO0FBSXBCQyxVQUFRLEVBQUU7QUFKVSxDQUF4QixFLENBTUE7QUFFQTs7QUFDQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsYUFBVixFQUF5QjtBQUNyQkMsUUFBTSxFQUFFLE1BRGE7QUFFckJDLFVBQVEsRUFBRSxNQUZXO0FBR3JCQyxPQUFLLEVBQUUsSUFIYztBQUlyQkMsVUFBUSxFQUFFO0FBSlcsQ0FBekI7QUFNQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsY0FBVixFQUEwQjtBQUN0QkMsUUFBTSxFQUFFLE9BRGM7QUFFdEJDLFVBQVEsRUFBRSxNQUZZO0FBR3RCQyxPQUFLLEVBQUUsSUFIZTtBQUl0QkMsVUFBUSxFQUFFO0FBSlksQ0FBMUI7QUFNQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsZUFBVixFQUEyQjtBQUN2QkMsUUFBTSxFQUFFLE9BRGU7QUFFdkJDLFVBQVEsRUFBRSxNQUZhO0FBR3ZCQyxPQUFLLEVBQUUsSUFIZ0I7QUFJdkJDLFVBQVEsRUFBRSxJQUphO0FBS3ZCRSxVQUFRLEVBQUU7QUFMYSxDQUEzQixFIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuLi9jc3MvYXBwLmNzcyc7XHJcbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gaW1wb3J0IGl0LlxyXG5pbXBvcnQgJCBmcm9tICdqcXVlcnknO1xyXG5cclxuY29uc29sZS5sb2coJ0hlbGxvIFdlYnBhY2sgRW5jb3JlISBFZGl0IG1lIGluIGFzc2V0cy9qcy9hcHAuanMnKTtcclxuXHJcbi8vIHNjcm9sbFxyXG4kKCdhJykuY2xpY2soZnVuY3Rpb24gKCl7XHJcbiAgICB2YXIgdGFyZ2V0ID0gJCh0aGlzLmdldEF0dHJpYnV0ZSgnaHJlZicpKTtcclxuICAgIGlmKHRhcmdldC5sZW5ndGgpe1xyXG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcclxuICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgIHNjcm9sbFRvcDogdGFyZ2V0Lm9mZnNldCgpLnRvcFxyXG4gICAgICAgIH0sIDIwMDApO1xyXG4gICAgfVxyXG59KTtcclxuXHJcbi8vIFNjcm9sbFJldmVhbFxyXG5cclxuY29uc3Qgc3IgPSBTY3JvbGxSZXZlYWwoKTtcclxuXHJcbi8vIFRpdGxlXHJcbnNyLnJldmVhbCgnaDInLCB7XHJcbiAgICBvcmlnaW46ICdsZWZ0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBGZWVkYmFja3Ncclxuc3IucmV2ZWFsKCcjZmVlZGJhY2syJywge1xyXG4gICAgZHVyYXRpb246IDQwMDAsXHJcbiAgICBvcmlnaW46ICdib3R0b20nLFxyXG4gICAgZGlzdGFuY2U6ICcxMHB4JyxcclxuICAgIHJlc2V0OiB0cnVlXHJcbn0pXHJcblxyXG4vLyBGb3JtIC8vXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrLXRpdGxlJywge1xyXG4gICAgZGVsYXk6IDUwMCxcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IGZhbHNlLFxyXG59KVxyXG5zci5yZXZlYWwoJyNmZWVkYmFjay1jb250ZW50Jywge1xyXG4gICAgZGVsYXk6IDcwMCxcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAncmlnaHQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxufSlcclxuc3IucmV2ZWFsKCcjZmVlZGJhY2stYXV0aG9yJywge1xyXG4gICAgZGVsYXk6IDkwMCxcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG59KVxyXG5zci5yZXZlYWwoJyNmZWVkYmFjay1zdWJtaXQnLCB7XHJcbiAgICBkZWxheTogMTEwMCxcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAncmlnaHQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxufSlcclxuXHJcbnNyLnJldmVhbCgnLmZlZWRiYWNrcy10aXRsZScsIHtcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgb3JpZ2luOiAnYm90dG9tJyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbn0pXHJcblxyXG5zci5yZXZlYWwoJy5mZWVkYmFjay1zb3VyY2UnLCB7XHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogXCJib3R0b21cIixcclxuICAgIGRpc3RhbmNlOiAnNTBweCdcclxufSlcclxuXHJcbi8vIE5hdi1pdGVtIC8vXHJcbnNyLnJldmVhbCgnLm5hdi1pdGVtJywge1xyXG4gICAgaW50ZXJ2YWw6IDUwMCxcclxuICAgIG9yaWdpbjogJ3RvcCcsXHJcbiAgICBkaXN0YW5jZTogJzEwcHgnLFxyXG4gICAgcmVzZXQ6IGZhbHNlXHJcbn0pXHJcblxyXG4vLyBQYXJhZ3JhcGhcclxuc3IucmV2ZWFsKCdwJywge1xyXG4gICAgb3JpZ2luOiAncmlnaHQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDBcclxufSlcclxuXHJcbi8vIEJ1dHRvbiB0byB0b3Bcclxuc3IucmV2ZWFsKCcuYnRuLWNpcmNsZScsIHtcclxuICAgIG9yaWdpbjogJ2JvdHRvbScsXHJcbiAgICBkZWxheTogMjAwLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDBcclxufSlcclxuXHJcbi8vIE5ld3NsZXR0ZXJcclxuc3IucmV2ZWFsKCcjbmV3c2xldHRlcjEnLCB7XHJcbiAgICBvcmlnaW46ICd0b3AnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDBcclxufSlcclxuc3IucmV2ZWFsKCcjZW1haWwnLCB7XHJcbiAgICBvcmlnaW46ICdsZWZ0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnI25ld3NsZXR0ZXIyJywge1xyXG4gICAgb3JpZ2luOiAncmlnaHQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDBcclxufSlcclxuc3IucmV2ZWFsKCcjZW1haWxIZWxwJywge1xyXG4gICAgb3JpZ2luOiAnYm90dG9tJyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbi8vIEVuZCBOZXdzbGV0dGVyXHJcblxyXG4vLyBMb2dpblxyXG5zci5yZXZlYWwoJy5sb2dpbi1sZWZ0Jywge1xyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5zci5yZXZlYWwoJy5sb2dpbi1yaWdodCcsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnLmxvZ2luLWJ1dHRvbicsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNDBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwLFxyXG4gICAgaW50ZXJ2YWw6IDcwMFxyXG59KVxyXG4iXSwic291cmNlUm9vdCI6IiJ9