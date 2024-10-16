<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #2d3436;
            padding: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        table, th, td {
            border: none;
        }

        th {
            background-color: #6c5ce7;
            color: white;
            text-transform: uppercase;
            padding: 1rem;
            font-size: 1rem;
            font-weight: 600;
            text-align: left;
        }

        td {
            padding: 1rem;
            font-size: 0.95rem;
            color: #2d3436;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dfe6e9;
        }

        a {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin: 0.5rem;
            background-color: #6c5ce7;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #a29bfe;
        }

        .link-container {
            text-align: center;
            margin-top: 2rem;
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
            <th>Situacións</th>
            <th>N° Materia</th>
        </tr>

        <?php
        require('conexión.php');

        // Corregir la consulta SQL, asegurando que las tablas estén correctamente unidas por id_docentes
        $resultado = $conexion->query("SELECT M.materia_curricular, M.Numero_Materia, D.DNI, D.id_docentes, D.nombre_docente, D.apellido_docente, D.dirección, D.Situación
        FROM docentes D
        JOIN materia M ON D.id_docentes = M.id_docentes
        ORDER BY D.apellido_docente ASC");

        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['nombre_docente']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['apellido_docente']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['dirección']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['DNI']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['Situación']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['materia_curricular']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['Numero_Materia']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
        }
        ?>
    </table>

    <div class="link-container">
        <a href="abm.php">Volver al formulario</a>
        <a href="borrar.php">Eliminar un docente</a>
        <a href="actualizar.php">Actualizar un docente</a>
        <a href="abm-materia.php">Agregar una materia</a>
        <a href="actualizar-materia.php">Actualizar una materia</a>
        <a href="borrar-materia.php">Borrar una materia</a>
    </div>

</body>
</html>
