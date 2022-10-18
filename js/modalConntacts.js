export let modalContacts = function() {
    const modalContactsWrp = document.querySelector('[data-contacts-wrp]'); 
        if(modalContactsWrp != null) {
            const btnContacts = document.querySelectorAll('.js-btn-contact-item'),
                contactMod = modalContactsWrp.querySelector('.js-btn-contact'),
                contactClose = modalContactsWrp.querySelectorAll('.js-btn-close');
                console.log(btnContacts);
            btnContacts.forEach((el) => {
                el.addEventListener("click", () => {
                    console.log(contactMod);
                    contactMod.classList.add('popup-form__active');

                })
            });
            contactClose.forEach((el) => {
                el.addEventListener("click", function (event) {
                    contactMod.classList.remove('popup-form__active');
                })
            })
        }
}