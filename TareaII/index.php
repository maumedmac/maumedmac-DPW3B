<?php
    $titulo = "Curso DPW-II, proyecto PRIMERA ETAPA";
    $subtitulol = "Sistema de Gestión Académica para la Unidad Educativa";
    $parrafo = "Debido al avance de la tecnología e innovadoras formas de comunicación como Internet, portales y sistemas de información han hecho que aumente la demanda y la necesidad de contar con un sistema vía web dentro de las organizaciones, empresas públicas o privadas, y dentro de todo ese grupo se encuentran las instituciones educativas."; 
    $subtitulo2 = "Objetivo General del proyecto:";
    $parrafo2 = "Desarrollar e implementar un Sistema de Gestión Académica para la Unidad
    Educativa para dar una mejor atención y un servicio de
    calidad a los estudiantes, profesores y padres de familia en cuanto al registro académico
    y personal de tal forma que se pueda tener una información actualizada, el cual nos
    permita tomar decisiones de forma rápida y sobre todo no se tenga el riesgo a la perdida
    de toda esta Información.";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Coapatible" content="IE=edge">
        <meta name=author content∙"Est. MAuricio Medrano Machicado">
        <meta name="KEYWORDS" content="inicio con PHP-POO, PHP">
        <meta name="description" content="pagina aejorada de inicio con PW-POO">
        <meta name="viewport" eontent="width=device-width, i∩itial-scale=l"> 
        <title>PAGIHA UNO - PHP-POO</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/PEZ.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript">
        function limpiarFormulario() {
            document.getElementById("miForm").reset();
        }
    </script>
    </head> 
<body>
    <!-- ESTRUCTURA DE LA PAGIHA-->
        <section class="container Mt-3">
            <!-- COLUMHAS PARA BOOTSTRAP-->
                <div class="row bg-light">
                <div class="my-2"></div>
                <!-- PRESENTACION DEL TEMA DE PROYECTO-->
                <div class="col-sm-12 col-ml-12 col-lg-6 float-left my-5">
                    <article class="" style="text-align: justify;">
                        <h3 class="display-4 text-uppercase text-center font-weight-bold"><?php echo $titulo; ?></h3>
                        <h4 class="te×t-uppercase text-danger font-italic"><?php echo $subtitulol; ?></h4>
                        <p class="lead text∙justify font-weight-bold font-italic"><?php echo $parrafo; ?></p>
                        <h4 class="te×t-uppercase te×t-danger font-italic"><?php echo $subtitulo2; ?></h4>
                        <p class="lead text-justify font-weight-bold font-italic"><?php echo $parrafo2; ?></p> 
                    </article>
                </div>
                <!-- ENO PRESENTACION OEL PROYECTO-->
                <!-- COLUMNA DEL FORMULARIO-->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <form class="bg-success p-3 m-5 rounded-pil" action="lib/checklogin.php" method="POST" >
                    <?php if(isset($_GET['msg'])){/*obtiene el mensaje que manda el checklogin a Ia url*/ 
                        echo "<center><div class='alert alert-danger'><span>".$_GET['msg']."</span></div></center>"; 
                    }
                    ?>
                    <?php
                    error_reporting(E_ERROR | E_WARNING | E_PARSE);/*deja de mostrar notificaciones*/
                    if ($_GET["error"]=="si") {
                        echo "<div class='alert alert-danger, role='alert'><center><strong>Ops!-Verifica tus datos.</strong></center></div>"; 
                    }
                    ?>
                    <h2 class="display-5 text-center fw-bold">USUARIO</h2>
                    <div>
                        <img src="img/yo.jpg" width="250px" class="mx-auto rounded-circle circle-image d-block my-4" >
                    </div> 
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Introduzca usuario" name="user" id="user" > 
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Introduzca contraseña" name="pass" id="pass"> 
                    </div>
                    <div class="my-4">
                        <label class="custon-control custom-checkbox">
                            <input type="checkbox" class="custon-control-i∩put">
                            <span class="custon-control-indicator"></span>
                            <span class="custon-control-description text-dark">Recordar contraseña en esta computadora</span> 
                        </label>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button type="submit" name="submit" id="subwit" class="btn btn-primary btn-lg">Iniciar Sesion</button> 
                    <span>
                        <a class="btn bg-warning btn-block btn-lg d-grid gap-2" href="index.php" onclick="limpiarFormulario()">Limpiar Datos</a>
                    </span> 
                    </div>
                    </form>
                    </div>
                <!-- ENO COLUMNA DEL FORMULARIO -->
            </div>
        </section>

    


    <script src="js/bootstrap.min.js"></script> 
    <script src="js∕popper.min.js"></script>
    
    
</body>
</html>

    

