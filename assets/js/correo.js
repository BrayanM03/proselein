
function validarCorreo(event){
    console.log(event);
  /*   event.preventDefault()
    console.log('entré'); */
    let email = $("#email").val();
    let asunto = $("#subject").val();
    let nombre_usuario = $("#nombre_usuario").val();
    let mensaje = $("#message").val();
    if(email != '' && asunto != '' && mensaje != ''){
        mandarCorreo(email, asunto, mensaje, nombre_usuario);
    }
    return false;
}

function mandarCorreo(email, asunto, mensaje, nombre_usuario){
    $.ajax({
        type: "post",
        url: "./model/correo/nuevo_correo.php",
        data: {email, asunto, mensaje, nombre_usuario},
        dataType: "JSON",
        success: function (response) {
            if(response.estatus){
                
            };
        }
    });
}

function onSubmit(token) {
    document.getElementById("contacto-proselein").submit();
  }
