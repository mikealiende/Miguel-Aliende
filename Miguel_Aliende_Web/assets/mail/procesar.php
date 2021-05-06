<?php
$nombre = $_GET['nombre'];
$email =$_GET['email'];
$telefono = $_GET['name'];
$mensaje = $_GET['mensaje'];


echo "<h2>Informacion recibida desde php </h2>";
echo "El nombre recibido es: " . $nombre . "<br/>";
echo "El email recibido es: " . $email . "<br/>";
echo "El telefono recibido es: " . $telefono . "<br/>";
echo "El mensaje recibido es: " . $mensaje . "<br/>";



?>