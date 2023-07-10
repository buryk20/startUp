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

/***/ "./js/animation.js":
/*!*************************!*\
  !*** ./js/animation.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"animation\": () => (/* binding */ animation)\n/* harmony export */ });\nlet animation = function() {\r\n    \r\n    \r\n    const animationWrp = document.querySelector('[data-animation-wrp]');\r\n    if(animationWrp != null) {\r\n        new WOW(\r\n            {\r\n              boxClass: 'wow',      // default\r\n              animateClass: 'animated', // default\r\n              offset: 0,          // default\r\n              mobile: true,       // default\r\n              live: true        // default\r\n            }\r\n          ).init();\r\n        const animationLeft = animationWrp.querySelectorAll('[data-left]');\r\n        const animationRight = animationWrp.querySelectorAll('[data-right]');\r\n        const offSet = animationWrp.querySelectorAll('[data-wow-offset]');\r\n        if(document.documentElement.clientWidth > 680) {\r\n            animationLeft.forEach(el => {\r\n                addClass(el, \"animate__fadeInLeft\");\r\n            });\r\n            animationRight.forEach(el => {\r\n                addClass(el, \"animate__fadeInRight\");\r\n            })\r\n        } else {\r\n            animationRight.forEach(el => {\r\n                addClass(el, \"animate__fadeInUp\");\r\n            });\r\n            animationLeft.forEach(el => {\r\n                addClass(el, \"animate__fadeInLeft\");\r\n            });\r\n            offSet.forEach(el => {\r\n                el.dataset.wowOffset = 0;\r\n            })\r\n        }\r\n    }\r\n\r\n    function addClass(item, className) {\r\n        item.classList.add(className);\r\n    }\r\n}\n\n//# sourceURL=webpack://startup/./js/animation.js?");

/***/ }),

/***/ "./js/articleCount.js":
/*!****************************!*\
  !*** ./js/articleCount.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"articleCount\": () => (/* binding */ articleCount)\n/* harmony export */ });\n let articleCount = function() {\n    const author = document.querySelector('[data-author]');\n    console.log(author);\n    if(author != null) {\n        const articleArr  = author.querySelectorAll('[data-article]');\n        countArticle(articleArr);\n\n        function countArticle(arr) {\n            const valueOutput = author.querySelector('[data-article-count]');\n            valueOutput.innerHTML = arr.length;\n            console.log(arr.length);\n        }\n    }\n}\n\n//# sourceURL=webpack://startup/./js/articleCount.js?");

/***/ }),

/***/ "./js/chatBot.js":
/*!***********************!*\
  !*** ./js/chatBot.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"chatBot\": () => (/* binding */ chatBot)\n/* harmony export */ });\nlet chatBot = function() {\r\n    const chatBotWrp = document.querySelector('[data-chat-dot]');\r\n        if(chatBotWrp != null) {\r\n            const arrArrow = document.querySelectorAll(\".chat-bot-create__arrow\");\r\n            const arrVisible = document.querySelectorAll(\".chat-bot__js\");\r\n\r\n        arrArrow.forEach((el, index) => {\r\n            el.addEventListener(\"click\", function (e) {\r\n            let indexVisible = 0;\r\n\r\n            indexVisible = index;\r\n            arrArrow[index].classList.toggle(\"js-active\");\r\n            arrVisible[indexVisible].classList.toggle(\"js-active\");\r\n            });\r\n        });\r\n\r\n    //select type category\r\n        const arrButton = document.querySelectorAll(\".chat-bot-types__slider-item\");\r\n        const    arrType = document.querySelectorAll(\".chat-bot-types__js\");\r\n        arrButton.forEach((el, index) => {\r\n            el.addEventListener(\"click\", function (e) {\r\n            delClass(arrButton);\r\n            delClass(arrType);\r\n            let indexType = 0;\r\n\r\n            indexType = index;\r\n            arrButton[index].classList.toggle(\"js-active\");\r\n            arrType[indexType].classList.toggle(\"js-active\");\r\n            e.stopPropagation();\r\n            });\r\n        });\r\n\r\n        function delClass(item) {\r\n            item.forEach((el) => {\r\n            el.classList.remove(\"js-active\");\r\n            });\r\n        }\r\n\r\n    } \r\n}\n\n//# sourceURL=webpack://startup/./js/chatBot.js?");

/***/ }),

