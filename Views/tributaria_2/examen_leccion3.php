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
                            <p>¿Cuál es el propósito principal de la Retención en la Fuente en Colombia?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Financiar proyectos de infraestructura</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Garantizar la salud de los contribuyentes</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Asegurar el pago anticipado de impuestos</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Promover la inversión extranjera</label>
                            </form>
                            <h3>2. Pregunta</h3>
                            <p>¿Cómo funciona el mecanismo de la Retención en la fuente?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Los contribuyentes retienen una parte de los ingresos de sus empleados y<br>
                                la remiten al gobierno.</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">El gobierno retiene directamente los ingresos de los contribuyentes sin<br>
                                intervención de terceros</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Se aplica solo a transacciones internacionales</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Los empleados retienen parte de sus ingresos y lo entregan al gobierno</label><br>
                            </form>
                            <h3>3. Pregunta</h3>
                            <p>¿En qué casos se aplica la Retención en la Fuente?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Únicamente en transacciones de bienes raíces</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">En todas las transacciones comerciales</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Exclusivamente a las empresas sin fines de lucro</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">En ingresos laborales, honorarios y otros pagos específicos</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="examen_leccion3-2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>