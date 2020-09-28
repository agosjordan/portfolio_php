<?php
    $pg="contacto";
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

<body id="contacto">
    <header>
        <div class="container">
            <?php include_once("menu.php"); ?>
        </div>
    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis soluta nulla doloremque ullam
                        quod quia quo voluptate explicabo dicta sapiente. Iure porro tenetur, nam doloribus magnam alias
                        assumenda nemo quo?</p>

                </div>
                <div class="col-sm-6 col-12 mt-4">
                    <form action="" method="POST">
                        <div class="mb-3 ">
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3 ">
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control shadow"
                                placeholder="Correo">
                        </div>
                        <div class="mb-3 ">
                            <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"
                                placeholder="Comentarios"></textarea>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6 text-left">
                            <h2>CAPTCHA</h2> 
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn shadow">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <footer>
        <div class="container">
            <div class="row pt-5 pt-sm-0">
                <div class="col-sm-3 col-12 text-sm-left text-center pb-3 pb-sm-0">
                    <a href="https://github.com" target="blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/agosjordan/" target="blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <span id="sponsor">Sponsor: </span> <a href="http://depcsuite.com" target="blank" title="depcsuite">DePc suite</a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center">
                    <a href="mailito:agos.jordan@hotmail.com">agos.jordan@hotmail.com</a>
                </div>
                <div class="col-sm-3 col-12 text-right">
                    <a href="https://api.whatsapp.com/send?phone=541134131093" target="blank" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>