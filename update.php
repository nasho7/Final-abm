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
    <a href="abm.php">Volver al formulario</a><br>
</body>
</html>
<?php
require('conexión.php');
$nombre_editado= $_POST['nombre_editar'];
$apellido_editado= $_POST['apellido_editar'];
$dirección_editado= $_POST['dirección_editar'];
$DNI = $_POST['DNI'];
$actulizar = "UPDATE `docentes` SET `nombre_docente`='$nombre_editado' , `apellido_docente`='$apellido_editado' , `dirección`='$dirección_editado' WHERE `DNI`='$DNI' ";
$row= mysqli_query($conexion, $actulizar);
if ($row){
echo 'todo se actualizo correctamente. ' ;
} else{
    echo 'no se pudo actulizar. ' ;
}
?>
