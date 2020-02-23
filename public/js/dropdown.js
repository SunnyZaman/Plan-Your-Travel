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

/***/ "./resources/js/dropdown.js":
/*!**********************************!*\
  !*** ./resources/js/dropdown.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //Hide dropdowns
  $("#countryContainer").hide();
  $("#attractionContainer").hide();
  $(".imageContainer").hide();
  $('.dynamic').change(function () {
    if ($(this).val() !== '') {
      var select = $(this).attr("id");
      var table = "";

      switch (select) {
        case "continent":
          table = "countries";
          $('#country').val('');
          $('#attraction').val('');
          $("#countryContainer").show();
          $("#attractionContainer").hide();
          break;

        case "country":
          table = "attractions";
          $('#attraction').val('');
          $("#attractionContainer").show();
          break;

        default:
          break;
      }

      var value = $(this).val();
      var dependent = $(this).data('dependent');

      var _token = $('input[name="_token"]').val();

      $.ajax({
        url: "/home/fetch",
        method: "POST",
        data: {
          select: select + "_id",
          value: value,
          _token: _token,
          dependent: dependent,
          table: table
        },
        success: function success(result) {
          console.log(result);
          $('#' + dependent).html(result);
        },
        error: function error(response) {
          console.log(response);
        }
      });
    }
  });
  $('#popularPlaces, #attraction').change(function () {
    if ($(this).val() !== '') {
      clearPlaceData();
      var value = $(this).val();

      var _token = $('input[name="_token"]').val();

      $.ajax({
        url: "/home/placeData",
        method: "POST",
        data: {
          value: value,
          _token: _token
        },
        success: function success(val) {
          var result = JSON.parse(val);
          var data = result[0];
          console.log(data);
          mediumImage(data.attraction_data);
          smallImage1(data.close_place_1_data);
          smallImage2(data.close_place_2_data);
          smallImage3(data.close_place_3_data);
          $(".imageContainer").show();
        },
        error: function error(response) {
          console.log(response);
        }
      });
    }
  });

  function clearPlaceData() {
    $('#img-med').empty();
    $('#img1-sm').empty();
    $('#img2-sm').empty();
    $('#img3-sm').empty();
  }

  function mediumImage(data) {
    var json = JSON.parse(data);
    console.log(json);
    $('#img-med').append($('<img/>').attr({
      'src': 'uploads/' + json.image,
      'id': "image-med"
    }).attr({
      'width': "100%",
      'height': "100%"
    }) //   .addClass("")
    );
    $(".image-medium h3").html(json.title);
    $(".image-medium p").html(json.location);
    $(".image-medium a").attr("href", "http://www.google.com");
  }

  function smallImage1(data) {
    var json = JSON.parse(data);
    console.log(json);
    $('#img1-sm').append($('<img/>').attr({
      'src': 'uploads/' + json.image,
      'id': "image-med"
    }).attr({
      'width': "100%",
      'height': "100%"
    }));
    $(".image1-small h3").html(json.title);
    $(".image1-small p").html(json.location);
    $(".image1-small a").attr("href", "http://www.google.com");
  }

  function smallImage2(data) {
    var json = JSON.parse(data);
    console.log(json);
    $('#img2-sm').append($('<img/>').attr({
      'src': 'uploads/' + json.image,
      'id': "image-med"
    }).attr({
      'width': "100%",
      'height': "100%"
    }));
    $(".image2-small h3").html(json.title);
    $(".image2-small p").html(json.location);
    $(".image2-small a").attr("href", "");
  }

  function smallImage3(data) {
    var json = JSON.parse(data);
    console.log(json);
    $('#img3-sm').append($('<img/>').attr({
      'src': 'uploads/' + json.image,
      'id': "image-med"
    }).attr({
      'width': "100%",
      'height': "100%"
    }));
    $(".image3-small h3").html(json.title);
    $(".image3-small p").html(json.location);
    $(".image3-small a").attr("href", "");
  }
});

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/dropdown.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Plan-Your-Travel\resources\js\dropdown.js */"./resources/js/dropdown.js");


/***/ })

/******/ });