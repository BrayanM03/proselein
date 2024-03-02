<?php
if(isset($_POST['action']) && ($_POST['action'] =='process')){
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret ='6LfKYHspAAAAAA9O1s49cp70PtBplh7vtsZfuq-6';
    $recaptcha_response = $_POST['token'];
    $recaptcha = curl_get_file_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if($recaptcha->score >= 0.7){
        echo json_encode(array('estatus'=>true, 'mensaje'=>'El captcha se aprobó', 'score'=>$recaptcha->score));

    }else{
        echo json_encode(array('estatus'=>false, 'mensaje'=>'El captcha dio un error', 'score'=>$recaptcha->score));
    }
}

function curl_get_file_contents($URL)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $URL);
    $contents = curl_exec($c);
    curl_close($c);

    if ($contents) return $contents;
    else return FALSE;
}

?>