function bodyOverflowHidden() {

    $('body').toggleClass('overflowHidden');

}

function toggleModal() {

    $('#ecommerceQuote').toggleClass('hidden');

}

window.updateInputNumberOfCartons = function (lineItemId) {

    $('#' + lineItemId).find('.numberOfCartons').attr('name', lineItemId + '_numberOfCartons');
}

window.updateInputNames_crates = function(lineItemId) {

    $('#' + lineItemId).find('.cartonDimLength').attr('name', lineItemId + '_cartonDimLength');

    $('#' + lineItemId).find('.cartonDimWidth').attr('name', lineItemId + '_cartonDimWidth');

    $('#' + lineItemId).find('.cartonDimHeight').attr('name', lineItemId + '_cartonDimHeight');

    $('#' + lineItemId).find('.cartonDimUnit').attr('name', lineItemId + '_cartonDimUnit');

    $('#' + lineItemId).find('.cartonWeightNumber').attr('name', lineItemId + '_cartonWeightNumber');

    $('#' + lineItemId).find('.cartonWeightUnit').attr('name', lineItemId + '_cartonWeightUnit');

}

window.updateInputNames_pallets = function(lineItemId) {

    $('#' + lineItemId).find('.palletType').attr('name', lineItemId + '_palletType');

    $('#' + lineItemId).find('.palletWeightNumber').attr('name', lineItemId + '_palletWeightNumber');

    $('#' + lineItemId).find('.palletWeightUnit').attr('name', lineItemId + '_palletWeightUnit');


}

window.selectCartonType = function (lineItemId) {

    $('#' + lineItemId).find('.cartonType').change(function () {

        if( $(this).val() == 'Crate') {

            console.log('You chose the Carton / Crate selection.');

            $.get("/solutions/ecommerceQuote/cartonCrate", function (cartonCrate) {

                console.log();

                $('#' + lineItemId).find('.cartonCrate').append(cartonCrate);

                // updateInputNames_crates(lineItemId);

            });

            $('#' + lineItemId).find('.cartonPallet').empty();
        }

        if( $(this).val() == 'Pallet') {

            console.log('You chose the Pallet selection.');

            $.get('/solutions/ecommerceQuote/cartonPallet', function (cartonPallet) {

                console.log();

                $('#' + lineItemId).find('.cartonPallet').append(cartonPallet);

                // updateInputNames_pallets(lineItemId);

            });

            $('#' + lineItemId).find('.cartonCrate').empty();
        }

    })
}

window.deleteLineItem = function () {

    $('.deleteLine').click(function () {

        $(this).closest('.lineItem').remove();

    });
}

var lineItem = 0;

function getLineItem() {

    $.get("/solutions/ecommerceQuote/lineItem", function (newLineItem) {

        console.log();

        lineItem++;

        lineItemId = 'lineItem' + lineItem;

        lineItemTitle = lineItem;

        $('.shipmentDetails').children('.accordion__inner').append(newLineItem).find('#lineItem').attr('id', lineItemId).find('.lineItemTitle').append(lineItemTitle);

        // updateInputNumberOfCartons(lineItemId);

        accordion();

        selectCartonType(lineItemId, lineItemTitle);

        deleteLineItem();

    });

}

$('#getQuote').click(function () {

    console.log('You clicked to open the modal.');

    toggleModal();

    bodyOverflowHidden();

});

$('#ecommerceQuote').children('.closeModal').click(function () {

    console.log('You clicked to close the modal.');

    toggleModal();

    bodyOverflowHidden();

});

$('.cancel').click(function () {

    console.log('You clicked to close the modal.');

    toggleModal();

    bodyOverflowHidden();

});

$('.shipmentDetails').find('.addLine').click(function () {

    console.log('You clicked to add a new line item.');

    getLineItem();

});

