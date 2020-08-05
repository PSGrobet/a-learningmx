<?php

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $subject = "Mensaje desde a-learningmx.com";
    $mailFrom = $_POST['email'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $tel = $_POST['tel'];
    $ocupacion = $_POST['ocupacion'];
    $mensaje = $_POST['mensaje'];
    $medio = $_POST['medio'];
    $otro = $_POST['otro'];

    $mailTo = "coachmarcela@a-learningmx.com";
    $headers = "From: ".$mailFrom;
    $txt = "Has recibido un mensaje de: ".$nombre."\nPAIS: ".$pais."\nCIUDAD: ".$ciudad."\nTELÉFONO: ".$tel."\nOCUPACIÓN: ".$ocupacion."\nMEDIO: ".$medio."; otro: ".$otro."\n\n".$mensaje;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}