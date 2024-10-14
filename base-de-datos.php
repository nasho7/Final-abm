<style>
    body {
        font-family: 'Arial', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #eaeaea;
        margin: 0;
        padding: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap; 
        justify-content: space-around; 
        gap: 15px;
    }

    .card {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 15px;
        width: 100%; 
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    h5 {
        margin: 0;
        color: #333;
        font-size: 1.5em;
        text-align: center;
    }

    p {
        color: #555;
        line-height: 1.5;
        text-align: left;
    }

    b {
        color: #333;
        font-weight: bold;
    }

    .docente {
        margin-bottom: 10px;
    }
</style>

<?php
$inc = require('conexión.php');
if ($inc) {
    $consulta = "SELECT M.materia_curricular, M.Numero_Materia, D.DNI, D.id_docentes, D.nombre_docente, D.apellido_docente, D.dirección, D.Situación
FROM materia M
JOIN docentes D ON D.id_docentes = M.id_docentes
ORDER BY M.materia_curricular, D.apellido_docente";
    $resultado = mysqli_query($conexion, $consulta);
}
if ($resultado) {
    $materia_actual = null; 
    echo '<div class="container">';
    
    while ($row = $resultado->fetch_array()) {
        $nombre_materia = $row['materia_curricular'];
        $dni = $row['DNI'];
        $id = $row['id_docentes'];
        $nombre = $row['nombre_docente'];
        $apellido = $row['apellido_docente'];
        $direccion = $row['dirección'];
        $situacion= $row['Situación'];
        $numero= $row['Numero_Materia'];

        
        if ($nombre_materia != $materia_actual) {
         
            if ($materia_actual !== null) {
                echo '</div>'; 
            }


            echo "<div class='card'><h5>Materia: $nombre_materia Numero de Materia: $numero</h5>";
            $materia_actual = $nombre_materia;
        }

        echo "<p class='docente'><b>Docente:</b> $nombre $apellido<br>";
        echo "<b>DNI:</b> $dni<br>";
        echo "<b>Dirección:</b> $direccion<br>";
        echo"<b> Situación:</b>$situacion<br>";
    }


    echo '</div>';
    echo '</div>';
}
?>
