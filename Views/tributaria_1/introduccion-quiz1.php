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
                            <p>¿La principal fuente de financiació del estado es?</p>
                            <form>
                                <input type="radio" id="regalias" name="opciones" value="1">
                                <label for="regalias">Regalias</label><br>
                                <input type="radio" id="valorizaciones" name="opciones" value="2">
                                <label for="valorizaciones">Valorizaciones</label><br>
                                <input type="radio" id="tributos" name="opciones" value="3">
                                <label for="tributos">Tributos</label>
                            </form>
                            <h3>2. Pregunta</h3>
                            <p>¿En cuantas categorías se clasifican los tributos?</p>
                            <form>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">3</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">2</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">1</label>
                            </form>
                            <h3>3. Pregunta</h3>
                            <p>¿Qué es una tasa según el tributo?</p>
                            <form>
                                <input type="radio" id="incremento" name="opciones" value="1">
                                <label for="crecimiento">Un incremento de tributo obligatorio</label><br>
                                <input type="radio" id="aportes" name="opciones" value="2">
                                <label for="aportes">Aportes pagados al Estado por la prestación del servicio</label><br>
                                <input type="radio" id="generador" name="opciones" value="3">
                                <label for="generador">Es un hecho generador.</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="introduccion-quiz2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>