<?php
// Incluir la conexión a la base de datos
require('conexión.php');

// Ejecutar la consulta
$resultado = $conexion->query("SELECT M.materia_curricular, M.Numero_Materia, D.DNI, D.id_docentes, D.nombre_docente, D.apellido_docente, D.dirección, D.Situación
FROM materia M
JOIN docentes D ON D.id_docentes = M.id_docentes
ORDER BY M.materia_curricular, D.apellido_docente");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>DNI</th>
            <th>Materia</th>
        </tr>

        <?php
        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['nombre_docente']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['apellido_docente']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['dirección']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['DNI']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['materia_curricular']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
        }
        ?>

    </table>
</body>
</html>
