import {removeClassArr} from './functionGlobal.js';

export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItemNode = navMainWrp.querySelectorAll('[data-link-nav]');
        const arrLeng = navMainWrp.querySelectorAll('[data-lang]');
        let arrLengBolean = [];
        const elemNav = navMainWrp.querySelectorAll('[data-name]');


        let stringUrl = document.location.pathname;
        urlDelLeng();
        function urlDelLeng() {
            if(stringUrl != "/" & stringUrl != "/ru" & stringUrl != "/en") {
                stringUrl = (stringUrl.replace(/\/ru/gi, '')).replace(/\/en/gi, '');

                for(let i = 1; i < elemNav.length; i++) {
                    if(stringUrl.startsWith(elemNav[i].getAttribute('data-name'))) {
                        elemNav[i].classList.add('active');
                    }
                }

            } else {
                elemNav[0].classList.add('active');
            }
        }

        arrLeng.forEach((el) => {
            arrLengBolean.push(window.location.pathname.includes('/' + (el.innerHTML).toLowerCase()));
        })
        arrLengBolean.forEach((el, index) => {
            if(el === true) {
                arrLeng[index].classList.add('active');
            } else if (arrLengBolean.indexOf(true) === -1) {
                arrLeng[0].classList.add('active');
            }
        });
    }
}

// elemNav.forEach((el, index) => {
                //     console.log(el.getAttribute('data-name'));
                //     if(stringUrl.startsWith(el.getAttribute('data-name'))) {
                //         console.log(el.getAttribute('data-name'));
                //         el.classList.add('active');
                //     }
                // })