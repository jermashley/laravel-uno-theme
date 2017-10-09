$('.nav-button').click(function(){
    $(this).closest('nav').toggleClass('nav__expand');
    $('body').toggleClass('nav__overflow');
    $(this).find('i').toggleClass('fa-bars fa-times');
});


if($(window).width() > 1024) {
    $('.parentMenu').hover(
        function(){
            console.log('you done hovered');
            $(this).find('#navigation').fadeIn(150);
        },
        function(){
            $(this).find('#navigation').fadeOut(150);
        }
    );
}
