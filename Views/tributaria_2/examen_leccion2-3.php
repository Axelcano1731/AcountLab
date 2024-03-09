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
                            <h3>7. Pregunta</h3>
                            <p>¿Cuál es el alcance principal del Impuesto Predial?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Gravar las transacciones internacionales en una región específica.</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Gravar la propiedad raíz ubicada en un territorio determinado</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Financiar programas de salud a nivel local</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Aplicar tarifas únicamente a empresas multinacionales</label>
                            </form>
                            <h3>8. Pregunta</h3>
                            <p>¿Cómo se determinan las tarifas del Impuesto Predial?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Tarifa única para todas las propiedades</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Basadas en el valor catastral de la propiedad</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Varían según la edad de la construcción</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">No existen tarifas específicas para este impuesto</label><br>
                            </form>
                            <h3>9. Pregunta</h3>
                            <p>¿Cuál es la naturaleza y aplicabilidad del Impuesto de Industria y Comercio?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Grava exclusivamente la industria manufacturera</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Se aplica solo a grandes corporaciones</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Grava la actividad económica en un territorio determinado</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Exclusivamente aplicable a las empresas sin fines de lucro</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="examen_leccion2-4.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>