$(document).ready(function() {

    $('.tweet').hover(function() {
        $('.del_btn_tweet').removeClass('translate-x-20');
    }, function() {
        $('.del_btn_tweet').addClass('translate-x-20');
    });
});