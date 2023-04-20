export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItem = navMainWrp.querySelectorAll('.header__nav-item');
        activeStatus(arrNavItem);
        function activeStatus(arr) {
            let namePage = document.URL;
            arr.forEach((el, index) => {
                if(namePage === el.getAttributeNode('data-name').nodeValue) {
                    el.classList.add('active');
                } if(namePage.includes(el.getAttributeNode('data-name').nodeValue) && (index !== 0)) {
                    el.classList.add('active');
                }
            });
        }
    }
}