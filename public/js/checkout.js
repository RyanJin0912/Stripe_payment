Stripe.setPublishableKey('pk_test_xuayeIjNY1ku7kAOu5sYOIvt');
//setting  publishiable key


var $form = $('#checkout-form');



$form.submit(function(event){

    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled',true);


    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name:$('#name').val()
    }, stripeResponseHandler);
//信用卡儲存列表


    return false;
});//$form.submit()



function stripeResponseHandler(status, response){

    if(response.error)
    {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled',false);
    }
    else
    {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        $form.get(0).submit();
    }


}//stripeResponseHandler(status, response)



