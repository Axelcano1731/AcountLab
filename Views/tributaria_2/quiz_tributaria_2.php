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
                            <p>¿Cuál es el objeto de gravamen principal del Impuesto Predial?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Ingresos laborales</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Bienes de lujo</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Propiedad de raíz</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Transacciones internácionales</label>
                            </form>
                            <h3>2. Pregunta</h3>
                            <p>¿En qué nivel se establecen las tarifas del Impuesto Predial?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">A nivel nacional</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">A nivel departamental</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">A nivel municipal</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">A nivel regional</label><br>
                            </form>
                            <h3>3. Pregunta</h3>
                            <p>¿Qué tipo de propiedad se grava con el Impuesto Predial?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Bienes muebles</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Vehículos automotores</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Propiedad raíz</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Activos financieros</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="quiz2_tributaria_2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>