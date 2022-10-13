export let chatBot = function() {
    const chatBotWrp = document.querySelector('[data-chat-dot]');
        if(chatBotWrp != null) {
            const arrArrow = document.querySelectorAll(".chat-bot-create__arrow");
            const arrVisible = document.querySelectorAll(".chat-bot__js");

        arrArrow.forEach((el, index) => {
            el.addEventListener("click", function (e) {
            let indexVisible = 0;

            indexVisible = index;
            arrArrow[index].classList.toggle("js-active");
            arrVisible[indexVisible].classList.toggle("js-active");
            });
        });

    //select type category
        const arrButton = document.querySelectorAll(".chat-bot-types__slider-item");
        const    arrType = document.querySelectorAll(".chat-bot-types__js");
        arrButton.forEach((el, index) => {
            el.addEventListener("click", function (e) {
            delClass(arrButton);
            delClass(arrType);
            let indexType = 0;

            indexType = index;
            arrButton[index].classList.toggle("js-active");
            arrType[indexType].classList.toggle("js-active");
            e.stopPropagation();
            });
        });

        function delClass(item) {
            item.forEach((el) => {
            el.classList.remove("js-active");
            });
        }

    } 
}