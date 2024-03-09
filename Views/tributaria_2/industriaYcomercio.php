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
                            <h3>Industria y Comercio</h3>
                            <p>El Impuesto de Industria y Comercio (ICA) es un tributo municipal que grava las actividades económicas desarrolladas<br> 
                            por empresas, comerciantes e industriales en un determinado territorio. Este impuesto se aplica a nivel local y es<br>
                            gestionado por los municipios.
                            </p>
                            <p>
                            Las tarifas del ICA pueden variar según la naturaleza de la actividad económica y las políticas fiscales locales. Por lo<br>
                            general, se aplican tarifas proporcionales al volumen de ventas, ingresos brutos o al tamaño de la empresa. Además,<br>
                            las tarifas pueden variar en función de la actividad económica, con diferentes tasas para la industria, el comercio<br>
                            y los servicios
                            </p>
                            <h4>Ejemplo práctico</h4>
                            <p>Si una tienda tiene ingresos brutos de 50 millones de pesos y la tarifa del ICA es del 2%, el impuesto a pagar sería de 1<br>
                            millón de pesos</p>
                        </div>
                    </div>
                <div class="card-footer">
                            <a class="btn" href="quiz_tributaria_2.php" role="button">SIGUIENTE</a>
                </div>
            </div>
        </main>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>