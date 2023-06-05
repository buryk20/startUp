export let headerBurger = function() {
    const nav = document.querySelector('#nav');
    if(nav != null) {
        const lock = nav.querySelector('.header__nav-wrp');
        const burger = nav.querySelector('.header__burger');

        burger.addEventListener("click", () => {
            burger.classList.toggle('header__burger-active');
            lock.classList.toggle('header__nav-wrp-active');
            document.querySelector('body').classList.toggle('body-lock');
        });
    }
}