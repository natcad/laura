<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$textarea=$_POST['textarea'];

$mensaje= 'Este mensaje fue enviado por $nombre \n';
$mensaje .= 'Su email es: $mail \n';
$mensaje .= 'Mensaje:  $textarea \n';
// $mensaje .= 'Enviado el ' . date('d/m/Y',time());

$para= 'natashacadabon@gmail.com';
$asunto='Este mail fue enviado desde lauracadabon.com';

mail($para, $asunto, $mensaje);


echo "<script>alert('correo enviado exitosamente') </script>"

?>