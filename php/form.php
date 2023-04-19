<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['textarea'];

$mensaje= "Este mensaje fue enviado por" . $nombre . ".\r\n";
$mensaje .= "Su email es: ".$mail ." \r\n";
$mensaje .= "Mensaje: " .$_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y',time());

$para= "natashacadabon@gmail.com";
$asunto="Este mail fue enviado desde lauracadabon.com";

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:../pages/contactoExito.html');
?>