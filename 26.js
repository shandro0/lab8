const readline = require('readline');
const nodemailer = require('nodemailer');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});


async function sendEmail() {
  
  let transporter = nodemailer.createTransport({
    host: 'host',
    port: port,
    auth: {
      user: 'user',
      pass: 'pass'
    }
  });

  
  let mailOptions = {
    from: 'from',
    to: 'to',
    subject: 'Тема вашего письма',
    text: 'Текст вашего письма',
  };

  try {
    // Отправляем письмо
    let info = await transporter.sendMail(mailOptions);
    console.log('Отправлен:', info.messageId);
  } catch (error) {
    console.error('Ошибка email:', error);
  }
}

rl.question('Отправить? (Y/N): ', async (answer) => {
  
  answer = answer.toUpperCase();

 
  if (answer === 'Y' || answer === 'YES') {
    await sendEmail();
  } else {
    console.log('НЕ отправлен');
  }

  rl.close();
});

