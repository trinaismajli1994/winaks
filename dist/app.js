/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ (() => {

jQuery(document).ready(function () {
  jQuery('.menu-btn').click(function (event) {
    jQuery(this).toggleClass('open');
    jQuery('.navbar-collapse').slideToggle('slow').toggleClass('show');
    return false;
  });
}); // Menu parent scripts

jQuery('.sub-menu-first>ul').addClass("sub-parent");
jQuery('.sub-menu-first ul').hide();
jQuery('.sub-menu-first a').click(function () {
  jQuery(this).parent('.sub-menu-first').children("ul").slideToggle("200");
}); // Menu child scripts

jQuery('.sub-menu-second>ul').addClass("sub-child");
jQuery('.sub-menu-second ul').hide();
jQuery('.sub-menu-second a').click(function (e) {
  var $this = jQuery(this).parent().find('ul');
  jQuery(".sub-menu-second ul").not($this).hide();
  $this.slideToggle("3000");
}); // Add active class to menu

jQuery('.sub-parent > li').click(function () {
  jQuery(this).addClass('active').siblings().removeClass('active');
}); // No page scroll on click

jQuery(document).on('click', '.click > a', function () {
  jQuery("html").toggleClass("no-scroll");
  jQuery(".open-menu").toggleClass("active");
});
jQuery('.open-menu ul').attr('style', function (index, attr) {
  return attr == 'display: block' ? 'display: none' : 'display: block';
}); // Home page scripts

if (jQuery(".home").length) {
  (function circularAnimation() {
    function init() {
      var container = document.querySelector(".circular-animation-container");
      var wrapper = document.querySelector(".circular-animation-starter");
      var group = document.querySelector(".animation-items-multiplier");
      var totalWidth = container.offsetWidth;
      var oneWidth = group.offsetWidth;
      Array.prototype.forEach.call(document.querySelectorAll(".animation-dummy-container"), function (element) {
        wrapper.removeChild(element);
      });
      var count = Math.ceil(totalWidth / oneWidth);

      for (var index = 0; index < count; index++) {
        var node = group.cloneNode(true);
        node.classList.add("animation-dummy-container");
        node.style.transform = "translateX(" + 100 * index + "%)";
        wrapper.appendChild(node);
      }
    }

    init();
    window.onresize = init;
  })();

  (function circularAnimation1() {
    function init() {
      var container = document.querySelector(".circular-animation-container1");
      var wrapper = document.querySelector(".circular-animation-starter1");
      var group = document.querySelector(".animation-items-multiplier1");
      var totalWidth = container.offsetWidth;
      var oneWidth = group.offsetWidth; // remove all dummy containers

      Array.prototype.forEach.call(document.querySelectorAll(".animation-dummy-container1"), function (element) {
        wrapper.removeChild(element);
      });
      var count = Math.ceil(totalWidth / oneWidth);

      for (var index = 0; index < count; index++) {
        var node = group.cloneNode(true);
        node.classList.add("animation-dummy-container1");
        node.style.transform = "translateX(" + 100 * index + "%)";
        wrapper.appendChild(node);
      }
    }

    init();
    window.onresize = init;
  })();
}

jQuery('.selling-point').on('click', function () {
  jQuery(this).toggleClass("blue-bg");
  jQuery(this).find('.point-description').slideToggle();
  jQuery(this).find('h2').toggleClass("small-title");
}); // End of home page scripts
// Slider in post page

if (jQuery(".hentry").length) {
  var gallery = function gallery(slider) {
    var slider = slider;
    var link = jQuery(slider).find("#js-list a");
    var bigImage = jQuery(slider).find("#js-bigImage img");
    var bigLink = jQuery(slider).find("#js-bigImage a");
    link.click(function () {
      var images = jQuery(this).find('img');
      var imgSrc = images.attr('src');
      bigImage.attr({
        src: imgSrc
      });
      bigLink.attr({
        href: imgSrc
      });
      jQuery(this).parent().siblings('li').removeClass('active');
      images.parent().parent().addClass('active');
      return false;
    });
    jQuery('.gallery__list li:first-child').removeClass('active').addClass('active');

    function nextSlide() {
      var count = jQuery(slider).find('#js-list .gallery__item').length;
      var n = parseInt(jQuery(slider).find('#js-list .gallery__item').index(jQuery('.active')) + 1);
      var activeItem = jQuery(slider).find('#js-list .active');
      var nextSrc;

      if (count != n) {
        nextSrc = activeItem.next().find('img').attr('src');
        jQuery(slider).find('#js-list .active').removeClass('active');
        activeItem.next().addClass('active');
      } else {
        nextSrc = jQuery(slider).find('#js-list a').first().find('img').attr('src');
        jQuery(slider).find('#js-list .active').removeClass('active');
        jQuery(slider).find('#js-list .gallery__item').first().addClass('active');
      }

      jQuery(slider).find('#js-bigImage img').attr({
        src: nextSrc
      });
      return false;
    }

    function prevSlide() {
      var n = parseInt(jQuery(slider).find('#js-list .gallery__item').index(jQuery('.active')) + 1);
      var activeItem = jQuery(slider).find('#js-list .active');
      var prevSrc;

      if (n != 1) {
        prevSrc = activeItem.prev().find('img').attr('src');
        jQuery(slider).find('#js-list .active').removeClass('active');
        activeItem.prev().addClass('active');
      } else {
        prevSrc = jQuery(slider).find('#js-list a:last').find('img').attr('src');
        jQuery(slider).find('#js-list .active').removeClass('active');
        jQuery(slider).find('#js-list .gallery__item:last').addClass('active');
      }

      jQuery(slider).find('#js-bigImage img').attr({
        src: prevSrc
      });
      return false;
    }
  };

  gallery(".js-gallery");
}
/*
 * CSS3 Animate it
 * Copyright (c) 2014 Jack McCourt
 * https://github.com/kriegar/css3-animate-it
 * Version: 0.1.0
 * 
 * I utilise the jQuery.appear plugin within this javascript file so here is a link to that too
 * https://github.com/morr/jquery.appear
 *
 * I also utilise the jQuery.doTimeout plugin for the data-sequence functionality so here is a link back to them.
 * http://benalman.com/projects/jquery-dotimeout-plugin/
 */


(function ($) {
  var selectors = [];
  var check_binded = false;
  var check_lock = false;
  var defaults = {
    interval: 250,
    force_process: false
  };
  var $window = jQuery(window);
  var $prior_appeared;

  function process() {
    check_lock = false;

    for (var index = 0; index < selectors.length; index++) {
      var $appeared = jQuery(selectors[index]).filter(function () {
        return jQuery(this).is(':appeared');
      });
      $appeared.trigger('appear', [$appeared]);

      if ($prior_appeared) {
        var $disappeared = $prior_appeared.not($appeared);
        $disappeared.trigger('disappear', [$disappeared]);
      }

      $prior_appeared = $appeared;
    }
  } // "appeared" custom filter


  jQuery.expr[':']['appeared'] = function (element) {
    var $element = jQuery(element);

    if (!$element.is(':visible')) {
      return false;
    }

    var window_left = $window.scrollLeft();
    var window_top = $window.scrollTop();
    var offset = $element.offset();
    var left = offset.left;
    var top = offset.top;

    if (top + $element.height() >= window_top && top - ($element.data('appear-top-offset') || 0) <= window_top + $window.height() && left + $element.width() >= window_left && left - ($element.data('appear-left-offset') || 0) <= window_left + $window.width()) {
      return true;
    } else {
      return false;
    }
  };

  jQuery.fn.extend({
    // watching for element's appearance in browser viewport
    appear: function appear(options) {
      var opts = jQuery.extend({}, defaults, options || {});
      var selector = this.selector || this;

      if (!check_binded) {
        var on_check = function on_check() {
          if (check_lock) {
            return;
          }

          check_lock = true;
          setTimeout(process, opts.interval);
        };

        jQuery(window).scroll(on_check).resize(on_check);
        check_binded = true;
      }

      if (opts.force_process) {
        setTimeout(process, opts.interval);
      }

      selectors.push(selector);
      return jQuery(selector);
    }
  });
  jQuery.extend({
    // force elements's appearance check
    force_appear: function force_appear() {
      if (check_binded) {
        process();
        return true;
      }

      ;
      return false;
    }
  });
})(jQuery);

(function ($) {
  '$:nomunge'; // Used by YUI compressor.

  var cache = {},
      // Reused internal string.
  doTimeout = 'doTimeout',
      // A convenient shortcut.
  aps = Array.prototype.slice;

  jQuery[doTimeout] = function () {
    return p_doTimeout.apply(window, [0].concat(aps.call(arguments)));
  };

  jQuery.fn[doTimeout] = function () {
    var args = aps.call(arguments),
        result = p_doTimeout.apply(this, [doTimeout + args[0]].concat(args));
    return typeof args[0] === 'number' || typeof args[1] === 'number' ? this : result;
  };

  function p_doTimeout(jquery_data_key) {
    var that = this,
        elem,
        data = {},
        // Allows the plugin to call a string callback method.
    method_base = jquery_data_key ? $.fn : $,
        // Any additional arguments will be passed to the callback.
    args = arguments,
        slice_args = 4,
        id = args[1],
        delay = args[2],
        callback = args[3];

    if (typeof id !== 'string') {
      slice_args--;
      id = jquery_data_key = 0;
      delay = args[1];
      callback = args[2];
    }

    if (jquery_data_key) {
      // Note: key is 'doTimeout' + id
      // Get id-object from the first element's data, otherwise initialize it to {}.
      elem = that.eq(0);
      elem.data(jquery_data_key, data = elem.data(jquery_data_key) || {});
    } else if (id) {
      // Get id-object from the cache, otherwise initialize it to {}.
      data = cache[id] || (cache[id] = {});
    } // Clear any existing timeout for this id.


    data.id && clearTimeout(data.id);
    delete data.id; // Clean up when necessary.

    function cleanup() {
      if (jquery_data_key) {
        elem.removeData(jquery_data_key);
      } else if (id) {
        delete cache[id];
      }
    }

    ; // Yes, there actually is a setTimeout call in here!

    function actually_setTimeout() {
      data.id = setTimeout(function () {
        data.fn();
      }, delay);
    }

    ;

    if (callback) {
      data.fn = function (no_polling_loop) {
        if (typeof callback === 'string') {
          callback = method_base[callback];
        }

        callback.apply(that, aps.call(args, slice_args)) === true && !no_polling_loop ? actually_setTimeout() : cleanup();
      }; // Set that timeout!


      actually_setTimeout();
    } else if (data.fn) {
      delay === undefined ? cleanup() : data.fn(delay === false);
      return true;
    } else {
      cleanup();
    }
  }

  ;
})(jQuery); //CSS3 Animate-it


jQuery('.animatedParent').appear();
jQuery('.animatedClick').click(function () {
  var target = jQuery(this).attr('data-target');

  if (jQuery(this).attr('data-sequence') != undefined) {
    var firstId = jQuery("." + target + ":first").attr('data-id');
    var lastId = jQuery("." + target + ":last").attr('data-id');
    var number = firstId; //Add or remove the class

    if (jQuery("." + target + "[data-id=" + number + "]").hasClass('go')) {
      jQuery("." + target + "[data-id=" + number + "]").addClass('goAway');
      jQuery("." + target + "[data-id=" + number + "]").removeClass('go');
    } else {
      jQuery("." + target + "[data-id=" + number + "]").addClass('go');
      jQuery("." + target + "[data-id=" + number + "]").removeClass('goAway');
    }

    number++;
    delay = Number(jQuery(this).attr('data-sequence'));
    jQuery.doTimeout(delay, function () {
      console.log(lastId); //Add or remove the class

      if (jQuery("." + target + "[data-id=" + number + "]").hasClass('go')) {
        jQuery("." + target + "[data-id=" + number + "]").addClass('goAway');
        jQuery("." + target + "[data-id=" + number + "]").removeClass('go');
      } else {
        jQuery("." + target + "[data-id=" + number + "]").addClass('go');
        jQuery("." + target + "[data-id=" + number + "]").removeClass('goAway');
      } //increment


      ++number; //continute looping till reached last ID

      if (number <= lastId) {
        return true;
      }
    });
  } else {
    if (jQuery('.' + target).hasClass('go')) {
      jQuery('.' + target).addClass('goAway');
      jQuery('.' + target).removeClass('go');
    } else {
      jQuery('.' + target).addClass('go');
      jQuery('.' + target).removeClass('goAway');
    }
  }
});
jQuery(document.body).on('appear', '.animatedParent', function (e, $affected) {
  var ele = jQuery(this).find('.animated');
  var parent = jQuery(this);

  if (parent.attr('data-sequence') != undefined) {
    var firstId = jQuery(this).find('.animated:first').attr('data-id');
    var number = firstId;
    var lastId = jQuery(this).find('.animated:last').attr('data-id');
    jQuery(parent).find(".animated[data-id=" + number + "]").addClass('go');
    number++;
    delay = Number(parent.attr('data-sequence'));
    jQuery.doTimeout(delay, function () {
      jQuery(parent).find(".animated[data-id=" + number + "]").addClass('go');
      ++number;

      if (number <= lastId) {
        return true;
      }
    });
  } else {
    ele.addClass('go');
  }
});
jQuery(document.body).on('disappear', '.animatedParent', function (e, $affected) {
  if (!jQuery(this).hasClass('animateOnce')) {
    jQuery(this).find('.animated').removeClass('go');
  }
});

/***/ }),

/***/ "./src/app.scss":
/*!**********************!*\
  !*** ./src/app.scss ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/app": 0,
/******/ 			"dist/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkwinaks_theme"] = self["webpackChunkwinaks_theme"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["dist/app"], () => (__webpack_require__("./src/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["dist/app"], () => (__webpack_require__("./src/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;