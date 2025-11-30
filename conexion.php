<?php
$conexion = mysqli_connect("sql302.infinityfree.com", "if0_40475191", "L3nQKxDMBH", "if0_40475191_interactivo");

if (!$conexion) {
   
    echo "Error: No se pudo conectar a MySQL.<br>";
    echo "Número de error de depuración: " . mysqli_connect_errno() . "<br>";
    echo "Error de depuración: " . mysqli_connect_error() . "<br>";
    exit;
}
?>