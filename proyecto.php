<?php
    $pg="proyecto";
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
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="proyecto">
    <header>
        <div class="container">
            <?php include_once("menu.php"); ?>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>Mis Proyectos</h1>
                </div>
            </div>
            <div class="row">
               <div class="col-sm-8 col-12 mt-4">
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus consequatur qui numquam tenetur voluptatibus sequi, nihil nemo iusto quibusdam tempore repudiandae, tempora ipsa optio! Autem exercitationem a perspiciatis facere vel?</p>
               </div>
            </div>
            <div class="row items mt-5">
                <div class="col-sm-4 col-12 "> 
                    <div class="row card m-1 ">               
                        <img src="images/abmclientes.png" alt="ABM clientes" title="ABM clientes" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">                    
                            <h2>ABM CLIENTES</h2>
                        </div> 
                        <div class="col-12 pt-3 pb-0">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo" target="_blank">VER ONLINE</a>
                            </div>                            
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo" target="_blank">CÓDIGO FUENTE</a>
                            </div>                            
                        </div>
                    </div>    
                </div>  
                <div class="col-sm-4 col-12 mt-5 mt-sm-0">
                    <div class="row card m-1 ">      
                        <img src="images/gestionventas.png" alt="Sistema de Gestion de Ventas" title="Sistema de Gestion de Ventas" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">                    
                            <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        </div> 
                        <div class="col-12 pt-3 pb-0">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo" target="_blank">VER ONLINE</a>
                            </div>                            
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo" target="_blank">CÓDIGO FUENTE</a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 mt-5 mt-sm-0">
                    <div class="row card m-1">    
                        <img src="images/proyectinte.png" alt="Proyecto Final" title="Proyecto Final" class="img-fluid">
                        <div class="col-12 color-gradiente py-3">                    
                            <h2>PROYECTO FINAL</h2>
                        </div> 
                        <div class="col-12 pt-3 pb-0">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                        </div>      
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo" target="_blank">VER ONLINE</a>
                            </div>                            
                            <div class="col-6">
                                <a href="https://github.com/depcsuite/abmclientes" class="link-rojo" target="_blank">CÓDIGO FUENTE</a>
                            </div>                            
                        </div>              
                    </div>
                </div>    
            </div>

        </div>


    </main>
    <footer>
        <div class="container pt-5">
            <div class="row">
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