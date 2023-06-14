import {removeClassArr} from './functionGlobal.js';

export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItemNode = navMainWrp.querySelectorAll('[data-link-nav]');
        const arrLeng = navMainWrp.querySelectorAll('[data-lang]');
        let arrLengBolean = [];
        const elemNav = navMainWrp.querySelectorAll('[data-name]');
        let stringUrl = document.location.pathname;

        urlDelLeng(stringUrl, elemNav);

        function urlDelLeng(url, arr) {
            if(url != "/" & url != "/ru" & url != "/en") {
                url = (url.replace(/\/ru/gi, '')).replace(/\/en/gi, '');
                for(let i = 1; i < arr.length; i++) {
                    if(url.startsWith(arr[i].getAttribute('data-name'))) {
                        arr[i].classList.add('active');
                    }
                }
            } else {
                arr[0].classList.add('active');
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
