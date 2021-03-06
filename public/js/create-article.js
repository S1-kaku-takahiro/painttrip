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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/create-article.js":
/*!****************************************!*\
  !*** ./resources/js/create-article.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var category = document.getElementById("category");
var subcategory = document.getElementById("subcategory");
category.onchange = changeCategory;
subcategory.onchange = changeSubcategory;

window.onload = function () {
  changeCategory();
  subcategory.value = $('input:hidden[name="hiddenSubcategory"]').val();
};

function changeCategory() {
  var option = document.createElement("option");
  option.value = "";
  option.text = "????????????????????????";
  subcategory.textContent = null;
  subcategory.appendChild(option);
  var options;

  switch (category.value) {
    case "1":
      options = setAccommodation();
      break;

    case "2":
      options = setSightseeing();
      break;

    case "3":
      options = setSpa();
      break;

    case "4":
      options = setGourmet();
      break;

    case "5":
      options = setActivity();
      break;

    case "6":
      options = setShopping();
      break;

    case "7":
      options = setOther();
      break;
  }

  options.forEach(function (value) {
    var option = document.createElement("option");
    option.value = value.cd;
    option.text = value.label;
    subcategory.appendChild(option);
  });
} // ????????????????????????3???????????????????????????


function setAccommodation() {
  var accomodations = [{
    cd: "101",
    label: "?????????"
  }, {
    cd: "102",
    label: "??????"
  }, {
    cd: "103",
    label: "?????????????????????"
  }, {
    cd: "104",
    label: "??????"
  }, {
    cd: "105",
    label: "??????????????????"
  }, {
    cd: "106",
    label: "?????????????????????"
  }, {
    cd: "107",
    label: "???????????????"
  }, {
    cd: "108",
    label: "????????????"
  }, {
    cd: "109",
    label: "???????????????"
  }];
  return accomodations;
}

function setSightseeing() {
  var sightseeings = [{
    cd: "201",
    label: "???????????????"
  }, {
    cd: "202",
    label: "???"
  }, {
    cd: "203",
    label: "?????????"
  }, {
    cd: "204",
    label: "?????????"
  }, {
    cd: "205",
    label: "?????????"
  }, {
    cd: "206",
    label: "?????????"
  }, {
    cd: "207",
    label: "?????????"
  }, {
    cd: "208",
    label: "???????????????"
  }];
  return sightseeings;
}

function setSpa() {
  var spas = [{
    cd: "301",
    label: "??????"
  }, {
    cd: "302",
    label: "??????"
  }, {
    cd: "303",
    label: "??????"
  }, {
    cd: "304",
    label: "?????????"
  }, {
    cd: "305",
    label: "?????????"
  }, {
    cd: "306",
    label: "????????????????????????"
  }];
  return spas;
}

function setGourmet() {
  var gourmets = [{
    cd: "401",
    label: "????????????"
  }, {
    cd: "402",
    label: "???????????????"
  }, {
    cd: "403",
    label: "??????????????????"
  }, {
    cd: "404",
    label: "????????????"
  }, {
    cd: "405",
    label: "????????????"
  }, {
    cd: "406",
    label: "???????????????????????????"
  }, {
    cd: "407",
    label: "??????"
  }, {
    cd: "408",
    label: "??????"
  }, {
    cd: "409",
    label: "??????"
  }, {
    cd: "410",
    label: "???"
  }, {
    cd: "410",
    label: "?????????"
  }, {
    cd: "412",
    label: "????????????"
  }, {
    cd: "413",
    label: "?????????"
  }, {
    cd: "414",
    label: "???????????????"
  }, {
    cd: "415",
    label: "??????"
  }, {
    cd: "416",
    label: "?????????"
  }, {
    cd: "417",
    label: "??????????????????"
  }];
  return gourmets;
}

function setActivity() {
  var activities = [{
    cd: "501",
    label: "?????????"
  }, {
    cd: "502",
    label: "?????????????????????"
  }, {
    cd: "503",
    label: "?????????????????????"
  }, {
    cd: "504",
    label: "????????????"
  }, {
    cd: "505",
    label: "???????????????????????????"
  }, {
    cd: "506",
    label: "??????????????????????????????"
  }];
  return activities;
}

function setShopping() {
  var shoppings = [{
    cd: "601",
    label: "??????"
  }, {
    cd: "602",
    label: "??????????????????"
  }, {
    cd: "603",
    label: "?????????"
  }, {
    cd: "604",
    label: "?????????"
  }, {
    cd: "605",
    label: "??????"
  }, {
    cd: "606",
    label: "??????????????????"
  }];
  return shoppings;
}

function setOther() {
  var others = [{
    cd: "701",
    label: "?????????"
  }];
  return others;
}

function changeSubcategory() {
  document.getElementById("hiddenSubcategory").setAttribute("value", subcategory.value);
}

/***/ }),

/***/ 1:
/*!**********************************************!*\
  !*** multi ./resources/js/create-article.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/painttrip/resources/js/create-article.js */"./resources/js/create-article.js");


/***/ })

/******/ });