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

export let stopPropagationFunctionArr = function(elem) {
    elem.forEach((el) => {
        el.addEventListener('click', (event) => {
            event.stopPropagation();
        })
    })
}

export let Add = class  {
    removeActive (elemClick, elemRemove) {
        elemClick.addEventListener('click', () => {
            elemRemove.classList.remove('active');
        });
    }
    stopPropagationFun (elem) {
        elem.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    }
}

