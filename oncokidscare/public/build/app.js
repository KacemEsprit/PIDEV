(self["webpackChunkoncokidscare"] = self["webpackChunkoncokidscare"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap.js */ "./assets/bootstrap.js");
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var chart_js_auto__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! chart.js/auto */ "./node_modules/chart.js/auto/auto.js");
/* harmony import */ var _symfony_ux_chartjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @symfony/ux-chartjs */ "./vendor/symfony/ux-chartjs/assets/dist/controller.js");




// Register Stimulus controllers
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_1__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$"));

// Register Chart.js controller


(0,_symfony_ux_chartjs__WEBPACK_IMPORTED_MODULE_4__.registerController)(app);
console.log('App.js loaded successfully!');

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@symfony/stimulus-bundle'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());

var app = Object(function webpackMissingModule() { var e = new Error("Cannot find module '@symfony/stimulus-bundle'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$":
/*!*******************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.(j%7Ct)sx?$ ***!
  \*******************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./chart_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/chart_controller.js",
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j%7Ct)sx?$";

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js):\nError: The file \"@symfony/ux-turbo/package.json\" could not be found. Try running \"yarn install --force\".\n    at createControllersModule (D:\\PIDEV\\oncokidscare\\node_modules\\@symfony\\stimulus-bridge\\dist\\webpack\\loader.js:46:19)\n    at Object.loader (D:\\PIDEV\\oncokidscare\\node_modules\\@symfony\\stimulus-bridge\\dist\\webpack\\loader.js:106:43)");

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/chart_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/chart_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
/* harmony import */ var chart_js_auto__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! chart.js/auto */ "./node_modules/chart.js/auto/auto.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }

















function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }


var _default = /*#__PURE__*/function (_Controller) {
  function _default() {
    _classCallCheck(this, _default);
    return _callSuper(this, _default, arguments);
  }
  _inherits(_default, _Controller);
  return _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.chart = new chart_js_auto__WEBPACK_IMPORTED_MODULE_18__.Chart(this.element, {
        type: this.element.dataset.type,
        data: this.element.dataset.data ? JSON.parse(this.element.dataset.data) : {},
        options: this.element.dataset.options ? JSON.parse(this.element.dataset.options) : {}
      });
    }
  }, {
    key: "disconnect",
    value: function disconnect() {
      if (this.chart) {
        this.chart.destroy();
      }
    }
  }]);
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_17__.Controller);


/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
















function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
var _default = /*#__PURE__*/function (_Controller) {
  function _default() {
    _classCallCheck(this, _default);
    return _callSuper(this, _default, arguments);
  }
  _inherits(_default, _Controller);
  return _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_16__.Controller);


/***/ }),

/***/ "./vendor/symfony/ux-chartjs/assets/dist/controller.js":
/*!*************************************************************!*\
  !*** ./vendor/symfony/ux-chartjs/assets/dist/controller.js ***!
  \*************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ default_1)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
/* harmony import */ var chart_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! chart.js */ "./node_modules/chart.js/dist/chart.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
























function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _toConsumableArray(r) { return _arrayWithoutHoles(r) || _iterableToArray(r) || _unsupportedIterableToArray(r) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _iterableToArray(r) { if ("undefined" != typeof Symbol && null != r[Symbol.iterator] || null != r["@@iterator"]) return Array.from(r); }
function _arrayWithoutHoles(r) { if (Array.isArray(r)) return _arrayLikeToArray(r); }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }


