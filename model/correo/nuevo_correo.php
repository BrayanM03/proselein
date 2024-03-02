<?php

  

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../../vendor/autoload.php';

    $correo_cliente = $_POST['email'];
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $nombre_usuario = htmlspecialchars($_POST['nombre_usuario']);
    // Crear una instancia de PHPMailer
    // Crear una nueva instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
   /*  $mail->SMTPDebug = SMTP::DEBUG_SERVER; */                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.proselein.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'arturo.reyes@proselein.com';                     //SMTP username
    $mail->Password   = 'Francotirador01.';//'Leyx;b?~@67P';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('arturo.reyes@proselein.com', 'Proselein');
    $mail->addAddress('arturo.reyes@proselein.com', 'Proselein');     //Add a recipient
   
    $mail->addReplyTo('arturo.reyes@proselein.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body = '
    
    <h3>Mensaje del contacto de la web </h3><p>
    <div style="color: gray">    
    '. $mensaje .'</p>
    <p>Atentamente,</p>
    <p>'.$nombre_usuario.'</p>
    </div>
    <div class="firma">
        <div style="display: flex; flex-direction:row; justify-content:start; align-items:center;">
        <!---<img src="https://cbbienesraices.com.mx/static/img/logo-cb.png" style="width:30px;"> <b>Bienes Raices</b>-->
        </div>

        <div style="display: flex; flex-direction:column" style="height: 2rem; color: gray">
            <span>Correo: ' . $correo_cliente . '</span>
        </div>
    
    </div>';
    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $response = array("estatus"=>true, "mensaje"=>'Correo enviado');
} catch (Exception $e) {
    
    $response = array("estatus"=>false, "mensaje"=>"Correo no se ha enviado: {$mail->ErrorInfo}");

}

echo json_encode($response, JSON_UNESCAPED_UNICODE);





?>