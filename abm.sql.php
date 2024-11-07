<style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            padding: 40px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border: 1px solid #f5c6cb;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php if (isset($mensaje)) echo $mensaje; ?>
    <a href="tabla-docentes.php">Volver al formulario</a><br>
</body>
</html>
<?php
require('conexión.php');
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dirección= $_POST['direccion'];
$DNI = $_POST['DNI'];
$situacion = $_POST['situacion'];
$insertar= "INSERT INTO  docentes (nombre_docente, apellido_docente, dirección, DNI, Situación ) VALUES ('$nombre', '$apellido', '$dirección','$DNI','$situacion')";
$query= mysqli_query($conexion, $insertar);
if($query){
echo"todos los datos se agregaron correctamente";
}else{
    "no se pudieron agregar los datos";
}
?>