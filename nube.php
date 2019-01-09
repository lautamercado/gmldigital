<!DOCTYPE html>
<html lang="es">



<?php include('conexion.php'); ?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GML Producciones - Digital</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
   
    <link href="css/resume.min.css" rel="stylesheet">

  <link rel="stylesheet" href="lightbox/css/lightbox.min.css">


  </head>

  <body id="page-top">
<?php 

user_login();

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">GML - Digital</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/gml.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Fotos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Descargas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?modo=desconectar">Salir</a>
          
          </li>
        
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">GML
            <span class="text-primary">PRODUCCIONES</span>
          </h1>
          <div class="subheading mb-5">Mitre 1828 · Mar del Plata, AR 8300 · (223) 526-2423 ·
            <a href="mailto:gmlproducciones2015@gmail.com">gmlproducciones2015@gmail.com</a>
          </div>

          <p class="lead mb-5">ALGUNOS RECUERDOS NO SOLO SE PUEDEN CONTAR<br>Estuviste todo el año esperando para poder relajarte, dejanos encargarnos de documentar tus momentos especiales.<br> <br> SEGUINOS EN NUESTRAS REDES</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-vimeo"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>

            <br> <br>
            



            <p class="lead mb-5">
              
            <?php echo '<p>Bienvenido, ' . $_SESSION['nombre'] . '!</p>
               <p>¿Estos son tus datos?</p>
               <p>Usuario: ' . $_SESSION['nick'] . '</p>
               <p>Celular: ' . $_SESSION['celular'] . '</p>
               <p>Correo: ' . $_SESSION['mail'] . '</p>



             ';?>


            </p>




          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">FOTOS</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">VERANO 2018</h3>
              <div class="subheading mb-3">Estas son las mejores fotos de tus vacaciones</div>
            <!--  <p>Aun no tenes fotografias disponibles.</p> -->
    <div class="container galeria">
  
  <articles class="row">


<?php
    $vn = $_SESSION['nick'];
    $directory="var/".$vn;
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
          
     echo '

             <article class="col-md-3">
        <a href="'.$directory."/".$archivo.'" data-lightbox="example-set" data-title="12/12/2018">
        <img src="'.$directory."/".$archivo.'" alt=""'.$directory."/".$archivo.'"" class="img-thumbnail"></a>
      </article>  
      
      
      ';



        }
    }
    $dirint->close();
?>

</articles>









  </div>
            </div>
  
          </div>

  
        
          </div>

        </div>

      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">VIDEOS</h2>

             <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">VERANO 2018</h3>
              <div class="subheading mb-3">Estas son los mejores videos de tus vacaciones</div>
              <p>Aun no tenes videos disponibles.</p>
            </div>
          
          </div>

    

        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Descargas</h2>

          <div class="subheading mb-3">tu contenido no solo es digital tambien podes descargarlo</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              <a href="#">haz click aqui para descargar todas las fotos</a></li>
            <li>
              <i class="fa-li fa fa-check"></i>
             <a href="#"> haz click aqui para descargar todos los videos</a></li>
            <li>
              <i class="fa-li fa fa-check"></i>
              <a href="#">haz click aqui para descargar todas las fotos y videos</a></li>
          
          </ul>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Salir</h2>
          <p>Has salido correctamente de tu cuenta, espero que hayas disfrutado la experiencia.</p>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
  <script src="lightbox/js/lightbox.min.js"></script>
  <script>
    lightbox.option({
    'albumLabel': "Imagen %1 de %2"
    })
  </script>
  </body>

</html>
