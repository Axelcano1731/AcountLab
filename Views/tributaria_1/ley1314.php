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
    <link rel="stylesheet" href="../../css/ley1314.css">
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
                                    <h3>Ley 1314 de 2009</h3>
                                        <p>Introduce cambos significativos al ámbito contable y financiero<br> 
                                        Colombiano.
                                        </p>
                                    <h3>Ley 1607 de 2012 y Ley 1819 de 2016</h3>
                                        <p>Relacionadas con la reforma tributaria, contiene disposiciones sobre los<br>
                                        impuestos, el iva, asi como otros aspectros fiscales.
                                        </p>
                                    <h3>Ley 624 de 1989</h3>
                                        <p>Establece disposiciones relacionadas con el régimen tributario en<br>
                                        Colombia. Su objetivo es regular la recaudación de impuestos y la<br>
                                        administración fiscal en el país.
                                        </p>
                                </div>
                                <div class="img">
                                    <img src="../../images/Color_negro.jpg">
                                    <img src="../../images/Color_negro.jpg">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn" href="../tributaria_2/tributaria_2.php" role="button">COMPLETAR ACTIVIDAD</a>
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