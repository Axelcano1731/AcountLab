<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acount Lab - Contable</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>
    <?php
    include("../Modulos/head.php");
    ?>
    <link rel="stylesheet" href="../css/laboratorio.css">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/quiz-1.css">
</head>
<body>
    <?php
    include("../Modulos/menu.php");
    ?>
    <div class="main-content">
        <?php
            include("../Modulos/header.php");
        ?>
            <main>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <h3>Introducción al Sistema Tributario</h3>
                            <h5>Impuestos nacionales principales:</h5>
                            <ul>
                                <li><strong>Impuestos sobre la renta y complementarios (IRC): </strong>Grava las ganancias obtenidas por personas naturales<br>
                                y jurídicas.
                                </li>
                                <li><strong>Impuesto al Valor Agregado (IVA):</strong> Grava el consumo de bienes y servicios.</li>
                                <li><strong>Impuesto de Timbre Nacional:</strong> Grava la expedición de documentos.</li>
                            </ul>
                            <h5>Impuestos Locales Principales:</h5>
                            <ul>
                                <li><strong>Impuesto Predial: </strong>Grava la propiedad raíz.</li>
                                <li><strong>Impuesto de Industria y Comercio: </strong>Grava las actividades comerciales y empresariales.</li>
                            </ul>
                            <h5>Entidades de control:</h5>
                            <ul>
                                <li><strong>Dirección de Impuestos y Aduanas Nacionales (DIAN): </strong>Responsable de la administración de los impuestos<br>
                                nacionales.
                                </li>
                                <li><strong>Entidades Territoriales: </strong>Encargadas de la administración de los impuestos locales.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="#" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../Modulos/js.php");
?>
</html>