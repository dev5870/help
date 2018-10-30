// ==UserScript==
// @name         https://hh.ru/resume/*
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://hh.ru/resume/*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    console.log('test alert');

    setTimeout(function () {
        $(".bloko-icon.bloko-icon_download.bloko-icon_initial-impact").click();
        setTimeout(function () {
            var first = document.querySelector('.list-params__item.list-params__item_download-adobereader');
            $(".list-params__item a")[3].click();
            console.log(first);
            setTimeout(function () {
                window.top.close();
            }, 500);
        }, 500);
    }, 500);


})();