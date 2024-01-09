const express = require('express');
const app = express();
const port = 3000;

//обслуживать все файлы из корня проекта, включая index.html, server.js и другие статические файлы.
app.use(express.static(__dirname)); 

// Запуск сервера
//app.listen(port, callback) - метод используется для запуска HTTP-сервера на указанном порту
app.listen(port, () => {
  console.log(`Сервер запущен на порту ${port}`);
});
