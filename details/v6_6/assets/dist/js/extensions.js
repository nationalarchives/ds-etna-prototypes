/*

//Sticky nav

document.addEventListener('DOMContentLoaded', function() {
    // When the event DOMContentLoaded occurs, it is safe to access the DOM

    // When the user scrolls the page, execute myFunction
    window.addEventListener('scroll', myFunctionForSticky);

    // Get the navbar
    var navbar = document.getElementById("sticky-container");

    // Get the offset position of the navbar
    var sticky = navbar.offsetHeight + 130;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunctionForSticky() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
});

*/


// GOV.UK FRONT-END

!function() {
    "use strict";
    function i(t, e) {
        if (window.NodeList.prototype.forEach)
            return t.forEach(e);
        for (var n = 0; n < t.length; n++)
            e.call(window, t[n], n, t)
    }
    function s() {
        for (var t = {}, e = 0; e < arguments.length; e++) {
            var n,
                o = function(t) {
                    var i = {},
                        s = function(t, e) {
                            for (var n in t) {
                                var o;
                                Object.prototype.hasOwnProperty.call(t, n) && (o = e ? e + "." + n : n, "object" == typeof (n = t[n]) ? s(n, o) : i[o] = n)
                            }
                        };
                    return s(t), i
                }(arguments[e]);
            for (n in o)
                Object.prototype.hasOwnProperty.call(o, n) && (t[n] = o[n])
        }
        return t
    }
    function r(t, e) {
        if (!t || "object" != typeof t)
            throw new Error('Provide a `configObject` of type "object".');
        if (!e || "string" != typeof e)
            throw new Error('Provide a `namespace` of type "string" to filter the `configObject` by.');
        var n,
            o = {};
        for (n in t) {
            var i = n.split(".");
            Object.prototype.hasOwnProperty.call(t, n) && i[0] === e && (1 < i.length && i.shift(), o[i.join(".")] = t[n])
        }
        return o
    }
    function a(t, e) {
        this.translations = t || {},
            this.locale = e && e.locale || document.documentElement.lang || "en"
    }
    function l(t) {
        var e,
            n = {};
        for (e in t)
            n[e] = function(t) {
                if ("string" != typeof t)
                    return t;
                var e = t.trim();
                return "true" === e || "false" !== e && (0 < e.length && isFinite(e) ? Number(e) : t)
            }(t[e]);
        return n
    }
    a.prototype.t = function(t, e) {
        if (!t)
            throw new Error("i18n: lookup key missing");
        if ((t = e && "undefined" != typeof e.count ? t + "." + this.getPluralSuffix(t, e.count) : t) in this.translations) {
            var n = this.translations[t];
            if (n.match(/%{(.\S+)}/)) {
                if (e)
                    return this.replacePlaceholders(n, e);
                throw new Error("i18n: cannot replace placeholders in string if no option data provided")
            }
            return n
        }
        return t
    },
        a.prototype.replacePlaceholders = function(t, n) {
            var o;
            return this.hasIntlNumberFormatSupport() && (o = new Intl.NumberFormat(this.locale)), t.replace(/%{(.\S+)}/g, function(t, e) {
                if (Object.prototype.hasOwnProperty.call(n, e))
                    return !1 === (e = n[e]) ? "" : "number" == typeof e && o ? o.format(e) : e;
                throw new Error("i18n: no data found to replace " + t + " placeholder in string")
            })
        },
        a.prototype.hasIntlPluralRulesSupport = function() {
            return Boolean(window.Intl && "PluralRules" in window.Intl && Intl.PluralRules.supportedLocalesOf(this.locale).length)
        },
        a.prototype.hasIntlNumberFormatSupport = function() {
            return Boolean(window.Intl && "NumberFormat" in window.Intl && Intl.NumberFormat.supportedLocalesOf(this.locale).length)
        },
        a.prototype.getPluralSuffix = function(t, e) {
            if (e = Number(e), !isFinite(e))
                return "other";
            e = this.hasIntlPluralRulesSupport() ? new Intl.PluralRules(this.locale).select(e) : this.selectPluralFormUsingFallbackRules(e);
            if (t + "." + e in this.translations)
                return e;
            if (t + ".other" in this.translations)
                return console && "warn" in console && console.warn('i18n: Missing plural form ".' + e + '" for "' + this.locale + '" locale. Falling back to ".other".'), "other";
            throw new Error('i18n: Plural form ".other" is required for "' + this.locale + '" locale')
        },
        a.prototype.selectPluralFormUsingFallbackRules = function(t) {
            t = Math.abs(Math.floor(t));
            var e = this.getPluralRulesForLocale();
            return e ? a.pluralRules[e](t) : "other"
        },
        a.prototype.getPluralRulesForLocale = function() {
            var t,
                e = this.locale,
                n = e.split("-")[0];
            for (t in a.pluralRulesMap)
                if (Object.prototype.hasOwnProperty.call(a.pluralRulesMap, t))
                    for (var o = a.pluralRulesMap[t], i = 0; i < o.length; i++)
                        if (o[i] === e || o[i] === n)
                            return t
        },
        a.pluralRulesMap = {
            arabic: ["ar"],
            chinese: ["my", "zh", "id", "ja", "jv", "ko", "ms", "th", "vi"],
            french: ["hy", "bn", "fr", "gu", "hi", "fa", "pa", "zu"],
            german: ["af", "sq", "az", "eu", "bg", "ca", "da", "nl", "en", "et", "fi", "ka", "de", "el", "hu", "lb", "no", "so", "sw", "sv", "ta", "te", "tr", "ur"],
            irish: ["ga"],
            russian: ["ru", "uk"],
            scottish: ["gd"],
            spanish: ["pt-PT", "it", "es"],
            welsh: ["cy"]
        },
        a.pluralRules = {
            arabic: function(t) {
                return 0 === t ? "zero" : 1 === t ? "one" : 2 === t ? "two" : 3 <= t % 100 && t % 100 <= 10 ? "few" : 11 <= t % 100 && t % 100 <= 99 ? "many" : "other"
            },
            chinese: function() {
                return "other"
            },
            french: function(t) {
                return 0 === t || 1 === t ? "one" : "other"
            },
            german: function(t) {
                return 1 === t ? "one" : "other"
            },
            irish: function(t) {
                return 1 === t ? "one" : 2 === t ? "two" : 3 <= t && t <= 6 ? "few" : 7 <= t && t <= 10 ? "many" : "other"
            },
            russian: function(t) {
                var t = t % 100,
                    e = t % 10;
                return 1 == e && 11 != t ? "one" : 2 <= e && e <= 4 && !(12 <= t && t <= 14) ? "few" : 0 == e || 5 <= e && e <= 9 || 11 <= t && t <= 14 ? "many" : "other"
            },
            scottish: function(t) {
                return 1 === t || 11 === t ? "one" : 2 === t || 12 === t ? "two" : 3 <= t && t <= 10 || 13 <= t && t <= 19 ? "few" : "other"
            },
            spanish: function(t) {
                return 1 === t ? "one" : t % 1e6 == 0 && 0 !== t ? "many" : "other"
            },
            welsh: function(t) {
                return 0 === t ? "zero" : 1 === t ? "one" : 2 === t ? "two" : 3 === t ? "few" : 6 === t ? "many" : "other"
            }
        },
        function(t) {
            var r,
                a,
                l,
                c;
            "defineProperty" in Object && function() {
                try {
                    return Object.defineProperty({}, "test", {
                        value: 42
                    }), !0
                } catch (t) {
                    return !1
                }
            }() || (r = Object.defineProperty, a = Object.prototype.hasOwnProperty("__defineGetter__"), l = "Getters & setters cannot be defined on this javascript engine", c = "A property cannot both have accessors and be writable or have a value", Object.defineProperty = function(t, e, n) {
                if (r && (t === window || t === document || t === Element.prototype || t instanceof Element))
                    return r(t, e, n);
                if (null === t || !(t instanceof Object || "object" == typeof t))
                    throw new TypeError("Object.defineProperty called on non-object");
                if (!(n instanceof Object))
                    throw new TypeError("Property description must be an object");
                var e = String(e),
                    o = "value" in n || "writable" in n,
                    i = "get" in n && typeof n.get,
                    s = "set" in n && typeof n.set;
                if (i) {
                    if ("function" !== i)
                        throw new TypeError("Getter must be a function");
                    if (!a)
                        throw new TypeError(l);
                    if (o)
                        throw new TypeError(c);
                    Object.__defineGetter__.call(t, e, n.get)
                } else
                    t[e] = n.value;
                if (s) {
                    if ("function" !== s)
                        throw new TypeError("Setter must be a function");
                    if (!a)
                        throw new TypeError(l);
                    if (o)
                        throw new TypeError(c);
                    Object.__defineSetter__.call(t, e, n.set)
                }
                return "value" in n && (t[e] = n.value), t
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "bind" in Function.prototype || Object.defineProperty(Function.prototype, "bind", {
                value: function(e) {
                    var t = Array,
                        n = Object,
                        o = n.prototype,
                        t = t.prototype,
                        i = function i() {},
                        s = o.toString,
                        r = "function" == typeof Symbol && "symbol" == typeof Symbol.toStringTag,
                        a = Function.prototype.toString,
                        l = function l(t) {
                            try {
                                return a.call(t), !0
                            } catch (e) {
                                return !1
                            }
                        },
                        c = t.slice,
                        u = t.concat,
                        d = t.push,
                        o = Math.max,
                        h = this;
                    if (!function y(t) {
                        if ("function" != typeof t)
                            return !1;
                        if (r)
                            return l(t);
                        t = s.call(t);
                        return "[object Function]" === t || "[object GeneratorFunction]" === t
                    }(h))
                        throw new TypeError("Function.prototype.bind called on incompatible " + h);
                    for (var p, f = c.call(arguments, 1), m = o(0, h.length - f.length), b = [], g = 0; g < m; g++)
                        d.call(b, "$" + g);
                    return p = Function("binder", "return function (" + b.join(",") + "){ return binder.apply(this, arguments); }")(function() {
                        var t;
                        return this instanceof p ? (t = h.apply(this, u.call(f, c.call(arguments))), n(t) === t ? t : this) : h.apply(e, u.call(f, c.call(arguments)))
                    }), h.prototype && (i.prototype = h.prototype, p.prototype = new i, i.prototype = null), p
                }
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(o) {
            var t,
                i,
                s;
            (!("DOMTokenList" in this) || "classList" in (t = document.createElement("x")) && (t.classList.toggle("x", !1) || t.className)) && ("DOMTokenList" in (t = this) && t.DOMTokenList && (!document.createElementNS || !document.createElementNS("http://www.w3.org/2000/svg", "svg") || document.createElementNS("http://www.w3.org/2000/svg", "svg").classList instanceof DOMTokenList) || (t.DOMTokenList = function() {
                var i = !0,
                    n = function(t, e, n, o) {
                        Object.defineProperty ? Object.defineProperty(t, e, {
                            configurable: !1 === i || !!o,
                            get: n
                        }) : t.__defineGetter__(e, n)
                    };
                try {
                    n({}, "support")
                } catch (t) {
                    i = !1
                }
                return function(i, s) {
                    var r = this,
                        a = [],
                        l = {},
                        c = 0,
                        t = 0,
                        e = function(t) {
                            n(r, t, function() {
                                return d(), a[t]
                            }, !1)
                        },
                        u = function() {
                            if (t <= c)
                                for (; t < c; ++t)
                                    e(t)
                        },
                        d = function() {
                            var t,
                                e,
                                n = arguments,
                                o = /\s+/;
                            if (n.length)
                                for (e = 0; e < n.length; ++e)
                                    if (o.test(n[e]))
                                        throw (t = new SyntaxError('String "' + n[e] + '" contains an invalid character')).code = 5, t.name = "InvalidCharacterError", t;
                            for ("" === (a = ("object" == typeof i[s] ? "" + i[s].baseVal : "" + i[s]).replace(/^\s+|\s+$/g, "").split(o))[0] && (a = []), l = {}, e = 0; e < a.length; ++e)
                                l[a[e]] = !0;
                            c = a.length,
                                u()
                        };
                    return d(), n(r, "length", function() {
                        return d(), c
                    }), r.toLocaleString = r.toString = function() {
                        return d(), a.join(" ")
                    }, r.item = function(t) {
                        return d(), a[t]
                    }, r.contains = function(t) {
                        return d(), !!l[t]
                    }, r.add = function() {
                        d.apply(r, t = arguments);
                        for (var t, e, n = 0, o = t.length; n < o; ++n)
                            l[e = t[n]] || (a.push(e), l[e] = !0);
                        c !== a.length && (c = a.length >>> 0, "object" == typeof i[s] ? i[s].baseVal = a.join(" ") : i[s] = a.join(" "), u())
                    }, r.remove = function() {
                        d.apply(r, t = arguments);
                        for (var t, e = {}, n = 0, o = []; n < t.length; ++n)
                            e[t[n]] = !0,
                                delete l[t[n]];
                        for (n = 0; n < a.length; ++n)
                            e[a[n]] || o.push(a[n]);
                        c = (a = o).length >>> 0,
                            "object" == typeof i[s] ? i[s].baseVal = a.join(" ") : i[s] = a.join(" "),
                            u()
                    }, r.toggle = function(t, e) {
                        return d.apply(r, [t]), o !== e ? e ? (r.add(t), !0) : (r.remove(t), !1) : l[t] ? (r.remove(t), !1) : (r.add(t), !0)
                    }, r
                }
            }()), "classList" in (t = document.createElement("span")) && (t.classList.toggle("x", !1), t.classList.contains("x") && (t.classList.constructor.prototype.toggle = function(t) {
                var e,
                    n = arguments[1];
                return n === o ? (e = !this.contains(t), this[e ? "add" : "remove"](t), e) : (this[(n = !!n) ? "add" : "remove"](t), n)
            })), "classList" in (t = document.createElement("span")) && (t.classList.add("a", "b"), t.classList.contains("b") || (i = t.classList.constructor.prototype.add, t.classList.constructor.prototype.add = function() {
                for (var t = arguments, e = arguments.length, n = 0; n < e; n++)
                    i.call(this, t[n])
            })), "classList" in (t = document.createElement("span")) && (t.classList.add("a"), t.classList.add("b"), t.classList.remove("a", "b"), t.classList.contains("b") && (s = t.classList.constructor.prototype.remove, t.classList.constructor.prototype.remove = function() {
                for (var t = arguments, e = arguments.length, n = 0; n < e; n++)
                    s.call(this, t[n])
            })))
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "Document" in this || "undefined" == typeof WorkerGlobalScope && "function" != typeof importScripts && (this.HTMLDocument ? this.Document = this.HTMLDocument : (this.Document = this.HTMLDocument = document.constructor = new Function("return function Document() {}")(), this.Document.prototype = document))
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            var e,
                n,
                a,
                l,
                c,
                u,
                o,
                i,
                s;
            function r() {
                return s-- || clearTimeout(i), !(!document.body || document.body.prototype || !/(complete|interactive)/.test(document.readyState)) && (c(document, !0), i && document.body.prototype && clearTimeout(i), !!document.body.prototype)
            }
            "Element" in this && "HTMLElement" in this || (window.Element && !window.HTMLElement ? window.HTMLElement = window.Element : (window.Element = window.HTMLElement = new Function("return function Element() {}")(), n = (e = document.appendChild(document.createElement("body"))).appendChild(document.createElement("iframe")).contentWindow.document, a = Element.prototype = n.appendChild(n.createElement("*")), l = {}, c = function(t, e) {
                var n,
                    o,
                    i,
                    s = t.childNodes || [],
                    r = -1;
                if (1 === t.nodeType && t.constructor !== Element)
                    for (n in t.constructor = Element, l)
                        o = l[n],
                            t[n] = o;
                for (; i = e && s[++r];)
                    c(i, e);
                return t
            }, u = document.getElementsByTagName("*"), o = document.createElement, s = 100, a.attachEvent("onpropertychange", function(t) {
                for (var e, n = t.propertyName, o = !l.hasOwnProperty(n), i = a[n], s = l[n], r = -1; e = u[++r];)
                    1 !== e.nodeType || !o && e[n] !== s || (e[n] = i);
                l[n] = i
            }), a.constructor = Element, a.hasAttribute || (a.hasAttribute = function(t) {
                return null !== this.getAttribute(t)
            }), r() || (document.onreadystatechange = r, i = setInterval(r, 25)), document.createElement = function(t) {
                t = o(String(t).toLowerCase());
                return c(t)
            }, document.removeChild(e)))
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            var e = "document" in this && "classList" in document.documentElement && "Element" in this && "classList" in Element.prototype && ((e = document.createElement("span")).classList.add("a", "b"), e.classList.contains("b"));
            if (!e) {
                var n = this,
                    u = !0,
                    d = function(t, e, n, o) {
                        Object.defineProperty ? Object.defineProperty(t, e, {
                            configurable: !1 === u || !!o,
                            get: n
                        }) : t.__defineGetter__(e, n)
                    };
                try {
                    d({}, "support")
                } catch (o) {
                    u = !1
                }
                var h = function(t, l, c) {
                    d(t.prototype, l, function() {
                        var t,
                            e = this,
                            n = "__defineGetter__DEFINE_PROPERTY" + l;
                        if (!e[n]) {
                            if (!(e[n] = !0) === u) {
                                for (var o, i = h.mirror || document.createElement("div"), s = i.childNodes, r = s.length, a = 0; a < r; ++a)
                                    if (s[a]._R === e) {
                                        o = s[a];
                                        break
                                    }
                                o = o || i.appendChild(document.createElement("div")),
                                    t = DOMTokenList.call(o, e, c)
                            } else
                                t = new DOMTokenList(e, c);
                            d(e, l, function() {
                                return t
                            }),
                                delete e[n]
                        }
                        return t
                    }, !0)
                };
                h(n.Element, "classList", "className"),
                    h(n.HTMLElement, "classList", "className"),
                    h(n.HTMLLinkElement, "relList", "rel"),
                    h(n.HTMLAnchorElement, "relList", "rel"),
                    h(n.HTMLAreaElement, "relList", "rel")
            }
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "trim" in String.prototype || (String.prototype.trim = function() {
                return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            !function() {
                if (!document.documentElement.dataset)
                    return !1;
                var t = document.createElement("div");
                return t.setAttribute("data-a-b", "c"), t.dataset && "c" == t.dataset.aB
            }() && Object.defineProperty(Element.prototype, "dataset", {
                get: function() {
                    for (var t = this.attributes, e = {}, n = 0; n < t.length; n++) {
                        var o,
                            i,
                            s = t[n];
                        s && s.name && /^data-\w[.\w-]*$/.test(s.name) && (o = s.name, s = s.value, i = o.substr(5).replace(/-./g, function(t) {
                            return t.charAt(1).toUpperCase()
                        }), "__defineGetter__" in Object.prototype && "__defineSetter__" in Object.prototype ? Object.defineProperty(e, i, {
                            enumerable: !0,
                            get: function() {
                                return this.value
                            }.bind({
                                value: s || ""
                            }),
                            set: function(t, e) {
                                void 0 !== e ? this.setAttribute(t, e) : this.removeAttribute(t)
                            }.bind(this, o)
                        }) : e[i] = s)
                    }
                    return e
                }
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {});
    var n = {
        hideAllSections: "Hide all sections",
        hideSection: "Hide",
        hideSectionAriaLabel: "Hide this section",
        showAllSections: "Show all sections",
        showSection: "Show",
        showSectionAriaLabel: "Show this section"
    };
    function e(t, e) {
        this.$module = t,
            this.$sections = t.querySelectorAll(".govuk-accordion__section"),
            this.browserSupportsSessionStorage = o.checkForSessionStorage(),
            this.config = s({
                i18n: n
            }, e || {}, l(t.dataset)),
            this.i18n = new a(r(this.config, "i18n")),
            this.controlsClass = "govuk-accordion__controls",
            this.showAllClass = "govuk-accordion__show-all",
            this.showAllTextClass = "govuk-accordion__show-all-text",
            this.sectionExpandedClass = "govuk-accordion__section--expanded",
            this.sectionButtonClass = "govuk-accordion__section-button",
            this.sectionHeaderClass = "govuk-accordion__section-header",
            this.sectionHeadingClass = "govuk-accordion__section-heading",
            this.sectionHeadingTextClass = "govuk-accordion__section-heading-text",
            this.sectionHeadingTextFocusClass = "govuk-accordion__section-heading-text-focus",
            this.sectionShowHideToggleClass = "govuk-accordion__section-toggle",
            this.sectionShowHideToggleFocusClass = "govuk-accordion__section-toggle-focus",
            this.sectionShowHideTextClass = "govuk-accordion__section-toggle-text",
            this.upChevronIconClass = "govuk-accordion-nav__chevron",
            this.downChevronIconClass = "govuk-accordion-nav__chevron--down",
            this.sectionSummaryClass = "govuk-accordion__section-summary",
            this.sectionSummaryFocusClass = "govuk-accordion__section-summary-focus"
    }
    e.prototype.init = function() {
        var t;
        this.$module && (this.initControls(), this.initSectionHeaders(), t = this.checkIfAllSectionsOpen(), this.updateShowAllButton(t))
    },
        e.prototype.initControls = function() {
            this.$showAllButton = document.createElement("button"),
                this.$showAllButton.setAttribute("type", "button"),
                this.$showAllButton.setAttribute("class", this.showAllClass),
                this.$showAllButton.setAttribute("aria-expanded", "false");
            var t = document.createElement("span"),
                t = (t.classList.add(this.upChevronIconClass), this.$showAllButton.appendChild(t), document.createElement("div")),
                t = (t.setAttribute("class", this.controlsClass), t.appendChild(this.$showAllButton), this.$module.insertBefore(t, this.$module.firstChild), document.createElement("span"));
            t.classList.add(this.showAllTextClass),
                this.$showAllButton.appendChild(t),
                this.$showAllButton.addEventListener("click", this.onShowOrHideAllToggle.bind(this))
        },
        e.prototype.initSectionHeaders = function() {
            i(this.$sections, function(t, e) {
                var n = t.querySelector("." + this.sectionHeaderClass);
                this.constructHeaderMarkup(n, e),
                    this.setExpanded(this.isExpanded(t), t),
                    n.addEventListener("click", this.onSectionToggle.bind(this, t)),
                    this.setInitialState(t)
            }.bind(this))
        },
        e.prototype.constructHeaderMarkup = function(t, e) {
            var n = t.querySelector("." + this.sectionButtonClass),
                o = t.querySelector("." + this.sectionHeadingClass),
                i = t.querySelector("." + this.sectionSummaryClass),
                s = document.createElement("button");
            s.setAttribute("type", "button"),
                s.setAttribute("aria-controls", this.$module.id + "-content-" + (e + 1));
            for (var r = 0; r < n.attributes.length; r++) {
                var a = n.attributes.item(r);
                "id" !== a.nodeName && s.setAttribute(a.nodeName, a.nodeValue)
            }
            var t = document.createElement("span"),
                e = (t.classList.add(this.sectionHeadingTextClass), t.id = n.id, document.createElement("span")),
                e = (e.classList.add(this.sectionHeadingTextFocusClass), t.appendChild(e), e.innerHTML = n.innerHTML, document.createElement("span")),
                l = (e.classList.add(this.sectionShowHideToggleClass), e.setAttribute("data-nosnippet", ""), document.createElement("span")),
                c = (l.classList.add(this.sectionShowHideToggleFocusClass), e.appendChild(l), document.createElement("span")),
                u = document.createElement("span");
            if (u.classList.add(this.upChevronIconClass), l.appendChild(u), c.classList.add(this.sectionShowHideTextClass), l.appendChild(c), s.appendChild(t), s.appendChild(this.getButtonPunctuationEl()), null != i) {
                var d = document.createElement("span"),
                    u = document.createElement("span");
                u.classList.add(this.sectionSummaryFocusClass),
                    d.appendChild(u);
                for (var h = 0, p = i.attributes.length; h < p; ++h) {
                    var f = i.attributes.item(h).nodeName,
                        m = i.attributes.item(h).nodeValue;
                    d.setAttribute(f, m)
                }
                u.innerHTML = i.innerHTML,
                    i.parentNode.replaceChild(d, i),
                    s.appendChild(d),
                    s.appendChild(this.getButtonPunctuationEl())
            }
            s.appendChild(e),
                o.removeChild(n),
                o.appendChild(s)
        },
        e.prototype.onSectionToggle = function(t) {
            var e = this.isExpanded(t);
            this.setExpanded(!e, t),
                this.storeState(t)
        },
        e.prototype.onShowOrHideAllToggle = function() {
            var e = this,
                t = this.$sections,
                n = !this.checkIfAllSectionsOpen();
            i(t, function(t) {
                e.setExpanded(n, t),
                    e.storeState(t)
            }),
                e.updateShowAllButton(n)
        },
        e.prototype.setExpanded = function(t, e) {
            var n = e.querySelector("." + this.upChevronIconClass),
                o = e.querySelector("." + this.sectionShowHideTextClass),
                i = e.querySelector("." + this.sectionButtonClass),
                s = t ? this.i18n.t("hideSection") : this.i18n.t("showSection");
            o.innerText = s,
                i.setAttribute("aria-expanded", t);
            o = [e.querySelector("." + this.sectionHeadingTextClass).innerText.trim()],
                s = e.querySelector("." + this.sectionSummaryClass),
            s && o.push(s.innerText.trim()),
                s = t ? this.i18n.t("hideSectionAriaLabel") : this.i18n.t("showSectionAriaLabel"),
                o.push(s),
                i.setAttribute("aria-label", o.join(" , ")),
                t ? (e.classList.add(this.sectionExpandedClass), n.classList.remove(this.downChevronIconClass)) : (e.classList.remove(this.sectionExpandedClass), n.classList.add(this.downChevronIconClass)),
                s = this.checkIfAllSectionsOpen();
            this.updateShowAllButton(s)
        },
        e.prototype.isExpanded = function(t) {
            return t.classList.contains(this.sectionExpandedClass)
        },
        e.prototype.checkIfAllSectionsOpen = function() {
            return this.$sections.length === this.$module.querySelectorAll("." + this.sectionExpandedClass).length
        },
        e.prototype.updateShowAllButton = function(t) {
            var e = this.$showAllButton.querySelector("." + this.upChevronIconClass),
                n = this.$showAllButton.querySelector("." + this.showAllTextClass),
                o = t ? this.i18n.t("hideAllSections") : this.i18n.t("showAllSections");
            this.$showAllButton.setAttribute("aria-expanded", t),
                n.innerText = o,
                t ? e.classList.remove(this.downChevronIconClass) : e.classList.add(this.downChevronIconClass)
        };
    var o = {
        checkForSessionStorage: function() {
            var t,
                e = "this is the test string";
            try {
                return window.sessionStorage.setItem(e, e), t = window.sessionStorage.getItem(e) === e.toString(), window.sessionStorage.removeItem(e), t
            } catch (n) {
                return !1
            }
        }
    };
    e.prototype.storeState = function(t) {
        var e;
        this.browserSupportsSessionStorage && (t = t.querySelector("." + this.sectionButtonClass)) && (e = t.getAttribute("aria-controls"), t = t.getAttribute("aria-expanded"), e && t && window.sessionStorage.setItem(e, t))
    },
        e.prototype.setInitialState = function(t) {
            var e;
            this.browserSupportsSessionStorage && (e = t.querySelector("." + this.sectionButtonClass)) && null !== (e = (e = e.getAttribute("aria-controls")) ? window.sessionStorage.getItem(e) : null) && this.setExpanded("true" === e, t)
        },
        e.prototype.getButtonPunctuationEl = function() {
            var t = document.createElement("span");
            return t.classList.add("govuk-visually-hidden", "govuk-accordion__section-heading-divider"), t.innerHTML = ", ", t
        },
        function(t) {
            "Window" in this || "undefined" == typeof WorkerGlobalScope && "function" != typeof importScripts && !function(t) {
                t.constructor ? t.Window = t.constructor : (t.Window = t.constructor = new Function("return function Window() {}")()).prototype = this
            }(this)
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(s) {
            var t,
                n;
            function a(t, e) {
                for (var n = -1, o = t.length; ++n < o;)
                    if (n in t && t[n] === e)
                        return n;
                return -1
            }
            !function(t) {
                if (!("Event" in t))
                    return !1;
                if ("function" == typeof t.Event)
                    return !0;
                try {
                    return new Event("click"), !0
                } catch (e) {
                    return !1
                }
            }(this) && (n = {
                click: 1,
                dblclick: 1,
                keyup: 1,
                keypress: 1,
                keydown: 1,
                mousedown: 1,
                mouseup: 1,
                mousemove: 1,
                mouseover: 1,
                mouseenter: 1,
                mouseleave: 1,
                mouseout: 1,
                storage: 1,
                storagecommit: 1,
                textinput: 1
            }, "undefined" != typeof document && "undefined" != typeof window && (t = window.Event && window.Event.prototype || null, window.Event = Window.prototype.Event = function Event(t, e) {
                if (t)
                    return "createEvent" in document ? (n = document.createEvent("Event"), o = !(!e || e.bubbles === s) && e.bubbles, i = !(!e || e.cancelable === s) && e.cancelable, n.initEvent(t, o, i)) : ((n = document.createEventObject()).type = t, n.bubbles = !(!e || e.bubbles === s) && e.bubbles, n.cancelable = !(!e || e.cancelable === s) && e.cancelable), n;
                var n,
                    o,
                    i;
                throw new Error("Not enough arguments")
            }, t && Object.defineProperty(window.Event, "prototype", {
                configurable: !1,
                enumerable: !1,
                writable: !0,
                value: t
            }), "createEvent" in document || (window.addEventListener = Window.prototype.addEventListener = Document.prototype.addEventListener = Element.prototype.addEventListener = function() {
                var r = this,
                    t = arguments[0],
                    e = arguments[1];
                if (r === window && t in n)
                    throw new Error("In IE8 the event: " + t + " is not available on the window object. Please see https://github.com/Financial-Times/polyfill-service/issues/317 for more information.");
                r._events || (r._events = {}),
                r._events[t] || (r._events[t] = function(t) {
                    var e,
                        n = r._events[t.type].list,
                        o = n.slice(),
                        i = -1,
                        s = o.length;
                    for (t.preventDefault = function() {
                        !1 !== t.cancelable && (t.returnValue = !1)
                    }, t.stopPropagation = function() {
                        t.cancelBubble = !0
                    }, t.stopImmediatePropagation = function() {
                        t.cancelBubble = !0,
                            t.cancelImmediate = !0
                    }, t.currentTarget = r, t.relatedTarget = t.fromElement || null, t.target = t.target || t.srcElement || r, t.timeStamp = (new Date).getTime(), t.clientX && (t.pageX = t.clientX + document.documentElement.scrollLeft, t.pageY = t.clientY + document.documentElement.scrollTop); ++i < s && !t.cancelImmediate;)
                        i in o && -1 !== a(n, e = o[i]) && "function" == typeof e && e.call(r, t)
                }, r._events[t].list = [], r.attachEvent && r.attachEvent("on" + t, r._events[t])),
                    r._events[t].list.push(e)
            }, window.removeEventListener = Window.prototype.removeEventListener = Document.prototype.removeEventListener = Element.prototype.removeEventListener = function() {
                var t,
                    e = this,
                    n = arguments[0];
                e._events && e._events[n] && e._events[n].list && -1 !== (t = a(e._events[n].list, arguments[1])) && (e._events[n].list.splice(t, 1), e._events[n].list.length || (e.detachEvent && e.detachEvent("on" + n, e._events[n]), delete e._events[n]))
            }, window.dispatchEvent = Window.prototype.dispatchEvent = Document.prototype.dispatchEvent = Element.prototype.dispatchEvent = function(t) {
                if (!arguments.length)
                    throw new Error("Not enough arguments");
                if (!t || "string" != typeof t.type)
                    throw new Error("DOM Events Exception 0");
                var e,
                    n = this,
                    o = t.type;
                try {
                    t.bubbles || (t.cancelBubble = !0, e = function(t) {
                        t.cancelBubble = !0,
                            (n || window).detachEvent("on" + o, e)
                    }, this.attachEvent("on" + o, e)),
                        this.fireEvent("on" + o, t)
                } catch (i) {
                    for (t.target = n; "_events" in (t.currentTarget = n) && "function" == typeof n._events[o] && n._events[o].call(n, t), "function" == typeof n["on" + o] && n["on" + o].call(n, t), (n = 9 === n.nodeType ? n.parentWindow : n.parentNode) && !t.cancelBubble;)
                        ;
                }
                return !0
            }, document.attachEvent("onreadystatechange", function() {
                "complete" === document.readyState && document.dispatchEvent(new Event("DOMContentLoaded", {
                    bubbles: !0
                }))
            }))))
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {});
    function c(t, e) {
        if (!t)
            return this;
        this.$module = t,
            this.debounceFormSubmitTimer = null;
        this.config = s({
            preventDoubleClick: !1
        }, e || {}, l(t.dataset))
    }
    c.prototype.init = function() {
        this.$module && (this.$module.addEventListener("keydown", this.handleKeyDown), this.$module.addEventListener("click", this.debounce.bind(this)))
    },
        c.prototype.handleKeyDown = function(t) {
            var e = t.target;
            "button" === e.getAttribute("role") && 32 === t.keyCode && (t.preventDefault(), e.click())
        },
        c.prototype.debounce = function(t) {
            if (this.config.preventDoubleClick)
                return this.debounceFormSubmitTimer ? (t.preventDefault(), !1) : void (this.debounceFormSubmitTimer = setTimeout(function() {
                    this.debounceFormSubmitTimer = null
                }.bind(this), 1e3))
        };
    function u(t) {
        this.$module = t
    }
    u.prototype.init = function() {
        this.$module && "boolean" != typeof this.$module.open && this.polyfillDetails()
    },
        u.prototype.polyfillDetails = function() {
            var n,
                t = this.$module,
                e = this.$summary = t.getElementsByTagName("summary").item(0),
                o = this.$content = t.getElementsByTagName("div").item(0);
            e && o && (o.id || (o.id = "details-content-" + (n = (new Date).getTime(), "undefined" != typeof window.performance && "function" == typeof window.performance.now && (n += window.performance.now()), "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(t) {
                var e = (n + 16 * Math.random()) % 16 | 0;
                return n = Math.floor(n / 16), ("x" === t ? e : 3 & e | 8).toString(16)
            }))), t.setAttribute("role", "group"), e.setAttribute("role", "button"), e.setAttribute("aria-controls", o.id), e.tabIndex = 0, this.$module.hasAttribute("open") ? e.setAttribute("aria-expanded", "true") : (e.setAttribute("aria-expanded", "false"), o.style.display = "none"), this.polyfillHandleInputs(e, this.polyfillSetAttributes.bind(this)))
        },
        u.prototype.polyfillSetAttributes = function() {
            return this.$module.hasAttribute("open") ? (this.$module.removeAttribute("open"), this.$summary.setAttribute("aria-expanded", "false"), this.$content.style.display = "none") : (this.$module.setAttribute("open", "open"), this.$summary.setAttribute("aria-expanded", "true"), this.$content.style.display = ""), !0
        },
        u.prototype.polyfillHandleInputs = function(t, n) {
            t.addEventListener("keypress", function(t) {
                var e = t.target;
                13 !== t.keyCode && 32 !== t.keyCode || "summary" === e.nodeName.toLowerCase() && (t.preventDefault(), e.click ? e.click() : n(t))
            }),
                t.addEventListener("keyup", function(t) {
                    var e = t.target;
                    32 === t.keyCode && "summary" === e.nodeName.toLowerCase() && t.preventDefault()
                }),
                t.addEventListener("click", n)
        },
        function(t) {
            "Date" in self && "now" in self.Date && "getTime" in self.Date.prototype || (Date.now = function() {
                return (new Date).getTime()
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "document" in this && "matches" in document.documentElement || (Element.prototype.matches = Element.prototype.webkitMatchesSelector || Element.prototype.oMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.mozMatchesSelector || function(t) {
                for (var e = (this.document || this.ownerDocument).querySelectorAll(t), n = 0; e[n] && e[n] !== this;)
                    ++n;
                return !!e[n]
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "document" in this && "closest" in document.documentElement || (Element.prototype.closest = function(t) {
                for (var e = this; e;) {
                    if (e.matches(t))
                        return e;
                    e = "SVGElement" in window && e instanceof SVGElement ? e.parentNode : e.parentElement
                }
                return null
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {});
    var d,
        t,
        h,
        p = {
            charactersUnderLimit: {
                one: "You have %{count} character remaining",
                other: "You have %{count} characters remaining"
            },
            charactersAtLimit: "You have 0 characters remaining",
            charactersOverLimit: {
                one: "You have %{count} character too many",
                other: "You have %{count} characters too many"
            },
            wordsUnderLimit: {
                one: "You have %{count} word remaining",
                other: "You have %{count} words remaining"
            },
            wordsAtLimit: "You have 0 words remaining",
            wordsOverLimit: {
                one: "You have %{count} word too many",
                other: "You have %{count} words too many"
            },
            textareaDescription: {
                other: ""
            }
        };
    function f(t, e) {
        if (!t)
            return this;
        var n = {
                threshold: 0,
                i18n: p
            },
            o = l(t.dataset),
            i = {};
        if (("maxwords" in o || "maxlength" in o) && (i = {
            maxlength: !1,
            maxwords: !1
        }), this.config = s(n, e || {}, i, o), this.i18n = new a(r(this.config, "i18n"), {
            locale: function(t, e) {
                if (t = t.closest("[" + e + "]"))
                    return t.getAttribute(e)
            }(t, "lang")
        }), this.config.maxwords)
            this.maxLength = this.config.maxwords;
        else {
            if (!this.config.maxlength)
                return;
            this.maxLength = this.config.maxlength
        }
        this.$module = t,
            this.$textarea = t.querySelector(".govuk-js-character-count"),
            this.$visibleCountMessage = null,
            this.$screenReaderCountMessage = null,
            this.lastInputTimestamp = null
    }
    function m(t) {
        this.$module = t,
            this.$inputs = t.querySelectorAll('input[type="checkbox"]')
    }
    function b(t, e) {
        if (!t)
            return this;
        this.$module = t;
        this.config = s({
            disableAutoFocus: !1
        }, e || {}, l(t.dataset))
    }
    function g(t, e) {
        this.$module = t;
        this.config = s({
            disableAutoFocus: !1
        }, e || {}, l(t.dataset))
    }
    function y(t) {
        this.$module = t,
            this.$menuButton = t && t.querySelector(".govuk-js-header-toggle"),
            this.$menu = this.$menuButton && t.querySelector("#" + this.$menuButton.getAttribute("aria-controls")),
            this.menuIsOpen = !1,
            this.mql = null
    }
    function v(t) {
        this.$module = t,
            this.$inputs = t.querySelectorAll('input[type="radio"]')
    }
    function w(t) {
        this.$module = t,
            this.$linkedElement = null,
            this.linkedElementListener = !1
    }
    function E(t) {
        this.$module = t,
            this.$tabs = t.querySelectorAll(".govuk-tabs__tab"),
            this.keys = {
                left: 37,
                right: 39,
                up: 38,
                down: 40
            },
            this.jsHiddenClass = "govuk-tabs__panel--hidden"
    }
    f.prototype.init = function() {
        var t,
            e,
            n;
        this.$textarea && (t = this.$textarea, (e = document.getElementById(t.id + "-info")).innerText.match(/^\s*$/) && (e.innerText = this.i18n.t("textareaDescription", {
            count: this.maxLength
        })), t.insertAdjacentElement("afterend", e), (n = document.createElement("div")).className = "govuk-character-count__sr-status govuk-visually-hidden", n.setAttribute("aria-live", "polite"), this.$screenReaderCountMessage = n, e.insertAdjacentElement("afterend", n), (n = document.createElement("div")).className = e.className, n.classList.add("govuk-character-count__status"), n.setAttribute("aria-hidden", "true"), this.$visibleCountMessage = n, e.insertAdjacentElement("afterend", n), e.classList.add("govuk-visually-hidden"), t.removeAttribute("maxlength"), this.bindChangeEvents(), "onpageshow" in window ? window.addEventListener("pageshow", this.updateCountMessage.bind(this)) : window.addEventListener("DOMContentLoaded", this.updateCountMessage.bind(this)), this.updateCountMessage())
    },
        f.prototype.bindChangeEvents = function() {
            var t = this.$textarea;
            t.addEventListener("keyup", this.handleKeyUp.bind(this)),
                t.addEventListener("focus", this.handleFocus.bind(this)),
                t.addEventListener("blur", this.handleBlur.bind(this))
        },
        f.prototype.handleKeyUp = function() {
            this.updateVisibleCountMessage(),
                this.lastInputTimestamp = Date.now()
        },
        f.prototype.handleFocus = function() {
            this.valueChecker = setInterval(function() {
                (!this.lastInputTimestamp || Date.now() - 500 >= this.lastInputTimestamp) && this.updateIfValueChanged()
            }.bind(this), 1e3)
        },
        f.prototype.handleBlur = function() {
            clearInterval(this.valueChecker)
        },
        f.prototype.updateIfValueChanged = function() {
            this.$textarea.oldValue || (this.$textarea.oldValue = ""),
            this.$textarea.value !== this.$textarea.oldValue && (this.$textarea.oldValue = this.$textarea.value, this.updateCountMessage())
        },
        f.prototype.updateCountMessage = function() {
            this.updateVisibleCountMessage(),
                this.updateScreenReaderCountMessage()
        },
        f.prototype.updateVisibleCountMessage = function() {
            var t = this.$textarea,
                e = this.$visibleCountMessage,
                n = this.maxLength - this.count(t.value);
            this.isOverThreshold() ? e.classList.remove("govuk-character-count__message--disabled") : e.classList.add("govuk-character-count__message--disabled"),
                n < 0 ? (t.classList.add("govuk-textarea--error"), e.classList.remove("govuk-hint"), e.classList.add("govuk-error-message")) : (t.classList.remove("govuk-textarea--error"), e.classList.remove("govuk-error-message"), e.classList.add("govuk-hint")),
                e.innerText = this.getCountMessage()
        },
        f.prototype.updateScreenReaderCountMessage = function() {
            var t = this.$screenReaderCountMessage;
            this.isOverThreshold() ? t.removeAttribute("aria-hidden") : t.setAttribute("aria-hidden", !0),
                t.innerText = this.getCountMessage()
        },
        f.prototype.count = function(t) {
            return (this.config.maxwords ? t.match(/\S+/g) || [] : t).length
        },
        f.prototype.getCountMessage = function() {
            var t = this.maxLength - this.count(this.$textarea.value),
                e = this.config.maxwords ? "words" : "characters";
            return this.formatCountMessage(t, e)
        },
        f.prototype.formatCountMessage = function(t, e) {
            return 0 === t ? this.i18n.t(e + "AtLimit") : this.i18n.t(e + (t < 0 ? "OverLimit" : "UnderLimit"), {
                count: Math.abs(t)
            })
        },
        f.prototype.isOverThreshold = function() {
            if (!this.config.threshold)
                return !0;
            var t = this.$textarea,
                t = this.count(t.value);
            return this.maxLength * this.config.threshold / 100 <= t
        },
        m.prototype.init = function() {
            var t = this.$module;
            i(this.$inputs, function(t) {
                var e = t.getAttribute("data-aria-controls");
                e && document.getElementById(e) && (t.setAttribute("aria-controls", e), t.removeAttribute("data-aria-controls"))
            }),
                "onpageshow" in window ? window.addEventListener("pageshow", this.syncAllConditionalReveals.bind(this)) : window.addEventListener("DOMContentLoaded", this.syncAllConditionalReveals.bind(this)),
                this.syncAllConditionalReveals(),
                t.addEventListener("click", this.handleClick.bind(this))
        },
        m.prototype.syncAllConditionalReveals = function() {
            i(this.$inputs, this.syncConditionalRevealWithInputState.bind(this))
        },
        m.prototype.syncConditionalRevealWithInputState = function(t) {
            var e,
                n = document.getElementById(t.getAttribute("aria-controls"));
            n && n.classList.contains("govuk-checkboxes__conditional") && (e = t.checked, t.setAttribute("aria-expanded", e), n.classList.toggle("govuk-checkboxes__conditional--hidden", !e))
        },
        m.prototype.unCheckAllInputsExcept = function(e) {
            i(document.querySelectorAll('input[type="checkbox"][name="' + e.name + '"]'), function(t) {
                e.form === t.form && t !== e && (t.checked = !1, this.syncConditionalRevealWithInputState(t))
            }.bind(this))
        },
        m.prototype.unCheckExclusiveInputs = function(e) {
            i(document.querySelectorAll('input[data-behaviour="exclusive"][type="checkbox"][name="' + e.name + '"]'), function(t) {
                e.form === t.form && (t.checked = !1, this.syncConditionalRevealWithInputState(t))
            }.bind(this))
        },
        m.prototype.handleClick = function(t) {
            t = t.target;
            "checkbox" === t.type && (t.getAttribute("aria-controls") && this.syncConditionalRevealWithInputState(t), t.checked && ("exclusive" === t.getAttribute("data-behaviour") ? this.unCheckAllInputsExcept(t) : this.unCheckExclusiveInputs(t)))
        },
        b.prototype.init = function() {
            var t = this.$module;
            t && (this.setFocus(), t.addEventListener("click", this.handleClick.bind(this)))
        },
        b.prototype.setFocus = function() {
            var t = this.$module;
            this.config.disableAutoFocus || (t.setAttribute("tabindex", "-1"), t.addEventListener("blur", function() {
                t.removeAttribute("tabindex")
            }), t.focus())
        },
        b.prototype.handleClick = function(t) {
            var e = t.target;
            this.focusTarget(e) && t.preventDefault()
        },
        b.prototype.focusTarget = function(t) {
            if ("A" !== t.tagName || !1 === t.href)
                return !1;
            t = this.getFragmentFromUrl(t.href),
                t = document.getElementById(t);
            if (!t)
                return !1;
            var e = this.getAssociatedLegendOrLabel(t);
            return !!e && (e.scrollIntoView(), t.focus({
                preventScroll: !0
            }), !0)
        },
        b.prototype.getFragmentFromUrl = function(t) {
            return -1 !== t.indexOf("#") && t.split("#").pop()
        },
        b.prototype.getAssociatedLegendOrLabel = function(t) {
            var e = t.closest("fieldset");
            if (e) {
                e = e.getElementsByTagName("legend");
                if (e.length) {
                    e = e[0];
                    if ("checkbox" === t.type || "radio" === t.type)
                        return e;
                    var n = e.getBoundingClientRect().top,
                        o = t.getBoundingClientRect();
                    if (o.height && window.innerHeight)
                        if (o.top + o.height - n < window.innerHeight / 2)
                            return e
                }
            }
            return document.querySelector("label[for='" + t.getAttribute("id") + "']") || t.closest("label")
        },
        g.prototype.init = function() {
            this.$module && this.setFocus()
        },
        g.prototype.setFocus = function() {
            var t = this.$module;
            this.config.disableAutoFocus || "alert" === t.getAttribute("role") && (t.getAttribute("tabindex") || (t.setAttribute("tabindex", "-1"), t.addEventListener("blur", function() {
                t.removeAttribute("tabindex")
            })), t.focus())
        },
        y.prototype.init = function() {
            this.$module && this.$menuButton && this.$menu && ("matchMedia" in window ? (this.mql = window.matchMedia("(min-width: 48.0625em)"), "addEventListener" in this.mql ? this.mql.addEventListener("change", this.syncState.bind(this)) : this.mql.addListener(this.syncState.bind(this)), this.syncState(), this.$menuButton.addEventListener("click", this.handleMenuButtonClick.bind(this))) : this.$menuButton.setAttribute("hidden", ""))
        },
        y.prototype.syncState = function() {
            this.mql.matches ? (this.$menu.removeAttribute("hidden"), this.$menuButton.setAttribute("hidden", "")) : (this.$menuButton.removeAttribute("hidden"), this.$menuButton.setAttribute("aria-expanded", this.menuIsOpen), this.menuIsOpen ? this.$menu.removeAttribute("hidden") : this.$menu.setAttribute("hidden", ""))
        },
        y.prototype.handleMenuButtonClick = function() {
            this.menuIsOpen = !this.menuIsOpen,
                this.syncState()
        },
        v.prototype.init = function() {
            var t = this.$module;
            i(this.$inputs, function(t) {
                var e = t.getAttribute("data-aria-controls");
                e && document.getElementById(e) && (t.setAttribute("aria-controls", e), t.removeAttribute("data-aria-controls"))
            }),
                "onpageshow" in window ? window.addEventListener("pageshow", this.syncAllConditionalReveals.bind(this)) : window.addEventListener("DOMContentLoaded", this.syncAllConditionalReveals.bind(this)),
                this.syncAllConditionalReveals(),
                t.addEventListener("click", this.handleClick.bind(this))
        },
        v.prototype.syncAllConditionalReveals = function() {
            i(this.$inputs, this.syncConditionalRevealWithInputState.bind(this))
        },
        v.prototype.syncConditionalRevealWithInputState = function(t) {
            var e,
                n = document.getElementById(t.getAttribute("aria-controls"));
            n && n.classList.contains("govuk-radios__conditional") && (e = t.checked, t.setAttribute("aria-expanded", e), n.classList.toggle("govuk-radios__conditional--hidden", !e))
        },
        v.prototype.handleClick = function(t) {
            var n = t.target;
            "radio" === n.type && i(document.querySelectorAll('input[type="radio"][aria-controls]'), function(t) {
                var e = t.form === n.form;
                t.name === n.name && e && this.syncConditionalRevealWithInputState(t)
            }.bind(this))
        },
        w.prototype.init = function() {
            this.$module && (this.$linkedElement = this.getLinkedElement(), this.$linkedElement && this.$module.addEventListener("click", this.focusLinkedElement.bind(this)))
        },
        w.prototype.getLinkedElement = function() {
            var t = this.getFragmentFromUrl();
            return !!t && document.getElementById(t)
        },
        w.prototype.focusLinkedElement = function() {
            var t = this.$linkedElement;
            t.getAttribute("tabindex") || (t.setAttribute("tabindex", "-1"), t.classList.add("govuk-skip-link-focused-element"), this.linkedElementListener || (this.$linkedElement.addEventListener("blur", this.removeFocusProperties.bind(this)), this.linkedElementListener = !0)),
                t.focus()
        },
        w.prototype.removeFocusProperties = function() {
            this.$linkedElement.removeAttribute("tabindex"),
                this.$linkedElement.classList.remove("govuk-skip-link-focused-element")
        },
        w.prototype.getFragmentFromUrl = function() {
            return !!this.$module.hash && this.$module.hash.split("#").pop()
        },
        function(t) {
            "document" in this && "nextElementSibling" in document.documentElement || Object.defineProperty(Element.prototype, "nextElementSibling", {
                get: function() {
                    for (var t = this.nextSibling; t && 1 !== t.nodeType;)
                        t = t.nextSibling;
                    return t
                }
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        function(t) {
            "document" in this && "previousElementSibling" in document.documentElement || Object.defineProperty(Element.prototype, "previousElementSibling", {
                get: function() {
                    for (var t = this.previousSibling; t && 1 !== t.nodeType;)
                        t = t.previousSibling;
                    return t
                }
            })
        }.call("object" == typeof window && window || "object" == typeof self && self || "object" == typeof global && global || {}),
        E.prototype.init = function() {
            "function" == typeof window.matchMedia ? this.setupResponsiveChecks() : this.setup()
        },
        E.prototype.setupResponsiveChecks = function() {
            this.mql = window.matchMedia("(min-width: 40.0625em)"),
                this.mql.addListener(this.checkMode.bind(this)),
                this.checkMode()
        },
        E.prototype.checkMode = function() {
            this.mql.matches ? this.setup() : this.teardown()
        },
        E.prototype.setup = function() {
            var t = this.$module,
                e = this.$tabs,
                n = t.querySelector(".govuk-tabs__list"),
                o = t.querySelectorAll(".govuk-tabs__list-item");
            e && n && o && (n.setAttribute("role", "tablist"), i(o, function(t) {
                t.setAttribute("role", "presentation")
            }), i(e, function(t) {
                this.setAttributes(t),
                    t.boundTabClick = this.onTabClick.bind(this),
                    t.boundTabKeydown = this.onTabKeydown.bind(this),
                    t.addEventListener("click", t.boundTabClick, !0),
                    t.addEventListener("keydown", t.boundTabKeydown, !0),
                    this.hideTab(t)
            }.bind(this)), n = this.getTab(window.location.hash) || this.$tabs[0], this.showTab(n), t.boundOnHashChange = this.onHashChange.bind(this), window.addEventListener("hashchange", t.boundOnHashChange, !0))
        },
        E.prototype.teardown = function() {
            var t = this.$module,
                e = this.$tabs,
                n = t.querySelector(".govuk-tabs__list"),
                o = t.querySelectorAll(".govuk-tabs__list-item");
            e && n && o && (n.removeAttribute("role"), i(o, function(t) {
                t.removeAttribute("role", "presentation")
            }), i(e, function(t) {
                t.removeEventListener("click", t.boundTabClick, !0),
                    t.removeEventListener("keydown", t.boundTabKeydown, !0),
                    this.unsetAttributes(t)
            }.bind(this)), window.removeEventListener("hashchange", t.boundOnHashChange, !0))
        },
        E.prototype.onHashChange = function(t) {
            var e,
                n = window.location.hash,
                n = this.getTab(n);
            n && (this.changingHash ? this.changingHash = !1 : (e = this.getCurrentTab(), this.hideTab(e), this.showTab(n), n.focus()))
        },
        E.prototype.hideTab = function(t) {
            this.unhighlightTab(t),
                this.hidePanel(t)
        },
        E.prototype.showTab = function(t) {
            this.highlightTab(t),
                this.showPanel(t)
        },
        E.prototype.getTab = function(t) {
            return this.$module.querySelector('.govuk-tabs__tab[href="' + t + '"]')
        },
        E.prototype.setAttributes = function(t) {
            var e = this.getHref(t).slice(1),
                e = (t.setAttribute("id", "tab_" + e), t.setAttribute("role", "tab"), t.setAttribute("aria-controls", e), t.setAttribute("aria-selected", "false"), t.setAttribute("tabindex", "-1"), this.getPanel(t));
            e.setAttribute("role", "tabpanel"),
                e.setAttribute("aria-labelledby", t.id),
                e.classList.add(this.jsHiddenClass)
        },
        E.prototype.unsetAttributes = function(t) {
            t.removeAttribute("id"),
                t.removeAttribute("role"),
                t.removeAttribute("aria-controls"),
                t.removeAttribute("aria-selected"),
                t.removeAttribute("tabindex");
            t = this.getPanel(t);
            t.removeAttribute("role"),
                t.removeAttribute("aria-labelledby"),
                t.classList.remove(this.jsHiddenClass)
        },
        E.prototype.onTabClick = function(t) {
            if (!t.target.classList.contains("govuk-tabs__tab"))
                return !1;
            t.preventDefault();
            var t = t.target,
                e = this.getCurrentTab();
            this.hideTab(e),
                this.showTab(t),
                this.createHistoryEntry(t)
        },
        E.prototype.createHistoryEntry = function(t) {
            var e = this.getPanel(t),
                n = e.id;
            e.id = "",
                this.changingHash = !0,
                window.location.hash = this.getHref(t).slice(1),
                e.id = n
        },
        E.prototype.onTabKeydown = function(t) {
            switch (t.keyCode) {
                case this.keys.left:
                case this.keys.up:
                    this.activatePreviousTab(),
                        t.preventDefault();
                    break;
                case this.keys.right:
                case this.keys.down:
                    this.activateNextTab(),
                        t.preventDefault()
            }
        },
        E.prototype.activateNextTab = function() {
            var t,
                e = this.getCurrentTab(),
                n = e.parentNode.nextElementSibling;
            (t = n ? n.querySelector(".govuk-tabs__tab") : t) && (this.hideTab(e), this.showTab(t), t.focus(), this.createHistoryEntry(t))
        },
        E.prototype.activatePreviousTab = function() {
            var t,
                e = this.getCurrentTab(),
                n = e.parentNode.previousElementSibling;
            (t = n ? n.querySelector(".govuk-tabs__tab") : t) && (this.hideTab(e), this.showTab(t), t.focus(), this.createHistoryEntry(t))
        },
        E.prototype.getPanel = function(t) {
            return this.$module.querySelector(this.getHref(t))
        },
        E.prototype.showPanel = function(t) {
            this.getPanel(t).classList.remove(this.jsHiddenClass)
        },
        E.prototype.hidePanel = function(t) {
            this.getPanel(t).classList.add(this.jsHiddenClass)
        },
        E.prototype.unhighlightTab = function(t) {
            t.setAttribute("aria-selected", "false"),
                t.parentNode.classList.remove("govuk-tabs__list-item--selected"),
                t.setAttribute("tabindex", "-1")
        },
        E.prototype.highlightTab = function(t) {
            t.setAttribute("aria-selected", "true"),
                t.parentNode.classList.add("govuk-tabs__list-item--selected"),
                t.setAttribute("tabindex", "0")
        },
        E.prototype.getCurrentTab = function() {
            return this.$module.querySelector(".govuk-tabs__list-item--selected .govuk-tabs__tab")
        },
        E.prototype.getHref = function(t) {
            t = t.getAttribute("href");
            return t.slice(t.indexOf("#"), t.length)
        },
        i((t = "undefined" != typeof (d = void 0 !== (d = {
            errorSummary: {
                disableAutoFocus: !0
            },
            notificationBanner: {
                disableAutoFocus: !0
            }
        }) ? d : {}).scope ? d.scope : document).querySelectorAll('[data-module="govuk-accordion"]'), function(t) {
            new e(t, d.accordion).init()
        }),
        i(h = t.querySelectorAll('[data-module="govuk-button"]'), function(t) {
            new c(t, d.button).init()
        }),
        i(h = t.querySelectorAll('[data-module="govuk-character-count"]'), function(t) {
            new f(t, d.characterCount).init()
        }),
        i(h = t.querySelectorAll('[data-module="govuk-checkboxes"]'), function(t) {
            new m(t).init()
        }),
        i(h = t.querySelectorAll('[data-module="govuk-details"]'), function(t) {
            new u(t).init()
        }),
    (h = t.querySelector('[data-module="govuk-error-summary"]')) && new b(h, d.errorSummary).init(),
    (h = t.querySelector('[data-module="govuk-header"]')) && new y(h).init(),
        i(t.querySelectorAll('[data-module="govuk-notification-banner"]'), function(t) {
            new g(t, d.notificationBanner).init()
        }),
        i(h = t.querySelectorAll('[data-module="govuk-radios"]'), function(t) {
            new v(t).init()
        }),
        new w(t.querySelector('[data-module="govuk-skip-link"]')).init(),
        i(t.querySelectorAll('[data-module="govuk-tabs"]'), function(t) {
            new E(t).init()
        })
}();
//# sourceMappingURL=govuk-frontend.js.map
