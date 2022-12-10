
$('#loginn').submit(function(e){  //si presionamos el boton hacemos esto
    console.log('anda jalando');
    const postData={ //tomamos los datos de los formularios
        usuario: $('#usuario').val(),
        pass: $('#pass').val()
    };
    console.log(postData);
    $.post('controlador.php', postData, function(response){
        console.log(response);
        $('#checklogin').html(response);
    });
    e.preventDefault();
});