window.onload = function () {
    // Логика мадалки
    const nav = document.getElementById('nav'),
        lock = nav.querySelector('.header__nav-wrp'),
        burger = nav.querySelector('.header__burger');

    const mainCont = document.getElementById('lock'),
        modalWrp = mainCont.querySelector('.main-form__container'),
        clickClose = mainCont.querySelector('.main-form__form-wrp');

    const body = document.querySelector('body');

    const main = document.querySelector('main'),
        buttonIndex = main.querySelectorAll('.btn-pop-up');

    burger.addEventListener("click", () => {
        burger.classList.toggle('header__burger-active');
        lock.classList.toggle('header__nav-wrp-active');
        body.classList.toggle('body-lock')
    });

    buttonIndex.forEach((el) => {
        el.addEventListener("click", () => {
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

    // Валидация

    let form = document.querySelector('.js-form'),
        formInputs = form.querySelectorAll('.js-input'),
        inputEmail = form.querySelector('.js-input-email'),
        inputPhone = form.querySelector('.js-input-phone');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(email).toLowerCase());
    }

    function validateCountry(country) {
        let reC = new RegExp('.ru$');
        return reC.test(String(country).toLowerCase());
    }


    form.onsubmit = function () {
        let emailVal = inputEmail.value,
            phoneVal = inputPhone.value,
            emptyInputs = Array.from(formInputs).filter(input => input.value === '');

        formInputs.forEach(function (input) {
            if (input.value === '') {
                input.classList.add('errorInput')
            } else {
                input.classList.remove('errorInput')
            }
        });

        if (emptyInputs.length !== 0) {
            return false;
        }

        if (!validateEmail(emailVal)) {
            console.log("email error");
            inputEmail.classList.add('errorInput')
            return false;
        } else {
            inputEmail.classList.remove('errorInput')
        }

        if (validateCountry(emailVal)) {
            console.log("email error");
            inputEmail.classList.add('errorInput');
            alert('Руский военный корабль пошел нахуй')
            return false;
        } else {
            inputEmail.classList.remove('errorInput')
        }
    }

}