if (chart_js__WEBPACK_IMPORTED_MODULE_25__.registerables) {
  chart_js__WEBPACK_IMPORTED_MODULE_25__.Chart.register.apply(chart_js__WEBPACK_IMPORTED_MODULE_25__.Chart, _toConsumableArray(chart_js__WEBPACK_IMPORTED_MODULE_25__.registerables));
}
var isChartInitialized = false;
var default_1 = /*#__PURE__*/function (_Controller) {
  function default_1() {
    var _this;
    _classCallCheck(this, default_1);
    _this = _callSuper(this, default_1, arguments);
    _this.chart = null;
    return _this;
  }
  _inherits(default_1, _Controller);
  return _createClass(default_1, [{
    key: "connect",
    value: function connect() {
      if (!isChartInitialized) {
        isChartInitialized = true;
        this.dispatchEvent('init', {
          Chart: chart_js__WEBPACK_IMPORTED_MODULE_25__.Chart
        });
      }
      if (!(this.element instanceof HTMLCanvasElement)) {
        throw new Error('Invalid element');
      }
      var payload = this.viewValue;
      if (Array.isArray(payload.options) && 0 === payload.options.length) {
        payload.options = {};
      }
      this.dispatchEvent('pre-connect', {
        options: payload.options,
        config: payload
      });
      var canvasContext = this.element.getContext('2d');
      if (!canvasContext) {
        throw new Error('Could not getContext() from Element');
      }
      this.chart = new chart_js__WEBPACK_IMPORTED_MODULE_25__.Chart(canvasContext, payload);
      this.dispatchEvent('connect', {
        chart: this.chart
      });
    }
  }, {
    key: "disconnect",
    value: function disconnect() {
      this.dispatchEvent('disconnect', {
        chart: this.chart
      });
      if (this.chart) {
        this.chart.destroy();
        this.chart = null;
      }
    }
  }, {
    key: "viewValueChanged",
    value: function viewValueChanged() {
      if (this.chart) {
        var viewValue = {
          data: this.viewValue.data,
          options: this.viewValue.options
        };
        if (Array.isArray(viewValue.options) && 0 === viewValue.options.length) {
          viewValue.options = {};
        }
        this.dispatchEvent('view-value-change', viewValue);
        this.chart.data = viewValue.data;
        this.chart.options = viewValue.options;
        this.chart.update();
        var parentElement = this.element.parentElement;
        if (parentElement && this.chart.options.responsive) {
          var originalWidth = parentElement.style.width;
          parentElement.style.width = "".concat(parentElement.offsetWidth + 1, "px");
          setTimeout(function () {
            parentElement.style.width = originalWidth;
          }, 0);
        }
      }
    }
  }, {
    key: "dispatchEvent",
    value: function dispatchEvent(name, payload) {
      this.dispatch(name, {
        detail: payload,
        prefix: 'chartjs'
      });
    }
  }]);
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_24__.Controller);
default_1.values = {
  view: Object
};


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_ar-ba1452"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QU0sR0FBRztFQUNmQyxJQUFJLEVBQUVDO0FBQ1YsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovL29uY29raWRzY2FyZS8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vb25jb2tpZHNjYXJlLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly9vbmNva2lkc2NhcmUvIFxcLihqJTdDdClzeCIsIndlYnBhY2s6Ly9vbmNva2lkc2NhcmUvLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSIsIndlYnBhY2s6Ly9vbmNva2lkc2NhcmUvLi9hc3NldHMvY29udHJvbGxlcnMvY2hhcnRfY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly9vbmNva2lkc2NhcmUvLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly9vbmNva2lkc2NhcmUvLi92ZW5kb3Ivc3ltZm9ueS91eC1jaGFydGpzL2Fzc2V0cy9kaXN0L2NvbnRyb2xsZXIuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Jvb3RzdHJhcC5qcyc7XG5pbXBvcnQgeyBzdGFydFN0aW11bHVzQXBwIH0gZnJvbSAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlJztcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5cbi8vIFJlZ2lzdGVyIFN0aW11bHVzIGNvbnRyb2xsZXJzXG5jb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKHJlcXVpcmUuY29udGV4dChcbiAgICAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIhLi9jb250cm9sbGVycycsXG4gICAgdHJ1ZSxcbiAgICAvXFwuKGp8dClzeD8kL1xuKSk7XG5cbi8vIFJlZ2lzdGVyIENoYXJ0LmpzIGNvbnRyb2xsZXJcbmltcG9ydCB7IENoYXJ0IH0gZnJvbSAnY2hhcnQuanMvYXV0byc7XG5pbXBvcnQgeyByZWdpc3RlckNvbnRyb2xsZXIgfSBmcm9tICdAc3ltZm9ueS91eC1jaGFydGpzJztcblxucmVnaXN0ZXJDb250cm9sbGVyKGFwcCk7XG5cbmNvbnNvbGUubG9nKCdBcHAuanMgbG9hZGVkIHN1Y2Nlc3NmdWxseSEnKTtcbiIsImltcG9ydCB7IHN0YXJ0U3RpbXVsdXNBcHAgfSBmcm9tICdAc3ltZm9ueS9zdGltdWx1cy1idW5kbGUnO1xuXG5jb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKCk7XG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxuLy8gYXBwLnJlZ2lzdGVyKCdzb21lX2NvbnRyb2xsZXJfbmFtZScsIFNvbWVJbXBvcnRlZENvbnRyb2xsZXIpO1xuIiwidmFyIG1hcCA9IHtcblx0XCIuL2NoYXJ0X2NvbnRyb2xsZXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEuL2Fzc2V0cy9jb250cm9sbGVycy9jaGFydF9jb250cm9sbGVyLmpzXCIsXG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSAuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEgXFxcXC4oaiU3Q3Qpc3g/JFwiOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuaW1wb3J0IHsgQ2hhcnQgfSBmcm9tICdjaGFydC5qcy9hdXRvJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmNoYXJ0ID0gbmV3IENoYXJ0KHRoaXMuZWxlbWVudCwge1xuICAgICAgICAgICAgdHlwZTogdGhpcy5lbGVtZW50LmRhdGFzZXQudHlwZSxcbiAgICAgICAgICAgIGRhdGE6IHRoaXMuZWxlbWVudC5kYXRhc2V0LmRhdGEgPyBKU09OLnBhcnNlKHRoaXMuZWxlbWVudC5kYXRhc2V0LmRhdGEpIDoge30sXG4gICAgICAgICAgICBvcHRpb25zOiB0aGlzLmVsZW1lbnQuZGF0YXNldC5vcHRpb25zID8gSlNPTi5wYXJzZSh0aGlzLmVsZW1lbnQuZGF0YXNldC5vcHRpb25zKSA6IHt9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGRpc2Nvbm5lY3QoKSB7XG4gICAgICAgIGlmICh0aGlzLmNoYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLmNoYXJ0LmRlc3Ryb3koKTtcbiAgICAgICAgfVxuICAgIH1cbn1cbiIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuaW1wb3J0IHsgcmVnaXN0ZXJhYmxlcywgQ2hhcnQgfSBmcm9tICdjaGFydC5qcyc7XG5cbmlmIChyZWdpc3RlcmFibGVzKSB7XG4gICAgQ2hhcnQucmVnaXN0ZXIoLi4ucmVnaXN0ZXJhYmxlcyk7XG59XG5sZXQgaXNDaGFydEluaXRpYWxpemVkID0gZmFsc2U7XG5jbGFzcyBkZWZhdWx0XzEgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoLi4uYXJndW1lbnRzKTtcbiAgICAgICAgdGhpcy5jaGFydCA9IG51bGw7XG4gICAgfVxuICAgIGNvbm5lY3QoKSB7XG4gICAgICAgIGlmICghaXNDaGFydEluaXRpYWxpemVkKSB7XG4gICAgICAgICAgICBpc0NoYXJ0SW5pdGlhbGl6ZWQgPSB0cnVlO1xuICAgICAgICAgICAgdGhpcy5kaXNwYXRjaEV2ZW50KCdpbml0Jywge1xuICAgICAgICAgICAgICAgIENoYXJ0LFxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKCEodGhpcy5lbGVtZW50IGluc3RhbmNlb2YgSFRNTENhbnZhc0VsZW1lbnQpKSB7XG4gICAgICAgICAgICB0aHJvdyBuZXcgRXJyb3IoJ0ludmFsaWQgZWxlbWVudCcpO1xuICAgICAgICB9XG4gICAgICAgIGNvbnN0IHBheWxvYWQgPSB0aGlzLnZpZXdWYWx1ZTtcbiAgICAgICAgaWYgKEFycmF5LmlzQXJyYXkocGF5bG9hZC5vcHRpb25zKSAmJiAwID09PSBwYXlsb2FkLm9wdGlvbnMubGVuZ3RoKSB7XG4gICAgICAgICAgICBwYXlsb2FkLm9wdGlvbnMgPSB7fTtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoJ3ByZS1jb25uZWN0Jywge1xuICAgICAgICAgICAgb3B0aW9uczogcGF5bG9hZC5vcHRpb25zLFxuICAgICAgICAgICAgY29uZmlnOiBwYXlsb2FkLFxuICAgICAgICB9KTtcbiAgICAgICAgY29uc3QgY2FudmFzQ29udGV4dCA9IHRoaXMuZWxlbWVudC5nZXRDb250ZXh0KCcyZCcpO1xuICAgICAgICBpZiAoIWNhbnZhc0NvbnRleHQpIHtcbiAgICAgICAgICAgIHRocm93IG5ldyBFcnJvcignQ291bGQgbm90IGdldENvbnRleHQoKSBmcm9tIEVsZW1lbnQnKTtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLmNoYXJ0ID0gbmV3IENoYXJ0KGNhbnZhc0NvbnRleHQsIHBheWxvYWQpO1xuICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoJ2Nvbm5lY3QnLCB7IGNoYXJ0OiB0aGlzLmNoYXJ0IH0pO1xuICAgIH1cbiAgICBkaXNjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoJ2Rpc2Nvbm5lY3QnLCB7IGNoYXJ0OiB0aGlzLmNoYXJ0IH0pO1xuICAgICAgICBpZiAodGhpcy5jaGFydCkge1xuICAgICAgICAgICAgdGhpcy5jaGFydC5kZXN0cm95KCk7XG4gICAgICAgICAgICB0aGlzLmNoYXJ0ID0gbnVsbDtcbiAgICAgICAgfVxuICAgIH1cbiAgICB2aWV3VmFsdWVDaGFuZ2VkKCkge1xuICAgICAgICBpZiAodGhpcy5jaGFydCkge1xuICAgICAgICAgICAgY29uc3Qgdmlld1ZhbHVlID0geyBkYXRhOiB0aGlzLnZpZXdWYWx1ZS5kYXRhLCBvcHRpb25zOiB0aGlzLnZpZXdWYWx1ZS5vcHRpb25zIH07XG4gICAgICAgICAgICBpZiAoQXJyYXkuaXNBcnJheSh2aWV3VmFsdWUub3B0aW9ucykgJiYgMCA9PT0gdmlld1ZhbHVlLm9wdGlvbnMubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgdmlld1ZhbHVlLm9wdGlvbnMgPSB7fTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHRoaXMuZGlzcGF0Y2hFdmVudCgndmlldy12YWx1ZS1jaGFuZ2UnLCB2aWV3VmFsdWUpO1xuICAgICAgICAgICAgdGhpcy5jaGFydC5kYXRhID0gdmlld1ZhbHVlLmRhdGE7XG4gICAgICAgICAgICB0aGlzLmNoYXJ0Lm9wdGlvbnMgPSB2aWV3VmFsdWUub3B0aW9ucztcbiAgICAgICAgICAgIHRoaXMuY2hhcnQudXBkYXRlKCk7XG4gICAgICAgICAgICBjb25zdCBwYXJlbnRFbGVtZW50ID0gdGhpcy5lbGVtZW50LnBhcmVudEVsZW1lbnQ7XG4gICAgICAgICAgICBpZiAocGFyZW50RWxlbWVudCAmJiB0aGlzLmNoYXJ0Lm9wdGlvbnMucmVzcG9uc2l2ZSkge1xuICAgICAgICAgICAgICAgIGNvbnN0IG9yaWdpbmFsV2lkdGggPSBwYXJlbnRFbGVtZW50LnN0eWxlLndpZHRoO1xuICAgICAgICAgICAgICAgIHBhcmVudEVsZW1lbnQuc3R5bGUud2lkdGggPSBgJHtwYXJlbnRFbGVtZW50Lm9mZnNldFdpZHRoICsgMX1weGA7XG4gICAgICAgICAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIHBhcmVudEVsZW1lbnQuc3R5bGUud2lkdGggPSBvcmlnaW5hbFdpZHRoO1xuICAgICAgICAgICAgICAgIH0sIDApO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuICAgIGRpc3BhdGNoRXZlbnQobmFtZSwgcGF5bG9hZCkge1xuICAgICAgICB0aGlzLmRpc3BhdGNoKG5hbWUsIHsgZGV0YWlsOiBwYXlsb2FkLCBwcmVmaXg6ICdjaGFydGpzJyB9KTtcbiAgICB9XG59XG5kZWZhdWx0XzEudmFsdWVzID0ge1xuICAgIHZpZXc6IE9iamVjdCxcbn07XG5cbmV4cG9ydCB7IGRlZmF1bHRfMSBhcyBkZWZhdWx0IH07XG4iXSwibmFtZXMiOlsic3RhcnRTdGltdWx1c0FwcCIsImFwcCIsInJlcXVpcmUiLCJjb250ZXh0IiwiQ2hhcnQiLCJyZWdpc3RlckNvbnRyb2xsZXIiLCJjb25zb2xlIiwibG9nIiwiQ29udHJvbGxlciIsIl9kZWZhdWx0IiwiX0NvbnRyb2xsZXIiLCJfY2xhc3NDYWxsQ2hlY2siLCJfY2FsbFN1cGVyIiwiYXJndW1lbnRzIiwiX2luaGVyaXRzIiwiX2NyZWF0ZUNsYXNzIiwia2V5IiwidmFsdWUiLCJjb25uZWN0IiwiY2hhcnQiLCJlbGVtZW50IiwidHlwZSIsImRhdGFzZXQiLCJkYXRhIiwiSlNPTiIsInBhcnNlIiwib3B0aW9ucyIsImRpc2Nvbm5lY3QiLCJkZXN0cm95IiwiZGVmYXVsdCIsInRleHRDb250ZW50IiwicmVnaXN0ZXJhYmxlcyIsInJlZ2lzdGVyIiwiYXBwbHkiLCJfdG9Db25zdW1hYmxlQXJyYXkiLCJpc0NoYXJ0SW5pdGlhbGl6ZWQiLCJkZWZhdWx0XzEiLCJfdGhpcyIsImRpc3BhdGNoRXZlbnQiLCJIVE1MQ2FudmFzRWxlbWVudCIsIkVycm9yIiwicGF5bG9hZCIsInZpZXdWYWx1ZSIsIkFycmF5IiwiaXNBcnJheSIsImxlbmd0aCIsImNvbmZpZyIsImNhbnZhc0NvbnRleHQiLCJnZXRDb250ZXh0Iiwidmlld1ZhbHVlQ2hhbmdlZCIsInVwZGF0ZSIsInBhcmVudEVsZW1lbnQiLCJyZXNwb25zaXZlIiwib3JpZ2luYWxXaWR0aCIsInN0eWxlIiwid2lkdGgiLCJjb25jYXQiLCJvZmZzZXRXaWR0aCIsInNldFRpbWVvdXQiLCJuYW1lIiwiZGlzcGF0Y2giLCJkZXRhaWwiLCJwcmVmaXgiLCJ2YWx1ZXMiLCJ2aWV3IiwiT2JqZWN0Il0sInNvdXJjZVJvb3QiOiIifQ==