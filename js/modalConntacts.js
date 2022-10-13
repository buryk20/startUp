export let modalContacts = function() {
    const modalContactsWrp = document.querySelector('[data-contacts-wrp]'); 
        if(modalContactsWrp != null) {
            const btnContacts = modalContactsWrp.querySelectorAll('.js-btn-contact-item'),
                contactMod = modalContactsWrp.querySelector('.js-btn-contact'),
                contactClose = modalContactsWrp.querySelectorAll('.js-btn-close');

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
        }
}