export let modalApplication = function() {
    const modalApplicationWrp = document.querySelector('[data-input-wrp]');
    if(modalApplicationWrp != null) {
        const form = modalApplicationWrp.querySelector('[data-input]');
        const btnClose = modalApplicationWrp.querySelector('[data-btn-close]');
        const brnArrOpen = document.querySelectorAll('[data-btn-open-modal]');

        brnArrOpen.forEach(el => {
            el.addEventListener('click', () => {
                form.classList.add('active');
            })
        });
        btnClose.addEventListener('click', () => {
            form.classList.remove('active');
        });
    }
}