<!-- HEAD DE NAVEGADOR -->
<?php
$template_path = './estilo/templates/head.php';
include $template_path; ?>
<!-- COMIENZA BODY -->

<body>
    <!-- DIVIDO EN TRES LA CAJA PRINCIPAL -->
    <div class=cajaPrincipal>
        <!-- LADO IZQUIERDO -->
        <div class=ladoIzq></div>
        <!-- MEDIO -->
        <div class=mid>
            <!-- Volver -->
            <?php
            $template_path = './estilo/templates/volver.php';
            include $template_path; ?>
            <h1><span>Agregar Proyecto</span></h1>
            <h2>* Agregar a la lista algun Proyecto</h2>
            <div class=principal>
                <div class="cajaInterna">
                    <img src="./estilo/img/rica.jpeg" alt="mirar" width="200">
                    <form method="get" action="./logica.php">
                        <input type="text" name="nombre" placeholder="Nombre del Proyecto" required>
                        <input type="text" name="direccion" placeholder="Direccion de Proyecto" required>
                        <input type="submit" value="Agregar">
                    </form>
                </div>
                <div class="gif">
                    <img src="./estilo/img/Carga.gif" width="400" alt="GIF Spon">
                </div>
            </div>
        </div>
        <!-- LADO DERECHO -->
        <div class=ladoDere></div>
</body>
<!-- FOOTER-->
<?php
$template_path = './estilo/templates/footer.php';
include $template_path; ?>