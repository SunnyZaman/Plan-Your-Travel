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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/shop.js":
/*!******************************!*\
  !*** ./resources/js/shop.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //Hide cards
  $("#planQuery").hide();
  $("#invoice").hide();
  var maxInputs = 4;
  var inputsWrapper = $("#travellerAges");
  var x = inputsWrapper.length;
  var fieldCount = 1;
  updateInvoice();
  $("#addInput").click(function () {
    console.log(x);

    if (x <= maxInputs) {
      fieldCount++;
      $(inputsWrapper).append('<div class="form-row"><div class="form-group col-xs-12 col-md-12">' + ' <label for="age_1">Age of traveler:</label>' + '<div class="input-group">' + '  <input class="form-control" type="text"  name"age_' + fieldCount + '" id="age_' + fieldCount + '" type="number" min="0" required>' + '<div class="input-group-append">' + '<button class="btn btn-outline-secondary removeclass" type="button">Remove</button>' + '</div>' + '</div>' + '</div></div>');
      x++;
      updateInvoice();
      $("#addInput").show(); // Delete the "add"-link if there is 3 fields.

      if (x == maxInputs) {
        $("#addInput").hide();
        $("#lineBreak").html("<br>");
      }
    }

    return false;
  });
  $("body").on("click", ".removeclass", function (e) {
    //user click on remove text
    if (x > 1) {
      $(this).parent('div').parent('div').parent('div').parent('div').remove(); //remove text box

      x--; //decrement textbox

      $("#addInput").show();
      updateInvoice();
    }

    return false;
  });

  function updateInvoice() {
    $('#quantity').text(x);
    $('#price').text($('#totalPrice').text());
    var totals = (x * $('#totalPrice').text().split('$')[1]).toFixed(2);
    $('#totals').text('$' + totals);
    $('#subtotal').text('$' + totals);
    var tax = (totals * 0.15).toFixed(2);
    $('#tax').text('$' + tax);
    var total = Number(tax) + Number(totals);
    $('#total').text('$' + total);
  }

  $('#planButton').click(function () {
    var plan = $('#planTitle').text();
    openMap();
    $.ajax({
      url: "/shop/plan",
      method: "GET",
      data: {
        plan: plan
      },
      success: function success(val) {
        var result = JSON.parse(val);
        console.log(result);

        if (result.length === 0) {
          $("#planQuery").show();
        } else {
          var data = result[0];
          $('#quantity').text(data.number_of_travellers);
          $('#price').text($('#totalPrice').text());
          var totals = (data.number_of_travellers * $('#totalPrice').text().split('$')[1]).toFixed(2);
          $('#totals').text('$' + totals);
          $('#subtotal').text('$' + totals);
          var tax = (totals * 0.15).toFixed(2);
          $('#tax').text('$' + tax);
          $('#total').text('$' + data.total_cost);
        }

        $("#invoice").show();
      },
      error: function error(response) {
        console.log(response);
      }
    });
  });
  $('#travellerForm').on('submit', function (e) {
    e.preventDefault();

    var _token = $('input[name="_token"]').val();

    var plan = $('#planTitle').text();
    var number_of_travellers = x;
    var ages = getAges(x);
    console.log($('#totalPrice').html());
    var price = $('#totalPrice').text().split('$')[1];
    var total_cost = (x * Number(price) + x * Number(price) * 0.15).toFixed(2);
    console.log(plan, number_of_travellers, ages, total_cost);
    $.ajax({
      url: "/shop/purchase",
      method: "POST",
      data: {
        plan: plan,
        number_of_travellers: number_of_travellers,
        ages: ages,
        total_cost: total_cost,
        _token: _token
      },
      success: function success(result) {
        console.log(result);
        $("#planQuery").hide();
      },
      error: function error(response) {
        console.log(response);
      }
    });
  });

  function getAges(x) {
    var ageArray = [];

    for (var i = 1; i <= x; i++) {
      ageArray.push($('#age_' + i).val());
    }

    console.log(ageArray);
    return ageArray.toString();
  }

  function openMap() {
    $("#map-canvas").append('<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1uTCt_nEfZ7D5ve3RZrv62yFKJgjhCX3O" width="100%" height="500px"></iframe>');
  }
});

/***/ }),

/***/ 3:
/*!************************************!*\
  !*** multi ./resources/js/shop.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Plan-Your-Travel\resources\js\shop.js */"./resources/js/shop.js");


/***/ })

/******/ });