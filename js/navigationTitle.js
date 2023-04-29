export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItemNode = navMainWrp.querySelectorAll('[data-link-nav]');
        const arrLeng = navMainWrp.querySelectorAll('[data-lang]');
        let arrLengBolean = [];
        // arrNavItemNode.forEach((el, index) => {
        //     if(window.location.pathname === el.getAttribute('href').slice(36)) {
        //         arrNavItemNode[index].classList.add('active');
        //     }
        // });
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