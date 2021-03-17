/**
 * Skipped minification because the original files appears to be already minified.
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
 !function(e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.List = t() : e.List = t()
}(window, (function() {
    return function(e) {
        var t = {};
        function n(r) {
            if (t[r])
                return t[r].exports;
            var i = t[r] = {
                i: r,
                l: !1,
                exports: {}
            };
            return e[r].call(i.exports, i, i.exports, n),
            i.l = !0,
            i.exports
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
                for (var i in e)
                    n.d(r, i, function(t) {
                        return e[t]
                    }
                    .bind(null, i));
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
        function r(e) {
            return function(e) {
                if (Array.isArray(e))
                    return i(e)
            }(e) || function(e) {
                if ("undefined" != typeof Symbol && Symbol.iterator in Object(e))
                    return Array.from(e)
            }(e) || function(e, t) {
                if (!e)
                    return;
                if ("string" == typeof e)
                    return i(e, t);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                "Object" === n && e.constructor && (n = e.constructor.name);
                if ("Map" === n || "Set" === n)
                    return Array.from(e);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))
                    return i(e, t)
            }(e) || function() {
                throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }
        function i(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++)
                r[n] = e[n];
            return r
        }
        function a(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function o(e, t, n) {
            return t && a(e.prototype, t),
            n && a(e, n),
            e
        }
        n(1).toString();
        var s = function() {
            function e(t) {
                var n = t.data
                  , r = (t.config,
                t.api)
                  , i = t.readOnly;
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e),
                this._elements = {
                    wrapper: null
                },
                this.api = r,
                this.readOnly = i,
                this.settings = [{
                    name: "unordered",
                    title: this.api.i18n.t("Unordered"),
                    icon: '<svg width="17" height="13" viewBox="0 0 17 13" xmlns="http://www.w3.org/2000/svg"> <path d="M5.625 4.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm0-4.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm0 9.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm-4.5-5a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25zm0-4.85a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25zm0 9.85a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25z"/></svg>',
                    default: !1
                }, {
                    name: "ordered",
                    title: this.api.i18n.t("Ordered"),
                    icon: '<svg width="17" height="13" viewBox="0 0 17 13" xmlns="http://www.w3.org/2000/svg"><path d="M5.819 4.607h9.362a1.069 1.069 0 0 1 0 2.138H5.82a1.069 1.069 0 1 1 0-2.138zm0-4.607h9.362a1.069 1.069 0 0 1 0 2.138H5.82a1.069 1.069 0 1 1 0-2.138zm0 9.357h9.362a1.069 1.069 0 0 1 0 2.138H5.82a1.069 1.069 0 0 1 0-2.137zM1.468 4.155V1.33c-.554.404-.926.606-1.118.606a.338.338 0 0 1-.244-.104A.327.327 0 0 1 0 1.59c0-.107.035-.184.105-.234.07-.05.192-.114.369-.192.264-.118.475-.243.633-.373.158-.13.298-.276.42-.438a3.94 3.94 0 0 1 .238-.298C1.802.019 1.872 0 1.975 0c.115 0 .208.042.277.127.07.085.105.202.105.351v3.556c0 .416-.15.624-.448.624a.421.421 0 0 1-.32-.127c-.08-.085-.121-.21-.121-.376zm-.283 6.664h1.572c.156 0 .275.03.358.091a.294.294 0 0 1 .123.25.323.323 0 0 1-.098.238c-.065.065-.164.097-.296.097H.629a.494.494 0 0 1-.353-.119.372.372 0 0 1-.126-.28c0-.068.027-.16.081-.273a.977.977 0 0 1 .178-.268c.267-.264.507-.49.722-.678.215-.188.368-.312.46-.371.165-.11.302-.222.412-.334.109-.112.192-.226.25-.344a.786.786 0 0 0 .085-.345.6.6 0 0 0-.341-.553.75.75 0 0 0-.345-.08c-.263 0-.47.11-.62.329-.02.029-.054.107-.101.235a.966.966 0 0 1-.16.295c-.059.069-.145.103-.26.103a.348.348 0 0 1-.25-.094.34.34 0 0 1-.099-.258c0-.132.031-.27.093-.413.063-.143.155-.273.279-.39.123-.116.28-.21.47-.282.189-.072.411-.107.666-.107.307 0 .569.045.786.137a1.182 1.182 0 0 1 .618.623 1.18 1.18 0 0 1-.096 1.083 2.03 2.03 0 0 1-.378.457c-.128.11-.344.282-.646.517-.302.235-.509.417-.621.547a1.637 1.637 0 0 0-.148.187z"/></svg>',
                    default: !0
                }],
                this._data = {
                    style: this.settings.find((function(e) {
                        return !0 === e.default
                    }
                    )).name,
                    items: []
                },
                this.data = n
            }
            return o(e, null, [{
                key: "isReadOnlySupported",
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
                        icon: '<svg width="17" height="13" viewBox="0 0 17 13" xmlns="http://www.w3.org/2000/svg"> <path d="M5.625 4.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm0-4.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm0 9.85h9.25a1.125 1.125 0 0 1 0 2.25h-9.25a1.125 1.125 0 0 1 0-2.25zm-4.5-5a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25zm0-4.85a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25zm0 9.85a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25z"/></svg>',
                        title: "List"
                    }
                }
            }]),
            o(e, [{
                key: "render",
                value: function() {
                    var e = this;
                    return this._elements.wrapper = this.makeMainTag(this._data.style),
                    this._data.items.length ? this._data.items.forEach((function(t) {
                        e._elements.wrapper.appendChild(e._make("li", e.CSS.item, {
                            innerHTML: t
                        }))
                    }
                    )) : this._elements.wrapper.appendChild(this._make("li", this.CSS.item)),
                    this.readOnly || this._elements.wrapper.addEventListener("keydown", (function(t) {
                        switch (t.keyCode) {
                        case 13:
                            e.getOutofList(t);
                            break;
                        case 8:
                            e.backspace(t)
                        }
                    }
                    ), !1),
                    this._elements.wrapper
                }
            }, {
                key: "save",
                value: function() {
                    return this.data
                }
            }, {
                key: "renderSettings",
                value: function() {
                    var e = this
                      , t = this._make("div", [this.CSS.settingsWrapper], {});
                    return this.settings.forEach((function(n) {
                        var r = e._make("div", e.CSS.settingsButton, {
                            innerHTML: n.icon
                        });
                        r.addEventListener("click", (function() {
                            e.toggleTune(n.name);
                            var t = r.parentNode.querySelectorAll("." + e.CSS.settingsButton);
                            Array.from(t).forEach((function(t) {
                                return t.classList.remove(e.CSS.settingsButtonActive)
                            }
                            )),
                            r.classList.toggle(e.CSS.settingsButtonActive)
                        }
                        )),
                        e.api.tooltip.onHover(r, n.title, {
                            placement: "top",
                            hidingDelay: 500
                        }),
                        e._data.style === n.name && r.classList.add(e.CSS.settingsButtonActive),
                        t.appendChild(r)
                    }
                    )),
                    t
                }
            }, {
                key: "onPaste",
                value: function(e) {
                    var t = e.detail.data;
                    this.data = this.pasteHandler(t)
                }
            }, {
                key: "makeMainTag",
                value: function(e) {
                    var t = "ordered" === e ? this.CSS.wrapperOrdered : this.CSS.wrapperUnordered
                      , n = "ordered" === e ? "ol" : "ul";
                    return this._make(n, [this.CSS.baseBlock, this.CSS.wrapper, t], {
                        contentEditable: !this.readOnly
                    })
                }
            }, {
                key: "toggleTune",
                value: function(e) {
                    for (var t = this.makeMainTag(e); this._elements.wrapper.hasChildNodes(); )
                        t.appendChild(this._elements.wrapper.firstChild);
                    this._elements.wrapper.replaceWith(t),
                    this._elements.wrapper = t,
                    this._data.style = e
                }
            }, {
                key: "_make",
                value: function(e) {
                    var t, n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null, i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, a = document.createElement(e);
                    Array.isArray(n) ? (t = a.classList).add.apply(t, r(n)) : n && a.classList.add(n);
                    for (var o in i)
                        a[o] = i[o];
                    return a
                }
            }, {
                key: "getOutofList",
                value: function(e) {
                    var t = this._elements.wrapper.querySelectorAll("." + this.CSS.item);
                    if (!(t.length < 2)) {
                        var n = t[t.length - 1]
                          , r = this.currentItem;
                        r !== n || n.textContent.trim().length || (r.parentElement.removeChild(r),
                        this.api.blocks.insert(),
                        this.api.caret.setToBlock(this.api.blocks.getCurrentBlockIndex()),
                        e.preventDefault(),
                        e.stopPropagation())
                    }
                }
            }, {
                key: "backspace",
                value: function(e) {
                    var t = this._elements.wrapper.querySelectorAll("." + this.CSS.item)
                      , n = t[0];
                    n && t.length < 2 && !n.innerHTML.replace("<br>", " ").trim() && e.preventDefault()
                }
            }, {
                key: "selectItem",
                value: function(e) {
                    e.preventDefault();
                    var t = window.getSelection()
                      , n = t.anchorNode.parentNode.closest("." + this.CSS.item)
                      , r = new Range;
                    r.selectNodeContents(n),
                    t.removeAllRanges(),
                    t.addRange(r)
                }
            }, {
                key: "pasteHandler",
                value: function(e) {
                    var t, n = e.tagName;
                    switch (n) {
                    case "OL":
                        t = "ordered";
                        break;
                    case "UL":
                    case "LI":
                        t = "unordered"
                    }
                    var r = {
                        style: t,
                        items: []
                    };
                    if ("LI" === n)
                        r.items = [e.innerHTML];
                    else {
                        var i = Array.from(e.querySelectorAll("LI"));
                        r.items = i.map((function(e) {
                            return e.innerHTML
                        }
                        )).filter((function(e) {
                            return !!e.trim()
                        }
                        ))
                    }
                    return r
                }
            }, {
                key: "CSS",
                get: function() {
                    return {
                        baseBlock: this.api.styles.block,
                        wrapper: "cdx-list",
                        wrapperOrdered: "cdx-list--ordered",
                        wrapperUnordered: "cdx-list--unordered",
                        item: "cdx-list__item",
                        settingsWrapper: "cdx-list-settings",
                        settingsButton: this.api.styles.settingsButton,
                        settingsButtonActive: this.api.styles.settingsButtonActive
                    }
                }
            }, {
                key: "data",
                set: function(e) {
                    e || (e = {}),
                    this._data.style = e.style || this.settings.find((function(e) {
                        return !0 === e.default
                    }
                    )).name,
                    this._data.items = e.items || [];
                    var t = this._elements.wrapper;
                    t && t.parentNode.replaceChild(this.render(), t)
                },
                get: function() {
                    this._data.items = [];
                    for (var e = this._elements.wrapper.querySelectorAll(".".concat(this.CSS.item)), t = 0; t < e.length; t++) {
                        e[t].innerHTML.replace("<br>", " ").trim() && this._data.items.push(e[t].innerHTML)
                    }
                    return this._data
                }
            }, {
                key: "currentItem",
                get: function() {
                    var e = window.getSelection().anchorNode;
                    return e.nodeType !== Node.ELEMENT_NODE && (e = e.parentNode),
                    e.closest(".".concat(this.CSS.item))
                }
            }], [{
                key: "conversionConfig",
                get: function() {
                    return {
                        export: function(e) {
                            return e.items.join(". ")
                        },
                        import: function(e) {
                            return {
                                items: [e],
                                style: "unordered"
                            }
                        }
                    }
                }
            }, {
                key: "sanitize",
                get: function() {
                    return {
                        style: {},
                        items: {
                            br: !0
                        }
                    }
                }
            }, {
                key: "pasteConfig",
                get: function() {
                    return {
                        tags: ["OL", "UL", "LI"]
                    }
                }
            }]),
            e
        }();
        e.exports = s
    }
    , function(e, t, n) {
        var r = n(2)
          , i = n(3);
        "string" == typeof (i = i.__esModule ? i.default : i) && (i = [[e.i, i, ""]]);
        var a = {
            insert: "head",
            singleton: !1
        };
        r(i, a);
        e.exports = i.locals || {}
    }
    , function(e, t, n) {
        "use strict";
        var r, i = function() {
            return void 0 === r && (r = Boolean(window && document && document.all && !window.atob)),
            r
        }, a = function() {
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
        }(), o = [];
        function s(e) {
            for (var t = -1, n = 0; n < o.length; n++)
                if (o[n].identifier === e) {
                    t = n;
                    break
                }
            return t
        }
        function c(e, t) {
            for (var n = {}, r = [], i = 0; i < e.length; i++) {
                var a = e[i]
                  , c = t.base ? a[0] + t.base : a[0]
                  , l = n[c] || 0
                  , u = "".concat(c, " ").concat(l);
                n[c] = l + 1;
                var d = s(u)
                  , f = {
                    css: a[1],
                    media: a[2],
                    sourceMap: a[3]
                };
                -1 !== d ? (o[d].references++,
                o[d].updater(f)) : o.push({
                    identifier: u,
                    updater: v(f, t),
                    references: 1
                }),
                r.push(u)
            }
            return r
        }
        function l(e) {
            var t = document.createElement("style")
              , r = e.attributes || {};
            if (void 0 === r.nonce) {
                var i = n.nc;
                i && (r.nonce = i)
            }
            if (Object.keys(r).forEach((function(e) {
                t.setAttribute(e, r[e])
            }
            )),
            "function" == typeof e.insert)
                e.insert(t);
            else {
                var o = a(e.insert || "head");
                if (!o)
                    throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                o.appendChild(t)
            }
            return t
        }
        var u, d = (u = [],
        function(e, t) {
            return u[e] = t,
            u.filter(Boolean).join("\n")
        }
        );
        function f(e, t, n, r) {
            var i = n ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
            if (e.styleSheet)
                e.styleSheet.cssText = d(t, i);
            else {
                var a = document.createTextNode(i)
                  , o = e.childNodes;
                o[t] && e.removeChild(o[t]),
                o.length ? e.insertBefore(a, o[t]) : e.appendChild(a)
            }
        }
        function p(e, t, n) {
            var r = n.css
              , i = n.media
              , a = n.sourceMap;
            if (i ? e.setAttribute("media", i) : e.removeAttribute("media"),
            a && btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a)))), " */")),
            e.styleSheet)
                e.styleSheet.cssText = r;
            else {
                for (; e.firstChild; )
                    e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(r))
            }
        }
        var h = null
          , m = 0;
        function v(e, t) {
            var n, r, i;
            if (t.singleton) {
                var a = m++;
                n = h || (h = l(t)),
                r = f.bind(null, n, a, !1),
                i = f.bind(null, n, a, !0)
            } else
                n = l(t),
                r = p.bind(null, n, t),
                i = function() {
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
                    i()
            }
        }
        e.exports = function(e, t) {
            (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = i());
            var n = c(e = e || [], t);
            return function(e) {
                if (e = e || [],
                "[object Array]" === Object.prototype.toString.call(e)) {
                    for (var r = 0; r < n.length; r++) {
                        var i = s(n[r]);
                        o[i].references--
                    }
                    for (var a = c(e, t), l = 0; l < n.length; l++) {
                        var u = s(n[l]);
                        0 === o[u].references && (o[u].updater(),
                        o.splice(u, 1))
                    }
                    n = a
                }
            }
        }
    }
    , function(e, t, n) {
        (t = n(4)(!1)).push([e.i, ".cdx-list {\n    margin: 0;\n    padding-left: 40px;\n    outline: none;\n}\n\n    .cdx-list__item {\n        padding: 5.5px 0 5.5px 3px;\n        line-height: 1.6em;\n    }\n\n    .cdx-list--unordered {\n        list-style: disc;\n    }\n\n    .cdx-list--ordered {\n        list-style: decimal;\n    }\n\n    .cdx-list-settings {\n        display: flex;\n    }\n\n    .cdx-list-settings .cdx-settings-button {\n            width: 50%;\n        }\n", ""]),
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
                            var i = (o = r,
                            s = btoa(unescape(encodeURIComponent(JSON.stringify(o)))),
                            c = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(s),
                            "/*# ".concat(c, " */"))
                              , a = r.sources.map((function(e) {
                                return "/*# sourceURL=".concat(r.sourceRoot || "").concat(e, " */")
                            }
                            ));
                            return [n].concat(a).concat([i]).join("\n")
                        }
                        var o, s, c;
                        return [n].join("\n")
                    }(t, e);
                    return t[2] ? "@media ".concat(t[2], " {").concat(n, "}") : n
                }
                )).join("")
            }
            ,
            t.i = function(e, n, r) {
                "string" == typeof e && (e = [[null, e, ""]]);
                var i = {};
                if (r)
                    for (var a = 0; a < this.length; a++) {
                        var o = this[a][0];
                        null != o && (i[o] = !0)
                    }
                for (var s = 0; s < e.length; s++) {
                    var c = [].concat(e[s]);
                    r && i[c[0]] || (n && (c[2] ? c[2] = "".concat(n, " and ").concat(c[2]) : c[2] = n),
                    t.push(c))
                }
            }
            ,
            t
        }
    }
    ])
}
));
