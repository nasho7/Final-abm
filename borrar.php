<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Docente</title>
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

        form {
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            max-width: 400px;
            margin: 0 auto;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 700;
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

        input[type="text"] {
            width: calc(100% - 16px);
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #dfe6e9;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        input[type="text"]:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            outline: none;
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

        .btn {
            text-decoration: none;
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 20px;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 500;
            transition: var(--transition);
        }
        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body> 
<h1>Eliminar un Docente</h1>
    <form action="delete.php" method="post">
        <input type="hidden" name="accion" value="modificacion">
        <label for="dni">Ingrese el DNI del docente que quiera eliminar</label>
        <input type="text" id="dni" name="DNI" required>
        <input type="submit" value="Enviar">
    <div class="footer">
        <a href="abm.php" class="btn">Volver</a>
    </div>
    </form>
</body>
</html>
