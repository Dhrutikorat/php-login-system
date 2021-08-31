$(document).on("submit", "form.js-register", function (event) {
    event.preventDefault();

    var form = $(this);
    var dataObj =
    {
        email: $("input[type='email']", form).val(),
        password: $("input[type='password']", form).val()
    }
    $('.js-error').css('color', 'red');
    if (dataObj.email.length < 6) {
        $('.js-error').html('Please enter valid email address').show();
        return false;
    } else if (dataObj.password.length < 8) {
        $('.js-error').html('Password length must be 8 characters.').show();
        return false;
    }

    $('.js-error').hide();

    $.ajax({
        url: 'ajax/register.php',
        data:dataObj,
        type: 'post',
        dataType:'json',
        async:true,
    })
    .done(function ajaxDone(data){
        if(data.redirect !== undefined){
            window.location = data.redirect;
        }else if(data.error !== undefined){
            $('.js-error').html(data.error).show();
        }
    })
    .fail(function ajaxFailed(e){
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data){
        console.log('Always');
    })

    return false;
})
.on("submit", "form.js-login", function (event) {
    event.preventDefault();

    var form = $(this);
    var dataObj =
    {
        email: $("input[type='email']", form).val(),
        password: $("input[type='password']", form).val()
    }
    $('.js-error').css('color', 'red');
    if (dataObj.email.length < 6) {
        $('.js-error').html('Please enter valid email address').show();
        return false;
    } else if (dataObj.password.length < 8) {
        $('.js-error').html('Password length must be 8 characters.').show();
        return false;
    }

    $('.js-error').hide();

    $.ajax({
        url: 'ajax/login.php',
        data:dataObj,
        type: 'post',
        dataType:'json',
        async:true,
    })
    .done(function ajaxDone(data){
        if(data.redirect !== undefined){
            window.location = data.redirect;
        }else if(data.error !== undefined){
            $('.js-error').html(data.error).show();
        }
    })
    .fail(function ajaxFailed(e){
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data){
        console.log('Always');
    })

    return false;
});