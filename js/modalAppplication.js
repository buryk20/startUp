import {Add} from './functionGlobal';
const add = new Add();

export let modalApplication = function() {
    const modalApplicationWrp = document.querySelector('[data-input-wrp]');
    if(modalApplicationWrp != null) {
        const form = modalApplicationWrp.querySelector('[data-input]');
        const btnClose = modalApplicationWrp.querySelector('[data-btn-close]');
        const brnArrOpen = document.querySelectorAll('[data-btn-open-modal]');
        const formContainer = modalApplicationWrp.querySelector('[data-container]')

        brnArrOpen.forEach(el => {
            el.addEventListener('click', () => {
                form.classList.add('active');
            })
        });
        
        add.removeActive(btnClose, form);
        add.removeActive(form, form);
        add.stopPropagationFun(formContainer);
    }
}

