
$(document).ready(function () {
    $('.SmoothmyTop').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });


});

$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.SmoothmyTop').fadeIn();
    } else {
        $('.SmoothmyTop').fadeOut();
    }
});
