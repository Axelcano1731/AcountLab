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
                            <p>¿Cuál es el objetivo principal del Impuesto al Patrimonio?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Gravar las transacciones internacionales</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Gravar la propiedad de bienes y activos</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Financiar proyectos de infraestructura</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Fomentar la inversión extranjera</label>
                            </form>
                            <h3>5. Pregunta</h3>
                            <p>¿Quiénes son los contribuyentes del Impuesto al Patrimonio?</p>
                            <form>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Únicamente las personas naturales</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Empresas y personas naturales con alto patrimonio</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Solo las empresas con fines lucrativos</label><br>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Instituciones educativas sin fines de lucro</label><br>
                            </form>
                            <h3>6. Pregunta</h3>
                            <p>¿Cómo se calculan las tarifas del Impuesto al Patrimonio?</p>
                            <form>
                                <input type="radio" id="1" name="opciones" value="1">
                                <label for="1">Porcentaje fijo sobre los ingresos brutos</label><br>
                                <input type="radio" id="2" name="opciones" value="2">
                                <label for="2">Porcentaje sobre el patrimonio neto</label><br>
                                <input type="radio" id="3" name="opciones" value="3">
                                <label for="3">Tarifa única para todas las personas naturales</label><br>
                                <input type="radio" id="4" name="opciones" value="4">
                                <label for="4">Varía según la ubicación geográfica de los bienes</label>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn" href="examen_leccion2-3.php" role="button">SIGUIENTE</a>
                    </div>
                </div>
            </main>
        </div>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>