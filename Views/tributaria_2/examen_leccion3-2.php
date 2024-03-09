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
                            <h3>4. Pregunta</h3>
                            <p>¿Cuál es la estructura principal de la Contribución a la Salud en Colombia?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Se basa únicamente en el ingreso laboral.</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Combina aportes del gobierno y de los empleadores</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Solo se financia a través de impuestos sobre bienes y raíces</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Es una tarifa fija aplicada a todas las transacciones comerciales</label>
                            </form>
                            <h3>5. Pregunta</h3>
                            <p>¿Cómo se financia principalmente la Contribución a la salud?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Únicamente a través de impuestos sobre bienes y raíces</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Aportes directos de los empleados y empleadores</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Financiamiento exclusivo del gobierno central</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Se financia a través de donaciones voluntarias</label><br>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="entidadesControl.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>