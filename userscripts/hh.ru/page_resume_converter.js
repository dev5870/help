// ==UserScript==
// @name         https://hh.ru/resume_converter/*
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://hh.ru/resume_converter/*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    setTimeout(function () {

        console.log('start');
        var name = document.querySelectorAll(".resume p")[2].textContent;
        var about = document.querySelectorAll(".resume p")[3].textContent;
        var phoneNumber = document.querySelectorAll(".resume p")[4].textContent;
        var email = document.querySelectorAll(".resume p")[5].textContent;
        var workName = document.querySelector(".resume__position").textContent;
        var social = document.querySelectorAll(".resume p")[6].textContent;

        var oldItems = JSON.parse(localStorage.getItem('itemsArray')) || [];

        var newItem = {
            'name': name,
            'about': about,
            'phone': phoneNumber,
            'email': email,
            'social': social,
            'workName': workName
        };

        oldItems.push(newItem);

        localStorage.setItem('itemsArray', JSON.stringify(oldItems))

        setTimeout(function () {
            window.top.close();
        }, 500);
    }, 500);




})();