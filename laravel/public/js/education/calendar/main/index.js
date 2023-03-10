/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./education/calendar/addEvents.js":
/*!*****************************************!*\
  !*** ./education/calendar/addEvents.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _fetchEvents__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./fetchEvents */ \"./education/calendar/fetchEvents.js\");\n\r\n\r\nconst addEvents = async (days,monthChangeSystemOne,now,firstDayInMonth,containerEvents) => {\r\n  let data = await (0,_fetchEvents__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n  let monthToView = new Date(now.year, now.month + monthChangeSystemOne, 0).getMonth() + 1;\r\n  const eventText=(title,country,date,img,actual,consensus,previous,note)=>{\r\n    return `\r\n    <div class=\"event row p-2 my-2 \" style=\"background-color: rgb(206, 206, 206);border-radius:2rem\">\r\n      <div class=\"p-2 col-sm-4\">\r\n          <img src=\"${img}\" alt=\"usa\">\r\n          <h3>${country.toUpperCase()} <span>${date}</span></h3>\r\n          <p>${title}</p>\r\n      </div>\r\n      <div class=\"p-2 col-sm-8\">\r\n          <ul class=\"list-inline h5 d-flex justify-content-between\">\r\n              <li class=\"d-inline\">${actual} Actual</li>\r\n              <li class=\"d-inline\">${consensus} Consensus</li>\r\n              <li class=\"d-inline\">${previous} Previous</li>\r\n          </ul>\r\n          <div>\r\n              <p>${note}</p>\r\n          </div>\r\n      </div>\r\n    </div>\r\n    `\r\n  }\r\n  const createEvent=(title,id,country,img,date,actual,consensus,previous,note)=>{\r\n      let div = document.createElement('div')\r\n      div.innerHTML=eventText(title,country,date,img,actual,consensus,previous,note)\r\n      div.classList.add(`id_${id}`)\r\n      containerEvents.appendChild(div)\r\n      gsap.from(div,{opacity:0.2,duration:0.2})\r\n  }\r\n  const createEventContent=()=>{\r\n\r\n    data.map(event => {\r\n      let monthOfEvent = parseInt(event.date.slice(5, 7));\r\n      let dayOfEvent = parseInt(event.date.slice(8, 10));\r\n      let country,date,img,actual,consensus,previous,note;\r\n      country=event.country\r\n      img=event.img\r\n      date=event.date\r\n      actual=event.actual\r\n      consensus=event.consensus\r\n      previous=event.previous\r\n      note=event.note\r\n      if(monthOfEvent === monthToView){\r\n          createEvent(event.title,event.id,country,img,date,actual,consensus,previous,note)\r\n      }\r\n      else{\r\n          let xd =document.querySelectorAll(`.id_${event.id}`)\r\n          xd.forEach(x=>{\r\n            x.remove()\r\n          })\r\n      }\r\n    });\r\n  }\r\n    createEventContent()\r\n\r\n    for (let i = 0; i < days.length; i++) {\r\n      let day = i-firstDayInMonth+2;\r\n      let hasEvent = data.some(event => {\r\n        let monthOfEvent = parseInt(event.date.slice(5, 7));\r\n        let dayOfEvent = parseInt(event.date.slice(8, 10));\r\n        return monthOfEvent === monthToView && dayOfEvent === day;\r\n      });\r\n\r\n      if (hasEvent) {\r\n        days[i].classList.add('eventday');\r\n      } else {\r\n        days[i].classList.remove('eventday');\r\n      }\r\n    }\r\n  }\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (addEvents);\n\n//# sourceURL=webpack://my-webpack-project/./education/calendar/addEvents.js?");

/***/ }),

/***/ "./education/calendar/date.js":
/*!************************************!*\
  !*** ./education/calendar/date.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst date=()=>{\r\n    const now = new Date()\r\n    return {\r\n        year : now.getFullYear(),\r\n        dayString : now.getDay(),\r\n        day : (now.getDate()<10) ? \"0\"+now.getDate() : now.getDate(),\r\n        hour : (now.getHours()<10) ? \"0\"+now.getHours() : now.getHours(),\r\n        month : now.getMonth(),\r\n        minutes : (now.getMinutes()<10) ? \"0\"+now.getMinutes() : now.getMinutes(),\r\n        seconds : (now.getSeconds()<10) ? \"0\"+now.getSeconds() : now.getSeconds(),\r\n    }\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (date);\n\n//# sourceURL=webpack://my-webpack-project/./education/calendar/date.js?");

/***/ }),

/***/ "./education/calendar/dateToView.js":
/*!******************************************!*\
  !*** ./education/calendar/dateToView.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst dateToView=(now,monthChangeSystemOne,calendarToday,days,monthNames)=>{\r\n    let monthToView=new Date(now.year, now.month+monthChangeSystemOne, 0).getMonth()+1\r\n    let yearToView=new Date(now.year, now.month+monthChangeSystemOne, 0).getFullYear()\r\n    calendarToday.innerHTML=`${now.day}.${(monthToView<10) ? \"0\"+monthToView : monthToView}.${yearToView}`\r\n    if(now.month+1!=monthToView || now.year!=yearToView){\r\n        calendarToday.innerHTML=`${monthNames[monthToView-1]} ${yearToView}`\r\n        days[parseInt(now.day)+1].classList.remove(\"currentday\")\r\n    }\r\n    else{\r\n        calendarToday.innerHTML=`${now.day}.${(monthToView<10) ? \"0\"+monthToView : monthToView}.${yearToView}`\r\n        days[parseInt(now.day)+1].classList.add(\"currentday\")\r\n    }\r\n}\r\n\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (dateToView);\n\n//# sourceURL=webpack://my-webpack-project/./education/calendar/dateToView.js?");

/***/ }),

