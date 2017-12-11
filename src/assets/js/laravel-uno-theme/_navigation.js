$('.nav-button').click(function(){
    $(this).closest('nav').toggleClass('nav__expand');
    $('body').toggleClass('nav__overflow');
    $(this).find('i').toggleClass('fa-bars fa-times');
});


if($(window).width() > 1024) {
    $('.parentMenu').click(function(){

            var clickedLink = $(this);

            $(clickedLink).find('#navigation').click(function(e) {
                
                e.stopPropagation();
                
            });

            console.log('You clicked to open the submenu.');

            $(clickedLink).find('#navigation').fadeToggle(150);

            $(document).keyup(function(e){
                
                if(e.keyCode === 27)
    
                    $(clickedLink).find('#navigation').fadeOut(250);
    
            });

            $(document).click(function(e) {
                
                if(!$(e.target).closest(clickedLink).length) {
        
                    $(clickedLink).find('#navigation').fadeOut(250);
        
                }
                
            });
        }
    );
} else {
    $('.parentMenu').click(function() {

        var clickedLink = $(this);
        var dataLink = clickedLink.find('.parentLink').data('link');

        $(document).ready(function() {
            console.log(dataLink);
        });

        location.href = dataLink;

    });
}
