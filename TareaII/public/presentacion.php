<!DOCTYPE htmL>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=author content="Est. Mauricio Medrano Machicado">
        <meta name="KEYWORDS" content="inicio con bootstrap">
        <meta name="description" content="pagina mejorada de inicio con bootstrap5">
        <meta name="viewport" content="width=device-width, initial-scale=l"> 
        <title>PAGINA UNO - PHP-POO</title>
        <link rel="shortcut icon" type="image/x-icon" href="../img/PEZ.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    
    <body>
        <!— ESTRUCTURA DE LA PAGINA-->
        <section class="container mt-3">
        <!-- COLUMNAS PARA BOOTSTRAP-->
        <div class="row bg-success bg-gradient">
        <div class="my-3"></div>
        <!-- COLUMNA DE LA IZQUIERDA-->
            <div class="col-sm-12 col-md-12 col-lg-6 text-light">
                <center>
                    <h2 class="text-light fw-bold">Datos y Ocupación</h2> 
                    <img class="col-sm-12 col-md-10 col-lg-8 rounded-circle" src="../img/images.jpg" alt="">
                </center>
                <?php
                    $nombre ="<h3 class='text-center'>UNIDAD EDUCATIVA ARTEMIO CAMARGO</h3>";
                    $Datos	=array("UNIDAD EDUCATIVA SECUNDARIA","ZONA ALTO TACAGUA","LA PAZ - BOLIVIA", "2022");
                    echo $nombre;
                    foreach($Datos as $valor )echo "<h4 class='text-center'>".$valor."</h4>";    
                ?>
                <div class="mb-4"></div> 
            </div>
        <!-- COLUMNA DE LA DERECHA -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <center>
                    <h2 class="text-light fw-bold">MODULOS A DESARROLLAR</h2> 
                </center> 
                <?php
                    $M=array("SISTEMA DE CONTROL DE ASISTENCIA","SISTEMAS CUADERNO PEDAGOGICO",
                    "APP PARA RESGISTRO ASISTENCIA","GENERADOR DE ROPORTES DE ASISTENCIA",
                    "GENERADOR DE BOLETINES","GENERADOR DE ESTADISTICA DE APROVECHAMIENTO",
                    "GENERADOR DE BOTELINES Y CENTRALIZADORES","CONTROL DE AVANCE PLAN TRIMESTRAL",
                    "CONTROL DE RECEPCION Y ENTREGA DESAYUNO ESCOLAR");
                
                    echo '<div class="list-group">';
                    for($i=0;$i<sizeof($M);$i++)
                        echo '<a href="#" class="list-group-item list-group-item-action">'. $M[$i] .'</a>';
                ?>     
                </div>
            </div>
        </div>
        </section>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>