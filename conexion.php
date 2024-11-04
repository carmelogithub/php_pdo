<?php
$host='localhost';
$username='root';
$password='';
$dbname='test';
$dbnamep='academia';
$usernamep='postgres';
$passwordp='Abc123456*/*';
//pdo es una librería para gestionar conexiones PHP para cualquier servidor de base de datos
//$pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$pdo=new PDO("pgsql:host=$host;dbname=$dbnamep",$usernamep,$passwordp);
//$conn=new mysqli($host,$username,$password,$dbname);
echo "conexión ok";