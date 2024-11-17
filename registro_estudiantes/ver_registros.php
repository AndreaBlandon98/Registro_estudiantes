<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'estudiantes'; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Registros de Estudiantes</h1>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Curso</th>
                    <th>Género</th>
                    <th>Áreas de Interés</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['edad'] . "</td>";
                        echo "<td>" . $row['correo'] . "</td>";
                        echo "<td>" . $row['curso'] . "</td>";
                        echo "<td>" . $row['genero'] . "</td>";
                        echo "<td>" . $row['areas_interes'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay registros</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn">Volver al Registro</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
