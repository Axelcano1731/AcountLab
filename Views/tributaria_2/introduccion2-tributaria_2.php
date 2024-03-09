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
                            <h3>Quién es responsable de gestionar los impuestos nacionales en<br>
                            colombia</h3>
                            <form>
                                <input type="radio" id="municipios" name="opciones" value="1">
                                <label for="municipios">Municipios</label><br>
                                <input type="radio" id="departamentos" name="opciones" value="2">
                                <label for="departamentos">Departamentos</label><br>
                                <input type="radio" id="gobierno" name="opciones" value="3">
                                <label for="gobierno">Gobierno central</label><br>
                                <input type="radio" id="entidades" name="opciones" value="4">
                                <label for="entidades">Entidades territoriales</label>
                            </form>
                            <h3>¿Cuáles son administrados por entidades territoriales como municipios y<br>
                            departamentos en el sistema tributario colombiano?
                            </h3>
                            <form>
                                <input type="radio" id="nacionales" name="opciones" value="3">
                                <label for="nacionales">Impuestos nacionales</label><br>
                                <input type="radio" id="locales" name="opciones" value="2">
                                <label for="locales">Impuestos locales</label><br>
                                <input type="radio" id="ambos" name="opciones" value="1">
                                <label for="ambos">Ambos</label><br>
                                <input type="radio" id="ninguno" name="opciones" value="4">
                                <label for="ninguno">Ninguno de los anteriores</label>
                            </form>
                            <h3>¿Qué nivel de gobierno se encarga de los impuestos locales en Colombia?</h3>
                            <form>
                                <input type="radio" id="gobierno" name="opciones" value="1">
                                <label for="gobierno">Gobierno central</label><br>
                                <input type="radio" id="departamentos" name="opciones" value="2">
                                <label for="departamentos">Departamentos</label><br>
                                <input type="radio" id="entidades" name="opciones" value="3">
                                <label for="entidades">Entidades territoriales</label><br>
                                <input type="radio" id="municipios" name="opciones" value="4">
                                <label for="municipios">Municipios</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="introduccion3-tributaria_2.php" role="button">COMPLETAR ACTIVIDAD</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>