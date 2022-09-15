<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/powercrossfit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>Power Crossfit</title>
    
</head>
    
    <section>
        <nav class="navbar navbar-expand-lg navbar-light navbar-container">  
        <div class="container-fluid">
            <!-- Image and text -->
              <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
        <img src="./img/logows.jpg" height="40vh" style="border-radius: 5px; " alt="">

                </a>
              </nav>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse navbar-Collapse-Container" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                <a class="nav-link active text-white nav-container" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link text-white nav-container" href="./crossfit.php">Crossfit</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white nav-container" href="#">¿Quienes somos?</a>
                </li>

                <li class="nav-item">
                <a class="nav-link text-white nav-container"  href="#" tabindex="-1" aria-disabled="true">Información</a>
                </li>

                <nav> 

                        <ul class="admin-Tools-Title nav-link text-white nav-container">
                          <li><a href="./administracion.php" class="admin-Tools">Administracion</a>

                        <!--
                            <ul class="admin-Hover"> 
                              <li><a href="" class="admin-Hover-a">Ingresar Datos</a></li>
                              <li><a href="" class="admin-Hover-a" >Pagos</a></li>
                              <li><a href="" class="admin-Hover-a">Cuentas</a></li>

                            </ul>
                        -->

                          </li>
                        </ul>
                          
                </nav>

              
                </ul>

                <ul class="navbar-nav me-6 mb-6 mb-lg-0">
                <?php 
                if (!isset($_SESSION['correo_login'])) { ?>

                <li class="nav-item">
                  <a class="nav-link text-white nav-container" href="./login.php" tabindex="-1" aria-disabled="true">Login</a>
                </li>
                 
                <?php } else { ?>
                  <li class="nav-item">
                  <a class="nav-link text-white nav-container" href="./salir.php" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                </li>

                <?php } ?>
                

             
            </ul>

          

            </div>
        </div>
        </nav>
    </section>
    