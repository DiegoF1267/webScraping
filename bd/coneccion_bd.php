<?
    // Datos de conexión
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $base_datos = "proyecto_php";
    // Crear la conexión
    $conn = new mysqli($servidor, $usuario, $contraseña, $base_datos);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }else{
        echo "bien";
    }