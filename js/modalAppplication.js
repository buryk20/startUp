import {Add} from './functionGlobal';


export let modalApplication = function() {
    const modalApplicationWrp = document.querySelector('[data-input-wrp]');
    if(modalApplicationWrp != null) {
        const add = new Add();
        const form = modalApplicationWrp.querySelector('[data-input]');
        const btnClose = modalApplicationWrp.querySelector('[data-btn-close]');
        const brnArrOpen = document.querySelectorAll('[data-btn-open-modal]');
        const formContainer = modalApplicationWrp.querySelector('[data-container]')

        brnArrOpen.forEach(el => {
            el.addEventListener('click', () => {
                form.classList.add('active');
            })
        });
        add.body(brnArrOpen, btnClose);
        add.removeActive(btnClose, form);
        add.removeActive(form, form);
        add.stopPropagationFun(formContainer);
    }
}

