<!DOCTYPE htmL>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=author content="Est. Mauricio Medrano Machicado">
        <meta name="KEYWORDS" content="inicio con PHP-POO, PHP">
        <meta name="description" content="pagina mejorada de inicio con PHP-POO">
        <meta name="viewport" content="width=device-width, initial-scale=l"> 
        <title>PAGINA UNO - PHP-POO</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/PEZ.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <!— ESTRUCTURA DE LA PAGINA-->
        <section class="container mt-3">
        <!-- COLUMNAS PARA BOOTSTRAP-->
        <div class="row bg-dark">
        <div class="my-3"></div>
        <!-- COLUMNA DE LA IZQUIERDA-->
            <div class="col-sm-12 col-md-12 col-lg-6 text-light">
                <center>
                    <h2 class="text-primary fw-bold">Datos y Ocupación</h2> 
                    <img class="col-sm-12 col-md-10 col-lg-8 rounded-circle" src="img/yo.jpg" alt="">
                </center>
                <?php
                    $nombre ="<h5 class='text-center'>Est. Mauricio Medrano Machicado</h5>";
                    $Datos	=array("Estudiante de Sistemas Informaticos, Tercer Año","Administrativo de Magisterio",
                        "Estudiante de MMA");
                    echo $nombre;
                    foreach($Datos as $valor )echo "<p class='card-text text-justify lead'>".$valor."</p>";    
                ?>
                <div class="mb-4"></div> 
            </div>
        <!-- COLUMNA DE LA DERECHA -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <center>
                    <h2 class="text-danger fw-bold">Asignaturas Cursadas</h2> 
                </center> 
                <?php
                    $M=array("ANÁLISIS Y DISEÑO DE SISTEMAS II (ADS - 306)","BASE DE DATOS II (BDD - 308)",
                    "DISEÑO Y PROGRAMACIÓN WEB II (DPW - 307)","EMPRENDIMIENTO PRODUCTIVO (EMP - 301)",
                    "GESTIÓN DE SOFTWARE (GDS - 303)","PROGRAMACIÓN III (PRG - 302),REDES DE COMPUTADORAS II (RDC - 304)",
                    "TALLER DE MODALIDAD DE GRADUACIÓN (TMG - 305)");
                
                    echo '<div class="list-group">';
                    for($i=0;$i<7;$i++)
                        echo '<a href="#" class="list-group-item list-group-item-action">'. $M[$i] .'</a>';
                ?>     
                </div>
            </div>
        </div>
        </section>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
    </body>
</html>