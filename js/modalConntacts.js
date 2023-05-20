import {removeClass} from './functionGlobal.js';
import {stopPropagationFunction} from './functionGlobal.js';

export let modalContacts = function() {
    const modalContactsWrp = document.querySelector('[data-contacts-wrp-pop-up]'); 
        if(modalContactsWrp != null) {
            const btnContacts = document.querySelectorAll('[data-contact-btn]'),
                contactMod = modalContactsWrp.querySelector('[data-contact-modal]'),
                contactClose = modalContactsWrp.querySelectorAll('[data-contact-btn-close]');
            const mainDocum = document.querySelectorAll('body');
            const contactContainer = document.querySelectorAll('[data-contact-modal-container]')
                
            btnContacts.forEach((el) => {
                el.addEventListener("click", (event) => {
                    event.stopPropagation();
                    contactMod.classList.add('active');
                    mainDocum[0].classList.add('active');
                })
            });
            removeClass(mainDocum, contactMod);
            removeClass(contactClose, contactMod);
            removeClass(contactClose, mainDocum[0]);
            stopPropagationFunction(contactContainer);
    }
}