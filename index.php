<?php
include "logica.php";
?>

<!-- HEAD DE NAVEGADOR -->
<?php
$template_path = './estilo/templates/head.php';
include $template_path; ?>

<!-- COMIENZA BODY -->

<body>
    <!-- DIVIDO EN TRES LA CAJA PRINCIPAL -->
    <div class="cajaPrincipal">
        <!-- LADO IZQUIERDO -->
        <div class="ladoIzq"></div>
        <!-- MEDIO -->
        <div class="mid">
            <div class="ampliarLista">
                <h1><span>Local Host</span></h1>
                <a href="agregarArchivo.php">*</a>
            </div>

            <h2>* Controla que exista la base de datos</h2>
            <div class="carpetas">
                <img alt='Dame Pepsi' src="./estilo/img/esa.png">
                <a href="./htdocsProgramar/">Lista de Carpetas</a>
            </div>
            <div class="lista">
                <?php mostrarArchivos($archivos); ?>
                <h2>* Otros archivos</h2>
                <div>
                    <a href="htdocsProgramar/SinWeb/"><img width="40" src="./estilo/img/Icono.png" alt="html">No tienen diseño</a>
                </div>
            </div>
        </div>
        <!-- LADO DERECHO -->
        <div class="ladoDere"></div>
    </div>
    <!-- FOOTER-->
    <?php
    $template_path = './estilo/templates/footer.php';
    include $template_path; ?>
</body>