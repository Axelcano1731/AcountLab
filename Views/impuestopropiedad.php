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
                                        <h3>Impuesto sobre la propiedad</h3>
                                        <p>El imnpuesto a la propiedad se conoce como el impuesto Predial. Este<br>
                                        impuesto recae sobre el valor de los bienes inmuebles, como terrenos y<br> 
                                        edificaciones
                                        </p>
                                        <p>
                                            Se calcula en función del evalúo catastral del bien inmueble. Cada<br>
                                            municipio determina su propia tarifa y puede variar según la<br>
                                            ubicación, el tamaño y el valor del inmueble.
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../images/impuesto_propiedad.png">
                                    </div>
                                </div>
                                <div class="img-black">
                                    <img src="../images/pazysalvo.png">
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