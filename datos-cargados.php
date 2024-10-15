<style>
    :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --background-color: #ecf0f1;
            --text-color: #34495e;
            --error-color: #e74c3c;
            --success-color: #2ecc71;
            --border-radius: 10px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            padding: 40px;
            margin: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            border: 2px solid #dfe6e9;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background-color: #f8f9fa;
        }

        input[type="text"]:focus, select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            outline: none;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 700;
        }

        input[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            transition: var(--transition);
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

    .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
        }

        .form-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
            margin: 0.5rem auto 0;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        label {
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
            transition: var(--transition);
            color: var(--primary-color);
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color:black;
        }
</style>
<h1>Datos Cargados</h1>
<div class="container">
<div class="form-group">
<label for="nombre">Docentes cargados:</label>
<select name="" id="">
    <?php
                    $conexion = new mysqli('localhost', 'root', '', 'septimo');
                    if ($conexion->connect_error) {
                        die("Error de conexión: " . $conexion->connect_error);
                    }
                    $resultado = $conexion->query("SELECT id_docentes, nombre_docente, apellido_docente, DNI FROM docentes");
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<option value='" . $row['id_docentes'] . "'>" . $row['nombre_docente'] ." ". $row['apellido_docente'] ." (DNI: ".$row['DNI'].")</option>";
                    }
     ?>
     </select>
     </div>
     <div class="form-group">
    <label for="nombre">Materias cargadas:</label>
    <select name="materia" id="docentes" required>
        <?php
            $conexion = new mysqli('localhost', 'root', '', 'septimo');
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }
            $resultado2 = $conexion->query("SELECT materia_curricular,  Numero_Materia  FROM materia");
            while ($row2 = $resultado2->fetch_assoc()) {
                echo "<option value='" . $row2['materia_curricular'] . "'>". "Materia:  " . $row2['materia_curricular'] .  "N° :".$row2['Numero_Materia']. "</option>";
            }
        ?>
    </select>
</div>
        </div>