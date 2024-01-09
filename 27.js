function task27() {

  async function getGenderByAPI() {
    const name = prompt('Введите имя:');

    try {
      const response = await fetch(`https://api.genderize.io?name=${name}`);
      const data = await response.json();

      alert(`Имя: ${data.name} \nГендер: ${data.gender} \nВероятность: ${data.probability*100}% \nКоличество: ${data.count}`);
    } catch (error) {
      console.error('Произошла ошибка при запросе к API:', error.message);
    }
  }

  getGenderByAPI();

}