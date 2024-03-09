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
                            <h3>Impuesto predial</h3>
                            <p>El Impuesto Predial es un tributo local que grava la propiedad raíz. Este impuesto se aplica a los propietarios de bienes<br>
                            inmuebles, como terrenos, casas, apartamentos u otros tipos de construcciones. El alcance del Impuesto Predial es<br>
                            local, ya que es gestionado por las entidades territoriales, como municipios y departamentos.
                            </p>
                            <p>
                            Las tarifas del Impuesto Predial se determinan tomando en cuenta el valor catastral de la propiedad. Este valor se<br>
                            establece según la ubicación, dimensiones, y características del inmueble. Las entidades territoriales establecen las<br>
                            tarifas aplicables, y generalmente, estas tarifas son proporcionales al valor catastral de la propiedad.
                            </p>
                            <h4>Ejemplo práctico</h4>
                            <p>Supongamos que Juan es propietario de una casa con un valor catastral de 100 millones de pesos</p>
                            <ul>
                                <li>Si la tarifa de Impuesto Predial es del 1%, Juan deberá pagar 1 millón de pesos anuale.<br> 
                                </li><br>
                                <li>Si la tarifa es progresiva y aumenta al 2% para propiedades con un valor superior a 80 millones,<br>
                                Juanpagaría 2 millones de pesos.
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="card-footer">
                            <a class="btn" href="industriaYcomercio.php" role="button">SIGUIENTE</a>
                </div>
            </div>
        </main>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>