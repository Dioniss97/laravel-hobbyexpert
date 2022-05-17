/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/front/mobile/accordion.js":
/*!************************************************!*\
  !*** ./resources/js/front/mobile/accordion.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "renderAccordion": () => (/* binding */ renderAccordion)
/* harmony export */ });
var renderAccordion = function renderAccordion() {
  var questions = document.querySelectorAll(".question-header");
  var answers = document.querySelectorAll(".answer");
  var arrows = document.querySelectorAll(".arrow"); // console.log(questions, answers, arrows);

  if (questions) {
    questions.forEach(function (question, i) {
      question.addEventListener("click", function () {
        arrows.forEach(function (arrow, i) {
          answers[i].classList.remove("active");
          arrow.classList.remove("active");
        }); // console.log(answers[i], arrows[i]);

        answers[i].classList.add("active");
        arrows[i].classList.add("active");
      });
    });
  }
};

/***/ }),

/***/ "./resources/js/front/mobile/hamburger.js":
/*!************************************************!*\
  !*** ./resources/js/front/mobile/hamburger.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "renderHamburger": () => (/* binding */ renderHamburger)
/* harmony export */ });
var renderHamburger = function renderHamburger() {
  var menu = document.getElementById("menu");
  var hamburger = document.getElementById("hamburger");

  if (hamburger) {
    hamburger.addEventListener("click", function () {
      menu.classList.toggle("active");
      hamburger.classList.toggle("active");
    });
  }
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************************************!*\
  !*** ./resources/js/front/mobile/app.js ***!
  \******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hamburger_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hamburger.js */ "./resources/js/front/mobile/hamburger.js");
/* harmony import */ var _accordion_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./accordion.js */ "./resources/js/front/mobile/accordion.js");


(0,_accordion_js__WEBPACK_IMPORTED_MODULE_1__.renderAccordion)();
(0,_hamburger_js__WEBPACK_IMPORTED_MODULE_0__.renderHamburger)();
})();

/******/ })()
;