/***/ "./js/functionGlobal.js":
/*!******************************!*\
  !*** ./js/functionGlobal.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"Add\": () => (/* binding */ Add),\n/* harmony export */   \"removeClass\": () => (/* binding */ removeClass),\n/* harmony export */   \"removeClassArr\": () => (/* binding */ removeClassArr),\n/* harmony export */   \"stopPropagationFunctionArr\": () => (/* binding */ stopPropagationFunctionArr)\n/* harmony export */ });\nlet removeClass = function(elem, elemFromRemoveClass) {\r\n    elem.forEach((el) => {\r\n        el.addEventListener(\"click\", function () {\r\n            elemFromRemoveClass.classList.remove('active');\r\n        })\r\n    });\r\n}\r\n\r\nlet removeClassArr = function(elem) {\r\n    elem.forEach((el) => {\r\n        el.classList.remove('active');\r\n    });\r\n}\r\n\r\nlet stopPropagationFunctionArr = function(elem) {\r\n    elem.forEach((el) => {\r\n        el.addEventListener('click', (event) => {\r\n            event.stopPropagation();\r\n        })\r\n    })\r\n}\r\n\r\nlet Add = class  {\r\n\r\n    getBodyContent() {\r\n        const bodyElement = document.querySelector('body');\r\n        return bodyElement;\r\n    }\r\n\r\n    bodyAddRemoveActive(elemBodyOver, elemBodyOverHidding) {\r\n        this.bodyOver(elemBodyOver);\r\n        this.bodyOverHidding(elemBodyOverHidding);\r\n    }\r\n\r\n    bodyOverHidding(elem) {\r\n        elem.addEventListener('click', () => {\r\n            this.getBodyContent().classList.remove('active');\r\n            elem.classList.remove('active');\r\n        });\r\n    }\r\n\r\n    bodyOver(arr) {\r\n        arr.forEach(elem => {\r\n            elem.addEventListener('click', () => {\r\n                this.getBodyContent().classList.add('active');\r\n            });\r\n        });\r\n    }\r\n\r\n    removeActive(elemClick, elemRemove) {\r\n        elemClick.addEventListener('click', () => {\r\n            elemRemove.classList.remove('active');\r\n        });\r\n    }\r\n\r\n    stopPropagationFun(elem) {\r\n        elem.addEventListener('click', (event) => {\r\n            event.stopPropagation();\r\n        });\r\n    }\r\n}\r\n\r\n\n\n//# sourceURL=webpack://startup/./js/functionGlobal.js?");

/***/ }),

/***/ "./js/headerBurger.js":
/*!****************************!*\
  !*** ./js/headerBurger.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"headerBurger\": () => (/* binding */ headerBurger)\n/* harmony export */ });\nlet headerBurger = function() {\r\n    const nav = document.querySelector('#nav');\r\n    if(nav != null) {\r\n        const lock = nav.querySelector('.header__nav-wrp');\r\n        const burger = nav.querySelector('.header__burger');\r\n\r\n        burger.addEventListener(\"click\", () => {\r\n            burger.classList.toggle('header__burger-active');\r\n            lock.classList.toggle('header__nav-wrp-active');\r\n            document.querySelector('body').classList.toggle('body-lock');\r\n        });\r\n    }\r\n}\n\n//# sourceURL=webpack://startup/./js/headerBurger.js?");

/***/ }),

