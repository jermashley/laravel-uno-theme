$(document).ready(function(){
    $('.block__image').mouseenter(function(){
        $(this).find('.image__imageText').removeClass('tucked');
    });
    $('.block__image').mouseleave(function(){
        $(this).find('.image__imageText').addClass('tucked');
    });
})
