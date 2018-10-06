function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function clickOnApproveButton(e){
    var item = $(e.target).parents('.rew-item').first();
    var buttons = item.find('.rew-plus, .rew-minus');
    buttons.addClass('disabled');
}
$(function () {
    $('[placeholder]').placeholder();
    $('a[href^="#"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
    $('#comment-form').on('submit', function (e) {
        alert('Комментарий принят!');
        $('#overlay').remove();
        $(".popup").fadeOut(100);
        $('#comment-form input[type=text]').val();
        $('#comment-form textarea').val();
        //$('#comment-form').reset();
        e.preventDefault();
        e.stopPropagation();

        return false;
    });
    $('span.add-rew').click(function () {
        $(".popup").fadeIn(500);
        $("body").append("<div id='overlay'></div>");
        $('#overlay').show().css('opacity', '0.8');
        $('a.close, #overlay').click(function () {
            $('.popup').fadeOut(100);
            $('#overlay').remove();
            return false;
        });
        $('.popup').click(function (e) {
            e.stopPropagation();
        });
        return false;
    });
    $('.animate').on('click', function (e) {
        var el = $(e.target);
        if (el[0].tagName.toLowerCase() == 'img') {
            el = el.parent();
        }
        var animateElements = el.parent().find('.animate');
        animateElements.removeClass('active');
        el.addClass('active');
        var img = el.find('img');
        var url = img.attr('src');
        var target = el.attr('data-target');
        $(target).attr('src', url);
    });
    $('.all-rew').on('click', function () {
        var html = '';
        var realComments = $('.rew-item').length;
        for (var i = openedComments; i < comments.length; i++) {
            var comment = comments[i];
            html += '<div class="rew-item">' +
            '<div class="clearfix">' +
            '<div class="rew-img">' +
            '<img src="' + comment.img + '" alt="">' +
            '</div>' +
            '<div class="rew-text">' +
            '<span><b>' + comment.name + ',</b> 17.08.2016</span>' +
            '<p>' + comment.text + '</p>' +
            '</div>' +
            '</div>' +
            '<div class="rew-rating">' +
            'Отзыв полезен?&emsp;&nbsp;' +
            '<span class="rew-plus"><span class="rew-but"></span><span' +
            'class="rew-col">' + getRandomInt(5, 50) + '</span></span>' +
            '<span class="rew-minus"><span class="rew-but"></span><span' +
            'class="rew-col">' + getRandomInt(0, 2) + '</span></span>' +
            '</div>' +
            '</div>';
            openedComments++;
        }
        $(html).appendTo($('.rew-cont'));
        $('.rew-plus, .rew-minus').off('click');
        $('.rew-plus, .rew-minus').on('click', clickOnApproveButton);
    });
    $('.rew-plus, .rew-minus').on('click', clickOnApproveButton);
    $('.tov-button').on('click', function (e) {
        var productId = $(e.target).attr('data-item');
        var ordername = $(e.target).attr('data-name');
        var orderphone = $(e.target).attr('data-phone');
        var src = '../call.php' + '?theme=' + productId + '&name=' + ordername + '&phone=' + orderphone;
        $('<iframe width="0" height="0" border="0" src="'+src+'" id="query"></iframe>').appendTo($(document.body));
        $('#query').on('load', function(){
            $(e.target).addClass('added');
            $(e.target).html('Добавлено');
            $('#query').remove();
        });
    });
});
 