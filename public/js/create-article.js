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

window.onload = function () {
  subcategory = document.getElementById("subcategory");
  category = document.getElementById("category");
  category.onchange = changeCategory;
};

function changeCategory() {
  var changedCategory = category.value;

  if (changedCategory == "accommodation") {
    setAccommodation();
  } else if (changedCategory == "sightseeing") {
    setSightseeing();
  } else if (changedCategory == "spa") {
    setSpa();
  } else if (changedCategory == "gourmet") {
    setGourmet();
  } else if (changedCategory == "activity") {
    setActivity();
  } else if (changedCategory == "shopping") {
    setShopping();
  } else if (changedCategory == "other") {
    setOther();
  }
}

function setAccommodation() {
  subcategory.textContent = null;
  var accomodations = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "0",
    label: "ホテル"
  }, {
    cd: "1",
    label: "旅館"
  }, {
    cd: "2",
    label: "ビジネスホテル"
  }, {
    cd: "3",
    label: "民宿"
  }, {
    cd: "4",
    label: "ゲストハウス"
  }, {
    cd: "5",
    label: "カプセルホテル"
  }, {
    cd: "6",
    label: "ペンション"
  }, {
    cd: "7",
    label: "キャンプ"
  }, {
    cd: "8",
    label: "その他宿泊"
  }];
  accomodations.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setSightseeing() {
  subcategory.textContent = null;
  var sightseeings = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "9",
    label: "神社・お寺"
  }, {
    cd: "10",
    label: "城"
  }, {
    cd: "11",
    label: "水族館"
  }, {
    cd: "12",
    label: "動物園"
  }, {
    cd: "13",
    label: "遊園地"
  }, {
    cd: "14",
    label: "美術館"
  }, {
    cd: "15",
    label: "博物館"
  }, {
    cd: "16",
    label: "その他観光"
  }];
  sightseeings.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setSpa() {
  subcategory.textContent = null;
  var spas = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "17",
    label: "温泉"
  }, {
    cd: "18",
    label: "スパ"
  }, {
    cd: "19",
    label: "銭湯"
  }, {
    cd: "20",
    label: "サウナ"
  }, {
    cd: "21",
    label: "岩盤浴"
  }, {
    cd: "22",
    label: "その他温泉・スパ"
  }];
  spas.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setGourmet() {
  subcategory.textContent = null;
  var gourmets = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "23",
    label: "フレンチ"
  }, {
    cd: "24",
    label: "イタリアン"
  }, {
    cd: "25",
    label: "スペイン料理"
  }, {
    cd: "26",
    label: "中華料理"
  }, {
    cd: "27",
    label: "韓国料理"
  }, {
    cd: "28",
    label: "アジア・エスニック"
  }, {
    cd: "29",
    label: "和食"
  }, {
    cd: "30",
    label: "寿司"
  }, {
    cd: "31",
    label: "焼肉"
  }, {
    cd: "32",
    label: "鍋"
  }, {
    cd: "33",
    label: "天ぷら"
  }, {
    cd: "34",
    label: "ラーメン"
  }, {
    cd: "35",
    label: "カレー"
  }, {
    cd: "36",
    label: "ビュッフェ"
  }, {
    cd: "37",
    label: "バー"
  }, {
    cd: "38",
    label: "カフェ"
  }, {
    cd: "39",
    label: "その他グルメ"
  }];
  gourmets.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setActivity() {
  subcategory.textContent = null;
  var activities = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "40",
    label: "川・湖"
  }, {
    cd: "41",
    label: "マリンスポーツ"
  }, {
    cd: "42",
    label: "スカイスポーツ"
  }, {
    cd: "43",
    label: "大地・山"
  }, {
    cd: "44",
    label: "ウィンタースポーツ"
  }, {
    cd: "45",
    label: "その他アクティビティ"
  }];
  activities.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setShopping() {
  subcategory.textContent = null;
  var shoppings = [{
    cd: "",
    label: "選択してください"
  }, {
    cd: "46",
    label: "雑貨"
  }, {
    cd: "47",
    label: "ファッション"
  }, {
    cd: "48",
    label: "お菓子"
  }, {
    cd: "49",
    label: "食べ物"
  }, {
    cd: "50",
    label: "お酒"
  }, {
    cd: "51",
    label: "その他買い物"
  }];
  shoppings.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
}

function setOther() {
  subcategory.textContent = "52";
  var others = [{
    cd: "52",
    label: "その他"
  }];
  others.forEach(function (value) {
    var op = document.createElement("option");
    op.value = value.cd;
    op.text = value.label;
    subcategory.appendChild(op);
  });
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