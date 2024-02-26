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
    <link rel="stylesheet" href="../css/impuestoStyle.css">
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
                            <div class="card-header d-flex p-0 bg-white">
                                <h3 class="card-title p-3">Importancia de los impuestos</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    <select class="form-select" name="id_select" aria-label="Default select example" onchange="location = this.value;">
                                        <option selected>Clasificacion de los tributos</option>
                                        <option value="impuestos.php">impuestos</option>
                                        <option value="tasas.php">Tasas</option>
                                        <option value="contribucion.php">Contribuciones</option>
                                    </select>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="content-impuestos-1">
                                    <div class="tab-content-1">
                                        <h3>Impuesto:</h3>
                                        <p>Atender a las obligaciones públicas de inversión- Que pueden ser<br></p>
                                        <h3>Impuestos Diresctos</h3>
                                        <p>Son aquellos que recaen sobre las personas naturales y juridicas, midiendo<br>
                                            su capacidad económica
                                        </p>
                                        <h3>Ejemplos de impuestos Diresctos</h3>
                                        <p>Impuestos de renta<br>
                                        Impuestos de industria y comercio
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../images/impuesto_directo.png" alt="">
                                    </div>
                                </div>
                                <div class="content-impuestos-2">
                                    <div class="tab-content-2">
                                        <h3>Impuestos indirectos</h3>
                                        <p>Se imponen sobre los bienes y servicios los cuales son pagados<br> 
                                        indirectamente cuando el ciudadano realiza las compras. Es decir el<br> 
                                        estado lo cobra de manera indirecta.<br> 
                                        </p>
                                    </div>
                                    <div class="img">
                                        <img src="../images/impuesto_indirecto.png" alt="">
                                    </div>
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