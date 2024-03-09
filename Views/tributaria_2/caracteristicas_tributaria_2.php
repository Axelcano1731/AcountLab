<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acount Lab - Contable</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>
    <?php
    include("../../Modulos/head.php");
    ?>
    <link rel="stylesheet" href="../../css/laboratorio.css">
    <link rel="stylesheet" href="../../css/Style.css">
    <link rel="stylesheet" href="../../css/quiz-1.css">
    <link rel="stylesheet" href="../../css/tributaria_2.css">
</head>
<body>
    <?php
    include("../../Modulos/menu.php");
    ?>
    <div class="main-content">
        <?php
            include("../../Modulos/header.php");
        ?>
            <main>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <h3>Caracteristicas del sistema tributario</h3>
                            <ul>
                                <li><strong>Progresividad:</strong> Busca que quienes tienen mayores ingresos contribuyan proporcionalmente más al sistema.</li>
                                <li><strong>Equidad: </strong>Busca distribuir la carga tributaria de manera justa.</li>
                                <li><strong>Simplicidad y Claridad: </strong>Se busca que las normativas fiscales sean comprensibles y de fácil aplicación.</li>
                                <li><strong>Eficiencia: </strong>Busca optimizar la recaudación sin generar distorsiones en la economía</li>
                            </ul>
                        </div>
                    </div>
                    <div class="img">
                        <img src="../../images/caracteristicas_sistema.png">
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="impuestorenta_tributaria_2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>