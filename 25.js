const fs = require('fs');

function readFilesInDirectory(directoryPath) {
    fs.readdir(directoryPath, (err, files) => {
      if (err) {
        console.error('Ошибка при чтении директории:', err);
        return;
      }
  
      files.forEach((file) => {
        console.log(file);
      });
    });
  }
  
  readFilesInDirectory(__dirname);