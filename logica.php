<?php
// Ruta al archivo JSON
$rutaArchivoJson = 'carpetaArchivos.json';

// Leer el contenido del archivo JSON
$contenidoJson = file_get_contents($rutaArchivoJson);

// Decodificar el JSON a un arreglo asociativo de PHP
$archivos = json_decode($contenidoJson, true);

// Verificar si la decodificación fue exitosa
if ($archivos === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "<script>alert('Error al decodificar el archivo JSON: " . json_last_error_msg() . "'); window.location.href = 'index.php';</script>";
    exit;
}

$direc = "htdocsProgramar/";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET['nombre']) && isset($_GET['direccion'])) {
        $nombre = htmlspecialchars($_GET["nombre"]);
        $direccion = htmlspecialchars($_GET["direccion"]);

        $clave = $direc . $direccion . "/";

        carpetadeArchivos($nombre, $clave, $archivos, $rutaArchivoJson);
    }
}

function carpetadeArchivos($nombre, $clave, &$archivos, $rutaArchivoJson)
{
    // Agregar la nueva entrada al arreglo de archivos
    $archivos[$nombre] = $clave;

    // Ordenar el arreglo por clave (nombre)
    ksort($archivos);

    // Codificar el arreglo a formato JSON
    $nuevoContenidoJson = json_encode($archivos, JSON_PRETTY_PRINT);

    // Verificar si la codificación fue exitosa
    if ($nuevoContenidoJson === false) {
        echo "<script>alert('Error al codificar los datos a JSON: " . json_last_error_msg() . "'); window.location.href = 'index.php';</script>";
        return;
    }

    // Guardar el JSON modificado de vuelta en el archivo
    $resultado = file_put_contents($rutaArchivoJson, $nuevoContenidoJson);

    // Verificar si la escritura fue exitosa
    if ($resultado === false) {
        echo "<script>alert('Error al guardar los datos en el archivo JSON.'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Proyecto agregado exitosamente.'); window.location.href = 'index.php';</script>";
    }
}

function mostrarArchivos($archivos)
{
    // Ordenar el arreglo por clave (nombre) antes de mostrar
    ksort($archivos);

    if (!empty($archivos)) {
        foreach ($archivos as $nombre => $ruta) {
            echo '<div>';
            echo '<a href="' . htmlspecialchars($ruta) . '"><img width="40" src="./estilo/img/Icono.png" alt="html">' . htmlspecialchars($nombre) . '</a>';
            echo '</div>';
        }
    } else {
        echo "<p>No hay archivos disponibles.</p>";
    }
}
