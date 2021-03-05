// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles
parcelRequire = (function (modules, cache, entry, globalName) {
  // Save the require from previous bundle to this closure if any
  var previousRequire = typeof parcelRequire === 'function' && parcelRequire;
  var nodeRequire = typeof require === 'function' && require;

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire = typeof parcelRequire === 'function' && parcelRequire;
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error('Cannot find module \'' + name + '\'');
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = cache[name] = new newRequire.Module(name);

      modules[name][0].call(module.exports, localRequire, module, module.exports, this);
    }

    return cache[name].exports;

    function localRequire(x){
      return newRequire(localRequire.resolve(x));
    }

    function resolve(x){
      return modules[name][1][x] || x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [function (require, module) {
      module.exports = exports;
    }, {}];
  };

  var error;
  for (var i = 0; i < entry.length; i++) {
    try {
      newRequire(entry[i]);
    } catch (e) {
      // Save first error but execute all entries
      if (!error) {
        error = e;
      }
    }
  }

  if (entry.length) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(entry[entry.length - 1]);

    // CommonJS
    if (typeof exports === "object" && typeof module !== "undefined") {
      module.exports = mainExports;

    // RequireJS
    } else if (typeof define === "function" && define.amd) {
     define(function () {
       return mainExports;
     });

    // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }

  // Override the current require with this new one
  parcelRequire = newRequire;

  if (error) {
    // throw error from earlier, _after updating parcelRequire_
    throw error;
  }

  return newRequire;
})({"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/bundle-url.js":[function(require,module,exports) {
var bundleURL = null;

function getBundleURLCached() {
  if (!bundleURL) {
    bundleURL = getBundleURL();
  }

  return bundleURL;
}

function getBundleURL() {
  // Attempt to find the URL of the current script and use that as the base URL
  try {
    throw new Error();
  } catch (err) {
    var matches = ('' + err.stack).match(/(https?|file|ftp|chrome-extension|moz-extension):\/\/[^)\n]+/g);

    if (matches) {
      return getBaseURL(matches[0]);
    }
  }

  return '/';
}

function getBaseURL(url) {
  return ('' + url).replace(/^((?:https?|file|ftp|chrome-extension|moz-extension):\/\/.+)\/[^/]+$/, '$1') + '/';
}

exports.getBundleURL = getBundleURLCached;
exports.getBaseURL = getBaseURL;
},{}],"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/css-loader.js":[function(require,module,exports) {
var bundle = require('./bundle-url');

function updateLink(link) {
  var newLink = link.cloneNode();

  newLink.onload = function () {
    link.remove();
  };

  newLink.href = link.href.split('?')[0] + '?' + Date.now();
  link.parentNode.insertBefore(newLink, link.nextSibling);
}

var cssTimeout = null;

function reloadCSS() {
  if (cssTimeout) {
    return;
  }

  cssTimeout = setTimeout(function () {
    var links = document.querySelectorAll('link[rel="stylesheet"]');

    for (var i = 0; i < links.length; i++) {
      if (bundle.getBaseURL(links[i].href) === bundle.getBundleURL()) {
        updateLink(links[i]);
      }
    }

    cssTimeout = null;
  }, 50);
}

module.exports = reloadCSS;
},{"./bundle-url":"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/bundle-url.js"}],"node_modules/reset-css/reset.css":[function(require,module,exports) {

        var reloadCSS = require('_css_loader');
        module.hot.dispose(reloadCSS);
        module.hot.accept(reloadCSS);
      
},{"_css_loader":"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"node_modules/@fortawesome/fontawesome-free/css/all.min.css":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"./../webfonts/fa-brands-400.eot":[["fa-brands-400.1bb139e6.eot","node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.eot"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.eot"],"./../webfonts/fa-brands-400.woff2":[["fa-brands-400.1d34615d.woff2","node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff2"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff2"],"./../webfonts/fa-brands-400.woff":[["fa-brands-400.eca31406.woff","node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff"],"./../webfonts/fa-brands-400.ttf":[["fa-brands-400.df86de32.ttf","node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.ttf"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.ttf"],"./../webfonts/fa-brands-400.svg":[["fa-brands-400.f1eb0e8c.svg","node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.svg"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.svg"],"./../webfonts/fa-regular-400.eot":[["fa-regular-400.a2c1909d.eot","node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.eot"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.eot"],"./../webfonts/fa-regular-400.woff2":[["fa-regular-400.5ca8c932.woff2","node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.woff2"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.woff2"],"./../webfonts/fa-regular-400.woff":[["fa-regular-400.3c3cc54e.woff","node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.woff"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.woff"],"./../webfonts/fa-regular-400.ttf":[["fa-regular-400.cde05ce7.ttf","node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.ttf"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.ttf"],"./../webfonts/fa-regular-400.svg":[["fa-regular-400.6ef294e6.svg","node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.svg"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.svg"],"./../webfonts/fa-solid-900.eot":[["fa-solid-900.90890cef.eot","node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.eot"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.eot"],"./../webfonts/fa-solid-900.woff2":[["fa-solid-900.da0e0451.woff2","node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2"],"./../webfonts/fa-solid-900.woff":[["fa-solid-900.935b31ea.woff","node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff"],"./../webfonts/fa-solid-900.ttf":[["fa-solid-900.f2409036.ttf","node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.ttf"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.ttf"],"./../webfonts/fa-solid-900.svg":[["fa-solid-900.c87ba59a.svg","node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.svg"],"node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.svg"],"_css_loader":"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"assets/scss/main.scss":[function(require,module,exports) {
var reloadCSS = require('_css_loader');

module.hot.dispose(reloadCSS);
module.hot.accept(reloadCSS);
},{"./../images/imageTest.jpg":[["imageTest.77e45ca6.jpg","assets/images/imageTest.jpg"],"assets/images/imageTest.jpg"],"./../images/contactPhoto.jpg":[["contactPhoto.e9f5d1e8.jpg","assets/images/contactPhoto.jpg"],"assets/images/contactPhoto.jpg"],"_css_loader":"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/css-loader.js"}],"assets/js/menu.js":[function(require,module,exports) {
$(document).ready(function () {
  $(".menu-icon").on("click", function () {
    $("nav ul").toggleClass("showing");
  });
}); // Scrolling Effect

$(window).on("scroll", function () {
  if ($(window).scrollTop()) {
    $('nav').addClass('black');
  } else {
    $('nav').removeClass('black');
  }
});
},{}],"assets/js/menu2.js":[function(require,module,exports) {
!function ($) {
  "use strict"; // Header fixed and Back to top button

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      $('#header').addClass('header-fixed');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('#header').removeClass('header-fixed');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  }); // Initiate superfish on nav menu

  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  }); // Mobile Navigation

  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
    $(document).on('click', '.menu-has-children i', function (e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });
    $(document).on('click', '#mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });
    $(document).click(function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");

      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  } // Smooth scroll for the navigation menu and links with .scrollto classes


  var scrolltoOffset = $('#header').outerHeight() - 21;
  $(document).on('click', '.nav-menu a, #mobile-nav a, .scrollto', function (e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);

      if (target.length) {
        e.preventDefault();
        var scrollto = target.offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }

        return false;
      }
    }
  }); // Activate smooth scroll on page load with hash links in the url

  $(document).ready(function () {
    if (window.location.hash) {
      var initial_nav = window.location.hash;

      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  }); // Navigation active state on scroll

  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');
  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop() + 200;
    nav_sections.each(function () {
      var top = $(this).offset().top,
          bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('menu-active');
        }

        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('menu-active');
      }

      if (cur_pos < 300) {
        $(".nav-menu li:first").addClass('menu-active');
      }
    });
  });
}(jQuery);
},{}],"assets/js/index.js":[function(require,module,exports) {
"use strict";

require("reset-css");

require("@fortawesome/fontawesome-free/css/all.min.css");

require("../scss/main.scss");

require("./menu.js");

require("./menu2.js");
},{"reset-css":"node_modules/reset-css/reset.css","@fortawesome/fontawesome-free/css/all.min.css":"node_modules/@fortawesome/fontawesome-free/css/all.min.css","../scss/main.scss":"assets/scss/main.scss","./menu.js":"assets/js/menu.js","./menu2.js":"assets/js/menu2.js"}],"../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/hmr-runtime.js":[function(require,module,exports) {
var global = arguments[3];
var OVERLAY_ID = '__parcel__error__overlay__';
var OldModule = module.bundle.Module;

function Module(moduleName) {
  OldModule.call(this, moduleName);
  this.hot = {
    data: module.bundle.hotData,
    _acceptCallbacks: [],
    _disposeCallbacks: [],
    accept: function (fn) {
      this._acceptCallbacks.push(fn || function () {});
    },
    dispose: function (fn) {
      this._disposeCallbacks.push(fn);
    }
  };
  module.bundle.hotData = null;
}

module.bundle.Module = Module;
var checkedAssets, assetsToAccept;
var parent = module.bundle.parent;

if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== 'undefined') {
  var hostname = "" || location.hostname;
  var protocol = location.protocol === 'https:' ? 'wss' : 'ws';
  var ws = new WebSocket(protocol + '://' + hostname + ':' + "43937" + '/');

  ws.onmessage = function (event) {
    checkedAssets = {};
    assetsToAccept = [];
    var data = JSON.parse(event.data);

    if (data.type === 'update') {
      var handled = false;
      data.assets.forEach(function (asset) {
        if (!asset.isNew) {
          var didAccept = hmrAcceptCheck(global.parcelRequire, asset.id);

          if (didAccept) {
            handled = true;
          }
        }
      }); // Enable HMR for CSS by default.

      handled = handled || data.assets.every(function (asset) {
        return asset.type === 'css' && asset.generated.js;
      });

      if (handled) {
        console.clear();
        data.assets.forEach(function (asset) {
          hmrApply(global.parcelRequire, asset);
        });
        assetsToAccept.forEach(function (v) {
          hmrAcceptRun(v[0], v[1]);
        });
      } else if (location.reload) {
        // `location` global exists in a web worker context but lacks `.reload()` function.
        location.reload();
      }
    }

    if (data.type === 'reload') {
      ws.close();

      ws.onclose = function () {
        location.reload();
      };
    }

    if (data.type === 'error-resolved') {
      console.log('[parcel] ✨ Error resolved');
      removeErrorOverlay();
    }

    if (data.type === 'error') {
      console.error('[parcel] 🚨  ' + data.error.message + '\n' + data.error.stack);
      removeErrorOverlay();
      var overlay = createErrorOverlay(data);
      document.body.appendChild(overlay);
    }
  };
}

function removeErrorOverlay() {
  var overlay = document.getElementById(OVERLAY_ID);

  if (overlay) {
    overlay.remove();
  }
}

function createErrorOverlay(data) {
  var overlay = document.createElement('div');
  overlay.id = OVERLAY_ID; // html encode message and stack trace

  var message = document.createElement('div');
  var stackTrace = document.createElement('pre');
  message.innerText = data.error.message;
  stackTrace.innerText = data.error.stack;
  overlay.innerHTML = '<div style="background: black; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; opacity: 0.85; font-family: Menlo, Consolas, monospace; z-index: 9999;">' + '<span style="background: red; padding: 2px 4px; border-radius: 2px;">ERROR</span>' + '<span style="top: 2px; margin-left: 5px; position: relative;">🚨</span>' + '<div style="font-size: 18px; font-weight: bold; margin-top: 20px;">' + message.innerHTML + '</div>' + '<pre>' + stackTrace.innerHTML + '</pre>' + '</div>';
  return overlay;
}

function getParents(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return [];
  }

  var parents = [];
  var k, d, dep;

  for (k in modules) {
    for (d in modules[k][1]) {
      dep = modules[k][1][d];

      if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) {
        parents.push(k);
      }
    }
  }

  if (bundle.parent) {
    parents = parents.concat(getParents(bundle.parent, id));
  }

  return parents;
}

