

$('#changepass').submit(function(e){  //si presionamos el boton hacemos esto
    console.log('anda jalando');
    const postData1={ //tomamos los datos de los formularios
        nombre: $('#nombre').val(),
        email: $('#email').val()
    };
    console.log(postData1);
    $.post('verificacioncambiocontra.php', postData1, function(response){
        console.log(response);
        $('#check').html(response);
    });
    e.preventDefault();
});