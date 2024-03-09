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
                            <h3>Impuesto sobre la renta</h3>
                            <p>El Impuesto sobre la Renta y Complementarios (IRC) en Colombia tiene un alcance amplio, ya que grava las ganancias<br>
                            obtenidas por personas naturales y jurídicas, así como aquellas asimiladas a estas ganancias.
                            </p>
                            <ul>
                                <li><strong>Personas Naturales: </strong>Este grupo incluye tanto a residentes como a no residentes que obtienen ingresos<br>
                                dentro del territorio colombiano. Esto abarca a individuos que trabajan, reciben rentas, o generan ingresos<br>
                                de diversas fuentes en Colombia.</li>
                                <li><strong>Personas Jurídicas: </strong>Empresas y entidades legales, como sociedades y compañías, que generan ganancias<br>
                                están obligadas a pagar el IRC. Esto cubre una amplia gama de actividades comerciales y empresariales</li>
                            </ul>
                            <p><strong>Tasas: </strong>El IRC opera con tasas escalonadas, lo que significa que la tasa impositiva varía según el nivel de ingresos. Este<br> 
                                enfoque progresivo implica que a medida que los ingresos aumentan, la tasa impositiva también lo hace. Por ejemplo,<br>
                                los tramos de ingresos más bajos pueden tener tasas más bajas, mientras que los tramos de ingresos más altos<br>
                                enfrentan tasas más elevadas. 
                            </p>
                            <p><strong>Estructura Progresiva: </strong>La estructura progresiva del IRC busca lograr una distribución equitativa de la carga tributaria.<br>
                                Esto significa que aquellos con ingresos más altos contribuirán proporcionalmente más al sistema, lo que refleja el<br>
                                principio de capacidad contributiva.
                            </p>
                            <p><strong>Deducciones: </strong>Los contribuyentes del IRC pueden deducir ciertos gastos de sus ingresos antes de calcular el impuesto.<br>
                                Estas deducciones pueden incluir gastos médicos, educativos, donaciones a organizaciones sin fines de lucro, entre<br>
                                otros. Esto ayuda a reflejar de manera más precisa la capacidad real de contribución de cada individuo o entidad.
                            </p>
                            <p><strong>Beneficios Tributarios: </strong>Además de las deducciones, existen beneficios fiscales diseñados para incentivar ciertas<br>
                                actividades económicas. Por ejemplo, se pueden ofrecer beneficios tributarios para fomentar la inversión en<br>
                                investigación y desarrollo, lo que a su vez contribuye al desarrollo económico del país. Estos beneficios pueden tomar<br>
                                la forma de créditos fiscales, exenciones o reducciones en las tasas impositivas.</p>
                        </div>
                    </div>
                <div class="card-footer">
                            <a class="btn" href="impuestoVenta.php" role="button">SIGUIENTE</a>
                </div>
            </div>
        </main>
</body>
<?php
  include("../../Modulos/js.php");
?>
</html>