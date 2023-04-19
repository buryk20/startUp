export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItem = navMainWrp.querySelectorAll('.header__nav-item');
        let namePage = document.URL;
        arrNavItem.forEach((el, index) => {
            if(namePage === el.getAttributeNode('data-name').nodeValue) {
                el.classList.add('nav-list-active');
            } if(namePage.includes(el.getAttributeNode('data-name').nodeValue) && (index !== 0)) {
                el.classList.add('nav-list-active');
            }
        });
    }
}