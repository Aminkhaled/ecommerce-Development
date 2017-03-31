$(document).ready(function () {
    $(window).scroll(function () {
        $('#logo-text').css('position','absolute')
            .css('top','50%')
            .css('left','15%');
    }).scrollTop(function () {
        $('#logo-text').css('position','absolute')
            .css('top','35%')
            .css('left','15%');
    });




});