/***/ "./js/inputForm.js":
/*!*************************!*\
  !*** ./js/inputForm.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"inputForm\": () => (/* binding */ inputForm)\n/* harmony export */ });\nlet inputForm = function() {\r\n    var xhr = new XMLHttpRequest();\r\n    let namePage = document.URL;\r\n    const form = document.querySelectorAll('.js-form');\r\n    const message = {\r\n        text: `${namePage}`,\r\n    };\r\n    form.forEach((el, index) => {\r\n        el.querySelector('button').addEventListener('click', async function(event) {\r\n            inputValue(index);\r\n        });\r\n    });\r\n\r\n    function inputValue(index)  {\r\n        form[index].addEventListener('submit', event => {\r\n            event.preventDefault();\r\n        })\r\n        let arrIn;\r\n        let inputValue = {};\r\n        arrIn = form[index].querySelectorAll('input');\r\n        arrIn.forEach(el => {\r\n            let nameIn = el.name;\r\n            inputValue[nameIn] = el.value;\r\n        });\r\n        if(inputValue.name !== '' && inputValue.company !== '' && inputValue.phone !== '' && inputValue.email !== '') {\r\n            message.text = string(JSON.stringify(inputValue)) + '\\n' + `Страница: ${namePage}`;\r\n            // getFun(message.text);\r\n            postTel(message.text);\r\n        }\r\n\r\n    }\r\n    function string(srt) {\r\n        return ((srt.replace(/[{}\"]/g, '')).replace(/,/gi, ',\\n')).replace(/:/gi, ': ');\r\n    }\r\n\r\n\r\n    function postTel(messageText) {\r\n        const token = '1086684695:AAGUePIsqeOsnHABuEJ939JBv1hdjVZSYGQ'; // замените на свой токен\r\n        const chatId = '-1001819362362'; // замените на свой ID чата\r\n\r\n        const message = messageText; // сообщение, которое вы хотите отправить\r\n\r\n        fetch(`https://api.telegram.org/bot${token}/sendMessage`, {\r\n            method: 'POST',\r\n            headers: {\r\n                'Content-Type': 'application/json'\r\n            },\r\n            body: JSON.stringify({\r\n                chat_id: chatId,\r\n                text: message\r\n            })\r\n        })\r\n        .then(res => {\r\n            if (!res.ok) {\r\n                throw new Error(`Failed to send message: ${res.status} ${res.statusText}`);\r\n            }\r\n            console.log('Message sent successfully!');\r\n        })\r\n        .catch(err => {\r\n            console.error(err);\r\n        });\r\n      }\r\n}\r\n\n\n//# sourceURL=webpack://startup/./js/inputForm.js?");

/***/ }),

/***/ "./js/main.js":
/*!********************!*\
  !*** ./js/main.js ***!
  \********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _chatBot_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./chatBot.js */ \"./js/chatBot.js\");\n/* harmony import */ var _validation_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./validation.js */ \"./js/validation.js\");\n/* harmony import */ var _modalAppplication_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modalAppplication.js */ \"./js/modalAppplication.js\");\n/* harmony import */ var _modalConntacts_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modalConntacts.js */ \"./js/modalConntacts.js\");\n/* harmony import */ var _animation_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./animation.js */ \"./js/animation.js\");\n/* harmony import */ var _navigationTitle_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./navigationTitle.js */ \"./js/navigationTitle.js\");\n/* harmony import */ var _inputForm_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./inputForm.js */ \"./js/inputForm.js\");\n/* harmony import */ var _headerBurger_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./headerBurger.js */ \"./js/headerBurger.js\");\n/* harmony import */ var _articleCount_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./articleCount.js */ \"./js/articleCount.js\");\nconsole.log('fgbv');\r\n\r\n\r\n(0,_chatBot_js__WEBPACK_IMPORTED_MODULE_0__.chatBot)();\r\n\r\n\r\n(0,_validation_js__WEBPACK_IMPORTED_MODULE_1__.validation)();\r\n\r\n\r\n(0,_modalAppplication_js__WEBPACK_IMPORTED_MODULE_2__.modalApplication)();\r\n\r\n\r\n(0,_modalConntacts_js__WEBPACK_IMPORTED_MODULE_3__.modalContacts)();\r\n\r\n\r\n(0,_animation_js__WEBPACK_IMPORTED_MODULE_4__.animation)();\r\n\r\n\r\n(0,_navigationTitle_js__WEBPACK_IMPORTED_MODULE_5__.navigationTitle)();\r\n\r\n\r\n(0,_inputForm_js__WEBPACK_IMPORTED_MODULE_6__.inputForm)();\r\n\r\n\r\n(0,_headerBurger_js__WEBPACK_IMPORTED_MODULE_7__.headerBurger)();\r\n\r\n\r\n(0,_articleCount_js__WEBPACK_IMPORTED_MODULE_8__.articleCount)();\r\n\r\nconsole.log('fgbv');\r\n\r\n// const contentfulData = require('./server/contentful');\r\n\r\n// console.log(contentfulData);\n\n//# sourceURL=webpack://startup/./js/main.js?");

