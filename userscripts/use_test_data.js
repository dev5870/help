// ==UserScript==
// @name         Use test data for registration form
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://site.com/*
// @icon         https://www.google.com/s2/favicons?domain=site.com
// @grant        none
// ==/UserScript==

// скрипт заполняет форму регистрации тестовыми данными

(function() {
    'use strict';

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    $(document).ready(function() {
        $("#signuplandform-email").val("testdata"+getRandomInt(100000000, 900000000)+"@gmail.com");
        $("#signuplandform-password").val("password");
        $("#signUpFormContact").val("9991112233");

        if (window.location.href.indexOf("d=1") > -1) {
            // alert("Форма регистрации будет заполнена тестовыми данными");
        }
    });

})();
