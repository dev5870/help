var names = ["Сергей", "Евгений", "Григорий", "Владимир", "Константин",
  "Дмитрий", "Виталий", "Георгий", "Алексей", "Антон", "Илья", "Стас", "Денис",
  "Алиса", "Светлана", "Лиза", "Татьяна", "Тамара", "Алена", "Елена", "Анна", "Юлия"
];

var reviews = ["Сергей", "Евгений", "Григорий", "Владимир", "Константин",
  "Дмитрий", "Виталий", "Георгий", "Алексей", "Антон", "Илья", "Стас", "Денис",
  "Алиса", "Светлана", "Лиза", "Татьяна", "Тамара", "Алена", "Елена", "Анна", "Юлия"
];

var months = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля",
  "августа", "сентября", "октября", "ноября", "декабря"
];

var todaysDate = new Date();

var firstRandom = getRandomImage(0, 5);
var secondRandom = getRandomImage(13, 22);
var thirdRandom = getRandomImage(6, 12);

var date = todaysDate.getDate();
var month = months[todaysDate.getMonth()];
var year = todaysDate.getFullYear();

function getRandomImage(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

window.onload = function insert() {
  document.getElementById('k-name-first').innerHTML = names[firstRandom];
  document.getElementById('k-name-second').innerHTML = names[secondRandom];
  document.getElementById('k-name-third').innerHTML = names[thirdRandom];

  document.getElementById('k-review-first').innerHTML = reviews[firstRandom];
  document.getElementById('k-review-second').innerHTML = reviews[secondRandom];
  document.getElementById('k-review-third').innerHTML = reviews[thirdRandom];

  document.getElementById('k-date-first').innerHTML = date + ' ' + month + ' ' + year;
  document.getElementById('k-date-second').innerHTML = date + ' ' + month + ' ' + year;
  document.getElementById('k-date-third').innerHTML = date + ' ' + month + ' ' + year;

  document.getElementById('user-photo-first').innerHTML = '<img src="otz/img/first-man.png" alt="фото клиента" title="фото клиента">';
  document.getElementById('user-photo-second').innerHTML = '<img src="otz/img/woman.png" alt="фото клиента" title="фото клиента">';
  document.getElementById('user-photo-third').innerHTML = '<img src="otz/img/second-man.jpg" alt="фото клиента" title="фото клиента">';
}

console.log(todaysDate.getDate());
console.log(months[todaysDate.getMonth()]);
console.log(todaysDate.getFullYear());
console.log(names);
