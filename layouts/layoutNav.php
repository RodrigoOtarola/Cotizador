<!--Menu de navegacion-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cotizador</title>
    <link rel="icon" href="img/icon.png">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="navbar-fixed">
    <nav class="nav-wrapper orange lighten-5">
        <div class="container">
            <a href="#" class="brand-logo black-text">Cotizador</a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i
                        class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <!--clase hide-on-med-and-down es para desaparecer menu en responsive-->
                <li><a href="form.php" class="black-text">Ingresar</a></li>
                <li><a href="#" class="black-text">Sección 2</a></li>
                <li><a href="#" class="black-text">Sección 3</a></li>
                <li><a href="#" class="dropdown-trigger black-text" data-target="id_drop">Desplegable<i
                                class="material-icons right">arrow_drop_down</i></a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--Si se activa el menu froptown se desplegan estas celdas-->
<ul id="id_drop" class="dropdown-content">
    <li><a href="#" class="black-text">Item 1</a></li>
    <li class="divider"></li>
    <li><a href="#" class="black-text">Item 2</a></li>
    <li class="divider" class="black-text"></li>
    <li><a href="#" class="black-text">Item 3</a></li>
    <li class="divider"></li>
    <li><a href="#" class="red-text"><i class="material-icons right">close</i>Cerrar</a></li>
</ul>
<!--Si pasamos a responsive se agrupa menu-->
<ul class="sidenav" id="menu-responsive"><!--id tiene que tener el mismo nombre del data target-->
    <li><a href="form.php" class="black-text">Ingresar</a></li>
    <li><a href="#" class="black-text">Sección 2</a></li>
    <li><a href="#" class="black-text">Sección 3</a></li>
    <!--<li><a href="#" class="dropdown-trigger" data-target="id_drop">Desplegable<i
                    class="material-icons right">arrow_drop_down</i></a>
    </li>-->
    <li><a href="index.php">Cerrar menú<i class="material-icons right">close</i></a></li>
</ul>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        M.AutoInit();/*Para inicializar todo lo de JS*/
    });
</script>

<footer class="footer orange lighten-5">
    <div class="footer-copyright center">
        <div class="container">
            Todos los derechos reservados <?php echo date('Y'); ?>
        </div>
    </div>
</footer>
</body>

</html>
