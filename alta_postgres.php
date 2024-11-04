<?php
require('conexion.php');
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];

$insertar="INSERT INTO docentes (nombre,apellidos, correo) VALUES (:nombre,:apellidos,:correo)";
$stmt = $pdo->prepare($insertar);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellidos', $apellidos);
$stmt->bindParam(':correo',$correo);
$stmt->execute();
echo 'docente guardado';
