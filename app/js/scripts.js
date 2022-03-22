function checkForm(e){e.find(".should-be-checked").length==e.find(".should-be-checked.checked").length?e.find('button[type="submit"]').removeClass("disabled"):e.find('button[type="submit"]').addClass("disabled")}!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.datepicker=t():e.datepicker=t()}(window,(function(){return function(e){var t={};function a(n){if(t[n])return t[n].exports;var s=t[n]={i:n,l:!1,exports:{}};return e[n].call(s.exports,s,s.exports,a),s.l=!0,s.exports}return a.m=e,a.c=t,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var s in e)a.d(n,s,function(t){return e[t]}.bind(null,s));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=0)}([function(e,t,a){"use strict";a.r(t);var n=[],s=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],i=["January","February","March","April","May","June","July","August","September","October","November","December"],o={t:"top",r:"right",b:"bottom",l:"left",c:"centered"};function r(){}var l=["click","focusin","keydown","input"];function c(e){l.forEach((function(t){e.addEventListener(t,e===document?S:x)}))}function d(e){return Array.isArray(e)?e.map(d):"[object Object]"===M(e)?Object.keys(e).reduce((function(t,a){return t[a]=d(e[a]),t}),{}):e}function u(e,t){var a=e.calendar.querySelector(".qs-overlay"),n=a&&!a.classList.contains("qs-hidden");t=t||new Date(e.currentYear,e.currentMonth),e.calendar.innerHTML=[h(t,e,n),f(t,e,n),m(e,n)].join(""),n&&window.requestAnimationFrame((function(){_(!0,e)}))}function h(e,t,a){return['<div class="qs-controls'+(a?" qs-blur":"")+'">','<div class="qs-arrow qs-left"></div>','<div class="qs-month-year">','<span class="qs-month">'+t.months[e.getMonth()]+"</span>",'<span class="qs-year">'+e.getFullYear()+"</span>","</div>",'<div class="qs-arrow qs-right"></div>',"</div>"].join("")}function f(e,t,a){var n=t.currentMonth,s=t.currentYear,i=t.dateSelected,o=t.maxDate,r=t.minDate,l=t.showAllDates,c=t.days,d=t.disabledDates,u=t.startDay,h=t.weekendIndices,f=t.events,m=t.getRange?t.getRange():{},p=+m.start,v=+m.end,g=k(new Date(e).setDate(1)),y=g.getDay()-u,b=y<0?7:0;g.setMonth(g.getMonth()+1),g.setDate(0);var $=g.getDate(),w=[],C=b+7*((y+$)/7|0);C+=(y+$)%7?7:0;for(var _=1;_<=C;_++){var D=(_-1)%7,M=c[D],q=_-(y>=0?y:7+y),S=new Date(s,n,q),x=f[+S],E=q<1||q>$,j=E?q<1?-1:1:0,P=E&&!l,I=P?"":S.getDate(),L=+S==+i,A=D===h[0]||D===h[1],O=p!==v,Y="qs-square "+M;x&&!P&&(Y+=" qs-event"),E&&(Y+=" qs-outside-current-month"),!l&&E||(Y+=" qs-num"),L&&(Y+=" qs-active"),(d[+S]||t.disabler(S)||A&&t.noWeekends||r&&+S<+r||o&&+S>+o)&&!P&&(Y+=" qs-disabled"),+k(new Date)==+S&&(Y+=" qs-current"),+S===p&&v&&O&&(Y+=" qs-range-start"),+S>p&&+S<v&&(Y+=" qs-range-middle"),+S===v&&p&&O&&(Y+=" qs-range-end"),P&&(Y+=" qs-empty",I=""),w.push('<div class="'+Y+'" data-direction="'+j+'">'+I+"</div>")}var N=c.map((function(e){return'<div class="qs-square qs-day">'+e+"</div>"})).concat(w);return N.unshift('<div class="qs-squares'+(a?" qs-blur":"")+'">'),N.push("</div>"),N.join("")}function m(e,t){var a=e.overlayPlaceholder,n=e.overlayButton;return['<div class="qs-overlay'+(t?"":" qs-hidden")+'">',"<div>",'<input class="qs-overlay-year" placeholder="'+a+'" inputmode="numeric" />','<div class="qs-close">&#10005;</div>',"</div>",'<div class="qs-overlay-month-container">'+e.overlayMonths.map((function(e,t){return'<div class="qs-overlay-month" data-month-num="'+t+'">'+e+"</div>"})).join("")+"</div>",'<div class="qs-submit qs-disabled">'+n+"</div>","</div>"].join("")}function p(e,t,a){var n=t.el,s=t.calendar.querySelector(".qs-active"),i=e.textContent,o=t.sibling;(n.disabled||n.readOnly)&&t.respectDisabledReadOnly||(t.dateSelected=a?void 0:new Date(t.currentYear,t.currentMonth,i),s&&s.classList.remove("qs-active"),a||e.classList.add("qs-active"),g(n,t,a),a||w(t),o&&(v({instance:t,deselect:a}),t.first&&!o.dateSelected&&(o.currentYear=t.currentYear,o.currentMonth=t.currentMonth,o.currentMonthName=t.currentMonthName),u(t),u(o)),t.onSelect(t,a?void 0:new Date(t.dateSelected)))}function v(e){var t=e.instance.first?e.instance:e.instance.sibling,a=t.sibling;t===e.instance?e.deselect?(t.minDate=t.originalMinDate,a.minDate=a.originalMinDate):a.minDate=t.dateSelected:e.deselect?(a.maxDate=a.originalMaxDate,t.maxDate=t.originalMaxDate):t.maxDate=a.dateSelected}function g(e,t,a){if(!t.nonInput)return a?e.value="":t.formatter!==r?t.formatter(e,t.dateSelected,t):void(e.value=t.dateSelected.toDateString())}function y(e,t,a,n){a||n?(a&&(t.currentYear=+a),n&&(t.currentMonth=+n)):(t.currentMonth+=e.contains("qs-right")?1:-1,12===t.currentMonth?(t.currentMonth=0,t.currentYear++):-1===t.currentMonth&&(t.currentMonth=11,t.currentYear--)),t.currentMonthName=t.months[t.currentMonth],u(t),t.onMonthChange(t)}function b(e){if(!e.noPosition){var t=e.position.top,a=e.position.right;if(e.position.centered)return e.calendarContainer.classList.add("qs-centered");var n=e.positionedEl.getBoundingClientRect(),s=e.el.getBoundingClientRect(),i=e.calendarContainer.getBoundingClientRect(),o=s.top-n.top+(t?-1*i.height:s.height)+"px",r=s.left-n.left+(a?s.width-i.width:0)+"px";e.calendarContainer.style.setProperty("top",o),e.calendarContainer.style.setProperty("left",r)}}function $(e){return"[object Date]"===M(e)&&"Invalid Date"!==e.toString()}function k(e){if($(e)||"number"==typeof e&&!isNaN(e)){var t=new Date(+e);return new Date(t.getFullYear(),t.getMonth(),t.getDate())}}function w(e){e.disabled||!e.calendarContainer.classList.contains("qs-hidden")&&!e.alwaysShow&&("overlay"!==e.defaultView&&_(!0,e),e.calendarContainer.classList.add("qs-hidden"),e.onHide(e))}function C(e){e.disabled||(e.calendarContainer.classList.remove("qs-hidden"),"overlay"===e.defaultView&&_(!1,e),b(e),e.onShow(e))}function _(e,t){var a=t.calendar,n=a.querySelector(".qs-overlay"),s=n.querySelector(".qs-overlay-year"),i=a.querySelector(".qs-controls"),o=a.querySelector(".qs-squares");e?(n.classList.add("qs-hidden"),i.classList.remove("qs-blur"),o.classList.remove("qs-blur"),s.value=""):(n.classList.remove("qs-hidden"),i.classList.add("qs-blur"),o.classList.add("qs-blur"),s.focus())}function D(e,t,a,n){var s=isNaN(+(new Date).setFullYear(t.value||void 0)),i=s?null:t.value;13===e.which||13===e.keyCode||"click"===e.type?n?y(null,a,i,n):s||t.classList.contains("qs-disabled")||y(null,a,i):a.calendar.contains(t)&&a.calendar.querySelector(".qs-submit").classList[s?"add":"remove"]("qs-disabled")}function M(e){return{}.toString.call(e)}function q(e){n.forEach((function(t){t!==e&&w(t)}))}function S(e){if(!e.__qs_shadow_dom){var t=e.which||e.keyCode,a=e.type,s=e.target,o=s.classList,r=n.filter((function(e){return e.calendar.contains(s)||e.el===s}))[0],l=r&&r.calendar.contains(s);if(!(r&&r.isMobile&&r.disableMobile))if("click"===a){if(!r)return n.forEach(w);if(r.disabled)return;var c=r.calendar,d=r.calendarContainer,h=r.disableYearOverlay,f=r.nonInput,m=c.querySelector(".qs-overlay-year"),v=!!c.querySelector(".qs-hidden"),g=c.querySelector(".qs-month-year").contains(s),b=s.dataset.monthNum;if(r.noPosition&&!l)(d.classList.contains("qs-hidden")?C:w)(r);else if(o.contains("qs-arrow"))y(o,r);else if(g||o.contains("qs-close"))h||_(!v,r);else if(b)D(e,m,r,b);else{if(o.contains("qs-disabled"))return;if(o.contains("qs-num")){var $=s.textContent,k=+s.dataset.direction,M=new Date(r.currentYear,r.currentMonth+k,$);if(k){r.currentYear=M.getFullYear(),r.currentMonth=M.getMonth(),r.currentMonthName=i[r.currentMonth],u(r);for(var S,x=r.calendar.querySelectorAll('[data-direction="0"]'),E=0;!S;){var j=x[E];j.textContent===$&&(S=j),E++}s=S}return void(+M==+r.dateSelected?p(s,r,!0):s.classList.contains("qs-disabled")||p(s,r))}o.contains("qs-submit")?D(e,m,r):f&&s===r.el&&(C(r),q(r))}}else if("focusin"===a&&r)C(r),q(r);else if("keydown"===a&&9===t&&r)w(r);else if("keydown"===a&&r&&!r.disabled){var P=!r.calendar.querySelector(".qs-overlay").classList.contains("qs-hidden");13===t&&P&&l?D(e,s,r):27===t&&P&&l&&_(!0,r)}else if("input"===a){if(!r||!r.calendar.contains(s))return;var I=r.calendar.querySelector(".qs-submit"),L=s.value.split("").reduce((function(e,t){return e||"0"!==t?e+(t.match(/[0-9]/)?t:""):""}),"").slice(0,4);s.value=L,I.classList[4===L.length?"remove":"add"]("qs-disabled")}}}function x(e){S(e),e.__qs_shadow_dom=!0}function E(e,t){l.forEach((function(a){e.removeEventListener(a,t)}))}function j(){C(this)}function P(){w(this)}function I(e,t){var a=k(e),n=this.currentYear,s=this.currentMonth,i=this.sibling;if(null==e)return this.dateSelected=void 0,g(this.el,this,!0),i&&(v({instance:this,deselect:!0}),u(i)),u(this),this;if(!$(e))throw new Error("`setDate` needs a JavaScript Date object.");if(this.disabledDates[+a]||a<this.minDate||a>this.maxDate)throw new Error("You can't manually set a date that's disabled.");this.dateSelected=a,t&&(this.currentYear=a.getFullYear(),this.currentMonth=a.getMonth(),this.currentMonthName=this.months[a.getMonth()]),g(this.el,this),i&&(v({instance:this}),u(i));var o=n===a.getFullYear()&&s===a.getMonth();return o||t?u(this,a):o||u(this,new Date(n,s,1)),this}function L(e){return O(this,e,!0)}function A(e){return O(this,e)}function O(e,t,a){var n=e.dateSelected,s=e.first,i=e.sibling,o=e.minDate,r=e.maxDate,l=k(t),c=a?"Min":"Max";function d(){return"original"+c+"Date"}function h(){return c.toLowerCase()+"Date"}function f(){return"set"+c}function m(){throw new Error("Out-of-range date passed to "+f())}if(null==t)e[d()]=void 0,i?(i[d()]=void 0,a?(s&&!n||!s&&!i.dateSelected)&&(e.minDate=void 0,i.minDate=void 0):(s&&!i.dateSelected||!s&&!n)&&(e.maxDate=void 0,i.maxDate=void 0)):e[h()]=void 0;else{if(!$(t))throw new Error("Invalid date passed to "+f());i?((s&&a&&l>(n||r)||s&&!a&&l<(i.dateSelected||o)||!s&&a&&l>(i.dateSelected||r)||!s&&!a&&l<(n||o))&&m(),e[d()]=l,i[d()]=l,(a&&(s&&!n||!s&&!i.dateSelected)||!a&&(s&&!i.dateSelected||!s&&!n))&&(e[h()]=l,i[h()]=l)):((a&&l>(n||r)||!a&&l<(n||o))&&m(),e[h()]=l)}return i&&u(i),u(e),e}function Y(){var e=this.first?this:this.sibling,t=e.sibling;return{start:e.dateSelected,end:t.dateSelected}}function N(){var e=this.shadowDom,t=this.positionedEl,a=this.calendarContainer,s=this.sibling,i=this;this.inlinePosition&&(n.some((function(e){return e!==i&&e.positionedEl===t}))||t.style.setProperty("position",null)),a.remove(),n=n.filter((function(e){return e!==i})),s&&delete s.sibling,n.length||E(document,S);var o=n.some((function(t){return t.shadowDom===e}));for(var r in e&&!o&&E(e,x),this)delete this[r];n.length||l.forEach((function(e){document.removeEventListener(e,S)}))}function R(e,t){var a=new Date(e);if(!$(a))throw new Error("Invalid date passed to `navigate`");this.currentYear=a.getFullYear(),this.currentMonth=a.getMonth(),u(this),t&&this.onMonthChange(this)}function F(){var e=!this.calendarContainer.classList.contains("qs-hidden"),t=!this.calendarContainer.querySelector(".qs-overlay").classList.contains("qs-hidden");e&&_(t,this)}t.default=function(e,t){var a=function(e,t){var a,l,c=function(e){var t=d(e);t.events&&(t.events=t.events.reduce((function(e,t){if(!$(t))throw new Error('"options.events" must only contain valid JavaScript Date objects.');return e[+k(t)]=!0,e}),{})),["startDate","dateSelected","minDate","maxDate"].forEach((function(e){var a=t[e];if(a&&!$(a))throw new Error('"options.'+e+'" needs to be a valid JavaScript Date object.');t[e]=k(a)}));var a=t.position,i=t.maxDate,l=t.minDate,c=t.dateSelected,u=t.overlayPlaceholder,h=t.overlayButton,f=t.startDay,m=t.id;if(t.startDate=k(t.startDate||c||new Date),t.disabledDates=(t.disabledDates||[]).reduce((function(e,t){var a=+k(t);if(!$(t))throw new Error('You supplied an invalid date to "options.disabledDates".');if(a===+k(c))throw new Error('"disabledDates" cannot contain the same date as "dateSelected".');return e[a]=1,e}),{}),t.hasOwnProperty("id")&&null==m)throw new Error("`id` cannot be `null` or `undefined`");if(null!=m){var p=n.filter((function(e){return e.id===m}));if(p.length>1)throw new Error("Only two datepickers can share an id.");p.length?(t.second=!0,t.sibling=p[0]):t.first=!0}var v=["tr","tl","br","bl","c"].some((function(e){return a===e}));if(a&&!v)throw new Error('"options.position" must be one of the following: tl, tr, bl, br, or c.');function g(e){throw new Error('"dateSelected" in options is '+(e?"less":"greater")+' than "'+(e||"max")+'Date".')}if(t.position=function(e){var t=e[0],a=e[1],n={};return n[o[t]]=1,a&&(n[o[a]]=1),n}(a||"bl"),i<l)throw new Error('"maxDate" in options is less than "minDate".');if(c&&(l>c&&g("min"),i<c&&g()),["onSelect","onShow","onHide","onMonthChange","formatter","disabler"].forEach((function(e){"function"!=typeof t[e]&&(t[e]=r)})),["customDays","customMonths","customOverlayMonths"].forEach((function(e,a){var n=t[e],s=a?12:7;if(n){if(!Array.isArray(n)||n.length!==s||n.some((function(e){return"string"!=typeof e})))throw new Error('"'+e+'" must be an array with '+s+" strings.");t[a?a<2?"months":"overlayMonths":"days"]=n}})),f&&f>0&&f<7){var y=(t.customDays||s).slice(),b=y.splice(0,f);t.customDays=y.concat(b),t.startDay=+f,t.weekendIndices=[y.length-1,y.length]}else t.startDay=0,t.weekendIndices=[6,0];"string"!=typeof u&&delete t.overlayPlaceholder,"string"!=typeof h&&delete t.overlayButton;var w=t.defaultView;if(w&&"calendar"!==w&&"overlay"!==w)throw new Error('options.defaultView must either be "calendar" or "overlay".');return t.defaultView=w||"calendar",t}(t||{startDate:k(new Date),position:"bl",defaultView:"calendar"}),u=e;if("string"==typeof u)u="#"===u[0]?document.getElementById(u.slice(1)):document.querySelector(u);else{if("[object ShadowRoot]"===M(u))throw new Error("Using a shadow DOM as your selector is not supported.");for(var h,f=u.parentNode;!h;){var m=M(f);"[object HTMLDocument]"===m?h=!0:"[object ShadowRoot]"===m?(h=!0,a=f,l=f.host):f=f.parentNode}}if(!u)throw new Error("No selector / element found.");if(n.some((function(e){return e.el===u})))throw new Error("A datepicker already exists on that element.");var p=u===document.body,v=a?u.parentElement||a:p?document.body:u.parentElement,y=a?u.parentElement||l:v,b=document.createElement("div"),w=document.createElement("div");b.className="qs-datepicker-container qs-hidden",w.className="qs-datepicker";var _={shadowDom:a,customElement:l,positionedEl:y,el:u,parent:v,nonInput:"INPUT"!==u.nodeName,noPosition:p,position:!p&&c.position,startDate:c.startDate,dateSelected:c.dateSelected,disabledDates:c.disabledDates,minDate:c.minDate,maxDate:c.maxDate,noWeekends:!!c.noWeekends,weekendIndices:c.weekendIndices,calendarContainer:b,calendar:w,currentMonth:(c.startDate||c.dateSelected).getMonth(),currentMonthName:(c.months||i)[(c.startDate||c.dateSelected).getMonth()],currentYear:(c.startDate||c.dateSelected).getFullYear(),events:c.events||{},defaultView:c.defaultView,setDate:I,remove:N,setMin:L,setMax:A,show:j,hide:P,navigate:R,toggleOverlay:F,onSelect:c.onSelect,onShow:c.onShow,onHide:c.onHide,onMonthChange:c.onMonthChange,formatter:c.formatter,disabler:c.disabler,months:c.months||i,days:c.customDays||s,startDay:c.startDay,overlayMonths:c.overlayMonths||(c.months||i).map((function(e){return e.slice(0,3)})),overlayPlaceholder:c.overlayPlaceholder||"4-digit year",overlayButton:c.overlayButton||"Submit",disableYearOverlay:!!c.disableYearOverlay,disableMobile:!!c.disableMobile,isMobile:"ontouchstart"in window,alwaysShow:!!c.alwaysShow,id:c.id,showAllDates:!!c.showAllDates,respectDisabledReadOnly:!!c.respectDisabledReadOnly,first:c.first,second:c.second};if(c.sibling){var D=c.sibling,q=_,S=D.minDate||q.minDate,x=D.maxDate||q.maxDate;q.sibling=D,D.sibling=q,D.minDate=S,D.maxDate=x,q.minDate=S,q.maxDate=x,D.originalMinDate=S,D.originalMaxDate=x,q.originalMinDate=S,q.originalMaxDate=x,D.getRange=Y,q.getRange=Y}c.dateSelected&&g(u,_);var E=getComputedStyle(y).position;p||E&&"static"!==E||(_.inlinePosition=!0,y.style.setProperty("position","relative"));var O=n.filter((function(e){return e.positionedEl===_.positionedEl}));return O.some((function(e){return e.inlinePosition}))&&(_.inlinePosition=!0,O.forEach((function(e){e.inlinePosition=!0}))),b.appendChild(w),v.appendChild(b),_.alwaysShow&&C(_),_}(e,t);if(n.length||c(document),a.shadowDom&&(n.some((function(e){return e.shadowDom===a.shadowDom}))||c(a.shadowDom)),n.push(a),a.second){var l=a.sibling;v({instance:a,deselect:!a.dateSelected}),v({instance:l,deselect:!l.dateSelected}),u(l)}return u(a,a.startDate||a.dateSelected),a.alwaysShow&&b(a),a}}]).default})),function(e,t,a){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports&&"undefined"==typeof Meteor?module.exports=e(require("jquery")):e(t||a)}((function(e){"use strict";var t=function(t,a,n){var s={invalid:[],getCaret:function(){try{var e,a=0,n=t.get(0),i=document.selection,o=n.selectionStart;return i&&-1===navigator.appVersion.indexOf("MSIE 10")?((e=i.createRange()).moveStart("character",-s.val().length),a=e.text.length):(o||"0"===o)&&(a=o),a}catch(e){}},setCaret:function(e){try{if(t.is(":focus")){var a,n=t.get(0);n.setSelectionRange?n.setSelectionRange(e,e):((a=n.createTextRange()).collapse(!0),a.moveEnd("character",e),a.moveStart("character",e),a.select())}}catch(e){}},events:function(){t.on("keydown.mask",(function(e){t.data("mask-keycode",e.keyCode||e.which),t.data("mask-previus-value",t.val()),t.data("mask-previus-caret-pos",s.getCaret()),s.maskDigitPosMapOld=s.maskDigitPosMap})).on(e.jMaskGlobals.useInput?"input.mask":"keyup.mask",s.behaviour).on("paste.mask drop.mask",(function(){setTimeout((function(){t.keydown().keyup()}),100)})).on("change.mask",(function(){t.data("changed",!0)})).on("blur.mask",(function(){r===s.val()||t.data("changed")||t.trigger("change"),t.data("changed",!1)})).on("blur.mask",(function(){r=s.val()})).on("focus.mask",(function(t){!0===n.selectOnFocus&&e(t.target).select()})).on("focusout.mask",(function(){n.clearIfNotMatch&&!i.test(s.val())&&s.val("")}))},getRegexMask:function(){for(var e,t,n,s,i,r,l=[],c=0;c<a.length;c++)(e=o.translation[a.charAt(c)])?(t=e.pattern.toString().replace(/.{1}$|^.{1}/g,""),n=e.optional,(s=e.recursive)?(l.push(a.charAt(c)),i={digit:a.charAt(c),pattern:t}):l.push(n||s?t+"?":t)):l.push(a.charAt(c).replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"));return r=l.join(""),i&&(r=r.replace(new RegExp("("+i.digit+"(.*"+i.digit+")?)"),"($1)?").replace(new RegExp(i.digit,"g"),i.pattern)),new RegExp(r)},destroyEvents:function(){t.off(["input","keydown","keyup","paste","drop","blur","focusout",""].join(".mask "))},val:function(e){var a,n=t.is("input"),s=n?"val":"text";return arguments.length>0?(t[s]()!==e&&t[s](e),a=t):a=t[s](),a},calculateCaretPosition:function(e){var a=s.getMasked(),n=s.getCaret();if(e!==a){var i=t.data("mask-previus-caret-pos")||0,o=a.length,r=e.length,l=0,c=0,d=0,u=0,h=0;for(h=n;h<o&&s.maskDigitPosMap[h];h++)c++;for(h=n-1;h>=0&&s.maskDigitPosMap[h];h--)l++;for(h=n-1;h>=0;h--)s.maskDigitPosMap[h]&&d++;for(h=i-1;h>=0;h--)s.maskDigitPosMapOld[h]&&u++;if(n>r)n=10*o;else if(i>=n&&i!==r){if(!s.maskDigitPosMapOld[n]){var f=n;n-=u-d,n-=l,s.maskDigitPosMap[n]&&(n=f)}}else n>i&&(n+=d-u,n+=c)}return n},behaviour:function(a){a=a||window.event,s.invalid=[];var n=t.data("mask-keycode");if(-1===e.inArray(n,o.byPassKeys)){var i=s.getMasked(),r=s.getCaret(),l=t.data("mask-previus-value")||"";return setTimeout((function(){s.setCaret(s.calculateCaretPosition(l))}),e.jMaskGlobals.keyStrokeCompensation),s.val(i),s.setCaret(r),s.callbacks(a)}},getMasked:function(e,t){var i,r,l,c=[],d=void 0===t?s.val():t+"",u=0,h=a.length,f=0,m=d.length,p=1,v="push",g=-1,y=0,b=[];for(n.reverse?(v="unshift",p=-1,i=0,u=h-1,f=m-1,r=function(){return u>-1&&f>-1}):(i=h-1,r=function(){return u<h&&f<m});r();){var $=a.charAt(u),k=d.charAt(f),w=o.translation[$];w?(k.match(w.pattern)?(c[v](k),w.recursive&&(-1===g?g=u:u===i&&u!==g&&(u=g-p),i===g&&(u-=p)),u+=p):k===l?(y--,l=void 0):w.optional?(u+=p,f-=p):w.fallback?(c[v](w.fallback),u+=p,f-=p):s.invalid.push({p:f,v:k,e:w.pattern}),f+=p):(e||c[v]($),k===$?(b.push(f),f+=p):(l=$,b.push(f+y),y++),u+=p)}var C=a.charAt(i);h!==m+1||o.translation[C]||c.push(C);var _=c.join("");return s.mapMaskdigitPositions(_,b,m),_},mapMaskdigitPositions:function(e,t,a){var i=n.reverse?e.length-a:0;s.maskDigitPosMap={};for(var o=0;o<t.length;o++)s.maskDigitPosMap[t[o]+i]=1},callbacks:function(e){var i=s.val(),o=i!==r,l=[i,e,t,n],c=function(e,t,a){"function"==typeof n[e]&&t&&n[e].apply(this,a)};c("onChange",!0===o,l),c("onKeyPress",!0===o,l),c("onComplete",i.length===a.length,l),c("onInvalid",s.invalid.length>0,[i,e,t,s.invalid,n])}};t=e(t);var i,o=this,r=s.val();a="function"==typeof a?a(s.val(),void 0,t,n):a,o.mask=a,o.options=n,o.remove=function(){var e=s.getCaret();return o.options.placeholder&&t.removeAttr("placeholder"),t.data("mask-maxlength")&&t.removeAttr("maxlength"),s.destroyEvents(),s.val(o.getCleanVal()),s.setCaret(e),t},o.getCleanVal=function(){return s.getMasked(!0)},o.getMaskedVal=function(e){return s.getMasked(!1,e)},o.init=function(r){if(r=r||!1,n=n||{},o.clearIfNotMatch=e.jMaskGlobals.clearIfNotMatch,o.byPassKeys=e.jMaskGlobals.byPassKeys,o.translation=e.extend({},e.jMaskGlobals.translation,n.translation),o=e.extend(!0,{},o,n),i=s.getRegexMask(),r)s.events(),s.val(s.getMasked());else{n.placeholder&&t.attr("placeholder",n.placeholder),t.data("mask")&&t.attr("autocomplete","off");for(var l=0,c=!0;l<a.length;l++){var d=o.translation[a.charAt(l)];if(d&&d.recursive){c=!1;break}}c&&t.attr("maxlength",a.length).data("mask-maxlength",!0),s.destroyEvents(),s.events();var u=s.getCaret();s.val(s.getMasked()),s.setCaret(u)}},o.init(!t.is("input"))};e.maskWatchers={};var a=function(){var a=e(this),s={},i="data-mask-",o=a.attr("data-mask");if(a.attr(i+"reverse")&&(s.reverse=!0),a.attr(i+"clearifnotmatch")&&(s.clearIfNotMatch=!0),"true"===a.attr(i+"selectonfocus")&&(s.selectOnFocus=!0),n(a,o,s))return a.data("mask",new t(this,o,s))},n=function(t,a,n){n=n||{};var s=e(t).data("mask"),i=JSON.stringify,o=e(t).val()||e(t).text();try{return"function"==typeof a&&(a=a(o)),"object"!=typeof s||i(s.options)!==i(n)||s.mask!==a}catch(e){}};e.fn.mask=function(a,s){s=s||{};var i=this.selector,o=e.jMaskGlobals,r=o.watchInterval,l=s.watchInputs||o.watchInputs,c=function(){if(n(this,a,s))return e(this).data("mask",new t(this,a,s))};return e(this).each(c),i&&""!==i&&l&&(clearInterval(e.maskWatchers[i]),e.maskWatchers[i]=setInterval((function(){e(document).find(i).each(c)}),r)),this},e.fn.masked=function(e){return this.data("mask").getMaskedVal(e)},e.fn.unmask=function(){return clearInterval(e.maskWatchers[this.selector]),delete e.maskWatchers[this.selector],this.each((function(){var t=e(this).data("mask");t&&t.remove().removeData("mask")}))},e.fn.cleanVal=function(){return this.data("mask").getCleanVal()},e.applyDataMask=function(t){((t=t||e.jMaskGlobals.maskElements)instanceof e?t:e(t)).filter(e.jMaskGlobals.dataMaskAttr).each(a)};var s,i,o,r={maskElements:"input,td,span,div",dataMaskAttr:"*[data-mask]",dataMask:!0,watchInterval:300,watchInputs:!0,keyStrokeCompensation:10,useInput:!/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent)&&(s="input",o=document.createElement("div"),(i=(s="on"+s)in o)||(o.setAttribute(s,"return;"),i="function"==typeof o[s]),o=null,i),watchDataMask:!1,byPassKeys:[9,16,17,18,36,37,38,39,40,91],translation:{0:{pattern:/\d/},9:{pattern:/\d/,optional:!0},"#":{pattern:/\d/,recursive:!0},A:{pattern:/[a-zA-Z0-9]/},S:{pattern:/[a-zA-Z]/}}};e.jMaskGlobals=e.jMaskGlobals||{},(r=e.jMaskGlobals=e.extend(!0,{},r,e.jMaskGlobals)).dataMask&&e.applyDataMask(),setInterval((function(){e.jMaskGlobals.watchDataMask&&e.applyDataMask()}),r.watchInterval)}),window.jQuery,window.Zepto),$(document).ready((function(){let e=$(".preloader"),t=$("img").length,a=100/t,n=0,s=0;if(t>0){$("html, body").css("overflow","hidden");for(let e=0;e<t;e++){let t=new Image;t.src=document.images[e].src,t.onload=i,t.onerror=i}function i(){n+=a,s++;let i=Math.round(n);$(".preloader__percent").text(`${i}%`),$(".preloader__filled").css("width",`${i}%`),(n>=100||s==t)&&(e.hide(),$("html, body").css("overflow",""))}}else e.hide();$(".tel").mask("(Z00) 000-00-00",{translation:{Z:{pattern:/[0-79]/}}});$(".car-number").mask("S 000 SS 000",{translation:{Z:{pattern:/[0-79]/},S:{pattern:/[А-Яа-я]/}},onKeyPress:function(e,t,a,n){a.val(a.val().toUpperCase())}}),$(".email").mask("A",{translation:{A:{pattern:/[\w@\-.+A-Za-z]/,recursive:!0}}}),$(".header__is-city").on("click",".yes",(function(){let e=$(".header__is-city .is-current").attr("data-city");document.cookie=`city=${e}`,$(".header__is-city").removeClass("open")})),$(".header__is-city").on("click",".no",(function(){$(".header__is-city").removeClass("open"),$(".header__city-list").addClass("open")})),$(".header__city-list").on("click","li",(function(){let e=$(this).text(),t=$(this).attr("data-city");document.cookie=`city=${t}`,$(".watch-city").text(e),$(".header__city-list").removeClass("open"),location.reload()})),$(".city__current").click((function(){$(".header__city-list").toggleClass("open")}));let o=(document.cookie.match(/^(?:.*;)?\s*city\s*=\s*([^;]+)(?:.*)?$/)||[,null])[1];null==o&&(o="kazan",$(".header__is-city").addClass("open")),null==(document.cookie.match(/^(?:.*;)?\s*cookies\s*=\s*([^;]+)(?:.*)?$/)||[,null])[1]&&$(".cookie-block").addClass("open"),$(".accept-cookies").click((function(){document.cookie="cookies=true",$(".cookie-block").removeClass("open")})),$("#get-city-data").attr("src",`cities/${o}.js`),$(".burger").on("click",(function(){$(".menu").addClass("active"),$(".header").addClass("header_menued"),$("html, body").css("overflow","hidden")})),$(".close").on("click",(function(){$(".menu").removeClass("active"),$(".header").removeClass("header_menued"),$("html, body").css("overflow","")})),$(".member-card").on("click",(function(){$(this).toggleClass("active"),window.innerWidth<768&&$(this).find(".member-card__links").slideToggle()}));$(".modal-search__close").on("click",(function(){$(this).siblings("input").val("")}));const r=new class{constructor(e,t,a,n){this.containerId=e,this.inputId=t,this.listId=a,this.options=n}create(e=""){const t=document.getElementById(this.listId),a=this.options.filter((t=>""===e||t.text.toUpperCase().includes(e.toUpperCase())));0===a.length?t.classList.remove("active"):t.classList.add("active"),t.innerHTML=a.map((e=>`<li id=${e.value} data-text="${e.text}">${e.text}<span>${e.type}</span></li>`)).join("")}addListeners(e){const t=document.getElementById(this.containerId),a=document.getElementById(this.inputId),n=document.getElementById(this.listId);t.addEventListener("click",(e=>{e.target.id===this.inputId?t.classList.toggle("active"):"datalist-icon"===e.target.id&&(t.classList.toggle("active"),a.focus())})),a.addEventListener("input",(function(n){t.classList.contains("active")||t.classList.add("active"),e.create(a.value)})),n.addEventListener("click",(function(e){"li"===e.target.nodeName.toLocaleLowerCase()&&(a.value=e.target.getAttribute("data-text"),t.classList.remove("active"))}))}}("form-modal-search","search-datalist-input","datalist-ul",dataSearch);function l(){$(".overlay").removeClass("active"),$(".modal").removeClass("active")}r.create(),r.addListeners(r),$(".header__search").on("click",(function(){$(".menu").removeClass("active"),$(".header").removeClass("header_menued"),$(".overlay").addClass("active"),$(".modal-search").addClass("active")})),$(".popup-close").on("click",(function(){$(".popup").removeClass("active")})),$(".entry__search-input").on("change input keyup",(function(){let e=$(this).val().toUpperCase();$(".entry__item").each((function(t,a){$(this).attr("data-address").toUpperCase().includes(e)?$(this).show():$(this).hide()}))})),$(".entry__item").on("click",(function(){$(".entry__search-input").val("");let e=$(this).attr("data-address");$(".entry__search-input").val(e).focus(),$(".entry__search").submit()})),$(".entry-step .close").on("click",(function(){$(this).parents(".entry-step").addClass("hide")})),$(".entry__page-back").on("click",(function(){let e=$(this).parents(".entry__page");e.addClass("hide"),e.prev().removeClass("hide")})),$("select").each((function(){let e=$(this);e.wrap('<div class="select"></div>'),numberOfOptions=e.children("option").length,e.after('<div class="select__selected pointer"></div>');let t=e.next("div.select__selected");t.text(e.children("option").eq(0).text());for(var a=$("<ul />",{class:"options"}).insertAfter(t),n=0;n<numberOfOptions;n++)$("<li />",{text:e.children("option").eq(n).text(),rel:e.children("option").eq(n).val()}).appendTo(a);var s=a.children("li");t.click((function(e){e.stopPropagation(),$("div.select__selected.active").each((function(){$(this).removeClass("active").next("ul.options").hide()})),$(this).toggleClass("active").next("ul.options").toggle()})),s.click((function(n){n.stopPropagation(),t.text($(this).text()).removeClass("active"),e.val($(this).attr("rel")),a.hide()})),$(document).click((function(){t.removeClass("active"),a.hide()}))})),$("#entry-storage").on("change",(function(){let e=$(".wheel-table");$(this).prop("checked")?e.show():e.hide()})),$(".table-input").on("change",(function(){let e=$(this).parents("tr");$(this).prop("checked")?e.addClass("active"):e.removeClass("active")})),$(".form-name").on("change input keyup",(function(){let e=$(this).parents(".form-row-name");$(this).val().length>1?e.addClass("checked").removeClass("alert"):e.addClass("alert").removeClass("checked"),checkForm($(this).parents("form"))})),$(".tel").on("change input keyup",(function(){let e=$(this).parents(".form-row-phone");15==$(this).val().length?e.addClass("checked").removeClass("alert"):e.addClass("alert").removeClass("checked"),checkForm($(this).parents("form"))})),$("#entry-time").on("click",(function(){$(this).siblings(".form-row-time__list").toggleClass("open")})),$(".form-row-time__list").on("change","input",(function(){$("#entry-time").val($(this).val()),$(".form-row-time__list").removeClass("open"),$(this).parents(".form-row-time").addClass("checked").removeClass("alert"),checkForm($(this).parents("form"))})),$(".entry__form").on("submit",(function(e){let t=$(this).find(".entry__submit");if(e.preventDefault(),t.hasClass("disabled"))$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")}));else{$(this).addClass("hide"),$(this).next().removeClass("hide");let e=$(".entry-address-data").val(),t=$("#entry-time").val();$(".entry-send-address").text(e),$(".entry-send-time").text(t)}})),$(".entry__thx-red").on("click",(function(){let e=$(this).parents(".entry__page");e.addClass("hide");let t=e.prev();t[0].reset(),t.find(".entry__submit").prop("disabled","disabled"),$(".entry__info").removeClass("hide")})),$(".add-car-form").on("submit",(function(e){$(this).find('button[type="submit"]').hasClass("disabled")&&(e.preventDefault(),$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})))})),$(".form-car-model").on("change input keyup",(function(){let e=$(this).parents(".modal__form-row");$(this).val().length>1?e.addClass("checked").removeClass("alert"):e.addClass("alert").removeClass("checked"),checkForm($(this).parents("form"))})),$(".car-number").on("change input keyup",(function(){let e=$(this).parents(".should-be-checked");$(this).val().length>10?e.addClass("checked").removeClass("alert"):e.addClass("alert").removeClass("checked"),checkForm($(this).parents("form"))})),$(".add-car").on("click",(function(){$(".overlay").addClass("active"),$(".modal-add-car").addClass("active")})),$(".overlay__close").on("click",(function(){l()})),$(".change-password").on("click",(function(){$(this).toggleClass("hidden"),$(this).siblings(".change-password").toggleClass("hidden");let e=$(this).siblings(".input");"password"==e.attr("type")?e.attr("type","text"):e.attr("type","password")})),$(".modal-car-added__button").on("click",(function(){l()})),$(".modal__form").on("submit",(function(e){let t=$(this).find(".modal__form-button");e.preventDefault(),t.hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):($(".modal-add-car").removeClass("active"),$(".modal-car-added").addClass("active"))})),$(".entrance__form").on("submit",(function(e){let t=$(this).find('button[type="submit"]');e.preventDefault(),t.hasClass("disabled")?$(this).find(".should-be-checked").hasClass("checked")||$(this).find(".should-be-checked").addClass("alert"):($(this).find(".entrance__button-row").hide(),$(this).siblings(".entrance__code").show())})),$(".entrance__code").on("submit",(function(e){e.preventDefault(),window.location.href="entrance-person-thx.php"})),$(".add-car-form").on("submit",(function(e){$(this).find('button[type="submit"]').hasClass("disabled")&&(e.preventDefault(),$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})))})),$(".card__faq-item").click((function(){$(this).toggleClass("open").find(".card__faq-answer").slideToggle()})),$(".card-question__form").on("submit",(function(e){e.preventDefault();let t=$(this).find(".card-question__submit"),a=$(this).find(".check-accept");t.hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):a.is(":checked")?window.location.href="card-question-send.php":a.siblings("label").css("color","#E30514")})),$(".toggle-filter").on("click",(function(){$(this).siblings(".actions__side-body").slideToggle()})),$(".actions__side").on("click",".reset",(function(){$(".actions__side").find("input").prop("checked",!1)})),$(".news__search-input").on("change input keyup",(function(){let e=$(this).val().toUpperCase();$(".news__item").each((function(t,a){$(this).attr("data-faq").toUpperCase().includes(e)?$(this).show():$(this).hide()}))})),$(".faq-ask__form").on("submit",(function(e){let t=$(this).find('button[type="submit"]');e.preventDefault(),t.hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):window.location.href="faq-thx.php"})),$(".useful__callback-form").on("submit",(function(e){e.preventDefault(),window.location.href="useful-thx.php"})),$(".text-page__side").on("click",".nav",(function(){$(this).toggleClass("open"),$(this).siblings(".sub").slideToggle()})),$(".text-page__open").on("click",(function(){$(this).toggleClass("open"),$(this).siblings(".text-page__list").toggleClass("open")}));let c=$(".career__join-form"),d=$(".resume__box");var u=!1;d.on("drag dragstart dragend dragover dragenter dragleave drop",(function(e){e.preventDefault(),e.stopPropagation()})).on("dragover dragenter",(function(){d.addClass("is-dragover")})).on("dragleave dragend drop",(function(){d.removeClass("is-dragover")})).on("drop",(function(e){u=e.originalEvent.dataTransfer.files,$(".resume__label").text(`Добавлено: ${u[0].name}`),d.addClass("dropped")})),$(".file").on("change",(function(e){""!=$(this).val()&&(u=$(this)[0].files,$(".resume__label").text(`Добавлено: ${u[0].name}`),d.addClass("dropped"))})),c.on("submit",(function(e){$(this).find(".career__join-submit").hasClass("disabled")?(e.preventDefault(),$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")}))):(joinData=c.serializeArray().map((e=>[e.name,e.value])),console.log(joinData))}));let h=$(".vacancy-form");$(".vacancies__side-showall").on("click",(function(){$(this).siblings(".vacancies__side-list").find(".checkbox-row").show(),$(this).hide()})),$(".vacancies-reset").on("click",(function(){$(this).parents("form")[0].reset()})),$(".fill-blank-open").on("click",(function(){h.addClass("open")})),$(".vacancy-form__close").on("click",(function(){h.removeClass("open")})),h.on("submit",(function(e){e.preventDefault(),$(this).find(".career__join-submit").hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):(joinData=h.serializeArray().map((e=>[e.name,e.value])),console.log(joinData),window.location.href="vacancy-thx.php")})),$(".corp-form__form").on("submit",(function(e){e.preventDefault(),$(this).find(".button").hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):window.location.href="corp-form-2.php"})),$(".corp-form__form-last").on("submit",(function(e){e.preventDefault(),$(this).find(".button-second").hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):window.location.href="corp-thx.php"})),$(".corp-form__form-support").on("submit",(function(e){e.preventDefault(),$(this).find(".button-support").hasClass("disabled")?$(this).find(".should-be-checked").each((function(){$(this).hasClass("checked")||$(this).addClass("alert")})):window.location.href="support-thx.php"}))})),$('a[href^="#"]').on("click",(function(){let e=$(this).attr("href");return $("html, body").animate({scrollTop:$(e).offset().top-20}),!1}));