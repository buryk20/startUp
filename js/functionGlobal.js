export let removeClass = function(elem, elemFromRemoveClass) {
    elem.forEach((el) => {
        el.addEventListener("click", function () {
            elemFromRemoveClass.classList.remove('active');
        })
    });
}

export let removeClassArr = function(elem) {
    elem.forEach((el) => {
        el.classList.remove('active');
    });
}

export let stopPropagationFunction = function(elem) {
    elem.forEach((el) => {
        el.addEventListener('click', (event) => {
            event.stopPropagation();
        })
    })
}