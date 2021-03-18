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
  option.text = "選択してください";
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
} // サブカテゴリーを3桁の整数で割り振る


function setAccommodation() {
  var accomodations = [{
    cd: "101",
    label: "ホテル"
  }, {
    cd: "102",
    label: "旅館"
  }, {
    cd: "103",
    label: "ビジネスホテル"
  }, {
    cd: "104",
    label: "民宿"
  }, {
    cd: "105",
    label: "ゲストハウス"
  }, {
    cd: "106",
    label: "カプセルホテル"
  }, {
    cd: "107",
    label: "ペンション"
  }, {
    cd: "108",
    label: "キャンプ"
  }, {
    cd: "109",
    label: "その他宿泊"
  }];
  return accomodations;
}

function setSightseeing() {
  var sightseeings = [{
    cd: "201",
    label: "神社・お寺"
  }, {
    cd: "202",
    label: "城"
  }, {
    cd: "203",
    label: "水族館"
  }, {
    cd: "204",
    label: "動物園"
  }, {
    cd: "205",
    label: "遊園地"
  }, {
    cd: "206",
    label: "美術館"
  }, {
    cd: "207",
    label: "博物館"
  }, {
    cd: "208",
    label: "その他観光"
  }];
  return sightseeings;
}

function setSpa() {
  var spas = [{
    cd: "301",
    label: "温泉"
  }, {
    cd: "302",
    label: "スパ"
  }, {
    cd: "303",
    label: "銭湯"
  }, {
    cd: "304",
    label: "サウナ"
  }, {
    cd: "305",
    label: "岩盤浴"
  }, {
    cd: "306",
    label: "その他温泉・スパ"
  }];
  return spas;
}

function setGourmet() {
  var gourmets = [{
    cd: "401",
    label: "フレンチ"
  }, {
    cd: "402",
    label: "イタリアン"
  }, {
    cd: "403",
    label: "スペイン料理"
  }, {
    cd: "404",
    label: "中華料理"
  }, {
    cd: "405",
    label: "韓国料理"
  }, {
    cd: "406",
    label: "アジア・エスニック"
  }, {
    cd: "407",
    label: "和食"
  }, {
    cd: "408",
    label: "寿司"
  }, {
    cd: "409",
    label: "焼肉"
  }, {
    cd: "410",
    label: "鍋"
  }, {
    cd: "410",
    label: "天ぷら"
  }, {
    cd: "412",
    label: "ラーメン"
  }, {
    cd: "413",
    label: "カレー"
  }, {
    cd: "414",
    label: "ビュッフェ"
  }, {
    cd: "415",
    label: "バー"
  }, {
    cd: "416",
    label: "カフェ"
  }, {
    cd: "417",
    label: "その他グルメ"
  }];
  return gourmets;
}

function setActivity() {
  var activities = [{
    cd: "501",
    label: "川・湖"
  }, {
    cd: "502",
    label: "マリンスポーツ"
  }, {
    cd: "503",
    label: "スカイスポーツ"
  }, {
    cd: "504",
    label: "大地・山"
  }, {
    cd: "505",
    label: "ウィンタースポーツ"
  }, {
    cd: "506",
    label: "その他アクティビティ"
  }];
  return activities;
}

function setShopping() {
  var shoppings = [{
    cd: "601",
    label: "雑貨"
  }, {
    cd: "602",
    label: "ファッション"
  }, {
    cd: "603",
    label: "お菓子"
  }, {
    cd: "604",
    label: "食べ物"
  }, {
    cd: "605",
    label: "お酒"
  }, {
    cd: "606",
    label: "その他買い物"
  }];
  return shoppings;
}

function setOther() {
  var others = [{
    cd: "701",
    label: "その他"
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