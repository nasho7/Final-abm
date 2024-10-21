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
        label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-right: 10px;
}

select {
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    margin-right: 15px;
}

button {
    padding: 8px 16px;
    background-color: #6c5ce7;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background-color: #a29bfe;
}

form {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
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
            <th>Situación</th>
            <th>Materia</th>
            <th>N° Materia</th>
        </tr>
        <form method="POST" action="">
    <label for="criterio">Buscar:</label>
    <input type="text" name="criterio" id="criterio" placeholder="Ingrese el criterio">
    
    <label for="columna">Filtrar por:</label>
    <select name="columna" id="columna">
        <option value="nombre_docente">Nombre</option>
        <option value="apellido_docente">Apellido</option>
        <option value="dirección">Dirección</option>
        <option value="DNI">DNI</option>
        <option value="Situación">Situación</option>
        <option value="materia_curricular">Materia</option>
        <option value="Numero_Materia">N° Materia</option>
    </select>

    <button type="submit">Filtrar</button>
</form>
<br>
<br>

<?php
require('conexión.php');


if (isset($_POST['criterio']) && isset($_POST['columna'])) {
    $criterio = htmlspecialchars($_POST['criterio']);
    $columna = htmlspecialchars($_POST['columna']);


    $sql = "SELECT D.DNI, D.id_docentes, D.nombre_docente, D.apellido_docente, D.dirección, D.Situación, M.materia_curricular, M.Numero_Materia 
            FROM docentes D 
            LEFT JOIN materia M ON D.id_docentes = M.id_docentes 
            WHERE $columna LIKE ? 
            ORDER BY D.nombre_docente ASC";
    
    $stmt = $conexion->prepare($sql);
    $parametro = "%$criterio%";
    $stmt->bind_param("s", $parametro);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    $resultado = $conexion->query("SELECT D.DNI, D.id_docentes, D.nombre_docente, D.apellido_docente, D.dirección, D.Situación, M.materia_curricular, M.Numero_Materia 
                                    FROM docentes D 
                                    LEFT JOIN materia M ON D.id_docentes = M.id_docentes 
                                    ORDER BY D.nombre_docente ASC");
}


if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['nombre_docente']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['apellido_docente']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['dirección']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['DNI']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['Situación']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['materia_curricular'] ?? 'Sin asignar') . "</td>";
        echo "<td>" . htmlspecialchars($fila['Numero_Materia'] ?? 'N/A') . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}
?>

    </table>

    <div class="link-container">
        <a href="abm.php">Agregue un docente</a>
        <a href="borrar.php">Eliminar un docente</a>
        <a href="actualizar.php">Modifique un docente</a>
        <a href="abm-materia.php">Agregar una materia</a>
        <a href="actualizar-materia.php">Modifica una materia</a>
        <a href="borrar-materia.php">Borrar una materia</a>
    </div>

</body>
</html>
