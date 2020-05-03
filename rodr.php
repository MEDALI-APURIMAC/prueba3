<?php
$Destino="misteriosperumundo@gmail.com";
$Nombre= $_POST["nombre"];
$Correo= $_POST["correo"];
$Telefono= $_POST["telefono"];
$Pais= $_POST["pais"];
$Mensaje= $_POST["mensaje"];
$Contenido="nombre: ". $Nombre .
"\ncorreo: " . $Correo .
"\ntelefono: " . $Telefono .
"\npais: " . $Pais .
"\nmensaje: " . $Mensaje ;

mail($Destino,$Contenido);
header("location:suli.html");






?>