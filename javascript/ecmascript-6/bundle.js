/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./modules/Class.js":
/*!**************************!*\
  !*** ./modules/Class.js ***!
  \**************************/
/*! exports provided: soma */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"soma\", function() { return soma; });\nfunction soma() {\n  return \"TESTE\";\n}\n\n//# sourceURL=webpack:///./modules/Class.js?");

/***/ }),

/***/ "./src/main.js":
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_Class__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../modules/Class */ \"./modules/Class.js\");\n// - Class example\n\n/*\nclass List {\n\tconstructor() {\n\t\tthis.data = [];\n\t}\n\n\tadd(data) {\n\t\tthis.data.push({\n\t\t\tid: this.id,\n\t\t\tdata\n\t\t});\n\t\tthis.updateId();\n\t}\n\n\tshow() {\n\t\tconsole.log(this.data);\n\t}\n}\n\nclass TodoList extends List {\n\tconstructor() {\n\t\tsuper();\n\t\tthis.id = 1;\n\t}\n\n\tupdateId() {\n\t\tthis.id++;\n\t}\n}\n\nconst MyLista = new TodoList();\n\ndocument.getElementById('addTodo').onclick = function() {\n\tMyLista.add(Date.now());\n\tMyLista.show();\n};\n*/\n\n/*\n// - Array example\nconst arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];\nconsole.log('original:', arr);\n\n\nconst mapArr = arr.map(function(item, index) {\n\treturn item + index; // modify array\n});\nconsole.log('map:', mapArr); // [1, 3, 5, 7, 9, 11, 13, 15, 17]\n\n\nconst reduceArr = arr.reduce(function(total, next) {\n\treturn total + next; // sum\n});\nconsole.log('reduce:', reduceArr); // 45\n\n\nconst filterArr = arr.filter(function(item) {\n\treturn item % 2 === 0; // true or false\n});\nconsole.log('filter:', filterArr); // [2, 4, 6, 8]\n\n\nconst findArr = arr.find(function(item) {\n\treturn item === 4; // find 4\n});\nconsole.log('find:', findArr); // 4\n*/\n// - Arrow functions\n\n/*\nconst newArr = arr.map(function(item){\n  return item * 2;\n});\n\nconst newArr = arr.map((item) => {\n  return item * 2;\n});\n\nconst newArr = arr.map(item => {\n  return item * 2;\n});\n\nconst newArr = arr.map(item => item * 2);\n*/\n\n/*\nconst test = () => [1, 2, 3, 4, 5, 6, 7, 8, 9];\nconst test = () => 'test';\nconst test = () => 1;\n\nconst test = () => {\n  return { data: Date.now() };\n};\nconst test = () => ({ data: Date.now() });\n*/\n// - Function parameters\n\n/*\nfunction calc(a = 1, b = 2) {\n  return a + b;\n}\nconsole.log('calc: ', calc(4));\nconsole.log('calc: ', calc(4, 4));\n\nconst calcArrow = (a = 1, b = 2) => a + b;\nconsole.log('calcArrow: ', calcArrow(4));\nconsole.log('calcArrow: ', calcArrow(4, 4));\n*/\n// - Structuring\n\n/*\nconst user = {\n\tname: 'Rui',\n\tage: 10,\n\taddress: {\n\t\tcity: 'Porto',\n\t\tstreet: 'Rua do Porto, 123'\n\t}\n};\nconsole.log('Name: ', user.name);\nconsole.log('Age: ', user.age);\nconsole.log('City: ', user.address.city);\n\nconst { name, age, address: { city } } = user;\nconsole.log('Name: ', name);\nconsole.log('Age: ', age);\nconsole.log('City: ', city);\n*/\n// - rest\n\n/*\nconst user = {\n\tname: 'rui',\n\tage: 23,\n\tjob: 'dev'\n};\n\nconst { name, ...otherProps } = user;\nconsole.log(\"name: \", name);\nconsole.log(\"otherProps: \", otherProps);\n\nconst arr = [1, 2, 3, 4];\nconst [a, ...b] =  arr;\nconsole.log(a);\nconsole.log(b);\n\nfunction soma(...otherProps) {\n  return otherProps.reduce((total, next) => total + next);\n}\nconsole.log(soma(12, 2, 3, 1, 2, 10))\n*/\n// - spread\n\n/*\nconst arr1 = [1, 2, 3];\nconst arr2 = [4, 5, 6, 3];\n\nconst arr3 = [...arr1, ...arr2];\nconsole.log(arr3);\n\nconst user = {\n\tname: 'rui',\n\tage: 23,\n\tjob: 'dev'\n};\n\nconst user2 = { ...user, name: 'Rui Dias' };\nconsole.log(user2);\n*/\n// - Template Literals\n\n/*\nconst name = 'Rui';\nconst age = 23;\nconsole.log(`My name ${name}, my age ${age}`);\n*/\n// - Object Short Syntax\n\n/*\nconst id = 1;\nconst name = 'Rui';\nconst age = 23;\n\nconst user = {\n\tid,\n\tname,\n\tage\n};\nconsole.log(user);\n*/\n\nconsole.log(Object(_modules_Class__WEBPACK_IMPORTED_MODULE_0__[\"soma\"])()); //const list = new List();\n//list.data();\n\n//# sourceURL=webpack:///./src/main.js?");

/***/ })

/******/ });