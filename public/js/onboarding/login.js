$(document).on('click', '.loginButton', function(){
    thisBtn = $(this);
    emailInput = $('#loginEmail');
    passwordInput = $('#loginPassword');
    emailInputval = $('#loginEmail').val();
    passwordInputval = $('#loginPassword').val();
    startButtonLoading(thisBtn);


    if((emailInputval == null || emailInputval == "") && (passwordInputval == null || passwordInputval == "")){
        if(emailInputval == null || emailInputval == ""){
            inputError(emailInput);
        }
        if(passwordInputval == null || passwordInputval == ""){
            inputError(passwordInput);
        }
        buttonShake(thisBtn);
        endButtonLoading(thisBtn);
    }

    // setTimeout(function(){
    //     endButtonLoading(thisBtn);
    // }, 2000);
})

$(document).on('click', '.googleButton', function(){
    thisBtn = $(this);
    buttonShake(thisBtn);

})
