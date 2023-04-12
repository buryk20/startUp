export let inputForm = function() {
    let namePage = document.URL;
    const form = document.querySelectorAll('.js-form');
    form.forEach((el, index) => {
        console.log(el.querySelector('button'));
        el.querySelector('button').addEventListener('click', function(event) {
            // event.stopPropagation();
            inputValue(index);
        });
    });

    function inputValue(index)  {
        form[index].addEventListener('submit', event => {
            event.preventDefault();
        })
        let arrIn;
        let inputValue = {};
        arrIn = form[index].querySelectorAll('input');
        arrIn.forEach(el => {
            let nameIn = el.name;
            inputValue[nameIn] = el.value;
        });
        if(inputValue.name !== '' && inputValue.company !== '' && inputValue.phone !== '' && inputValue.email !== '') {
            message.text = string(JSON. stringify(inputValue)) + ` Страница: ${namePage}`;
            console.log(message.text);
            xhr.send(JSON.stringify(message));
        }
    }

    function string(srt) {
        return ((srt.replace(/[{}"]/g, '')).replace(/,/gi, ', ')).replace(/:/gi, ': ');
    }

    const xhr = new XMLHttpRequest();
    const url = "https://api.telegram.org/bot1086684695:AAGUePIsqeOsnHABuEJ939JBv1hdjVZSYGQ/sendMessage";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    const message = {
    chat_id: "-1001819362362",
    text: `${namePage}`,
    };
    // xhr.send(JSON.stringify(message));


}