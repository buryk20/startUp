var express = require("express"); // подключить express(упрощение для NodeJs) из папки node_modules

var fs = require("fs"); // fs -- обтект который дает возможность читать файлы(например json)
var app = express();
var bodyParser = require("body-parser"); // 'body-parser' -- библиотека дает возможность прочитать post запрос на NodeJs

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.text());
app.use(bodyParser.json({ type: "application/json" }));

app.use(function (req, res, next) {
  res.setHeader("Access-Control-Allow-Origin", "*");
  res.setHeader("Access-Control-Allow-Methods","GET, POST, OPTIONS, PUT, PATCH, DELETE");
  res.setHeader("Access-Control-Allow-Headers","X-Requested-With,content-type");
  res.setHeader("Access-Control-Allow-Credentials", true);
  next();
});

const port = 3103;

app.listen(port, function () {
    // говорим на каком порту запускать нашу  NODE_JS  программу.
    console.log(`Example app listening on port http://localhost:${port}/`);
});

app.post("/step", function (req, res) {
  res.send('message sent');
  postTel(req.body);
});


function postTel(messageText) {
  const token = '6094864110:AAFQoBlAqSTBoSc3pDTC3i-EwV9lBN3TpS8'; // замените на свой токен
  const chatId = '-1001784985748'; // замените на свой ID чата

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