/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	var _classCallCheck2 = __webpack_require__(1);

	var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);

	var _createClass2 = __webpack_require__(2);

	var _createClass3 = _interopRequireDefault(_createClass2);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	// import Pjax from 'pjax';
	// new Pjax({
	//     elements: "a", // default is "a[href], form[action]"
	//     selectors: ["title", ".my-Header", ".my-Content", ".my-Sidebar"]
	// })
	$(function () {});

	(function ($) {
	    $.fn.scrollRow = function (options) {
	        var settings = $.extend({
	            leftArrow: '.arrow-left',
	            rightArrow: '.arrow-right',
	            container: '.scrollable-container',
	            scrollable: '.scrollable',
	            step: 300
	        }, options);
	        var sr = new ScrollRow(settings);
	    };

	    var ScrollRow = function () {
	        function ScrollRow(settings) {
	            (0, _classCallCheck3.default)(this, ScrollRow);

	            this.leftArrow = $(settings.leftArrow);
	            this.rightArrow = $(settings.rightArrow);
	            this.scrollable = $(settings.scrollable);
	            this.container = $(settings.container);
	            this.step = settings.step;
	            this.setListeners();
	        }

	        (0, _createClass3.default)(ScrollRow, [{
	            key: 'setListeners',
	            value: function setListeners() {
	                this.leftArrow.on('click', this.leftArrowCallback.bind(this));
	                this.rightArrow.on('click', this.rightArrowCallback.bind(this));
	            }
	        }, {
	            key: 'leftArrowCallback',
	            value: function leftArrowCallback(e) {
	                e.preventDefault();
	                var scrollPos = this.container.scrollLeft();
	                var width = this.scrollable.width();
	                var scrollTo = scrollPos;
	                if (width < this.step + scrollTo) {
	                    scrollTo = width;
	                } else {
	                    scrollTo += this.step;
	                }
	                this.scrollTo(scrollTo);
	            }
	        }, {
	            key: 'rightArrowCallback',
	            value: function rightArrowCallback(e) {
	                e.preventDefault();
	                var scrollPos = this.container.scrollLeft();
	                var scrollTo = scrollPos;
	                if (this.scrollTo - this.step < 0) {
	                    scrollTo = 0;
	                } else {
	                    scrollTo -= this.step;
	                }
	                this.scrollTo(scrollTo);
	            }
	        }, {
	            key: 'scrollTo',
	            value: function scrollTo(_scrollTo) {
	                this.container.animate({
	                    scrollLeft: _scrollTo
	                }, 200);
	            }
	        }]);
	        return ScrollRow;
	    }();
	})(jQuery);
	$('.scroll-container').scrollRow({
	    container: '.skill-list'
	});

/***/ },
/* 1 */
/***/ function(module, exports) {

	"use strict";

	exports.__esModule = true;

	exports.default = function (instance, Constructor) {
	  if (!(instance instanceof Constructor)) {
	    throw new TypeError("Cannot call a class as a function");
	  }
	};

/***/ },
/* 2 */
/***/ function(module, exports, __webpack_require__) {

	"use strict";

	exports.__esModule = true;

	var _defineProperty = __webpack_require__(3);

	var _defineProperty2 = _interopRequireDefault(_defineProperty);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	exports.default = (function () {
	  function defineProperties(target, props) {
	    for (var i = 0; i < props.length; i++) {
	      var descriptor = props[i];
	      descriptor.enumerable = descriptor.enumerable || false;
	      descriptor.configurable = true;
	      if ("value" in descriptor) descriptor.writable = true;
	      (0, _defineProperty2.default)(target, descriptor.key, descriptor);
	    }
	  }

	  return function (Constructor, protoProps, staticProps) {
	    if (protoProps) defineProperties(Constructor.prototype, protoProps);
	    if (staticProps) defineProperties(Constructor, staticProps);
	    return Constructor;
	  };
	})();

/***/ },
/* 3 */
/***/ function(module, exports, __webpack_require__) {

	module.exports = { "default": __webpack_require__(4), __esModule: true };

/***/ },
/* 4 */
/***/ function(module, exports, __webpack_require__) {

	var $ = __webpack_require__(5);
	module.exports = function defineProperty(it, key, desc){
	  return $.setDesc(it, key, desc);
	};

/***/ },
/* 5 */
/***/ function(module, exports) {

	var $Object = Object;
	module.exports = {
	  create:     $Object.create,
	  getProto:   $Object.getPrototypeOf,
	  isEnum:     {}.propertyIsEnumerable,
	  getDesc:    $Object.getOwnPropertyDescriptor,
	  setDesc:    $Object.defineProperty,
	  setDescs:   $Object.defineProperties,
	  getKeys:    $Object.keys,
	  getNames:   $Object.getOwnPropertyNames,
	  getSymbols: $Object.getOwnPropertySymbols,
	  each:       [].forEach
	};

/***/ }
/******/ ]);