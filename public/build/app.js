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
}); // Register form

sr.reveal('#register-left', {
  origin: 'left',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#register-right', {
  origin: 'right',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#register-top', {
  origin: 'top',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#register-conditions', {
  origin: 'left',
  distance: '50px',
  reset: true,
  duration: 2000
});
sr.reveal('#register-submit', {
  origin: 'right',
  distance: '50px',
  reset: true,
  duration: 2000
}); //admin

sr.reveal('.admin-card', {
  duration: 2000,
  interval: 500
});

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwiJCIsImNsaWNrIiwidGFyZ2V0IiwiZ2V0QXR0cmlidXRlIiwibGVuZ3RoIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsImFuaW1hdGUiLCJzY3JvbGxUb3AiLCJvZmZzZXQiLCJ0b3AiLCJzciIsIlNjcm9sbFJldmVhbCIsInJldmVhbCIsIm9yaWdpbiIsImRpc3RhbmNlIiwicmVzZXQiLCJkdXJhdGlvbiIsImRlbGF5IiwiaW50ZXJ2YWwiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBLHVDOzs7Ozs7Ozs7Ozs7QUNBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7Ozs7OztBQU9BO0NBRUE7O0FBQ0E7QUFFQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksbURBQVosRSxDQUVBOztBQUNBQyw2Q0FBQyxDQUFDLEdBQUQsQ0FBRCxDQUFPQyxLQUFQLENBQWEsWUFBVztBQUNwQixNQUFJQyxNQUFNLEdBQUdGLDZDQUFDLENBQUMsS0FBS0csWUFBTCxDQUFrQixNQUFsQixDQUFELENBQWQ7O0FBQ0EsTUFBR0QsTUFBTSxDQUFDRSxNQUFWLEVBQWlCO0FBQ2JDLFNBQUssQ0FBQ0MsY0FBTjtBQUNBTixpREFBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQk8sT0FBaEIsQ0FBd0I7QUFDcEJDLGVBQVMsRUFBRU4sTUFBTSxDQUFDTyxNQUFQLEdBQWdCQztBQURQLEtBQXhCLEVBRUcsSUFGSDtBQUdIO0FBQ0osQ0FSRCxFLENBVUE7O0FBRUEsSUFBTUMsRUFBRSxHQUFHQyxZQUFZLEVBQXZCLEMsQ0FFQTs7QUFDQUQsRUFBRSxDQUFDRSxNQUFILENBQVUsSUFBVixFQUFnQjtBQUNaQyxRQUFNLEVBQUUsTUFESTtBQUVaQyxVQUFRLEVBQUUsTUFGRTtBQUdaQyxPQUFLLEVBQUUsSUFISztBQUlaQyxVQUFRLEVBQUU7QUFKRSxDQUFoQixFLENBT0E7O0FBQ0FOLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLFlBQVYsRUFBd0I7QUFDcEJJLFVBQVEsRUFBRSxJQURVO0FBRXBCSCxRQUFNLEVBQUUsUUFGWTtBQUdwQkMsVUFBUSxFQUFFLE1BSFU7QUFJcEJDLE9BQUssRUFBRTtBQUphLENBQXhCLEUsQ0FPQTs7QUFDQUwsRUFBRSxDQUFDRSxNQUFILENBQVUsaUJBQVYsRUFBNkI7QUFDekJLLE9BQUssRUFBRSxHQURrQjtBQUV6QkQsVUFBUSxFQUFFLElBRmU7QUFHekJILFFBQU0sRUFBRSxNQUhpQjtBQUl6QkMsVUFBUSxFQUFFLE1BSmU7QUFLekJDLE9BQUssRUFBRTtBQUxrQixDQUE3QjtBQU9BTCxFQUFFLENBQUNFLE1BQUgsQ0FBVSxtQkFBVixFQUErQjtBQUMzQkssT0FBSyxFQUFFLEdBRG9CO0FBRTNCRCxVQUFRLEVBQUUsSUFGaUI7QUFHM0JILFFBQU0sRUFBRSxPQUhtQjtBQUkzQkMsVUFBUSxFQUFFO0FBSmlCLENBQS9CO0FBTUFKLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLGtCQUFWLEVBQThCO0FBQzFCSyxPQUFLLEVBQUUsR0FEbUI7QUFFMUJELFVBQVEsRUFBRSxJQUZnQjtBQUcxQkgsUUFBTSxFQUFFLE1BSGtCO0FBSTFCQyxVQUFRLEVBQUU7QUFKZ0IsQ0FBOUI7QUFNQUosRUFBRSxDQUFDRSxNQUFILENBQVUsa0JBQVYsRUFBOEI7QUFDMUJLLE9BQUssRUFBRSxJQURtQjtBQUUxQkQsVUFBUSxFQUFFLElBRmdCO0FBRzFCSCxRQUFNLEVBQUUsT0FIa0I7QUFJMUJDLFVBQVEsRUFBRTtBQUpnQixDQUE5QjtBQU9BSixFQUFFLENBQUNFLE1BQUgsQ0FBVSxrQkFBVixFQUE4QjtBQUMxQkksVUFBUSxFQUFFLElBRGdCO0FBRTFCSCxRQUFNLEVBQUUsUUFGa0I7QUFHMUJDLFVBQVEsRUFBRTtBQUhnQixDQUE5QjtBQU1BSixFQUFFLENBQUNFLE1BQUgsQ0FBVSxrQkFBVixFQUE4QjtBQUMxQkksVUFBUSxFQUFFLElBRGdCO0FBRTFCSCxRQUFNLEVBQUUsUUFGa0I7QUFHMUJDLFVBQVEsRUFBRTtBQUhnQixDQUE5QixFLENBTUE7O0FBQ0FKLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLFdBQVYsRUFBdUI7QUFDbkJNLFVBQVEsRUFBRSxHQURTO0FBRW5CTCxRQUFNLEVBQUUsS0FGVztBQUduQkMsVUFBUSxFQUFFLE1BSFM7QUFJbkJDLE9BQUssRUFBRTtBQUpZLENBQXZCLEUsQ0FPQTs7QUFDQUwsRUFBRSxDQUFDRSxNQUFILENBQVUsR0FBVixFQUFlO0FBQ1hDLFFBQU0sRUFBRSxPQURHO0FBRVhDLFVBQVEsRUFBRSxNQUZDO0FBR1hDLE9BQUssRUFBRSxJQUhJO0FBSVhDLFVBQVEsRUFBRTtBQUpDLENBQWYsRSxDQU9BOztBQUNBTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxhQUFWLEVBQXlCO0FBQ3JCQyxRQUFNLEVBQUUsUUFEYTtBQUVyQkksT0FBSyxFQUFFLEdBRmM7QUFHckJILFVBQVEsRUFBRSxNQUhXO0FBSXJCQyxPQUFLLEVBQUUsSUFKYztBQUtyQkMsVUFBUSxFQUFFO0FBTFcsQ0FBekIsRSxDQVFBOztBQUNBTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxjQUFWLEVBQTBCO0FBQ3RCQyxRQUFNLEVBQUUsS0FEYztBQUV0QkMsVUFBUSxFQUFFLE1BRlk7QUFHdEJDLE9BQUssRUFBRSxJQUhlO0FBSXRCQyxVQUFRLEVBQUU7QUFKWSxDQUExQjtBQU1BTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxRQUFWLEVBQW9CO0FBQ2hCQyxRQUFNLEVBQUUsTUFEUTtBQUVoQkMsVUFBUSxFQUFFLE1BRk07QUFHaEJDLE9BQUssRUFBRSxJQUhTO0FBSWhCQyxVQUFRLEVBQUU7QUFKTSxDQUFwQjtBQU1BTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxjQUFWLEVBQTBCO0FBQ3RCQyxRQUFNLEVBQUUsT0FEYztBQUV0QkMsVUFBUSxFQUFFLE1BRlk7QUFHdEJDLE9BQUssRUFBRSxJQUhlO0FBSXRCQyxVQUFRLEVBQUU7QUFKWSxDQUExQjtBQU1BTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxZQUFWLEVBQXdCO0FBQ3BCQyxRQUFNLEVBQUUsUUFEWTtBQUVwQkMsVUFBUSxFQUFFLE1BRlU7QUFHcEJDLE9BQUssRUFBRSxJQUhhO0FBSXBCQyxVQUFRLEVBQUU7QUFKVSxDQUF4QixFLENBTUE7QUFFQTs7QUFDQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsYUFBVixFQUF5QjtBQUNyQkMsUUFBTSxFQUFFLE1BRGE7QUFFckJDLFVBQVEsRUFBRSxNQUZXO0FBR3JCQyxPQUFLLEVBQUUsSUFIYztBQUlyQkMsVUFBUSxFQUFFO0FBSlcsQ0FBekI7QUFNQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsY0FBVixFQUEwQjtBQUN0QkMsUUFBTSxFQUFFLE9BRGM7QUFFdEJDLFVBQVEsRUFBRSxNQUZZO0FBR3RCQyxPQUFLLEVBQUUsSUFIZTtBQUl0QkMsVUFBUSxFQUFFO0FBSlksQ0FBMUI7QUFNQU4sRUFBRSxDQUFDRSxNQUFILENBQVUsZUFBVixFQUEyQjtBQUN2QkMsUUFBTSxFQUFFLE9BRGU7QUFFdkJDLFVBQVEsRUFBRSxNQUZhO0FBR3ZCQyxPQUFLLEVBQUUsSUFIZ0I7QUFJdkJDLFVBQVEsRUFBRSxJQUphO0FBS3ZCRSxVQUFRLEVBQUU7QUFMYSxDQUEzQixFLENBUUE7O0FBQ0FSLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLGdCQUFWLEVBQTRCO0FBQ3hCQyxRQUFNLEVBQUUsTUFEZ0I7QUFFeEJDLFVBQVEsRUFBRSxNQUZjO0FBR3hCQyxPQUFLLEVBQUUsSUFIaUI7QUFJeEJDLFVBQVEsRUFBRTtBQUpjLENBQTVCO0FBTUFOLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLGlCQUFWLEVBQTZCO0FBQ3pCQyxRQUFNLEVBQUUsT0FEaUI7QUFFekJDLFVBQVEsRUFBRSxNQUZlO0FBR3pCQyxPQUFLLEVBQUUsSUFIa0I7QUFJekJDLFVBQVEsRUFBRTtBQUplLENBQTdCO0FBTUFOLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLGVBQVYsRUFBMkI7QUFDdkJDLFFBQU0sRUFBRSxLQURlO0FBRXZCQyxVQUFRLEVBQUUsTUFGYTtBQUd2QkMsT0FBSyxFQUFFLElBSGdCO0FBSXZCQyxVQUFRLEVBQUU7QUFKYSxDQUEzQjtBQU9BTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxzQkFBVixFQUFrQztBQUM5QkMsUUFBTSxFQUFFLE1BRHNCO0FBRTlCQyxVQUFRLEVBQUUsTUFGb0I7QUFHOUJDLE9BQUssRUFBRSxJQUh1QjtBQUk5QkMsVUFBUSxFQUFFO0FBSm9CLENBQWxDO0FBT0FOLEVBQUUsQ0FBQ0UsTUFBSCxDQUFVLGtCQUFWLEVBQThCO0FBQzFCQyxRQUFNLEVBQUUsT0FEa0I7QUFFMUJDLFVBQVEsRUFBRSxNQUZnQjtBQUcxQkMsT0FBSyxFQUFFLElBSG1CO0FBSTFCQyxVQUFRLEVBQUU7QUFKZ0IsQ0FBOUIsRSxDQU9BOztBQUNBTixFQUFFLENBQUNFLE1BQUgsQ0FBVSxhQUFWLEVBQXlCO0FBQ3JCSSxVQUFRLEVBQUUsSUFEVztBQUVyQkUsVUFBUSxFQUFFO0FBRlcsQ0FBekIsRSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iLCIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi4vY3NzL2FwcC5jc3MnO1xyXG4vLyBOZWVkIGpRdWVyeT8gSW5zdGFsbCBpdCB3aXRoIFwieWFybiBhZGQganF1ZXJ5XCIsIHRoZW4gdW5jb21tZW50IHRvIGltcG9ydCBpdC5cclxuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcclxuXHJcbmNvbnNvbGUubG9nKCdIZWxsbyBXZWJwYWNrIEVuY29yZSEgRWRpdCBtZSBpbiBhc3NldHMvanMvYXBwLmpzJyk7XHJcblxyXG4vLyBzY3JvbGxcclxuJCgnYScpLmNsaWNrKGZ1bmN0aW9uICgpe1xyXG4gICAgdmFyIHRhcmdldCA9ICQodGhpcy5nZXRBdHRyaWJ1dGUoJ2hyZWYnKSk7XHJcbiAgICBpZih0YXJnZXQubGVuZ3RoKXtcclxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXHJcbiAgICAgICAgJCgnaHRtbCwgYm9keScpLmFuaW1hdGUoe1xyXG4gICAgICAgICAgICBzY3JvbGxUb3A6IHRhcmdldC5vZmZzZXQoKS50b3BcclxuICAgICAgICB9LCAyMDAwKTtcclxuICAgIH1cclxufSk7XHJcblxyXG4vLyBTY3JvbGxSZXZlYWxcclxuXHJcbmNvbnN0IHNyID0gU2Nyb2xsUmV2ZWFsKCk7XHJcblxyXG4vLyBUaXRsZVxyXG5zci5yZXZlYWwoJ2gyJywge1xyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5cclxuLy8gRmVlZGJhY2tzXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrMicsIHtcclxuICAgIGR1cmF0aW9uOiA0MDAwLFxyXG4gICAgb3JpZ2luOiAnYm90dG9tJyxcclxuICAgIGRpc3RhbmNlOiAnMTBweCcsXHJcbiAgICByZXNldDogdHJ1ZVxyXG59KVxyXG5cclxuLy8gRm9ybSAvL1xyXG5zci5yZXZlYWwoJyNmZWVkYmFjay10aXRsZScsIHtcclxuICAgIGRlbGF5OiA1MDAsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ2xlZnQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiBmYWxzZSxcclxufSlcclxuc3IucmV2ZWFsKCcjZmVlZGJhY2stY29udGVudCcsIHtcclxuICAgIGRlbGF5OiA3MDAsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbn0pXHJcbnNyLnJldmVhbCgnI2ZlZWRiYWNrLWF1dGhvcicsIHtcclxuICAgIGRlbGF5OiA5MDAsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ2xlZnQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxufSlcclxuc3IucmV2ZWFsKCcjZmVlZGJhY2stc3VibWl0Jywge1xyXG4gICAgZGVsYXk6IDExMDAsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbn0pXHJcblxyXG5zci5yZXZlYWwoJy5mZWVkYmFja3MtdGl0bGUnLCB7XHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIG9yaWdpbjogJ2JvdHRvbScsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG59KVxyXG5cclxuc3IucmV2ZWFsKCcuZmVlZGJhY2stc291cmNlJywge1xyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbiAgICBvcmlnaW46IFwiYm90dG9tXCIsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnXHJcbn0pXHJcblxyXG4vLyBOYXYtaXRlbSAvL1xyXG5zci5yZXZlYWwoJy5uYXYtaXRlbScsIHtcclxuICAgIGludGVydmFsOiA1MDAsXHJcbiAgICBvcmlnaW46ICd0b3AnLFxyXG4gICAgZGlzdGFuY2U6ICcxMHB4JyxcclxuICAgIHJlc2V0OiBmYWxzZVxyXG59KVxyXG5cclxuLy8gUGFyYWdyYXBoXHJcbnNyLnJldmVhbCgncCcsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBCdXR0b24gdG8gdG9wXHJcbnNyLnJldmVhbCgnLmJ0bi1jaXJjbGUnLCB7XHJcbiAgICBvcmlnaW46ICdib3R0b20nLFxyXG4gICAgZGVsYXk6IDIwMCxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG4vLyBOZXdzbGV0dGVyXHJcbnNyLnJldmVhbCgnI25ld3NsZXR0ZXIxJywge1xyXG4gICAgb3JpZ2luOiAndG9wJyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnI2VtYWlsJywge1xyXG4gICAgb3JpZ2luOiAnbGVmdCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5zci5yZXZlYWwoJyNuZXdzbGV0dGVyMicsIHtcclxuICAgIG9yaWdpbjogJ3JpZ2h0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcbnNyLnJldmVhbCgnI2VtYWlsSGVscCcsIHtcclxuICAgIG9yaWdpbjogJ2JvdHRvbScsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG4vLyBFbmQgTmV3c2xldHRlclxyXG5cclxuLy8gTG9naW5cclxuc3IucmV2ZWFsKCcubG9naW4tbGVmdCcsIHtcclxuICAgIG9yaWdpbjogJ2xlZnQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDBcclxufSlcclxuc3IucmV2ZWFsKCcubG9naW4tcmlnaHQnLCB7XHJcbiAgICBvcmlnaW46ICdyaWdodCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5zci5yZXZlYWwoJy5sb2dpbi1idXR0b24nLCB7XHJcbiAgICBvcmlnaW46ICdyaWdodCcsXHJcbiAgICBkaXN0YW5jZTogJzQwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxuICAgIGludGVydmFsOiA3MDBcclxufSlcclxuXHJcbi8vIFJlZ2lzdGVyIGZvcm1cclxuc3IucmV2ZWFsKCcjcmVnaXN0ZXItbGVmdCcsIHtcclxuICAgIG9yaWdpbjogJ2xlZnQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbn0pXHJcbnNyLnJldmVhbCgnI3JlZ2lzdGVyLXJpZ2h0Jywge1xyXG4gICAgb3JpZ2luOiAncmlnaHQnLFxyXG4gICAgZGlzdGFuY2U6ICc1MHB4JyxcclxuICAgIHJlc2V0OiB0cnVlLFxyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbn0pXHJcbnNyLnJldmVhbCgnI3JlZ2lzdGVyLXRvcCcsIHtcclxuICAgIG9yaWdpbjogJ3RvcCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMCxcclxufSlcclxuXHJcbnNyLnJldmVhbCgnI3JlZ2lzdGVyLWNvbmRpdGlvbnMnLCB7XHJcbiAgICBvcmlnaW46ICdsZWZ0JyxcclxuICAgIGRpc3RhbmNlOiAnNTBweCcsXHJcbiAgICByZXNldDogdHJ1ZSxcclxuICAgIGR1cmF0aW9uOiAyMDAwXHJcbn0pXHJcblxyXG5zci5yZXZlYWwoJyNyZWdpc3Rlci1zdWJtaXQnLCB7XHJcbiAgICBvcmlnaW46ICdyaWdodCcsXHJcbiAgICBkaXN0YW5jZTogJzUwcHgnLFxyXG4gICAgcmVzZXQ6IHRydWUsXHJcbiAgICBkdXJhdGlvbjogMjAwMFxyXG59KVxyXG5cclxuLy9hZG1pblxyXG5zci5yZXZlYWwoJy5hZG1pbi1jYXJkJywge1xyXG4gICAgZHVyYXRpb246IDIwMDAsXHJcbiAgICBpbnRlcnZhbDogNTAwXHJcbn0pIl0sInNvdXJjZVJvb3QiOiIifQ==