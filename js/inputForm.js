export let inputForm = function() {
    var xhr = new XMLHttpRequest();
    let namePage = document.URL;
    const form = document.querySelectorAll('.js-form');
    const message = {
        text: `${namePage}`,
    };
    form.forEach((el, index) => {
        el.querySelector('button').addEventListener('click', async function(event) {
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
            message.text = string(JSON.stringify(inputValue)) + '\n' + `Страница: ${namePage}`;
            // getFun(message.text);
            postTel(message.text);
        }

    }
    function string(srt) {
        return ((srt.replace(/[{}"]/g, '')).replace(/,/gi, ',\n')).replace(/:/gi, ': ');
    }


    function postTel(messageText) {
        const token = '1086684695:AAGUePIsqeOsnHABuEJ939JBv1hdjVZSYGQ'; // замените на свой токен
        const chatId = '-1001819362362'; // замените на свой ID чата

        const message = messageText; // сообщение, которое вы хотите отправить

        fetch(`https://api.telegram.org/bot${token}/sendMessage`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                chat_id: chatId,
                text: message
            })
        })
        .then(res => {
            if (!res.ok) {
                throw new Error(`Failed to send message: ${res.status} ${res.statusText}`);
            }
            console.log('Message sent successfully!');
        })
        .catch(err => {
            console.error(err);
        });
      }
}
