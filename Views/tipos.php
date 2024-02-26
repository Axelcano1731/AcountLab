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
    <link rel="stylesheet" href="../css/tiposStyle.css">
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
                                        <h3>Impuesto de renta</h3>
                                        <p>Valor que se aplica sobre las ganancias que obtienen las personas<br>
                                        naturales y sociedade
                                        </p>
                                        <h3>Topes</h3>
                                        <ul>
                                            <li>Patrimonio bruto superior a 4.500 UVT</li>
                                            <li>Ingresos brutos superior a 4.500 UVT</li>
                                            <li>Consumos de tarjetas de gredito superior a 1.400 UVT</li>
                                            <li>Valor total de compras y consumo superior a 1.400 UVT</li>
                                            <li>Acumulado de consignaciones superior a 1.400 UVT</li>
                                        </ul>
                                    </div>
                                    <div class="img">
                                        <img src="../images/impuesto_renta.png">
                                    </div>
                                </div>
                                <div>
                                    <h3>Recomendaciones</h3>
                                    <p>Revisar el calendario tributario que se puede encontrar en la DIAN y presente la declaración a tiempo, para<br>
                                    no incurrir en multas ni sanciones.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn" href="#" role="button">COMPLETAR ACTIVIDAD</a>
                            </div>
                        </div>
                    </div>
                </main>
            </section
        </div>
</body>
<?php
  include("../Modulos/js.php");
?>
</html>