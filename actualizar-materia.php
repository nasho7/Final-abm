<html>
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

        h1 {
            text-align: center;
            margin-bottom: 30px;
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

        .footer {
            text-align: center;
            margin-top: 30px;
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
<head>
    <title>Sésé</title>
</head>
<body>      
<form class="container"action="update-materia.php" method="post">
<h1>Actualiza una materia</h1>
<input type="hidden" name="accion" value="modificacion">
<label for="nombre_editado">Materia que desea modificar: </label>
<input type="text" id="nombre_editar" name="materia_editar" required>
<br>
<br>
<label for="nombre_editado">Ingrese el numero de la materia: </label>
<input type="text" id="nombre_editar" name="materia" required>
<br>
<br>
<input type="submit" value="Enviar">
</form>
<div class="footer">
        <a href="abm.php" class="btn">Volver</a>
    </div>
</html>