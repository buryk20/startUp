window.onload = function () {
    const nav = document.getElementById('nav');
    const mainCont = document.getElementById('lock');

    const body = document.querySelector('body');
    const lock = nav.querySelector('.header__nav-wrp');
    const burger = nav.querySelector('.header__burger');

    const main = document.querySelector('main');

    const buttonIndex = main.querySelectorAll('.btn-pop-up');
    const btnPopUpSend = main.querySelectorAll('.btn-form');

    const modalWrp = mainCont.querySelector('.main-form__container');
    const popup = mainCont.querySelector('.popup-form__container');
    const acept = mainCont.querySelector('.popup-accept__container');

    const clickClose = mainCont.querySelector('.main-form__form-wrp');

    burger.addEventListener("click", () => {
        burger.classList.toggle('header__burger-active');
        lock.classList.toggle('header__nav-wrp-active');
        body.classList.toggle('body-lock')
    });

    buttonIndex.forEach((el) => {
        el.addEventListener("click", () => {
            console.log('g');
            modalWrp.classList.remove('main-form__container');
            modalWrp.classList.add('popup-form__container');
            modalWrp.classList.add('popup-form__active');
        })
    });

    modalWrp.addEventListener("click", () => {
        modalWrp.classList.remove('popup-form__active');
        setTimeout(() => {
            modalWrp.classList.remove('popup-form__container');
            modalWrp.classList.add('main-form__container');
        }, 500);
    });

    clickClose.addEventListener("click", function (event) {
        event.stopPropagation();
    });

    btnPopUpSend.forEach((elem) => {
        elem.addEventListener("click", function (e) {
            console.log(popup)
            let name = document.getElementById("name");
            let phone = document.getElementById("name");
            let email = document.getElementById("name");
            console.log(name);
            acept.classList.add('popup-accept__container-active');
            modalWrp.classList.toggle('popup-form__active');
            setTimeout(() => {
                acept.classList.remove('popup-accept__container-active');
            }, 2000);
        })
    });
}