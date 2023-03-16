!function () {
    "use strict";

    function e(t) {
        return e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, e(t)
    }

    var t = function (t) {
        if (window.dataLayer) return (t || "object" === e(t)) && window.dataLayer.push(t), t
    };
    document.addEventListener("DOMContentLoaded", (function () {
        (function () {
            var e = document.getElementsByClassName("hierarchy-global__list-item"),
                r = document.getElementById("analytics-record-reference");
            try {
                if (e && e.length < 3 && t({
                    event: "reference",
                    reference: "".concat(r.innerText),
                    series: "Above series level"
                }), e && e.length >= 3) {
                    var i = e[2].querySelector("[data-link]").innerText,
                        a = e[2].querySelector(".hierarchy-global__reference").innerText;
                    t({event: "reference", reference: "".concat(r.innerText), series: "".concat(a, " - ").concat(i)})
                }
            } catch (e) {
                console.error("Error push_series_from_hierarchy module: ".concat(e))
            }
        })(), [{selector: ".blog-embed", id_prefix: "analytics-blog-embed"}, {
            selector: ".related-resources ul",
            id_prefix: "analytics-related-resources"
        }, {
            selector: ".record-embed-no-image",
            id_prefix: "analytics-record-embed-no-image"
        }, {selector: ".featured-records__list", id_prefix: "analytics-featured-records"}].forEach((function (e) {
            try {
                var t = document.querySelectorAll(e.selector);
                Array.prototype.forEach.call(t, (function (t, r) {
                    t.id = "".concat(e.id_prefix, "-").concat(r + 1)
                }))
            } catch (e) {
                console.error("Error in generate_unique_ids module")
            }
        })), function () {
            var e = document.querySelector('div[data-id="hierarchy-toggle-link-option-panel-b"]'),
                t = document.querySelector('nav[data-id="hierarchy-detailed-view"]');
            if (e && t) {
                var r = document.createElement("button");
                r.innerText = "Show catalogue location", r.classList.add("hierarchy-short-panel__toggle-button"), r.setAttribute("aria-expanded", !1), r.setAttribute("aria-controls", "hierarchy-togglee"), r.setAttribute("aria-label", "Show or hide detailed view"), r.setAttribute("data-link-type", "Link"), r.setAttribute("data-link", "Show detailed view"), e.appendChild(r), t.id = "hierarchyTogglee", t.hidden = !0, r.addEventListener("click", (function (e) {
                    e.preventDefault();
                    var i = "true" == r.getAttribute("aria-expanded");
                    r.setAttribute("aria-expanded", !i);
                    var a = "true" == r.getAttribute("aria-expanded");
                    t.hidden = !t.hidden, a ? (r.innerHTML = "Hide catalogue location", r.setAttribute("class", "open")) : (r.innerHTML = "Show detailed view", r.setAttribute("class", ""))
                }))
            }
        }(), function () {
            var e = document.querySelector('div[data-id="cta-toggle-link-option-panel-b_1"]'),
                t = document.querySelector('div[data-id="cta-detailed-view-option-panel-b_1"]');
            if (e && t) {
                var r = document.createElement("button");
                r.innerText = "Order/download this record", r.classList.add("order-panel__toggle-button"), r.setAttribute("aria-expanded", !1), r.setAttribute("aria-controls", "hierarchy-togglee"), r.setAttribute("aria-label", "Order/download this record"), r.setAttribute("data-link-type", "Link"), r.setAttribute("data-link", "Order/download this record"), e.appendChild(r), t.id = "hierarchyTogglee", t.hidden = !0, r.addEventListener("click", (function (e) {
                    e.preventDefault();
                    var i = "true" == r.getAttribute("aria-expanded");
                    r.setAttribute("aria-expanded", !i);
                    var a = "true" == r.getAttribute("aria-expanded");
                    t.hidden = !t.hidden, a ? (r.innerHTML = "Hide order information", r.setAttribute("class", "order-panel__toggle-button open")) : (r.innerHTML = "Order/download this record", r.setAttribute("class", "order-panel__toggle-button"))
                }))
            }
        }()
    }))
}();