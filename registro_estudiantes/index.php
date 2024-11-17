<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Formulario de Registro de Estudiante</h1>
            <form action="procesar.php" method="POST">
                <div class="input-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <div class="input-group">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" id="edad" required min="18" max="100">
                </div>

                <div class="input-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" required>
                </div>

                <div class="input-group">
                    <label for="curso">Curso de Interés</label>
                    <select name="curso" id="curso" required>
                        <option value="Matemáticas">Matemáticas</option>
                        <option value="Ciencias">Ciencias</option>
                        <option value="Arte">Arte</option>
                        <option value="Literatura">Literatura</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="genero">Género</label>
                    <select name="genero" id="genero" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="areas_interes">Áreas de Interés</label>
                    <select name="areas_interes[]" id="areas_interes" multiple required>
                        <option value="Matemáticas">Matemáticas</option>
                        <option value="Ciencias">Ciencias</option>
                        <option value="Arte">Arte</option>
                        <option value="Literatura">Literatura</option>
                    </select>
                </div>

                <button type="submit" class="btn">Registrar Estudiante</button>
            </form>
        </div>
    </div>
</body>
</html>
