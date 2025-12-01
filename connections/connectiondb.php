<?php
$host = "localhost";
$port = "5432";
$dbname = "fitness_db";
$user = "postgres";
$password = "200423";

try {
    // Crear conexión con PDO
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

    // Configurar errores para que se lancen como excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   

} catch (PDOException $e) {
    echo "❌ Error en la conexión: " . $e->getMessage();
}
?>
