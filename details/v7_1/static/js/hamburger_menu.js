!function(){"use strict";!function(){var e=document.querySelector('[data-id="site-menu"]'),t=document.querySelector('[data-id="site-menu-list"]'),n=document.querySelectorAll('[data-isSearch="false"]'),i=document.querySelector("#js-site-menu-search"),d=document.querySelector("#gs-show-hide"),r=document.querySelector("#gs-component");if(e&&t&&i){var a=function(){return!!d&&d.id===document.activeElement.id},o=function(e,n){"end"===e&&(e=t.childNodes.length-1),t.childNodes[e].id!==i.id&&(t.insertBefore(i,t.childNodes[e]),n&&d.focus())},s=document.createElement("li");s.classList.add("header__nav-list-item"),s.setAttribute("data-id","menu-show-hide-button");var u=document.createElement("button");u.innerHTML='<span class="sr-only">Show or hide navigation menu</span>',u.classList.add("header__show-hide-button"),u.setAttribute("aria-expanded",!1),s.appendChild(u),i.style.display="inline-block",i.style.verticalAlign="bottom",t.insertBefore(s,t.childNodes[0]),window.innerWidth>=768?u.hidden="true":o(1,a());for(var c="",l=0;l<n.length;l++){var h="menu-item-".concat(l);n[l].id=h,c+=" ".concat(h),window.innerWidth<768&&(n[l].hidden="true")}u.setAttribute("aria-controls",c),u.addEventListener("click",(function(){var e="true"===u.getAttribute("aria-expanded");u.setAttribute("aria-expanded",!e);for(var t=0;t<n.length;t++)n[t].hidden=!n[t].hidden;r&&d&&(r.hidden=!0,d.setAttribute("aria-expanded","false"))}));var m,f,v=function(e){for(var t=0;t<n.length;t++)n[t].hidden=e};window.addEventListener("resize",(m=function(){var e=u.getAttribute("aria-expanded");window.innerWidth<768?(u.hidden=!1,v("false"===e),o(1,a())):(u.hidden=!0,v(!1),o("end",a()))},200,f=null,function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];var i=this;window.clearTimeout(f),f=window.setTimeout((function(){f=null,m.apply(i,t)}),200)}))}}()}();