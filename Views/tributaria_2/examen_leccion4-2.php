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
                            <p>¿Qué implica la función de control aduanero de la DIAN?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Regulación del sistema educativo</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Supervisión de operaciones aduaneras, incluyendo importación y<br>
                                exportación</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Administración de la salud pública</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Gestión de actividades deportivas internacionales</label>
                            </form>
                            <h3>5. Pregunta</h3>
                            <p>¿Cuál de las siguientes actividades NO está dentro de las responsabilidades de la DIAN?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Asesorar a los contribuyentes sobre obligaciones tributarias</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Aplicar sanciones y multas en caso de incumplimiento fiscal</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Gestionar el sistema educativo</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Implementar sistemas tecnológicos para facilitar la presentación de<br>
                                declaraciones</label><br>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="tributaria_2.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>