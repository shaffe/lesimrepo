
$(document).ready(function () {

    $('.form-control').tooltip()

    ///////////////// send button ////////////////
    $('#sendButton').click(function () {
        $('#icon').animate({
            opacity: 0.05
        })
        $('#icon').animate({
            opacity: 1
        }, 5000)
    });
});