$('#resetpass').submit(function(e){  //si presionamos el boton hacemos esto
    console.log('anda jalando');
    const postData={ //tomamos los datos de los formularios
        pold: $('#pold').val(),
        pnew: $('#pnew').val(),
        user: $('#user').val()
    };
    console.log(postData);
    $.post('verificarcambiopass.php', postData, function(response){
        console.log(response);
        $('#checklogin').html(response);
    });
    e.preventDefault();
});