/***/ }),

/***/ "./js/modalAppplication.js":
/*!*********************************!*\
  !*** ./js/modalAppplication.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"modalApplication\": () => (/* binding */ modalApplication)\n/* harmony export */ });\n/* harmony import */ var _functionGlobal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./functionGlobal */ \"./js/functionGlobal.js\");\n\r\n\r\nlet modalApplication = function() {\r\n    const modalApplicationWrp = document.querySelector('[data-input-wrp]');\r\n    if(modalApplicationWrp != null) {\r\n        const add = new _functionGlobal__WEBPACK_IMPORTED_MODULE_0__.Add();\r\n        const form = modalApplicationWrp.querySelector('[data-input]');\r\n        const btnClose = modalApplicationWrp.querySelector('[data-btn-close]');\r\n        const brnArrOpen = document.querySelectorAll('[data-btn-open-modal]');\r\n        const formContainer = modalApplicationWrp.querySelector('[data-container]');\r\n\r\n        brnArrOpen.forEach(el => {\r\n            el.addEventListener('click', () => {\r\n                form.classList.add('active');\r\n            })\r\n        });\r\n\r\n        add.bodyAddRemoveActive(brnArrOpen, btnClose);\r\n        add.bodyOverHidding(form);\r\n        add.removeActive(btnClose, form);\r\n        add.stopPropagationFun(formContainer);\r\n    }\r\n}\r\n\r\n\n\n//# sourceURL=webpack://startup/./js/modalAppplication.js?");

/***/ }),

/***/ "./js/modalConntacts.js":
/*!******************************!*\
  !*** ./js/modalConntacts.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"modalContacts\": () => (/* binding */ modalContacts)\n/* harmony export */ });\n/* harmony import */ var _functionGlobal_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./functionGlobal.js */ \"./js/functionGlobal.js\");\n\r\n\r\n\r\nlet modalContacts = function() {\r\n    const modalContactsWrp = document.querySelector('[data-contacts-wrp-pop-up]'); \r\n        if(modalContactsWrp != null) {\r\n            const btnContacts = document.querySelectorAll('[data-contact-btn]'),\r\n                contactMod = modalContactsWrp.querySelector('[data-contact-modal]'),\r\n                contactClose = modalContactsWrp.querySelectorAll('[data-contact-btn-close]');\r\n            const mainDocum = document.querySelector('body');\r\n            const contactContainer = document.querySelectorAll('[data-contact-modal-container]')\r\n                \r\n            btnContacts.forEach((el) => {\r\n                el.addEventListener(\"click\", (event) => {\r\n                    event.stopPropagation();\r\n                    contactMod.classList.add('active');\r\n                    mainDocum.classList.add('active');\r\n                })\r\n            });\r\n            contactMod.addEventListener('click', function () {\r\n                mainDocum.classList.remove('active');\r\n                this.classList.remove('active');\r\n            });\r\n            (0,_functionGlobal_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(contactClose, contactMod);\r\n            (0,_functionGlobal_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(contactClose, mainDocum);\r\n            (0,_functionGlobal_js__WEBPACK_IMPORTED_MODULE_0__.stopPropagationFunctionArr)(contactContainer);\r\n    }\r\n}\n\n//# sourceURL=webpack://startup/./js/modalConntacts.js?");

/***/ }),

