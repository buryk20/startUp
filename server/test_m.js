const fs = require('fs');
const contentful = require('contentful');


const fetchData =  module.exports = async() => {
    // cron.schedule('0 00 * * *', () => {
        try {
            const client = contentful.createClient({
                space: '5f0qcp0syfsf',
                accessToken: 'G4bxZvMZa5AB58gv1nSbUDbP_rdyT1TMAn57-uZSYoo'
            });
            const { items } = await client.withAllLocales.getEntries({
                content_type: 'blogProd'
            })
            const jsonData = items.map(entry => entry.fields);
            const jsonString = JSON.stringify(jsonData, null, 2);
            fs.writeFile('./data/output.json', jsonString, 'utf8', (err) => {
                if (err) {
                console.error('Ошибка при записи файла:', err);
                } else {
                console.log('JSON-файл успешно создан!');
                }
            });
            console.log(items[0].fields);
            return items
        } catch(error) {
            throw new Error(erroe);
        }
    // })
}
