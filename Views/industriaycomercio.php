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
                                        <h3>Impuesto de industria y comercio</h3>
                                        <p>Es de carácter mnicipal y recae sobe las actividades industriales,<br>
                                        comerciales y de servicios realizados en el ámbito local. El impuesto al<br>
                                        consumo en Colombia puede aplicarse a diversos bienes y servicios, y la<br>
                                        tasa ouede variar según la industria del producto. Algunos son:
                                        </p>
                                        <ul>
                                            <li>Licores</li>
                                            <li>Combustibles</li>
                                            <li>Juegos de azar</li>
                                            <li>Tabaco y cigarillos</li>
                                        </ul>
                                    </div>
                                    <div class="img">
                                        <img src="../images/industria_comercio.png">
                                    </div>
                                </div>
                                <div class="img-white">
                                    <img src="../images/industria.png">
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