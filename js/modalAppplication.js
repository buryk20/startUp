export let modalApplication = function() {
    const modalApplicationWrp = document.querySelector('[data-input-wrp]');
    if(modalApplicationWrp != null) {
        const mainCont = document.getElementById('lock');
        const nav = document.getElementById('nav'),
            lock = nav.querySelector('.header__nav-wrp'),
            burger = nav.querySelector('.header__burger');
        const modalWrp = mainCont.querySelectorAll('.main-form__container');
        const clickBtnMod = mainCont.querySelector('.btn-form');
        const formWrp = mainCont.querySelector('.js-activ');
        const clickClose = mainCont.querySelector('.main-form__form-wrp');

        const body = document.querySelector('body');

        const main = document.querySelector('main'),
            buttonIndex = main.querySelectorAll('.btn-pop-up');

        const confirmation = document.getElementById('accept');

        const contactClose = mainCont.querySelectorAll('.js-btn-close');

        contactClose.forEach((el) => {
            el.addEventListener("click", function (event) {
                formWrp.classList.remove('popup-form__active');
                formWrp.classList.remove('popup-form__container');
            })
        })

        burger.addEventListener("click", () => {
            burger.classList.toggle('header__burger-active');
            lock.classList.toggle('header__nav-wrp-active');
            body.classList.toggle('body-lock');
        });

        buttonIndex.forEach((el) => {
            el.addEventListener("click", () => {
                console.log('sdfc');
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
        
    }
}