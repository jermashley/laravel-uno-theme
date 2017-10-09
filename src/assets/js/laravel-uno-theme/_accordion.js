window.accordion = function () {
    $('.accordion__toggle').off().click(function(e) {

        console.log('You clicked to open an accordion tab.');

        var $this = $(this);

        if ($this.next().hasClass('accordion__show')) {
            $this.next().removeClass('accordion__show');
            $this.next().slideUp(350);
            $this.find('.fa').removeClass('fa-rotate-180');
        }

        else {
            $this.parent().parent().find('.accordion__inner').removeClass('accordion__show');
            $this.parent().parent().find('.accordion__inner').slideUp(350);
            $this.next().toggleClass('accordion__show');
            $this.next().slideToggle(350);
            $this.parent().parent().find('.fa-rotate-180').removeClass('fa-rotate-180');
            $this.find('.fa').addClass('fa-rotate-180');
        }
    });
}

accordion();