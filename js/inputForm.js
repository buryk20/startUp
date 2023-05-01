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

    // const xhr = new XMLHttpRequest();
    // function getFun(post) {
    //     const url = "http://localhost:3103/step";
    //     xhr.open("POST", url, true);
    //     xhr.onload = function() {
    //     }
    //     xhr.send(post);
    // }

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


    // xhr.setRequestHeader("Content-Type", "application/json");
    // xhr.onreadystatechange = function () {
    //     if (xhr.readyState === 4 && xhr.status === 200) {
    //         console.log(xhr.responseText);
    //     }
    // };
    // const message = {
    // chat_id: "-1001819362362",
    // text: `${namePage}`,
    // };
    // xhr.addEventListener('error', function() {
    //     console.log('error');
    // });
    // xhr.addEventListener('load', () => {
    //     console.log('load');
    // });
    // xhr.open('GET', 'http://localhost:3103/form', true);
    // xhr.onreadystatechange = function () {
    //       if (xhr.readyState === 4 && xhr.status === 200) {
    //         console.log(xhr.responseText);
    //       }
    //     };
    // xhr.send(JSON.stringify(message));
    // xhr.addEventListener('error', function() {
    //     console.log('error');
    // });
    // xhr.addEventListener('load', () => {
    //     console.log('load');
    // });
    // xhr.open('GET', 'http://localhost:3103/form', true);
    // xhr.onreadystatechange = function () {
    //       if (xhr.readyState === 4 && xhr.status === 200) {
    //         console.log(xhr.responseText);
    //       }
    //     };
    // xhr.send(message.text);


}

// let xhr = new XMLHttpRequest();
//     xhr.addEventListener('error', function() {
//         console.log('error');
//     });
//     xhr.addEventListener('load', () => {
//         console.log('load');
//     });
//     xhr.open('GET', 'http://localhost:3103/form', true);
//     xhr.onreadystatechange = function () {
//           if (xhr.readyState === 4 && xhr.status === 200) {
//             console.log(xhr.responseText);
//           }
//         };
//     xhr.send('sdc');
    // console.log(message);

// const url = 'http://localhost:3103/form';

// fetch(url, {
//             method: 'GET',
//             mode: 'no-cors',
//             headers: {
//               'Content-Type': 'application/json'
//             },
//           })
//           .then(function(response) {
//             console.log(response);
//           })
