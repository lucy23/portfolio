<?php 
error_reporting(0); 
    $nombre = $_POST['nombre']; 
    $correo_electronico= $_POST['email'];  
    $telefono=$_POST['telefono'];
    $opinion=$_POST['mensaje']; 
    $header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
    $header .= "Mime-Version: 1.0 \r\n"; 
    $header .= "Content-Type: text/plain"; 

    $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
    $mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
    $mensaje .= "Su telefono es " . $_POST['telefono'] . " \r\n"; 
    $mensaje .="MENSAJE: ".$_POST['opinion'] . " \r\n"; 
    $mensaje .= "Enviado el " . date('d/m/Y', time()); 

    $para = 'lucysigler23@gmail.com'; 
    $asunto = 'PRUEBA 1'; 

    mail($para, $asunto, utf8_decode($mensaje), $header); 

    echo 'mensaje enviado correctamente'; 

?>