/***/ "./education/calendar/fetchEvents.js":
/*!*******************************************!*\
  !*** ./education/calendar/fetchEvents.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst fetchEvents=async ()=>{\r\n    const res = await fetch('http://127.0.0.1:8000/education/calendar/events')\r\n    const data = await res.json()\r\n    return data\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (fetchEvents);\n\n//# sourceURL=webpack://my-webpack-project/./education/calendar/fetchEvents.js?");

/***/ }),

/***/ "./education/calendar/index.js":
/*!*************************************!*\
  !*** ./education/calendar/index.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _date__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./date */ \"./education/calendar/date.js\");\n/* harmony import */ var _dateToView__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./dateToView */ \"./education/calendar/dateToView.js\");\n/* harmony import */ var _addEvents__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./addEvents */ \"./education/calendar/addEvents.js\");\n\r\n\r\n\r\n\r\nconst todayDate= document.querySelector('.today--date')\r\nconst calendarToday= document.querySelector('.calendar__today')\r\nconst nextButton= document.querySelector('.calendar__next__icon')\r\nconst backButton= document.querySelector('.calendar__back__icon')\r\nconst namesDays=document.querySelectorAll('.days__name')\r\nconst containerEvents=document.querySelector('.container__events')\r\n\r\n\r\n\r\nlet monthChangeSystemOne=1\r\nlet monthChangeSystemTwo=0\r\n\r\nconst monthNames = [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\",\r\n  \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"\r\n];\r\nconst daysNames = [\"Monday\", \"Tusday\", \"Wensday\", \"Thursday\", \"Friday\", \"Saturday\",\"Sunday\"];\r\n\r\n\r\nconst x = window.matchMedia(\"(max-width: 950px)\")\r\n\r\nif(x.matches){\r\n    namesDays.forEach((x,index)=>{\r\n        x.innerHTML=daysNames[index].slice(0,3)\r\n        console.log(daysNames[index].slice(0,3))\r\n    })\r\n}\r\nelse{\r\n    namesDays.forEach((x,index)=>{\r\n        x.innerHTML=daysNames[index]\r\n    })\r\n}\r\nconst createCalendar=()=>{\r\n    const now = (0,_date__WEBPACK_IMPORTED_MODULE_0__[\"default\"])()\r\n    const days= document.querySelectorAll('.days')\r\n    const daysInMonth=new Date(now.year, now.month+monthChangeSystemOne, 0).getDate();\r\n    const daysInLastMonth=new Date(now.year, now.month+monthChangeSystemTwo, 0).getDate();\r\n    let firstDayInMonth=new Date(now.year, now.month+monthChangeSystemTwo, 1).getDay();\r\n    firstDayInMonth=(firstDayInMonth===0)? 7 : firstDayInMonth;\r\n    let lastDayInMonth=new Date(now.year, now.month+1+monthChangeSystemTwo, 0).getDay();\r\n    for (let i=1;i<=daysInMonth;i++){\r\n        days[(firstDayInMonth-2)+i].innerHTML=i\r\n    }\r\n    for (let i=0;i<=firstDayInMonth-2;i++){\r\n        days[i].innerHTML=(daysInLastMonth-(firstDayInMonth-2))+i\r\n    }\r\n    for (let i=daysInMonth+firstDayInMonth-1;i<days.length;i++){\r\n        days[i].innerHTML=((daysInMonth+firstDayInMonth-2)-i)*-1\r\n    }\r\n    (0,_dateToView__WEBPACK_IMPORTED_MODULE_1__[\"default\"])(now,monthChangeSystemOne,calendarToday,days,monthNames)\r\n    ;(0,_addEvents__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(days,monthChangeSystemOne,now,firstDayInMonth,containerEvents)\r\n\r\n}\r\n\r\nsetInterval(()=>{\r\n    const now = (0,_date__WEBPACK_IMPORTED_MODULE_0__[\"default\"])()\r\n    todayDate.innerHTML=`${daysNames[now.dayString]} ${monthNames[now.month]} ${now.day} ${now.year}  ${now.hour}:${now.minutes}:${now.seconds}`\r\n},1000)\r\n\r\ncreateCalendar()\r\n\r\nnextButton.addEventListener('click',()=>{\r\n    monthChangeSystemOne+=1\r\n    monthChangeSystemTwo+=1\r\n    createCalendar()\r\n        //animate calendar slide\r\n    gsap.from('.calendar__main',{x:\"100%\", duration: 0.1})\r\n})\r\nbackButton.addEventListener('click',()=>{\r\n    monthChangeSystemOne-=1\r\n    monthChangeSystemTwo-=1\r\n    createCalendar()\r\n    //animate calendar slide\r\n    gsap.from('.calendar__main',{x:\"-100%\", duration: 0.1})\r\n})\r\n\n\n//# sourceURL=webpack://my-webpack-project/./education/calendar/index.js?");

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
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
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
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./education/calendar/index.js");
/******/ 	
/******/ })()
;