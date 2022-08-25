window.onload = function () {
    // Логика мадалки input
    const mainCont = document.getElementById('lock');
    const nav = document.getElementById('nav'),
        lock = nav.querySelector('.header__nav-wrp'),
        burger = nav.querySelector('.header__burger');
    const modalWrp = mainCont.querySelectorAll('.main-form__container');
    const clickBtnMod = mainCont.querySelector('.btn-form');
    const formWrp = mainCont.querySelector('.js-activ');
    const clickClose = mainCont.querySelector('.main-form__form-wrp');
    console.log(modalWrp);

    const body = document.querySelector('body');

    const main = document.querySelector('main'),
        buttonIndex = main.querySelectorAll('.btn-pop-up');

    const confirmation = document.getElementById('accept');

    burger.addEventListener("click", () => {
        burger.classList.toggle('header__burger-active');
        lock.classList.toggle('header__nav-wrp-active');
        body.classList.toggle('body-lock');
    });

    buttonIndex.forEach((el) => {
        el.addEventListener("click", () => {
            formWrp.classList.add('popup-form__container');
            formWrp.classList.add('popup-form__active');

        })
    });

    modalWrp.forEach((el) => {
        el.addEventListener("click", (event) => {
            event.target.classList.remove('popup-form__active');

            setTimeout(() => {
                formWrp.classList.remove('popup-form__container');
                formWrp.classList.add('main-form__container');
            }, 5000);
        });
    })



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

    function validatePhone(phone) {
        let rePh = /^[0-9]*$/;
        return rePh.test(String(phone));
    }


    form.onsubmit = function () {
        let emailVal = inputEmail.value,
            phoneVal = inputPhone.value,
            emptyInputs = Array.from(formInputs).filter(input => input.value === '');

        formInputs.forEach(function (input) {
            if (input.value === '') {
                input.classList.add('errorInput')
                console.log(input);
            } else {
                input.classList.remove('errorInput')
                console.log(input);

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
            inputEmail.classList.add('errorInput');
            alert('Русский военный корабль пошел нах*й')
            return false;
        } else {
            inputEmail.classList.remove('errorInput')
        }

        if (!validatePhone(phoneVal)) {
            inputEmail.classList.add('errorInput');
            return false;
        } else {
            inputEmail.classList.remove('errorInput')
        }

        confirmation.classList.add('popup-accept__container-active');
        setTimeout(() => {
            confirmation.classList.remove('popup-accept__container-active');
        }, 5000);
    }

    // логика работы модалки контакты
    const btnContacts = mainCont.querySelectorAll('.js-btn-contact-item'),
        contactMod = mainCont.querySelector('.js-btn-contact'),
        contactClose = mainCont.querySelectorAll('.js-btn-close');

    btnContacts.forEach((el) => {
        el.addEventListener("click", () => {
            contactMod.classList.add('popup-form__active');

        })
    });
    contactClose.forEach((el) => {
        el.addEventListener("click", function (event) {
            contactMod.classList.remove('popup-form__active');
            formWrp.classList.remove('popup-form__container');
            formWrp.classList.add('main-form__container');
        })
    })

    arrArrow = document.querySelectorAll(".chat-bot-create__arrow");
    arrVisible = document.querySelectorAll(".chat-bot__js");

    arrArrow.forEach((el, index) => {
        el.addEventListener("click", function (e) {
        let indexVisible = 0;

        indexVisible = index;
        arrArrow[index].classList.toggle("js-active");
        arrVisible[indexVisible].classList.toggle("js-active");
        });
    });

  //select type category
  arrButton = document.querySelectorAll(".chat-bot-types__slider-item");
  arrType = document.querySelectorAll(".chat-bot-types__js");
  arrButton.forEach((el, index) => {
    el.addEventListener("click", function (e) {
      delClass(arrButton);
      delClass(arrType);
      let indexType = 0;

      indexType = index;
      arrButton[index].classList.toggle("js-active");
      arrType[indexType].classList.toggle("js-active");
      e.stopPropagation();
    });
  });

  function delClass(item) {
    item.forEach((el) => {
      el.classList.remove("js-active");
    });
  }

}