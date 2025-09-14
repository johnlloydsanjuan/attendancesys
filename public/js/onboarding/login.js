$(document).on('click', '.loginButton', function(){
    loginBtn = $(this);
    startButtonLoading(loginBtn);
    buttonShake(loginBtn);

    setTimeout(function(){
        endButtonLoading(loginBtn);
    }, 2000);
})

$(document).on('click', '.googleButton', function(){
    loginBtn = $(this);
    buttonShake(loginBtn);

})
