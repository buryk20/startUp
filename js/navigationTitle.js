export let navigationTitle = function() {
    console.log(navMainWrp);
    if(navMainWrp != null) {
        const arrNavItemNode = navMainWrp.querySelectorAll('[data-link-nav]');
        const arrLeng = navMainWrp.querySelectorAll('[data-lang]');
        arrNavItemNode.forEach((el, index) => {
            if(window.location.pathname === el.getAttribute('href').slice(36)) {
                arrNavItemNode[index].classList.add('active');
            }
        });
        arrLeng.forEach((el, index) => {
            if(window.location.pathname.includes('/' + (el.innerHTML).toLowerCase())) {
                arrLeng[index].classList.add('active');
            }
        })
    }
}