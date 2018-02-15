window.closeBannerFlash = function () {
    $('.bannerFlash').find('.closeBannerFlash').click(function () {
        $(this).closest('.bannerFlash').fadeToggle(150).remove();
    })
}

closeBannerFlash();

window.closeParent = function () {
    $('*[data-toggle="hide-parent"]').on('click', function() {
        $(this).parent().hide(250);
    })
}

closeParent();