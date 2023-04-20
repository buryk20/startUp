export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const arrNavItemNode = navMainWrp.querySelectorAll('.header__nav-item');
        const arrNavItem = Array.from(arrNavItemNode);
        const arrLeng = navMainWrp.querySelectorAll('.header__lang-item');
        activeNavStatus(arrNavItem)
        // activeStatus(arrLeng);
        // activeNavStatus(arrNavItem);
        // function activeStatus(arr) {
        //     let namePage = document.URL;
        //     arr.forEach((el, index) => {
        //         if(index === 0) {
        //             el.classList.add('active')
        //         } if(namePage.includes(el.getAttributeNode('data-name').nodeValue) && (index !== 0)) {
        //             el.classList.add('active')
        //         }
                     
        //     });
        // }
        function activeNavStatus(arr) {
            arr.forEach((el, index) => {
                el.addEventListener('click', function() {
                    localStorage.clear();
                    localStorage.setItem(arrNavItemNode[index].getAttributeNode('data-name').nodeValue, index);
                });
            });
        }

        function reload() {
            arrNavItemNode.forEach((el, index) => {
                if(el.getAttributeNode('data-name').nodeValue === localStorage.key(0)) {
                    arrNavItem[index].classList.add('active')
                }
            })
        }

        reload();
    }
}