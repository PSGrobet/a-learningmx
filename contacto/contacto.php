<?php

/*
* Configuraciones
*/

require('../recaptcha-master/src/autoload.php');

// La dirección en el campo 'from' del email
$from = $_POST['email'];

//dirección de correo recibe la información del formato
$sendTo = 'coachmarcela@a-learningmx.com';

//título del email
$subject = 'Nuevo mensaje desde a-learningmx.com';

//form field names and their transalations
//array variable name => Text to appear in the email
$fields = array('nombre' => 'Nombre', 'email' => 'Correo electrónico', 'tel' => 'Teléfono', 'pais' => 'País', 'ciudad' => 'Ciudad', 'ocupacion' => 'Ocupación', 'medio' => 'Medio', 'otro' => 'Otro medio', 'mensaje' => 'Mensaje');

//mensaje de envío exitoso
$okMessage = 'Mensaje enviado con exito. Nos pondremos en contacto contigo muy pronto.';

//mensaje de falla
$errorMessage = 'Ocurrió un error, por favor intenta de nuevo más tarde.';

//recaptcha secret key
$recaptchaSecret = '6LfQvNIZAAAAAEZG4p0tT9pQjJrdgK0pSdUkMEV7';


/*
* Realizar el envío
*/

error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(!empty($_POST)) {

        // validate reCaptcha, if something is wrong, throw an esception
        // i.e. code stops executing and goes to catch block

        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // enter secret key
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());

        // validate recaptcha field together with user's IP
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if(!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }

        //everything went well, we compose email

        $emailText = "Tienes un nuevo mensaje desde tu forma de contacto en a-learningmx.com.\n===============================\n";

        foreach ($_POST as $key => $value) {
            //if field exists in fields array, include in email
            if(isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        //All the necessary headers for the email
        $headers = array('Content-type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );

        //Send mail
        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }

} catch(\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

//if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
//else, just display the message
else {
    echo $responseArray['message'];
}


