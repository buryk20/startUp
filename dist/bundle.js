(()=>{"use strict";!function(){if(null!=document.querySelector("[data-chat-dot]")){const e=document.querySelectorAll(".chat-bot-create__arrow"),t=document.querySelectorAll(".chat-bot__js");e.forEach(((o,c)=>{o.addEventListener("click",(function(o){let a=0;a=c,e[c].classList.toggle("js-active"),t[a].classList.toggle("js-active")}))}));const o=document.querySelectorAll(".chat-bot-types__slider-item"),c=document.querySelectorAll(".chat-bot-types__js");function a(e){e.forEach((e=>{e.classList.remove("js-active")}))}o.forEach(((e,t)=>{e.addEventListener("click",(function(e){a(o),a(c);let r=0;r=t,o[t].classList.toggle("js-active"),c[r].classList.toggle("js-active"),e.stopPropagation()}))}))}}(),function(){if(null!=document.querySelector("[data-input-wrp]")){const e=document.getElementById("accept"),t=document.querySelector(".js-activ");let o=document.querySelector(".js-form"),c=o.querySelectorAll(".js-input"),a=o.querySelector(".js-input-email"),r=o.querySelector(".js-input-phone");o.onsubmit=function(){let o=a.value,n=r.value,l=Array.from(c).filter((e=>""===e.value));return c.forEach((function(e){""===e.value?e.classList.add("errorInput"):e.classList.remove("errorInput")})),0===l.length&&(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(o).toLowerCase())?(a.classList.remove("errorInput"),s=o,new RegExp(".ru$").test(String(s).toLowerCase())?(a.classList.add("errorInput"),alert("Русский военный корабль пошел нах*й"),!1):(a.classList.remove("errorInput"),/^[0-9]*$/.test(String(n))?(a.classList.remove("errorInput"),e.classList.add("popup-accept__container-active"),void setTimeout((()=>{e.classList.remove("popup-accept__container-active"),t.classList.remove("popup-form__container"),t.classList.remove("popup-form__active")}),3e3)):(a.classList.add("errorInput"),!1))):(console.log("email error"),a.classList.add("errorInput"),!1));var s}}}(),function(){if(null!=document.querySelector("[data-input-wrp]")){const e=document.getElementById("lock"),t=document.getElementById("nav"),o=t.querySelector(".header__nav-wrp"),c=t.querySelector(".header__burger"),a=e.querySelectorAll(".main-form__container"),r=(e.querySelector(".btn-form"),e.querySelector(".js-activ")),n=e.querySelector(".main-form__form-wrp"),l=document.querySelector("body"),s=document.querySelector("main").querySelectorAll(".btn-pop-up");document.getElementById("accept"),e.querySelectorAll(".js-btn-close").forEach((e=>{e.addEventListener("click",(function(e){r.classList.remove("popup-form__active"),r.classList.remove("popup-form__container")}))})),c.addEventListener("click",(()=>{c.classList.toggle("header__burger-active"),o.classList.toggle("header__nav-wrp-active"),l.classList.toggle("body-lock")})),s.forEach((e=>{e.addEventListener("click",(()=>{console.log("sdfc"),r.classList.add("popup-form__container"),r.classList.add("popup-form__active")}))})),a.forEach((e=>{e.addEventListener("click",(e=>{e.target.classList.remove("popup-form__active"),setTimeout((()=>{r.classList.remove("popup-form__container"),r.classList.add("main-form__container")}),3e3)}))})),n.addEventListener("click",(function(e){e.stopPropagation()}))}}(),function(){const e=document.querySelector("[data-contacts-wrp]");if(null!=e){const t=document.querySelectorAll(".js-btn-contact-item"),o=e.querySelector(".js-btn-contact"),c=e.querySelectorAll(".js-btn-close");console.log(t),t.forEach((e=>{e.addEventListener("click",(()=>{console.log(o),o.classList.add("popup-form__active")}))})),c.forEach((e=>{e.addEventListener("click",(function(e){o.classList.remove("popup-form__active")}))}))}}(),function(){const e=document.querySelector("[data-animation-wrp]");if(null!=e){new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}).init();const o=e.querySelectorAll("[data-left]"),c=e.querySelectorAll("[data-right]"),a=e.querySelectorAll("[data-wow-offset]");document.documentElement.clientWidth>680?(o.forEach((e=>{t(e,"animate__fadeInLeft")})),c.forEach((e=>{t(e,"animate__fadeInRight")}))):(c.forEach((e=>{t(e,"animate__fadeInUp")})),o.forEach((e=>{t(e,"animate__fadeInLeft")})),a.forEach((e=>{e.dataset.wowOffset=0})))}function t(e,t){e.classList.add(t)}}(),function(){const e=document.querySelector("#nav");if(null!=e){const t=e.querySelectorAll(".header__nav-item");let o=document.URL;t.forEach(((e,c)=>{e.addEventListener("click",(()=>{localStorage.setItem(e.getAttributeNode("data-name").nodeValue,c),(o===e.getAttributeNode("data-name").nodeValue||o.includes(e.getAttributeNode("data-name").nodeValue)&&o!=e.getAttributeNode("data-name").nodeValue)&&t[c].classList.add("nav-list-active")}))}))}console.log(localStorage.getItem("https://laravel.star-up-group.com.ua/"))}(),function(){var e=new XMLHttpRequest;let t=document.URL;const o=document.querySelectorAll(".js-form"),c={text:`${t}`};o.forEach(((a,r)=>{a.querySelector("button").addEventListener("click",(async function(a){!function(a){let r;o[a].addEventListener("submit",(e=>{e.preventDefault()}));let n={};var l;r=o[a].querySelectorAll("input"),r.forEach((e=>{let t=e.name;n[t]=e.value})),""!==n.name&&""!==n.company&&""!==n.phone&&""!==n.email&&(c.text=JSON.stringify(n).replace(/[{}"]/g,"").replace(/,/gi,",\n").replace(/:/gi,": ")+"\n"+`Страница: ${t}`,l=c.text,e.open("POST","http://localhost:3103/step",!0),e.onload=function(){},e.send(l))}(r)}))}))}()})();