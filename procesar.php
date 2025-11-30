
<html>
<head>
<meta charset="UTF-8" />
    <title>Procesar comentario</title>
    <style>
      body {
            background-color: #ab79be;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #ffffff;
        }

        form {
            background-color: #f8afff;
            border: 2px solid #000000;
            padding: 5px;
            width: 170px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #btnEnviar {
            background-color: #2a52be;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btnEnviar:hover {
            background-color: #1d3b8a;
        }
        #btnAgre {
            background-color: #2a52be;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btn:hover {
            background-color: #1d3b8a;
        }

    </style>
</head>
<body>

<?php

include('conexion.php');
$Nombre = $_POST['campoNombre'];
$comentario = $_POST['areaComentario'];

if (empty($Nombre) || empty($comentario)) {
    echo "Por favor, completa todos los campos.";
    exit;
}

$Nombre = mysqli_real_escape_string($conexion, $Nombre);
$comentario = mysqli_real_escape_string($conexion, $comentario);

$sql = "INSERT INTO visita (nombre, comentarios) VALUES ('$Nombre', '$comentario')";

if (mysqli_query($conexion, $sql)) {
    echo "<h2>Registro recibido</h2>";
    echo "<p>Tu comentario se ha registrado correctamente:</p>";
    echo "<p>Gracias por tu comentario.</p>";
} else {
    echo "Error: no se pudo realizar el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<form method="post" action="listado.php">
    <input type="submit" value="Ver libro de visitas" id="btnAgre">
</form>
<form method="post" action="interactivo1.html">
    <input type="submit" value="Regresar al interactivo" id="btnAgre">
</form>

</body>
</html>