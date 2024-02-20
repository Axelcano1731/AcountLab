<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acount Lab - Contable</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>
    <?php
    include("modulos/head.php");
     ?>
</head>
<body>
    <?php
    include("Modulos/menu.php");
    ?>
    <div class="main-content">
        <?php
            include("Modulos/header.php");
        ?>
            <main>
                <div class="cards">
                        <div class="card-single">
                            <span>
                                <li class='breadcrumb-item' aria-current='page'>
                                <ul>Introduccion</ul>
                                <ul>Tipos</ul>
                                <ul>Leyes</ul>
                                </li></span>
                            </span>
                        </div>
                </div>
                    <div class="">
                        <div class="card">
                            <div class="card-header d-flex p-0 bg-white">
                                <h3 class="card-title p-3">Importancia de los impuestos</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    <select class="form-select" name="id_select" aria-label="Default select example">
                                        <option selected>Clasificacion de los tributos</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <h3>Impostancia de los impuestos</h3>
                                    <p>Los impuestos son la principal fuente de ingresos del Estado.Sin la<br> 
                                    tributacion, el Estado no tendría suficiente dinero para garantizar bienes y<br> 
                                    servicios basicos para la poblacion, ni para mejorar la infrastructura del <br> 
                                    pais.
                                    </p>
                                </div>
                                <div class="img">
                                    <img src="images/Impuesto_Pago.jpg">
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
  include("Modulos/js.php");
?>
</html>