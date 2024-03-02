
function validarCorreo(event, tipo ){
        let email = $("#email").val();
        let asunto = $("#subject").val();
        let nombre_usuario = $("#nombre_usuario").val();
        let mensaje = $("#message").val();
        if(email.trim() != '' && asunto.trim() != '' && mensaje.trim() != '' && mensaje.trim() != ''){
            pintarFormulario(email, asunto, nombre_usuario, mensaje);
           
            //event.preventDefault();
         grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6LfKYHspAAAAAFq17Tb-2NN3EQh7KrR349f1e3hQ', {action: 'LOGIN'});
            $("#btn-enviar-mensaje").empty().append(`
                          <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                          </svg> Enviando ...
                          `)
             setTimeout(function(){
                $.ajax({
                    type: "post",
                    url: "./model/conexion/captcha.php",
                    data: {"token": token, 'action': 'process'},
                    dataType: "json",
                    success: function (response) {
                        if(response.estatus){
                                 mandarCorreo(email, asunto, mensaje, nombre_usuario), 2000;
                        }else{
                            console.log('no se pasó la validación');
                        }
                    }
                });

             }, 2000) 
              
          });
        }else{
            pintarFormulario(email, asunto, nombre_usuario, mensaje);
        }
       
}

function mandarCorreo(email, asunto, mensaje, nombre_usuario){
    $.ajax({
        type: "post",
        url: "./model/correo/nuevo_correo.php",
        data: {email, asunto, mensaje, nombre_usuario},
        dataType: "JSON",
        success: function (response) {
            if(response.estatus){
                $("#btn-enviar-mensaje").empty().append('¡Enviado!').removeClass('bg-yellow-400').addClass('bg-lime-500')
            }else{
                $("#btn-enviar-mensaje").empty()
            };
        }
    });
}

function pintarFormulario(email, asunto, nombre_usuario, mensaje){
    if($("#mensaje-asunto").length>0){
        $("#mensaje-asunto").remove();
    }
    if($("#mensaje-correo").length>0){
        $("#mensaje-correo").remove();
    }
    if($("#mensaje-nombre").length>0){
        $("#mensaje-nombre").remove();
    }
    if($("#mensaje-mensaje").length>0){
        $("#mensaje-mensaje").remove();
    }
    if(email.trim()==''){
        $("#email").removeClass('border-gray-300 dark:border-gray-60 border').addClass('border-2 border-rose-500 dark:border-rose-500')
        $("#area-correo").append(`<p class="text-rose-500 text-xs italic" id="mensaje-correo">Introduce un correo electronico.</p>`)
    }else{
        $("#email").removeClass("border-2 border-rose-500 dark:border-rose-500").addClass('border-gray-300 dark:border-gray-60 border')
        
    }

    if(asunto.trim()==''){
        $("#subject").removeClass('border-gray-300 dark:border-gray-60 border').addClass('border-2 border-rose-500 dark:border-rose-500')
        $("#area-asunto").append(`<p class="text-rose-500 text-xs italic" id="mensaje-asunto">Introduce un asunto.</p>`)
    }else{
        $("#subject").removeClass("border-2 border-rose-500 dark:border-rose-500").addClass('border-gray-300 dark:border-gray-60 border')
        
    }

    if(nombre_usuario.trim()==''){
        $("#nombre_usuario").removeClass('border-gray-300 dark:border-gray-60 border').addClass('border-2 border-rose-500 dark:border-rose-500')
        $("#area-nombre").append(`<p class="text-rose-500 text-xs italic" id="mensaje-nombre">Introduce tu nombre.</p>`)
    }else{
        $("#nombre_usuario").removeClass("border-2 border-rose-500 dark:border-rose-500").addClass('border-gray-300 dark:border-gray-60 border')
        
    }

    if(mensaje.trim()==''){
        $("#message").removeClass('border-gray-300 dark:border-gray-60 border').addClass('border-2 border-rose-500 dark:border-rose-500')
        $("#area-mensaje").append(`<p class="text-rose-500 text-xs italic" id="mensaje-mensaje">Introduce un mensaje.</p>`)
    }else{
        $("#message").removeClass("border-2 border-rose-500 dark:border-rose-500").addClass('border-gray-300 dark:border-gray-60 border')
        
    }
};


