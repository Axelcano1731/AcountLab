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
                                        <h3>Impuesto al valor agregado</h3>
                                        <p>Es un impuesto indrecto sobre el consumo que se aplica a la venta de<br>
                                        bienes y servicios. Las tasas de IVA pueden variar dependiendo del tipo de bien o servicio.
                                        </p>
                                        <p>
                                            Algunos productos y servicios pueden estar exentos de IVA o tener tasas<br>
                                            reducidas.
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../../images/impuesto_vagregado.png">
                                    </div>
                                </div>
                                <div class="img-black">
                                    <img src="../../images/Color_negro.jpg">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn" href="impuestopropiedad.php" role="button">COMPLETAR ACTIVIDAD</a>
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