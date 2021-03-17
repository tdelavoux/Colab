/**
 * Skipped minification because the original files appears to be already minified.
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
 !function(e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.Underline = t() : e.Underline = t()
}(window, (function() {
    return function(e) {
        var t = {};
        function n(r) {
            if (t[r])
                return t[r].exports;
            var o = t[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return e[r].call(o.exports, o, o.exports, n),
            o.l = !0,
            o.exports
        }
        return n.m = e,
        n.c = t,
        n.d = function(e, t, r) {
            n.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: r
            })
        }
        ,
        n.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }),
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }
        ,
        n.t = function(e, t) {
            if (1 & t && (e = n(e)),
            8 & t)
                return e;
            if (4 & t && "object" == typeof e && e && e.__esModule)
                return e;
            var r = Object.create(null);
            if (n.r(r),
            Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
            }),
            2 & t && "string" != typeof e)
                for (var o in e)
                    n.d(r, o, function(t) {
                        return e[t]
                    }
                    .bind(null, o));
            return r
        }
        ,
        n.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            }
            : function() {
                return e
            }
            ;
            return n.d(t, "a", t),
            t
        }
        ,
        n.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }
        ,
        n.p = "/",
        n(n.s = 0)
    }([function(e, t, n) {
        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function o(e, t, n) {
            return t && r(e.prototype, t),
            n && r(e, n),
            e
        }
        n(1).toString();
        var i = function() {
            function e(t) {
                var n = t.api;
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e),
                this.api = n,
                this.button = null,
                this.tag = "U",
                this.iconClasses = {
                    base: this.api.styles.inlineToolButton,
                    active: this.api.styles.inlineToolButtonActive
                }
            }
            return o(e, null, [{
                key: "CSS",
                get: function() {
                    return "cdx-underline"
                }
            }]),
            o(e, [{
                key: "render",
                value: function() {
                    return this.button = document.createElement("button"),
                    this.button.type = "button",
                    this.button.classList.add(this.iconClasses.base),
                    this.button.innerHTML = this.toolboxIcon,
                    this.button
                }
            }, {
                key: "surround",
                value: function(t) {
                    if (t) {
                        var n = this.api.selection.findParentTag(this.tag, e.CSS);
                        n ? this.unwrap(n) : this.wrap(t)
                    }
                }
            }, {
                key: "wrap",
                value: function(t) {
                    var n = document.createElement(this.tag);
                    n.classList.add(e.CSS),
                    n.appendChild(t.extractContents()),
                    t.insertNode(n),
                    this.api.selection.expandToTag(n)
                }
            }, {
                key: "unwrap",
                value: function(e) {
                    this.api.selection.expandToTag(e);
                    var t = window.getSelection()
                      , n = t.getRangeAt(0)
                      , r = n.extractContents();
                    e.parentNode.removeChild(e),
                    n.insertNode(r),
                    t.removeAllRanges(),
                    t.addRange(n)
                }
            }, {
                key: "checkState",
                value: function() {
                    var t = this.api.selection.findParentTag(this.tag, e.CSS);
                    this.button.classList.toggle(this.iconClasses.active, !!t)
                }
            }, {
                key: "toolboxIcon",
                get: function() {
                    return n(5).default
                }
            }], [{
                key: "isInline",
                get: function() {
                    return !0
                }
            }, {
                key: "sanitize",
                get: function() {
                    return {
                        u: {
                            class: e.CSS
                        }
                    }
                }
            }]),
            e
        }();
        e.exports = i
    }
    , function(e, t, n) {
        var r = n(2)
          , o = n(3);
        "string" == typeof (o = o.__esModule ? o.default : o) && (o = [[e.i, o, ""]]);
        var i = {
            insert: "head",
            singleton: !1
        };
        r(o, i);
        e.exports = o.locals || {}
    }
    , function(e, t, n) {
        "use strict";
        var r, o = function() {
            return void 0 === r && (r = Boolean(window && document && document.all && !window.atob)),
            r
        }, i = function() {
            var e = {};
            return function(t) {
                if (void 0 === e[t]) {
                    var n = document.querySelector(t);
                    if (window.HTMLIFrameElement && n instanceof window.HTMLIFrameElement)
                        try {
                            n = n.contentDocument.head
                        } catch (e) {
                            n = null
                        }
                    e[t] = n
                }
                return e[t]
            }
        }(), a = [];
        function c(e) {
            for (var t = -1, n = 0; n < a.length; n++)
                if (a[n].identifier === e) {
                    t = n;
                    break
                }
            return t
        }
        function u(e, t) {
            for (var n = {}, r = [], o = 0; o < e.length; o++) {
                var i = e[o]
                  , u = t.base ? i[0] + t.base : i[0]
                  , s = n[u] || 0
                  , l = "".concat(u, " ").concat(s);
                n[u] = s + 1;
                var f = c(l)
                  , d = {
                    css: i[1],
                    media: i[2],
                    sourceMap: i[3]
                };
                -1 !== f ? (a[f].references++,
                a[f].updater(d)) : a.push({
                    identifier: l,
                    updater: b(d, t),
                    references: 1
                }),
                r.push(l)
            }
            return r
        }
        function s(e) {
            var t = document.createElement("style")
              , r = e.attributes || {};
            if (void 0 === r.nonce) {
                var o = n.nc;
                o && (r.nonce = o)
            }
            if (Object.keys(r).forEach((function(e) {
                t.setAttribute(e, r[e])
            }
            )),
            "function" == typeof e.insert)
                e.insert(t);
            else {
                var a = i(e.insert || "head");
                if (!a)
                    throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                a.appendChild(t)
            }
            return t
        }
        var l, f = (l = [],
        function(e, t) {
            return l[e] = t,
            l.filter(Boolean).join("\n")
        }
        );
        function d(e, t, n, r) {
            var o = n ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
            if (e.styleSheet)
                e.styleSheet.cssText = f(t, o);
            else {
                var i = document.createTextNode(o)
                  , a = e.childNodes;
                a[t] && e.removeChild(a[t]),
                a.length ? e.insertBefore(i, a[t]) : e.appendChild(i)
            }
        }
        function p(e, t, n) {
            var r = n.css
              , o = n.media
              , i = n.sourceMap;
            if (o ? e.setAttribute("media", o) : e.removeAttribute("media"),
            i && btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i)))), " */")),
            e.styleSheet)
                e.styleSheet.cssText = r;
            else {
                for (; e.firstChild; )
                    e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(r))
            }
        }
        var v = null
          , h = 0;
        function b(e, t) {
            var n, r, o;
            if (t.singleton) {
                var i = h++;
                n = v || (v = s(t)),
                r = d.bind(null, n, i, !1),
                o = d.bind(null, n, i, !0)
            } else
                n = s(t),
                r = p.bind(null, n, t),
                o = function() {
                    !function(e) {
                        if (null === e.parentNode)
                            return !1;
                        e.parentNode.removeChild(e)
                    }(n)
                }
                ;
            return r(e),
            function(t) {
                if (t) {
                    if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap)
                        return;
                    r(e = t)
                } else
                    o()
            }
        }
        e.exports = function(e, t) {
            (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = o());
            var n = u(e = e || [], t);
            return function(e) {
                if (e = e || [],
                "[object Array]" === Object.prototype.toString.call(e)) {
                    for (var r = 0; r < n.length; r++) {
                        var o = c(n[r]);
                        a[o].references--
                    }
                    for (var i = u(e, t), s = 0; s < n.length; s++) {
                        var l = c(n[s]);
                        0 === a[l].references && (a[l].updater(),
                        a.splice(l, 1))
                    }
                    n = i
                }
            }
        }
    }
    , function(e, t, n) {
        (t = n(4)(!1)).push([e.i, ".cdx-underline {\n    text-decoration: underline;\n}\n", ""]),
        e.exports = t
    }
    , function(e, t, n) {
        "use strict";
        e.exports = function(e) {
            var t = [];
            return t.toString = function() {
                return this.map((function(t) {
                    var n = function(e, t) {
                        var n = e[1] || ""
                          , r = e[3];
                        if (!r)
                            return n;
                        if (t && "function" == typeof btoa) {
                            var o = (a = r,
                            c = btoa(unescape(encodeURIComponent(JSON.stringify(a)))),
                            u = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(c),
                            "/*# ".concat(u, " */"))
                              , i = r.sources.map((function(e) {
                                return "/*# sourceURL=".concat(r.sourceRoot || "").concat(e, " */")
                            }
                            ));
                            return [n].concat(i).concat([o]).join("\n")
                        }
                        var a, c, u;
                        return [n].join("\n")
                    }(t, e);
                    return t[2] ? "@media ".concat(t[2], " {").concat(n, "}") : n
                }
                )).join("")
            }
            ,
            t.i = function(e, n, r) {
                "string" == typeof e && (e = [[null, e, ""]]);
                var o = {};
                if (r)
                    for (var i = 0; i < this.length; i++) {
                        var a = this[i][0];
                        null != a && (o[a] = !0)
                    }
                for (var c = 0; c < e.length; c++) {
                    var u = [].concat(e[c]);
                    r && o[u[0]] || (n && (u[2] ? u[2] = "".concat(n, " and ").concat(u[2]) : u[2] = n),
                    t.push(u))
                }
            }
            ,
            t
        }
    }
    , function(e, t, n) {
        "use strict";
        n.r(t),
        t.default = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 8 13" width="8" height="13">\n  <path d="M5.48 7.34v-.27c-.25.32-.51.58-.79.8a2.9 2.9 0 01-.9.48c-.32.1-.7.15-1.11.15-.5 0-.96-.1-1.36-.31a2.3 2.3 0 01-.93-.87A3.85 3.85 0 010 5.4V1.25C0 .83.1.52.28.31.48.11.72 0 1.03 0a1 1 0 01.77.31c.2.21.29.53.29.94v3.36c0 .48.04.89.12 1.22.08.33.23.59.44.77.21.2.5.29.86.29.35 0 .68-.11 1-.32.3-.2.53-.48.67-.82.12-.3.18-.95.18-1.95V1.25c0-.41.1-.73.3-.94.18-.2.44-.31.75-.31.3 0 .56.1.75.31.19.2.28.52.28.94v6.07c0 .4-.09.7-.27.9a.9.9 0 01-.7.3.9.9 0 01-.7-.31c-.2-.2-.29-.5-.29-.87zM.72 9.68h6.36a.72.72 0 010 1.44H.72a.72.72 0 010-1.44z"/>\n</svg>\n'
    }
    ])
}
));
