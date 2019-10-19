//старый код
var first = document.querySelector('.className');
first.onclick = function() {
    ga('send', 'event', 'href1', 'click1');
    console.log('target ok');
};

//новый код
var first = document.getElementsByClassName("className")[0];
first.onclick = function() {
    console.log("1");
    gtag('event', 'кнопка 1', { 'event_category': 'href', 'event_action': 'click'});
};

var second = document.getElementsByClassName("className")[1];
second.onclick = function() {
    console.log("2");
    gtag('event', 'кнопка 2', { 'event_category': 'href2', 'event_action': 'click2'});
};

var third = document.getElementsByClassName("className")[2];
third.onclick = function() {
    console.log("3");
    gtag('event', 'кнопка 3', { 'event_category': 'href3', 'event_action': 'click3'});
};