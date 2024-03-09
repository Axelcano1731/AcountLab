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
                            <h3>10. Pregunta</h3>
                            <p>¿Cómo pueden variar las tarifas en el Impuesto de Industria y Comercio?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Son fijas y no pueden variar</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Varían según el tipo de productos vendidos</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Dependiendo del tamaño y la ubicación de la empresa.</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">No hay variaciones, se aplican tarifas uniformes en todo el país.</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="impuestoPredial.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>