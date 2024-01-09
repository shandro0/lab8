const fs = require('fs');

function parseJSONFile(filePath) {
    fs.readFile(filePath, 'utf8', (err, data) => {
      if (err) {
        console.error('Ошибка при чтении файла:', err);
        return;
      }
  
      try {
        const jsonData = JSON.parse(data);
        console.log(jsonData);
      } catch (error) {
        console.error('Ошибка при парсинге JSON:', error);
      }
    });
  }
  
  parseJSONFile(__dirname + '/file.json');