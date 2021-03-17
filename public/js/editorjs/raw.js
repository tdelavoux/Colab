/**
 * Skipped minification because the original files appears to be already minified.
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
 !function(e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.RawTool = t() : e.RawTool = t()
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
        "use strict";
        n.r(t),
        n.d(t, "default", (function() {
            return i
        }
        ));
        n(1);
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
        /**
 * Raw HTML Tool for CodeX Editor
 *
 * @author CodeX (team@codex.so)
 * @copyright CodeX 2018
 * @license The MIT License (MIT)
 */
        var i = function() {
            function e(t) {
                var n = t.data
                  , r = t.config
                  , o = t.api
                  , i = t.readOnly;
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e),
                this.api = o,
                this.readOnly = i,
                this.placeholder = r.placeholder || e.DEFAULT_PLACEHOLDER,
                this.CSS = {
                    baseClass: this.api.styles.block,
                    input: this.api.styles.input,
                    wrapper: "ce-rawtool",
                    textarea: "ce-rawtool__textarea"
                },
                this.data = {
                    html: n.html || ""
                },
                this.textarea = null,
                this.resizeDebounce = null
            }
            return o(e, null, [{
                key: "isReadOnlySupported",
                get: function() {
                    return !0
                }
            }, {
                key: "displayInToolbox",
                get: function() {
                    return !0
                }
            }, {
                key: "enableLineBreaks",
                get: function() {
                    return !0
                }
            }, {
                key: "toolbox",
                get: function() {
                    return {
                        icon: '<svg width="19" height="13"><path d="M18.004 5.794c.24.422.18.968-.18 1.328l-4.943 4.943a1.105 1.105 0 1 1-1.562-1.562l4.162-4.162-4.103-4.103A1.125 1.125 0 1 1 12.97.648l4.796 4.796c.104.104.184.223.239.35zm-15.142.547l4.162 4.162a1.105 1.105 0 1 1-1.562 1.562L.519 7.122c-.36-.36-.42-.906-.18-1.328a1.13 1.13 0 0 1 .239-.35L5.374.647a1.125 1.125 0 0 1 1.591 1.591L2.862 6.341z"/></svg>',
                        title: "Raw HTML"
                    }
                }
            }]),
            o(e, [{
                key: "render",
                value: function() {
                    var e = this
                      , t = document.createElement("div");
                    return this.textarea = document.createElement("textarea"),
                    t.classList.add(this.CSS.baseClass, this.CSS.wrapper),
                    this.textarea.classList.add(this.CSS.textarea, this.CSS.input),
                    this.textarea.textContent = this.data.html,
                    this.textarea.placeholder = this.placeholder,
                    this.readOnly ? this.textarea.disabled = !0 : this.textarea.addEventListener("input", (function() {
                        e.onInput()
                    }
                    )),
                    t.appendChild(this.textarea),
                    setTimeout((function() {
                        e.resize()
                    }
                    ), 100),
                    t
                }
            }, {
                key: "save",
                value: function(e) {
                    return {
                        html: e.querySelector("textarea").value
                    }
                }
            }, {
                key: "onInput",
                value: function() {
                    var e = this;
                    this.resizeDebounce && clearTimeout(this.resizeDebounce),
                    this.resizeDebounce = setTimeout((function() {
                        e.resize()
                    }
                    ), 200)
                }
            }, {
                key: "resize",
                value: function() {
                    this.textarea.style.height = "auto",
                    this.textarea.style.height = this.textarea.scrollHeight + "px"
                }
            }], [{
                key: "DEFAULT_PLACEHOLDER",
                get: function() {
                    return "Enter HTML code"
                }
            }, {
                key: "sanitize",
                get: function() {
                    return {
                        html: !0
                    }
                }
            }]),
            e
        }()
    }
    , function(e, t, n) {
        var r = n(2);
        "string" == typeof r && (r = [[e.i, r, ""]]);
        var o = {
            hmr: !0,
            transform: void 0,
            insertInto: void 0
        };
        n(4)(r, o);
        r.locals && (e.exports = r.locals)
    }
    , function(e, t, n) {
        (e.exports = n(3)(!1)).push([e.i, ".ce-rawtool__textarea {\n  min-height: 200px;\n  resize: vertical;\n  border-radius: 8px;\n  border: 0;\n  background-color: #1e2128;\n  font-family: Menlo, Monaco, Consolas, Courier New, monospace;\n  font-size: 12px;\n  line-height: 1.6;\n  letter-spacing: -0.2px;\n  color: #a1a7b6;\n  overscroll-behavior: contain;\n}\n", ""])
    }
    , function(e, t) {
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
                            "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(a)))) + " */")
                              , i = r.sources.map((function(e) {
                                return "/*# sourceURL=" + r.sourceRoot + e + " */"
                            }
                            ));
                            return [n].concat(i).concat([o]).join("\n")
                        }
                        var a;
                        return [n].join("\n")
                    }(t, e);
                    return t[2] ? "@media " + t[2] + "{" + n + "}" : n
                }
                )).join("")
            }
            ,
            t.i = function(e, n) {
                "string" == typeof e && (e = [[null, e, ""]]);
                for (var r = {}, o = 0; o < this.length; o++) {
                    var i = this[o][0];
                    "number" == typeof i && (r[i] = !0)
                }
                for (o = 0; o < e.length; o++) {
                    var a = e[o];
                    "number" == typeof a[0] && r[a[0]] || (n && !a[2] ? a[2] = n : n && (a[2] = "(" + a[2] + ") and (" + n + ")"),
                    t.push(a))
                }
            }
            ,
            t
        }
    }
    , function(e, t, n) {
        var r, o, i = {}, a = (r = function() {
            return window && document && document.all && !window.atob
        }
        ,
        function() {
            return void 0 === o && (o = r.apply(this, arguments)),
            o
        }
        ), s = function(e) {
            return document.querySelector(e)
        }, u = function(e) {
            var t = {};
            return function(e) {
                if ("function" == typeof e)
                    return e();
                if (void 0 === t[e]) {
                    var n = s.call(this, e);
                    if (window.HTMLIFrameElement && n instanceof window.HTMLIFrameElement)
                        try {
                            n = n.contentDocument.head
                        } catch (e) {
                            n = null
                        }
                    t[e] = n
                }
                return t[e]
            }
        }(), c = null, l = 0, f = [], p = n(5);
        function d(e, t) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n]
                  , o = i[r.id];
                if (o) {
                    o.refs++;
                    for (var a = 0; a < o.parts.length; a++)
                        o.parts[a](r.parts[a]);
                    for (; a < r.parts.length; a++)
                        o.parts.push(g(r.parts[a], t))
                } else {
                    var s = [];
                    for (a = 0; a < r.parts.length; a++)
                        s.push(g(r.parts[a], t));
                    i[r.id] = {
                        id: r.id,
                        refs: 1,
                        parts: s
                    }
                }
            }
        }
        function h(e, t) {
            for (var n = [], r = {}, o = 0; o < e.length; o++) {
                var i = e[o]
                  , a = t.base ? i[0] + t.base : i[0]
                  , s = {
                    css: i[1],
                    media: i[2],
                    sourceMap: i[3]
                };
                r[a] ? r[a].parts.push(s) : n.push(r[a] = {
                    id: a,
                    parts: [s]
                })
            }
            return n
        }
        function v(e, t) {
            var n = u(e.insertInto);
            if (!n)
                throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
            var r = f[f.length - 1];
            if ("top" === e.insertAt)
                r ? r.nextSibling ? n.insertBefore(t, r.nextSibling) : n.appendChild(t) : n.insertBefore(t, n.firstChild),
                f.push(t);
            else if ("bottom" === e.insertAt)
                n.appendChild(t);
            else {
                if ("object" != typeof e.insertAt || !e.insertAt.before)
                    throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
                var o = u(e.insertInto + " " + e.insertAt.before);
                n.insertBefore(t, o)
            }
        }
        function b(e) {
            if (null === e.parentNode)
                return !1;
            e.parentNode.removeChild(e);
            var t = f.indexOf(e);
            t >= 0 && f.splice(t, 1)
        }
        function y(e) {
            var t = document.createElement("style");
            return void 0 === e.attrs.type && (e.attrs.type = "text/css"),
            m(t, e.attrs),
            v(e, t),
            t
        }
        function m(e, t) {
            Object.keys(t).forEach((function(n) {
                e.setAttribute(n, t[n])
            }
            ))
        }
        function g(e, t) {
            var n, r, o, i;
            if (t.transform && e.css) {
                if (!(i = t.transform(e.css)))
                    return function() {}
                    ;
                e.css = i
            }
            if (t.singleton) {
                var a = l++;
                n = c || (c = y(t)),
                r = L.bind(null, n, a, !1),
                o = L.bind(null, n, a, !0)
            } else
                e.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (n = function(e) {
                    var t = document.createElement("link");
                    return void 0 === e.attrs.type && (e.attrs.type = "text/css"),
                    e.attrs.rel = "stylesheet",
                    m(t, e.attrs),
                    v(e, t),
                    t
                }(t),
                r = j.bind(null, n, t),
                o = function() {
                    b(n),
                    n.href && URL.revokeObjectURL(n.href)
                }
                ) : (n = y(t),
                r = S.bind(null, n),
                o = function() {
                    b(n)
                }
                );
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
            if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document)
                throw new Error("The style-loader cannot be used in a non-browser environment");
            (t = t || {}).attrs = "object" == typeof t.attrs ? t.attrs : {},
            t.singleton || "boolean" == typeof t.singleton || (t.singleton = a()),
            t.insertInto || (t.insertInto = "head"),
            t.insertAt || (t.insertAt = "bottom");
            var n = h(e, t);
            return d(n, t),
            function(e) {
                for (var r = [], o = 0; o < n.length; o++) {
                    var a = n[o];
                    (s = i[a.id]).refs--,
                    r.push(s)
                }
                e && d(h(e, t), t);
                for (o = 0; o < r.length; o++) {
                    var s;
                    if (0 === (s = r[o]).refs) {
                        for (var u = 0; u < s.parts.length; u++)
                            s.parts[u]();
                        delete i[s.id]
                    }
                }
            }
        }
        ;
        var x, w = (x = [],
        function(e, t) {
            return x[e] = t,
            x.filter(Boolean).join("\n")
        }
        );
        function L(e, t, n, r) {
            var o = n ? "" : r.css;
            if (e.styleSheet)
                e.styleSheet.cssText = w(t, o);
            else {
                var i = document.createTextNode(o)
                  , a = e.childNodes;
                a[t] && e.removeChild(a[t]),
                a.length ? e.insertBefore(i, a[t]) : e.appendChild(i)
            }
        }
        function S(e, t) {
            var n = t.css
              , r = t.media;
            if (r && e.setAttribute("media", r),
            e.styleSheet)
                e.styleSheet.cssText = n;
            else {
                for (; e.firstChild; )
                    e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(n))
            }
        }
        function j(e, t, n) {
            var r = n.css
              , o = n.sourceMap
              , i = void 0 === t.convertToAbsoluteUrls && o;
            (t.convertToAbsoluteUrls || i) && (r = p(r)),
            o && (r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(o)))) + " */");
            var a = new Blob([r],{
                type: "text/css"
            })
              , s = e.href;
            e.href = URL.createObjectURL(a),
            s && URL.revokeObjectURL(s)
        }
    }
    , function(e, t) {
        e.exports = function(e) {
            var t = "undefined" != typeof window && window.location;
            if (!t)
                throw new Error("fixUrls requires window.location");
            if (!e || "string" != typeof e)
                return e;
            var n = t.protocol + "//" + t.host
              , r = n + t.pathname.replace(/\/[^\/]*$/, "/");
            return e.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, (function(e, t) {
                var o, i = t.trim().replace(/^"(.*)"$/, (function(e, t) {
                    return t
                }
                )).replace(/^'(.*)'$/, (function(e, t) {
                    return t
                }
                ));
                return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i) ? e : (o = 0 === i.indexOf("//") ? i : 0 === i.indexOf("/") ? n + i : r + i.replace(/^\.\//, ""),
                "url(" + JSON.stringify(o) + ")")
            }
            ))
        }
    }
    ]).default
}
));
