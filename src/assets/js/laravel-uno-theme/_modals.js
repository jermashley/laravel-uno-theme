window.samePageModalContent = function() {

    $(document).ready(function(){
            
        $('.launchesModal').find('.cardContent__action').on('click', function(){
            let launchesModalId = $(this).closest('.launchesModal').attr('id');
            let modalToLaunch = $('#' + launchesModalId + 'Modal');
            console.log('You clicked to open ' + modalToLaunch);
            setOverflowHidden('body');
            $(modalToLaunch).closest('.modal').toggleClass('hidden');
        });
            
        addCloseHandler();

        closeModal();

    });

}

window.addCloseHandler = function() {
    $('.modal').append('<span class="closesModal"><i class="far fa-times fa-fw"></i></span>');
}

window.closeModal = function() {
    $('.closesModal').click(function(){
        $(this).closest('.modal').toggleClass('hidden');
        removeOverflowHidden('body');
    });
}

window.setOverflowHidden = function(e) {
    $(e).addClass('overflowHidden');
}

window.removeOverflowHidden = function(e) {
    $(e).removeClass('overflowHidden');
}

samePageModalContent();