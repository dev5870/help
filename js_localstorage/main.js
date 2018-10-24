var name = document.querySelectorAll(".resume p")[2].textContent;
var about = document.querySelectorAll(".resume p")[3].textContent;
var phoneNumber = document.querySelectorAll(".resume p")[4].textContent;
var email = document.querySelectorAll(".resume p")[5].textContent;

console.log(phoneNumber);

// localStorage.setItem(name, JSON.stringify(data));

var oldItems = JSON.parse(localStorage.getItem('itemsArray')) || [];

var newItem = {
    'name': name,
    'about': about,
    'phone': phoneNumber,
    'email': email
};

oldItems.push(newItem);

localStorage.setItem('itemsArray', JSON.stringify(oldItems));