/***/ "./js/navigationTitle.js":
/*!*******************************!*\
  !*** ./js/navigationTitle.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"navigationTitle\": () => (/* binding */ navigationTitle)\n/* harmony export */ });\n/* harmony import */ var _functionGlobal_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./functionGlobal.js */ \"./js/functionGlobal.js\");\n\r\n\r\nlet navigationTitle = function() {\r\n    const navMainWrp = document.querySelector('#nav');\r\n    if(navMainWrp != null) {\r\n        const arrNavItemNode = navMainWrp.querySelectorAll('[data-link-nav]');\r\n        const arrLeng = navMainWrp.querySelectorAll('[data-lang]');\r\n        let arrLengBolean = [];\r\n        const elemNav = navMainWrp.querySelectorAll('[data-name]');\r\n        let stringUrl = document.location.pathname;\r\n\r\n        urlDelLeng(stringUrl, elemNav);\r\n\r\n        function urlDelLeng(url, arr) {\r\n            if(url != \"/\" & url != \"/ru\" & url != \"/en\") {\r\n                url = (url.replace(/\\/ru/gi, '')).replace(/\\/en/gi, '');\r\n                for(let i = 1; i < arr.length; i++) {\r\n                    if(url.startsWith(arr[i].getAttribute('data-name'))) {\r\n                        arr[i].classList.add('active');\r\n                    }\r\n                }\r\n            } else {\r\n                arr[0].classList.add('active');\r\n            }\r\n        }\r\n\r\n        arrLeng.forEach((el) => {\r\n            arrLengBolean.push(window.location.pathname.includes('/' + (el.innerHTML).toLowerCase()));\r\n        })\r\n        arrLengBolean.forEach((el, index) => {\r\n            if(el === true) {\r\n                arrLeng[index].classList.add('active');\r\n            } else if (arrLengBolean.indexOf(true) === -1) {\r\n                arrLeng[0].classList.add('active');\r\n            }\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://startup/./js/navigationTitle.js?");

/***/ }),

/***/ "./js/validation.js":
/*!**************************!*\
  !*** ./js/validation.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"validation\": () => (/* binding */ validation)\n/* harmony export */ });\nlet validation = function() {\r\n    const validationWrp = document.querySelector('[data-input-wrp]')\r\n    if(validationWrp != null) {\r\n        const confirmation = document.getElementById('accept');\r\n        const formWrp = document.querySelector('.js-activ');\r\n        let form = document.querySelector('.js-form'),\r\n        formInputs = form.querySelectorAll('.js-input'),\r\n        inputEmail = form.querySelector('.js-input-email'),\r\n        inputPhone = form.querySelector('.js-input-phone');\r\n\r\n        function validateEmail(email) {\r\n            let re = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$/;\r\n\r\n            return re.test(String(email).toLowerCase());\r\n            }\r\n\r\n            function validateCountry(country) {\r\n                let reC = new RegExp('.ru$');\r\n                return reC.test(String(country).toLowerCase());\r\n            }\r\n\r\n            function validatePhone(phone) {\r\n                let rePh = /^[0-9]*$/;\r\n                return rePh.test(String(phone));\r\n            }\r\n\r\n\r\n        form.onsubmit = function () {\r\n            let emailVal = inputEmail.value,\r\n                phoneVal = inputPhone.value,\r\n                emptyInputs = Array.from(formInputs).filter(input => input.value === '');\r\n\r\n            formInputs.forEach(function (input) {\r\n                if (input.value === '') {\r\n                    input.classList.add('errorInput')\r\n                } else {\r\n                    input.classList.remove('errorInput')\r\n\r\n                }\r\n            });\r\n\r\n            if (emptyInputs.length !== 0) {\r\n                return false;\r\n            }\r\n\r\n            if (!validateEmail(emailVal)) {\r\n                console.log(\"email error\");\r\n                inputEmail.classList.add('errorInput')\r\n                return false;\r\n            } else {\r\n                inputEmail.classList.remove('errorInput')\r\n            }\r\n\r\n            if (validateCountry(emailVal)) {\r\n                inputEmail.classList.add('errorInput');\r\n                alert('Русский военный корабль пошел нах*й')\r\n                return false;\r\n            } else {\r\n                inputEmail.classList.remove('errorInput')\r\n            }\r\n\r\n            if (!validatePhone(phoneVal)) {\r\n                inputEmail.classList.add('errorInput');\r\n                return false;\r\n            } else {\r\n                inputEmail.classList.remove('errorInput')\r\n            }\r\n\r\n            confirmation.classList.add('popup-accept__container-active');\r\n            setTimeout(() => {\r\n                confirmation.classList.remove('popup-accept__container-active');\r\n                formWrp.classList.remove('popup-form__container');\r\n                formWrp.classList.remove('popup-form__active');\r\n            }, 3000);\r\n        }\r\n\r\n    }\r\n}\n\n//# sourceURL=webpack://startup/./js/validation.js?");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./js/main.js");
/******/ 	
/******/ })()
;