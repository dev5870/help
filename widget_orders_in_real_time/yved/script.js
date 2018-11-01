$(document).ready(function(){
    $('<link rel="stylesheet" href="yved/style.css">').appendTo('head');
    function getRandom(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }
    var i = getRandom(1,9);
    function yved(){

        $('.yved:nth-child('+i+')').fadeIn(1500).delay(5000).fadeOut(1500);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
    }
    setTimeout(function(){
        setInterval(
            function(){
                i = i + 1;
                if(i>20) i=1;//10 - количество уведомлений
                $('.yved:nth-child('+i+')').fadeIn(1500).delay(5000).fadeOut(1500);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
            },20000);//25000 - задержка в мс меду показами уведомлений
        yved();
    },3000);//10000 - задержка в мс перед показом первого уведомления
});

var date = new Date();
var order = date.getHours() * 60 / 25;
document.getElementById("number").innerHTML = Math.floor(Math.random() * 230) + 170;
document.getElementById("order").innerHTML = Math.round(order);