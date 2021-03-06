

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php","",$archivo);
    if($pagina=="invitados" || $pagina=="index" || $pagina=="Calendario"){
     echo ' <link href="css/colorbox.css" rel="stylesheet">';   
    }
        else if($pagina=="conferencia")
        {
            echo ' <link href="css/lightbox.css" rel="stylesheet">';

        }
     ?>



    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="<?php echo $pagina; ?>">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header class="site-header">
            <div class="hero">
                <div class="contenido-header">
                    <nav class="redes-sociales">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </nav>
                    <div class="informacion-evento">
                        <div class="clearfix">
                            <p class="fecha">
                               <i class="fa fa-calendar" aria-hidden="true"></i>   10-12-dic
                           </p>
                           <p class="ciudad">
                             <i class="fa fa-map-marker" aria-hidden="true"></i> Arequipa,PE
                        </p>
                     </div>

                     <h1 class="nombre-sitio">GlWebCamp</h1>
                     <p class="slogan">
                        La mejor Conferencia de <span>diseño web</span></p>
                    </div><!-- informacion evento -->

                </div><!-- contenido header -->
            </div><!--hero-->

        </header>
        <div class="barra">
            <div class="contenedor clearfix">

                <div class="logo">
                    <img src="img/logo.svg">
                </div>
                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="navegacion-principal clearfix">
                    <a href="conferencia.php">Conferencia</a>
                    <a href="calendario.php">Calendario</a>
                    <a href="invitados.php">Invitados</a>
                    <a href="registro.php">Reservaciones</a>
                </nav>
            </div><!-- contenedor -->
        </div> <!-- barra -->

