// ==UserScript==
// @name         https://hh.ru/employer/*
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://hh.ru/employer/*
// @grant        none
// ==/UserScript==

(function () {
    'use strict';

    setTimeout(function () {

        var name;
        var about;
        var url;
        var active;
        var sfera;
        var profile;

        // проверяем название компании
        if (document.getElementsByClassName("header")[1] != undefined) {
            console.log("Имя существует");
            name = document.getElementsByClassName("header")[1].textContent;
        } else {
            console.log("Имя отсутствует");
            name = "Имя отсутствует";
        }

        // проверяем описание компании
        if (document.getElementsByClassName("g-user-content")[0] != undefined) {
            console.log("Описание существует");
            about = document.getElementsByClassName("g-user-content")[0].textContent;
        } else {
            console.log("Описание отсутствует");
            about = "Описание отсутствует";
        }

        // проверяем url компании
        if (document.getElementsByClassName("company-url")[0] != undefined) {
            console.log("url существует");
            url = document.getElementsByClassName("company-url")[0].textContent;
        } else {
            console.log("url отсутствует");
            url = "url отсутствует";
        }

        // проверяем активные вакансии компании
        if (document.getElementsByClassName("bloko-link-switch HH-SidebarView-LinkColor")[0] != undefined) {
            console.log("активные вакансии существуют");
            active = document.getElementsByClassName("bloko-link-switch HH-SidebarView-LinkColor")[0].textContent;
        } else {
            console.log("Активные вакансии отсутствуют");
            active = "Активные вакансии отсутствуют";
        }

        // проверяем сферы деятельности компании
        if (document.getElementsByClassName("HH-SidebarView-Industries")[0].getElementsByTagName("p")[1] != undefined) {
            console.log("сферы существуют");
            sfera = document.getElementsByClassName("HH-SidebarView-Industries")[0].getElementsByTagName("p")[1].textContent;
        } else {
            console.log("сферы отсутствуют");
            sfera = "сферы отсутствуют";
        }

        // записываем ссылку на профиль компании
        if (document.getElementsByTagName("link")[9] != undefined) {
            console.log("ссылка существует");
            profile = document.getElementsByTagName("link")[9].baseURI;
        } else {
            console.log("ссылка отсутствует");
            profile = "ссылка отсутствует";
        }

        var oldItems = JSON.parse(localStorage.getItem('CompanyItems')) || [];
        var newItem = {
            'name': name,
            'about': about,
            'url': url,
            'active': active,
            'sfera': sfera,
            'profile': profile

        };
        oldItems.push(newItem);
        localStorage.setItem('CompanyItems', JSON.stringify(oldItems));
        setTimeout(function () {
            window.top.close();
        }, 500);
    }, 500);


})();