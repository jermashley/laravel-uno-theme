// People Modals

window.peopleModal = function() {

    let cardId = $('.card, .launchesModal').attr('id');
    

    $('#' + cardId).find('.cardContent__action').click(function() {

        $.get("/partials/people/" + cardId, function(peopleModalPartial) {

            $('body').toggleClass('modal-open').append('<div class="modal">' + peopleModalPartial + '</div>');

        });
        
    });

    $(document).ready(function() {
        console.log('Ready to launch the people modal.');
    });

}