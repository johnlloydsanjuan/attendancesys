$(document).on('click', '.toggle-password', function () {
    let inputid = $(this).prevAll().eq(1).data('id');
    alert('here');
    if (inputid.attr('type') === 'password') {
        inputid.attr('type', 'text');
        $(this).removeClass('fa-regular fa-eye-slash');
        $(this).attr('class', 'fa-regular fa-eye');
    } else {
        inputid.attr('type', 'password');
        $(this).removeClass('fa-regular fa-eye');
        $(this).attr('class', 'fa-regular fa-eye-slash');
    }
});
