<?php
session_start();


$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'estudiantes'; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$curso = $_POST['curso'];
$genero = $_POST['genero'];
$areas_interes = implode(', ', $_POST['areas_interes']); 

$sql = "INSERT INTO estudiantes (nombre, edad, correo, curso, genero, areas_interes) 
        VALUES ('$nombre', '$edad', '$correo', '$curso', '$genero', '$areas_interes')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "¡Registro exitoso!";
    $_SESSION['message_type'] = "success"; 
    header('Location: registro_exitoso.php'); 
    exit(); 
} else {
    $_SESSION['message'] = "Error al registrar: " . $conn->error;
    $_SESSION['message_type'] = "error"; 
    header('Location: registro_exitoso.php'); 
    exit();
}

$conn->close();
?>