function hmrApply(bundle, asset) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (modules[asset.id] || !bundle.parent) {
    var fn = new Function('require', 'module', 'exports', asset.generated.js);
    asset.isNew = !modules[asset.id];
    modules[asset.id] = [fn, asset.deps];
  } else if (bundle.parent) {
    hmrApply(bundle.parent, asset);
  }
}

function hmrAcceptCheck(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (!modules[id] && bundle.parent) {
    return hmrAcceptCheck(bundle.parent, id);
  }

  if (checkedAssets[id]) {
    return;
  }

  checkedAssets[id] = true;
  var cached = bundle.cache[id];
  assetsToAccept.push([bundle, id]);

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    return true;
  }

  return getParents(global.parcelRequire, id).some(function (id) {
    return hmrAcceptCheck(global.parcelRequire, id);
  });
}

function hmrAcceptRun(bundle, id) {
  var cached = bundle.cache[id];
  bundle.hotData = {};

  if (cached) {
    cached.hot.data = bundle.hotData;
  }

  if (cached && cached.hot && cached.hot._disposeCallbacks.length) {
    cached.hot._disposeCallbacks.forEach(function (cb) {
      cb(bundle.hotData);
    });
  }

  delete bundle.cache[id];
  bundle(id);
  cached = bundle.cache[id];

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    cached.hot._acceptCallbacks.forEach(function (cb) {
      cb();
    });

    return true;
  }
}
},{}]},{},["../../../../../../../../home/etudiant/.npm-packages/lib/node_modules/parcel-bundler/src/builtins/hmr-runtime.js","assets/js/index.js"], null)
//# sourceMappingURL=/js.5c615dc2.js.map