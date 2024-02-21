(() => {
  "use strict";
  function t(e) {
    return (
      (t =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
          ? function (t) {
              return typeof t;
            }
          : function (t) {
              return t &&
                "function" == typeof Symbol &&
                t.constructor === Symbol &&
                t !== Symbol.prototype
                ? "symbol"
                : typeof t;
            }),
      t(e)
    );
  }
  function e(e, n) {
    for (var o = 0; o < n.length; o++) {
      var r = n[o];
      (r.enumerable = r.enumerable || !1),
        (r.configurable = !0),
        "value" in r && (r.writable = !0),
        Object.defineProperty(
          e,
          (void 0,
          (i = (function (e, n) {
            if ("object" !== t(e) || null === e) return e;
            var o = e[Symbol.toPrimitive];
            if (void 0 !== o) {
              var r = o.call(e, "string");
              if ("object" !== t(r)) return r;
              throw new TypeError(
                "@@toPrimitive must return a primitive value."
              );
            }
            return String(e);
          })(r.key)),
          "symbol" === t(i) ? i : String(i)),
          r
        );
    }
    var i;
  }
  const n = (function () {
    function t() {
      !(function (t, e) {
        if (!(t instanceof e))
          throw new TypeError("Cannot call a class as a function");
      })(this, t),
        (this.menuIcon = document.querySelector(".utdsolv-header__menu-icon")),
        (this.menuContent = document.querySelector(".utdsolv-header__links")),
        (this.utdsolvHeader = document.querySelector(".utdsolv-header")),
        this.events();
    }
    var n, o;
    return (
      (n = t),
      (o = [
        {
          key: "events",
          value: function () {
            var t = this;
            this.menuIcon.addEventListener("click", function () {
              return t.toggleTheMenu();
            });
          },
        },
        {
          key: "toggleTheMenu",
          value: function () {
            this.menuContent.classList.toggle(
              "utdsolv-header__links--is-visible"
            ),
              this.menuIcon.classList.toggle(
                "utdsolv-header__menu-icon--close-x"
              );
          },
        },
      ]) && e(n.prototype, o),
      Object.defineProperty(n, "prototype", { writable: !1 }),
      t
    );
  })();
  function o(t) {
    return (
      (o =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
          ? function (t) {
              return typeof t;
            }
          : function (t) {
              return t &&
                "function" == typeof Symbol &&
                t.constructor === Symbol &&
                t !== Symbol.prototype
                ? "symbol"
                : typeof t;
            }),
      o(t)
    );
  }
  function r(t, e) {
    for (var n = 0; n < e.length; n++) {
      var r = e[n];
      (r.enumerable = r.enumerable || !1),
        (r.configurable = !0),
        "value" in r && (r.writable = !0),
        Object.defineProperty(
          t,
          (void 0,
          (i = (function (t, e) {
            if ("object" !== o(t) || null === t) return t;
            var n = t[Symbol.toPrimitive];
            if (void 0 !== n) {
              var r = n.call(t, "string");
              if ("object" !== o(r)) return r;
              throw new TypeError(
                "@@toPrimitive must return a primitive value."
              );
            }
            return String(t);
          })(r.key)),
          "symbol" === o(i) ? i : String(i)),
          r
        );
    }
    var i;
  }
  function i(t, e, n) {
    return (
      e && r(t.prototype, e),
      n && r(t, n),
      Object.defineProperty(t, "prototype", { writable: !1 }),
      t
    );
  }
  const c = i(function t() {
    !(function (t, e) {
      if (!(t instanceof e))
        throw new TypeError("Cannot call a class as a function");
    })(this, t),
      document.addEventListener("DOMContentLoaded", function () {
        for (
          var t = document.querySelector(".sponsor-container"),
            e = document.querySelector(".slider-dots"),
            n = Math.ceil(t.children.length / 5),
            o = function (n) {
              var o = document.createElement("div");
              o.classList.add("dot"),
                o.addEventListener("click", function () {
                  return (
                    (o = 100 * -(e = n)),
                    (t.style.transform = "translateX(".concat(o, "%)")),
                    void i(e)
                  );
                  var e, o;
                }),
                e.appendChild(o);
            },
            r = 0;
          r < n;
          r++
        )
          o(r);
        function i(t) {
          document.querySelectorAll(".dot").forEach(function (e, n) {
            e.classList.toggle("active", n === t);
          });
        }
        i(0);
      });
  });
  function u(t) {
    return (
      (u =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
          ? function (t) {
              return typeof t;
            }
          : function (t) {
              return t &&
                "function" == typeof Symbol &&
                t.constructor === Symbol &&
                t !== Symbol.prototype
                ? "symbol"
                : typeof t;
            }),
      u(t)
    );
  }
  function l(t, e) {
    for (var n = 0; n < e.length; n++) {
      var o = e[n];
      (o.enumerable = o.enumerable || !1),
        (o.configurable = !0),
        "value" in o && (o.writable = !0),
        Object.defineProperty(
          t,
          (void 0,
          (r = (function (t, e) {
            if ("object" !== u(t) || null === t) return t;
            var n = t[Symbol.toPrimitive];
            if (void 0 !== n) {
              var o = n.call(t, "string");
              if ("object" !== u(o)) return o;
              throw new TypeError(
                "@@toPrimitive must return a primitive value."
              );
            }
            return String(t);
          })(o.key)),
          "symbol" === u(r) ? r : String(r)),
          o
        );
    }
    var r;
  }
  const a = (function () {
    function t() {
      !(function (t, e) {
        if (!(t instanceof e))
          throw new TypeError("Cannot call a class as a function");
      })(this, t),
        (this.accordionHeaders =
          document.querySelectorAll(".accordion-header")),
        this.events();
    }
    var e, n;
    return (
      (e = t),
      (n = [
        {
          key: "events",
          value: function () {
            var t = this;
            this.accordionHeaders.forEach(function (e) {
              e.addEventListener("click", function () {
                return t.toggleAccordion(e);
              });
            });
          },
        },
        {
          key: "toggleAccordion",
          value: function (t) {
            var e = t.parentElement.querySelector(".accordion-content");
            e.classList.toggle("active"),
              e.classList.contains("active")
                ? (e.style.display = "block")
                : (e.style.display = "none");
          },
        },
      ]) && l(e.prototype, n),
      Object.defineProperty(e, "prototype", { writable: !1 }),
      t
    );
  })();
  new n(), new a(), new c();
})();
