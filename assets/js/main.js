jQuery(document).ready(function($) {
// navigation footer button
    $(".nav-button-m").click(function() {
        $(this).siblings(".menu").children(".drop-down").toggleClass("closed");
        $(this).toggleClass("open");
        $('#footer').addClass('open');
    });

    $(".closed-mob-menu").click(function() {
        $(this).parent(".drop-down").addClass('closed');
        $(this).parent().parent().siblings(".nav-button-m").removeClass('open');
        $('#footer').removeClass('open');
    });
});