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
                            <h3>Retención Fuente</h3>
                            <p>La Retención en la Fuente es un mecanismo utilizado por las autoridades tributarias para anticipar el recaudo de<br> 
                            impuestos.
                            </p>
                            <p>
                            El propósito principal es asegurar el pago oportuno de los impuestos sobre los ingresos. Funciona restando una parte<br>
                            del pago total antes de que el beneficiario reciba sus ingresos. Las entidades que realizan pagos están obligadas a<br>
                            retener una fracción y remitirla a la administración tributaria correspondiente. Este sistema ayuda a evitar la evasión<br>
                            fiscal y garantiza la recaudación eficiente de los impuestos.
                            </p>
                            <ul>
                                <li><strong>Salarios: </strong> En el caso de los salarios, los empleadores retienen una parte del sueldo de los empleados y lo<br> 
                                remiten a la autoridad fiscal.
                                </li><br>
                                <li><strong>Honorarios: </strong>Quienes pagan honorarios profesionales o servicios también están obligados a practicar<br>
                                retenciones y transferirlas a la entidad tributaria.
                                </li>
                                <li><strong>Arrendamientos: </strong>En algunos casos, los pagadores de alquileres deben realizar retenciones y reportarlas a<br>
                                la autoridad fiscal.
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="card-footer">
                            <a class="btn" href="contribucionSalud.php" role="button">SIGUIENTE</a>
                </div>
            </div>
        </main>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>