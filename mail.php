<?php

$to      = 'consultasgwl@gmail.com';
$subject = 'Contacto App';
$message = $_POST['sName'].' de Comunidad SCA ('.$_POST['sMail'].' '.$_POST['sPhone'].') '.$_POST['sMessage'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Grupo Wellness Latina <consultasgwl@gmail.com>' . "\r\n";
$headers .= 'From: '.$_POST['sName'].' <'.$_POST['sMail'].'>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?> 