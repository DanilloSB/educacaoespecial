/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/configfb.js":
/*!**********************************!*\
  !*** ./resources/js/configfb.js ***!
  \**********************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.a(module, async (__webpack_handle_async_dependencies__) => {
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var https_www_gstatic_com_firebasejs_9_1_3_firebase_app_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js */ "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js");
/* harmony import */ var https_www_gstatic_com_firebasejs_9_1_3_firebase_analytics_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js */ "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js");
/* harmony import */ var https_www_gstatic_com_firebasejs_9_1_3_firebase_auth_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! https://www.gstatic.com/firebasejs/9.1.3/firebase-auth.js */ "https://www.gstatic.com/firebasejs/9.1.3/firebase-auth.js");
var __webpack_async_dependencies__ = __webpack_handle_async_dependencies__([https_www_gstatic_com_firebasejs_9_1_3_firebase_analytics_js__WEBPACK_IMPORTED_MODULE_1__, https_www_gstatic_com_firebasejs_9_1_3_firebase_auth_js__WEBPACK_IMPORTED_MODULE_2__, https_www_gstatic_com_firebasejs_9_1_3_firebase_app_js__WEBPACK_IMPORTED_MODULE_0__]);
([https_www_gstatic_com_firebasejs_9_1_3_firebase_analytics_js__WEBPACK_IMPORTED_MODULE_1__, https_www_gstatic_com_firebasejs_9_1_3_firebase_auth_js__WEBPACK_IMPORTED_MODULE_2__, https_www_gstatic_com_firebasejs_9_1_3_firebase_app_js__WEBPACK_IMPORTED_MODULE_0__] = __webpack_async_dependencies__.then ? await __webpack_async_dependencies__ : __webpack_async_dependencies__);
// Import the functions you need from the SDKs you need


 // TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional

var firebaseConfig = {
  apiKey: "AIzaSyBwEJ4FBPMGkQ8e7QfVSFHM8tyFq1hNY-U",
  authDomain: "autentica-usuario-banco.firebaseapp.com",
  projectId: "autentica-usuario-banco",
  storageBucket: "autentica-usuario-banco.appspot.com",
  messagingSenderId: "1068810176305",
  appId: "1:1068810176305:web:72abbba798283b95501210",
  measurementId: "G-00ZJ71KY6X"
}; // Initialize Firebase

globalThis.fbapp = (0,https_www_gstatic_com_firebasejs_9_1_3_firebase_app_js__WEBPACK_IMPORTED_MODULE_0__.initializeApp)(firebaseConfig);
globalThis.fbAuth = (0,https_www_gstatic_com_firebasejs_9_1_3_firebase_auth_js__WEBPACK_IMPORTED_MODULE_2__.getAuth)();
globalThis.createUserWithEmailAndPassword = https_www_gstatic_com_firebasejs_9_1_3_firebase_auth_js__WEBPACK_IMPORTED_MODULE_2__.createUserWithEmailAndPassword;
var analytics = (0,https_www_gstatic_com_firebasejs_9_1_3_firebase_analytics_js__WEBPACK_IMPORTED_MODULE_1__.getAnalytics)(fbapp);
});

/***/ }),

/***/ "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js":
false,

/***/ "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js":
false,

/***/ "https://www.gstatic.com/firebasejs/9.1.3/firebase-auth.js":
false

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
/******/ 	/* webpack/runtime/async module */
/******/ 	(() => {
/******/ 		var webpackThen = typeof Symbol === "function" ? Symbol("webpack then") : "__webpack_then__";
/******/ 		var webpackExports = typeof Symbol === "function" ? Symbol("webpack exports") : "__webpack_exports__";
/******/ 		var completeQueue = (queue) => {
/******/ 			if(queue) {
/******/ 				queue.forEach((fn) => (fn.r--));
/******/ 				queue.forEach((fn) => (fn.r-- ? fn.r++ : fn()));
/******/ 			}
/******/ 		}
/******/ 		var completeFunction = (fn) => (!--fn.r && fn());
/******/ 		var queueFunction = (queue, fn) => (queue ? queue.push(fn) : completeFunction(fn));
/******/ 		var wrapDeps = (deps) => (deps.map((dep) => {
/******/ 			if(dep !== null && typeof dep === "object") {
/******/ 				if(dep[webpackThen]) return dep;
/******/ 				if(dep.then) {
/******/ 					var queue = [];
/******/ 					dep.then((r) => {
/******/ 						obj[webpackExports] = r;
/******/ 						completeQueue(queue);
/******/ 						queue = 0;
/******/ 					});
/******/ 					var obj = {};
/******/ 												obj[webpackThen] = (fn, reject) => (queueFunction(queue, fn), dep.catch(reject));
/******/ 					return obj;
/******/ 				}
/******/ 			}
/******/ 			var ret = {};
/******/ 								ret[webpackThen] = (fn) => (completeFunction(fn));
/******/ 								ret[webpackExports] = dep;
/******/ 								return ret;
/******/ 		}));
/******/ 		__webpack_require__.a = (module, body, hasAwait) => {
/******/ 			var queue = hasAwait && [];
/******/ 			var exports = module.exports;
/******/ 			var currentDeps;
/******/ 			var outerResolve;
/******/ 			var reject;
/******/ 			var isEvaluating = true;
/******/ 			var nested = false;
/******/ 			var whenAll = (deps, onResolve, onReject) => {
/******/ 				if (nested) return;
/******/ 				nested = true;
/******/ 				onResolve.r += deps.length;
/******/ 				deps.map((dep, i) => (dep[webpackThen](onResolve, onReject)));
/******/ 				nested = false;
/******/ 			};
/******/ 			var promise = new Promise((resolve, rej) => {
/******/ 				reject = rej;
/******/ 				outerResolve = () => (resolve(exports), completeQueue(queue), queue = 0);
/******/ 			});
/******/ 			promise[webpackExports] = exports;
/******/ 			promise[webpackThen] = (fn, rejectFn) => {
/******/ 				if (isEvaluating) { return completeFunction(fn); }
/******/ 				if (currentDeps) whenAll(currentDeps, fn, rejectFn);
/******/ 				queueFunction(queue, fn);
/******/ 				promise.catch(rejectFn);
/******/ 			};
/******/ 			module.exports = promise;
/******/ 			body((deps) => {
/******/ 				if(!deps) return outerResolve();
/******/ 				currentDeps = wrapDeps(deps);
/******/ 				var fn, result;
/******/ 				var promise = new Promise((resolve, reject) => {
/******/ 					fn = () => (resolve(result = currentDeps.map((d) => (d[webpackExports]))));
/******/ 					fn.r = 0;
/******/ 					whenAll(currentDeps, fn, reject);
/******/ 				});
/******/ 				return fn.r ? promise : result;
/******/ 			}).then(outerResolve, reject);
/******/ 			isEvaluating = false;
/******/ 		};
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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module used 'module' so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/configfb.js");
/******/ 	
/******/ })()
;