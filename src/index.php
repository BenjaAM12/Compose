<?php
$host = getenv('MYSQL_HOST') ?: 'mysql';
$user = getenv('MYSQL_USER') ?: 'user';
$password = getenv('MYSQL_PASSWORD') ?:'password';
$database = getenv('MYSQL_DATABASE') ?:'db1';

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully!";

// Cerrar la conexión
$conn->close();
?>