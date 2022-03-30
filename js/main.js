window.onload = function () {
    const nav = document.getElementById('nav');
    const mainCont = document.getElementById('lock');

    const body = document.querySelector('body');
    const lock = nav.querySelector('.header__nav-wrp');
    const burger = nav.querySelector('.header__burger');

    const main = document.querySelector('main');

    const buttonIndex = main.querySelectorAll('.btn-pop-up');
    const btnPopUpSend = main.querySelector('.btn-form');
    const modalWrp = mainCont.querySelector('.main-form__container');
    const acept = mainCont.querySelector('.popup-accept__container');
    const formDoc = document.forms.form;

    const clickClose = mainCont.querySelector('.main-form__form-wrp');

    burger.addEventListener("click", () => {
        burger.classList.toggle('header__burger-active');
        lock.classList.toggle('header__nav-wrp-active');
        body.classList.toggle('body-lock')
    });

    buttonIndex.forEach((el) => {
        el.addEventListener("click", () => {
            // modalWrp.classList.remove('main-form__container');
            modalWrp.classList.add('popup-form__container');
            modalWrp.classList.add('popup-form__active');
        })
    });

    modalWrp.addEventListener("click", () => {
        // modalWrp.classList.remove('popup-form__active');
        formDoc.elements.name.classList.remove('errorInput');
        formDoc.elements.phone.classList.remove('errorInput');
        formDoc.elements.email.classList.remove('errorInput');
        setTimeout(() => {
            modalWrp.classList.remove('popup-form__container');
            modalWrp.classList.add('main-form__container');
        }, 500);
    });

    clickClose.addEventListener("click", function (event) {
        event.stopPropagation();
    });

    btnPopUpSend.addEventListener("click", function (e) {
        let name = formDoc.elements.name.value;
        let email = formDoc.elements.email.value;
        let phone = formDoc.elements.phone.value;
        if (name === '') {
            formDoc.elements.name.classList.add('errorInput');
        } if (name !== '') {
            formDoc.elements.name.classList.remove('errorInput');
        } if (email === '') {
            formDoc.elements.email.classList.add('errorInput');
        } if (email !== '') {
            formDoc.elements.email.classList.remove('errorInput');
        } if (phone === '') {
            formDoc.elements.phone.classList.add('errorInput');
        } if (phone !== '') {
            formDoc.elements.phone.classList.remove('errorInput');
        } if (name !== '' && phone !== '' && email !== '') {
            modalWrp.classList.remove('popup-form__active');
            acept.classList.add('popup-accept__container-active');
            setTimeout(() => {
                acept.classList.remove('popup-accept__container-active');
            }, 2000)
        }
    });
}