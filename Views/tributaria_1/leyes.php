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
    <link rel="stylesheet" href="../../css/tiposStyle.css">
    <link rel="stylesheet" href="../../css/leyesStyle.css">
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
                <div class="cards">
                        <div class="card-single">
                            <span>
                                <ul class='breadcrumb-item' aria-current='page'>
                                    <li><a href="tributaria_1.php">Introduccion</a></li>
                                    <li><a href="tipos.php">Tipos</a></li>
                                    <li><a href="leyes.php">Leyes</a></li>
                                </ul>
                            </span>
                        </div>
                </div>
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="tab-content">
                                        <h3>Estatuto Tributario</h3>
                                        <p>El Estatuto Tributario es la principal ley que regula los impuestos en<br>
                                        Colombia. Contiene disposiciones sobre el impuesto sobre la Renta y<br>
                                        Complementarios, el impuesto al valor Agregado (IVA), el impuesto de<br>
                                        Timbre,entre otros.
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../../images/Color_negro.jpg">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="tab-content">
                                        <h3>Código de Comercio</h3>
                                        <p>Incluye disposiciones relacionadas con impuestos y obligaciones fiscales<br>
                                        para la empresa
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../../images/Color_negro.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn" href="ley1314.php" role="button">COMPLETAR ACTIVIDAD</a>
                            </div>
                        </div>
                    </div>
                </main>
            </section
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>