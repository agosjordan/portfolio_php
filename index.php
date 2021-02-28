<?php
    $pg="inicio";
?>
<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="index">
    <header>
        <div class="container">
            <?php include_once("menu.php"); ?>
        </div>
    </header>
    <main>
        <div class=" nombre">
           <h2 class="text-center">Hola mi nombre es Agostina, soy desarrolladora full stack  |  <i class="fas fa-search search"></i></h2>   
        </div>
        <div class="text-center" >
            <a class="btn shadow" href="proyecto.php">MIRA MI TRABAJO</a>
        </div>
    </main>
    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>