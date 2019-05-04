// ==UserScript==
// @name         https://hh.ru/employers_company/*
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://hh.ru/employers_company/*
// @grant        none
// ==/UserScript==

(function () {
    'use strict';
    var link = document.getElementsByClassName("employers-company__description");
    console.log("Найдено ссылок на страницы компаний: " + link.length);
    var i = 0;

    function start() {
        setTimeout(function () {
            if (i < link.length) {

                var old;
                if (JSON.parse(localStorage.getItem('page')) != null) {
                    console.log("localStorage != null");
                    old = JSON.parse(localStorage.getItem('page'));
                } else {
                    console.log("localStorage == null");
                    old = 0;
                }
                newPage = old + 1;

                console.log("Начало обработки ссылки № " + i);
                console.log(document.getElementsByClassName("employers-company__description")[i].getElementsByTagName("a")[0]);
                window.open(document.getElementsByClassName("employers-company__description")[i].getElementsByTagName("a")[0]+"?page="+newPage);
                i++;
                console.log(i);
                start();
            } else {
                console.log("Парсинг на данной странице завершен. Переходим на следующую.")
                setTimeout(function () {
                    cuntPage();
                }, 1000);
                setTimeout(function () {
                    nextPage();
                }, 3000);
                setTimeout(function () {
                    closeTab();
                }, 5000);
            }
        }, 4000);
    }

    var newPage;

    function cuntPage() {
        console.log("start countPage function");
        var old;
        if (JSON.parse(localStorage.getItem('page')) != null) {
            console.log("localStorage != null");
            old = JSON.parse(localStorage.getItem('page'));
        } else {
            console.log("localStorage == null");
            old = 0;
        }
        newPage = old + 1;
        localStorage.setItem('page', JSON.stringify(newPage));
    }

    function nextPage() {
        console.log("start nextPage function");
        var nextLink = "https://hh.ru/employers_company/informacionnye_tekhnologii_sistemnaya_integraciya_internet/page-"+newPage+"?area=113";
        console.log(nextLink);
        window.open(nextLink);
    }

    function closeTab() {
        window.top.close();
    }

    start();
})();