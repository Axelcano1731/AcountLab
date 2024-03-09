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
                            <p>¿Cuál es la función principal de la DIAN en Colombia?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Administrar el sistema educativo</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Velar por el cumplimiento de obligaciones tributarias y aduaneras</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Gestionar el sistema de salud</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Regular el comercio internacional</label>
                            </form>
                            <h3>2. Pregunta</h3>
                            <p>¿Bajo qué entidad gubernamental opera la DIAN en Colombia?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Ministerio de Educación</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Ministerio de Relaciones Exteriores.</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Ministerio de Hacienda y Crédito Público</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Ministerio de Cultura</label><br>
                            </form>
                            <h3>3. Pregunta</h3>
                            <p>¿Qué impuestos está encargada de recaudar la DIAN?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Solo impuestos locales.</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Impuesto sobre la Renta y Complementarios (IRC) y el Impuesto al<br>
                                Patrimonio.</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Impuesto de Timbre Nacional</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Todos los impuestos en Colombia</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="examen_leccion4-2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>