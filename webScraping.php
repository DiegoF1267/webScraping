    <?php
    include('libraries/simple_html_dom.php');
    require_once('bd/conexion_bd.php');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://www.puntoticket.com/todos');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    //echo $result;

    $domResult = new simple_html_dom();
    $domResult->load($result);

//    foreach($domResult->find('h3 tittle=') as $link){
//        echo '<h1>' . $link->plaintext . ' </h1><br>';
//    }

// Verificar si $conn está definido antes de usarlo
if (isset($conn) && $conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error en la conexión a la base de datos.";
}

// Cerrar la conexión solo si $conn está definido
if (isset($conn)) {
    $conn->close();
}

    ?>