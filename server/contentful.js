const fs = require('fs');
const contentful = require('contentful');
const cron = require('node-cron');

const SPACE_ID = '5f0qcp0syfsf';
const ACCESS_TOKEN = 'G4bxZvMZa5AB58gv1nSbUDbP_rdyT1TMAn57-uZSYoo';

const client = contentful.createClient({
  space: SPACE_ID,
  accessToken: ACCESS_TOKEN
});

const CONTENT_MODEL_ID = 'blog';

// Расписание для выполнения скрипта ежедневно в 10:00 утра
cron.schedule('0 00 * * *', () => {
  client.getEntries({
    content_type: CONTENT_MODEL_ID
  })
    .then(entries => {
      const jsonData = entries.items.map(entry => entry.fields);
      const jsonString = JSON.stringify(jsonData, null, 2);

      fs.writeFile('output.json', jsonString, 'utf8', (err) => {
        if (err) {
          console.error('Ошибка при записи файла:', err);
        } else {
          console.log('JSON-файл успешно создан!');
        }
      });
    })
    .catch(error => {
      console.log('Ошибка при получении данных:', error);
    });
});
