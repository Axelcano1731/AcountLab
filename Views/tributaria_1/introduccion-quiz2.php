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
                            <p>¿Cuál es la entidad recaudadora de impuestos?</p>
                            <form>
                                <input type="radio" id="congreso" name="opciones" value="1">
                                <label for="congreso">Congreso de la República</label><br>
                                <input type="radio" id="secretaría" name="opciones" value="2">
                                <label for="secretaría">Secretaría de Hacienda</label><br>
                                <input type="radio" id="dian" name="opciones" value="3">
                                <label for="dian">DIAN</label>
                            </form>
                            <h3>5. Pregunta</h3>
                            <p>Los impuestos se clasifican en:</p>
                            <form>
                                <input type="radio" id="primarios" name="opciones" value="3">
                                <label for="primarios">Primarios y Secundarios</label><br>
                                <input type="radio" id="directos" name="opciones" value="2">
                                <label for="directos">Directos e indirectos</label><br>
                                <input type="radio" id="complementarios" name="opciones" value="1">
                                <label for="complementarios">Complementarios</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="tipos.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>