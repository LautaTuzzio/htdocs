<?php
//Configuración de la conexión a la base de datos
/*
$servername = "localhost:3306";
$username = "phpmyadmin";
$password = "RedesInformaticas";
$dbname = "sitio_web_institucional";
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}