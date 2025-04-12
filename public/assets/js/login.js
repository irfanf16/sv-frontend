$('#login-section .btn_login').click(function (e) {
    // console.log('start btn clicked');
    e.preventDefault();
    flag = 1;
    var email = $('#email').val();
    if (email == "") {
        $('#email-error').html('This field is required').removeClass('hide');
        $('#email').addClass('form-error-input');
        flag = 0;
    }
    else {
        var emailValue = $('#email').val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Check if the email matches the regex pattern
        if (emailRegex.test(emailValue)) {
            $('#email').removeClass('form-error-input');
            $('#email-error').html('').addClass('hide');
        } else {
            $('#email').addClass('form-error-input');
            $('#email-error').html('Invalid Email Address').removeClass('hide');
            flag = 0;
        }
    }
    var password = $('#password').val();

    if (password == "") {
        $('#password-error').html('This field is required').removeClass('hide');
        $('#password').addClass('form-error-input');
        flag = 0;
    }
    else {
        $('#password').removeClass('form-error-input');
        $('#password-error').html('').addClass('hide');
    }

    if (flag == 1) {
        $('.form_log_in').submit();
    }
})

$('.togglePassword').click(function(e){
    e.preventDefault();
    var passwordField = $('#password');
    var fieldType = passwordField.attr('type');
    if (fieldType === 'password') {
        passwordField.attr('type', 'text');
    } else {
        passwordField.attr('type', 'password');
    }
});