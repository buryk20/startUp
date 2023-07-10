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

// export let Add = class  {

//     getBodyContent() {
//         const bodyElement = document.querySelector('body');
//         return bodyElement;
//     }

//     // bodyAddRemoveActive(elemBodyOver, elemBodyOverHidding) {
//     //     this.bodyOver(elemBodyOver);
//     //     this.bodyOverHidding(elemBodyOverHidding);
//     // }

//     // bodyOverHidding(elem) {
//     //     elem.addEventListener('click', () => {
//     //         this.getBodyContent().classList.remove('active');
//     //         elem.classList.remove('active');
//     //     });
//     // }

//     bodyOver(arr) {
//         arr.forEach(elem => {
//             elem.addEventListener('click', () => {
//                 this.getBodyContent().classList.add('active');
//             });
//         });
//     }

//     removeActive(elemClick, elemRemove) {
//         elemClick.addEventListener('click', () => {
//             elemRemove.classList.remove('active');
//         });
//     }

//     stopPropagationFun(elem) {
//         elem.addEventListener('click', (event) => {
//             event.stopPropagation();
//         });
//     }
// }

