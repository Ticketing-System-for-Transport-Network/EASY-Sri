$(function() {

    var owner = $('#owner');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");
    var amex = $("#amex");

    // Use the payform library to format and validate
    // the payment fields.

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


    cardNumber.keyup(function() {

        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }

        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
        }
    });

    confirmButton.click(function(e) {

        e.preventDefault();

        var isCardValid = $.payform.validateCardNumber(cardNumber.val());
        var isCvvValid = $.payform.validateCardCVC(CVV.val());

        if(owner.val().length < 5){       
            // swal("Card Holder is Name Invalid !");
            swal({
                title: "Wrong Card Deatils",
                text: "Card Holder is Name Invalid!",
                icon: "error",
              });
        } else if (!isCardValid) {
            // alert("Wrong card number");
            swal({
                title: "Wrong Card Deatils",
                text: "Card Number is  Invalid!",
                icon: "error",
              });
        } else if (!isCvvValid) {
            // alert("Wrong CVV");
            swal({
                title: "Wrong Card Deatils",
                text: "Card CVV is  Invalid!",
                icon: "error",
              });
        } else {
            // Everything is correct. Add your form submission code here.
            // alert("Everything is correct");
        }
    });
});
