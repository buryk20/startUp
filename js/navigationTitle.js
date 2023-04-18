export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItem = navMainWrp.querySelectorAll('.header__nav-item');
        let namePage = document.URL;
        arrNavItem.forEach((el, index) => {
            el.addEventListener('click', () => {
                localStorage.setItem(el.getAttributeNode('data-name').nodeValue, index)
                // if(namePage === el.getAttributeNode('data-name').nodeValue){
                //     arrNavItem[index].classList.add('nav-list-active');
                // } else {
                //     if(namePage.includes(el.getAttributeNode('data-name').nodeValue) && (namePage != el.getAttributeNode('data-name').nodeValue)) {
                //         arrNavItem[index].classList.add('nav-list-active');
                //     }
                // }
                arrNavItem.[localStorage.getItem(el.getAttributeNode('data-name').nodeValue)]
            })
        });
    }
    console.log(localStorage.getItem('https://laravel.star-up-group.com.ua/'));
    
}