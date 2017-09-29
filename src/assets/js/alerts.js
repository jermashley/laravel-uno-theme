window.closeBannerFlash = function () {
    $('.bannerFlash').find('.closeBannerFlash').click(function () {
        $(this).closest('.bannerFlash').fadeToggle(150).remove();
    })
}

closeBannerFlash();