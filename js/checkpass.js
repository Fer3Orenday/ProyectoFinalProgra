$('#register').submit(function(e){  //si presionamos el boton hacemos esto
    console.log('anda jalando');
    const postData={ //tomamos los datos de los formularios
        password: $('#password').val(),
        password1: $('#password1').val(),
        fullname: $('#fullname').val(),
        email: $('#email').val(),
        username: $('#username').val()
    };
    console.log(postData);
    $.post('verificacionRegister.php', postData, function(response){
        console.log(response);
        $('#alerta').html(response);
    });
    e.preventDefault();
});