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
                            <h3>1. Pregunta</h3>
                            <p>¿Cuál es el alcance y aplicación principal del impuesto sobre las Ventas(IVA) en colombia?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Solo aplica a la venta de bienes</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Se aplica a la venta de bienes y la prestación de servicios</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Exclusivamente sobre servicios profesionales</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Exclusivamente sobre servicios profesionales</label>
                            </form>
                            <h3>2. Pregunta</h3>
                            <p>¿Cuál es la tasa general del IVA en Colombia y cuándo se aplican excepciones?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">19%, sin excepciones</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">16%, con excepciones para alimentos y medicamentos</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">20%, con excepciones para bienes de lujo</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">18%, sin excepciones para ningún sector</label><br>
                            </form>
                            <h3>3. Pregunta</h3>
                            <p>¿Cómo impacta el IVA en bienes y servicios?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Solo afecta a los bienes de lujo</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Grava tanto la venta de bienes como la prestación deservicios</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Exclusivamente gravado en el sector de la salud</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">No tiene impacto en el sector de la educación.</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="examen_leccion2-2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>