import {removeClass} from './functionGlobal.js';
import {stopPropagationFunctionArr} from './functionGlobal.js';

export let modalContacts = function() {
    const modalContactsWrp = document.querySelector('[data-contacts-wrp-pop-up]'); 
        if(modalContactsWrp != null) {
            const btnContacts = document.querySelectorAll('[data-contact-btn]'),
                contactMod = modalContactsWrp.querySelector('[data-contact-modal]'),
                contactClose = modalContactsWrp.querySelectorAll('[data-contact-btn-close]');
            const mainDocum = document.querySelector('body');
            const contactContainer = document.querySelectorAll('[data-contact-modal-container]')
                
            btnContacts.forEach((el) => {
                el.addEventListener("click", (event) => {
                    event.stopPropagation();
                    contactMod.classList.add('active');
                    mainDocum.classList.add('active');
                })
            });
            contactMod.addEventListener('click', function () {
                mainDocum.classList.remove('active');
                this.classList.remove('active');
            });
            removeClass(contactClose, contactMod);
            removeClass(contactClose, mainDocum);
            stopPropagationFunctionArr(contactContainer);
    }
}