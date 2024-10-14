<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --background-color: #f0f3ff;
            --text-color: #2d3436;
            --error-color: #d63031;
            --success-color: #00b894;
            --border-radius: 12px;
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
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 1rem;
            box-shadow: var(--box-shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-links {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-links li {
            margin: 0.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            transition: var(--transition);
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .container {
            max-width: 500px;
            margin: 3rem auto;
            background: white;
            padding: 2.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        h1 {
            margin-bottom: 2rem;
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 700;
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

        form {
            display: grid;
            gap: 1.5rem;
        }

        .form-group {
            position: relative;
        }

        label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
            transition: var(--transition);
            position: absolute;
            top: 0.75rem;
            left: 1rem;
            pointer-events: none;
        }

        input[type="text"] {
            width: 100%;
            padding: 1rem;
            border: 2px solid #dfe6e9;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background-color: #f8f9fa;
        }

        input[type="text"]:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.1);
            outline: none;
        }

        input[type="text"]:focus + label,
        input[type="text"]:not(:placeholder-shown) + label {
            transform: translateY(-1.5rem) scale(0.8);
            color: var(--primary-color);
            background-color: white;
            padding: 0 0.5rem;
        }

        input[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            transition: var(--transition);
            letter-spacing: 1px;
            margin-top: 1rem;
        }

        input[type="submit"]:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"]:active {
            transform: translateY(-1px);
        }

        .error {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        @media (max-width: 768px) {
            .container {
                margin: 2rem 1rem;
                padding: 2rem;
            }
        }
        .button-group {
        display: flex;
        justify-content: center; /* Centra los botones */
        gap: 1rem; /* Añade espacio entre ellos */
        margin-top: 1.5rem; /* Ajusta el margen superior */
    }

    .button-group button {
        background-color: var(--primary-color);
        color: white;
        padding: 0.75rem 1.5rem; /* Ajusta el tamaño del botón */
        border: none;
        border-radius: var(--border-radius);
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: var(--transition);
        text-transform: uppercase;
    }

    .button-group button:hover {
        background-color: var(--secondary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .button-group button:active {
        transform: translateY(-1px);
    }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="abm.php">Agregar docente</a></li>
            <li><a href="borrar.php">Borrar docente</a></li>
            <li><a href="actualizar.php">Actualizar docente</a></li>
            <li>!</li>
            <li><a href="abm-materia.php">Agregar una materia</a></li>
            <li><a href="borrar-materia.php">Eliminar materia</a></li>
            <li><a href="actualizar-materia.php">Actualizar materia</a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="abm.sql.php" method="post">
            <input type="hidden" name="accion" value="alta">
            <input type="hidden" name="id_docente" value="id_docentes">
            
            <div class="form-title">Registro</div>
            
            <div class="form-group">
                <input type="text" id="nombre" name="nombre" required placeholder=" ">
                <label for="nombre">Nombre</label>
            </div>
            
            <div class="form-group">
                <input type="text" id="apellido" name="apellido" required placeholder=" ">
                <label for="apellido">Apellido</label>
            </div>
            
            <div class="form-group">
                <input type="text" id="direccion" name="direccion" required placeholder=" ">
                <label for="direccion">Dirección</label>
            </div>
            
            <div class="form-group">
                <input type="text" id="dni" name="DNI" required placeholder=" ">
                <label for="dni">DNI</label>
            </div>
            <div class="form-group">
                <input type="text" id="dni" name="situacion" required placeholder=" ">
                <label for="dni">Situación</label>
            </div>
            
            <input type="submit" value="Registrar">
        </form>
        <div class="button-group">
    <a href="pdf-abm.php"><button type="button">Imprimir Docentes</button></a>
    <a href="datos-cargados.php"><button type="button">Datos Cargados</button></a>
</div>
    </div>
</body>
</html>