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
    <link rel="stylesheet" href="../../css/tasasStyle.css">
</head>
<body>
    <?php
    include("../../Modulos/menu.php");
    ?>
    <div class="main-content">
        <?php
            include("../../Modulos/header.php");
        ?>
        <section>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <span>
                            <ul class='breadcrumb-item' aria-current='page'>
                                <li class="selected"><a href="tributaria_1.php">Introduccion</a></li>
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
                                <div class="tab-content-1">
                                    <h3>Tasas</h3>
                                    <p>Aportes que se pegan al estado como remuneración al servicio prestado<br> </p>
                                    <h3>Ejemplos:</h3>
                                    <p>Peajes (Producto de la decisión propia de viajar)<br> 
                                    Gasolina (Producto de la decisión de tener vehiculo)
                                    </p>
                                </div>
                                <div class="img-tasa">
                                    <img src="../../images/tasas.png">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn" href="contribucion.php" role="button">COMPLETAR ACTIVIDAD</a>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <script src="../../js/Select.js"></script>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>