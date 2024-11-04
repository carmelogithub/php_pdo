<?php
require('conexion.php');
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$unidades=$_POST['unidades'];

$insertar="INSERT INTO clientes (nombre,ciudad, unidades) VALUES (:nombre,:ciudad,:unidades)";
$stmt = $pdo->prepare($insertar);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':ciudad', $ciudad);
$stmt->bindParam(':unidades',$unidades);
$stmt->execute();
echo 'cliente guardado';
