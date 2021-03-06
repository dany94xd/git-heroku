<?php
session_start();
?>

<!doctype html>


<html lang="en" class="no-js">


<head>
	<title>Denunciaya</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
    <style type="text/css">
        
       #FormSeccion{
            margin: 0 auto;
            box-sizing: border-box;
            padding: 25px 0px;
            width: 60%;
            background-color: white;
            float: right;
        }
        #btn_post{
            color: white;
            background-color:dodgerblue;
            padding: 10px 30px;
            font-size: 20px;
            text-decoration: none;
        }  
        
        #Titulos{
            box-sizing: border-box;
            
        }
        
        .for-nombres, .for-problema, .for-ciudad, .for-direccion, .for-descripcion{
            padding: 5px 0px;
            }
        
        input{
            width: 70%;
            box-sizing: border-box;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid cornflowerblue;
        }
        
        textarea{
            width: 70%;
            border-radius: 5px;
            box-sizing: border-box;
            padding: 5px;
            border: 1px solid cornflowerblue;
        }
        @media screen and (max-width:767px){
            #FormSeccion{
                width: 100%;
                text-align: center;
            }
            
        }
        
    </style>
    
    
    
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header style="heigth:100%;">
			<div class="logo-box">
				<a href="index-2.html"><img alt="" src="images/logo1.png"></a>
			</div>
			<div class="search-box">
            <div></div>
            <form class="form-search" method="get" id="s" action="/">
            <div class="input-append">
            <input type="text" class="input-medium search-query" name="s" placeholder="Search" value="">
            <button type="button" class="btn btn-default btn-sm">
            <i class="fa fa-search" aria-hidden="true"></i> 
            </button>
            </div>
            </form>
            <div></div>
            </div>
			<a class="elemadded responsive-link" href="#">Menu</a>

			<div class="menu-box">
				<ul class="menu">
					<li><a  href="index2.php"><span>Inicio</span></a></li>
					<li><a href="about2.php"><span>Quienes Somos</span></a></li>
					<li><a href="services2.php"><span>Categorias</span></a></li>
					<li><a class="active" href="#"><span>Nueva Denuncia</span></a></li>
					<li><a href="contact2.php"><span>Contáctenos</span></a></li>
                    <li><a href="#"><span>
                            <?php

                            //$_SESSION['MiSession']= $_POST['usuario'];
                            // $nombre= $_POST['usuario'];
                            // $password= $_POST['contrasenia'];

                            if (isset($_SESSION['MiSession'])) {
                            echo "Bienvenido: (" . $_SESSION ['MiSession'] . ")";
                            $usuario=$_SESSION['MiSession'];

                            }else{
                            echo '<script>window.location.href = "index.php";</script>';
                             
                            }

                            ?>
                    </span></a></li>
                    <li><a href="admin/salir.php"><span>Cerrar Sesion</span></a></li>
				</ul>					
			</div>

			<div class="social-box">
				<ul class="social-icons">
					<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="dribble" ><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<div class="info">
					<a href="#" class="mail">denunciasya@hotmail.com<i class="fa fa-envelope-o"></i></a>
					<p class="phone">+38164 123 456<i class="fa fa-phone"></i></p>
				</div>

				<p class="copyright">&#169; 2014 Moler inc<br> All Rights Reserved</p>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		
            <div id="FormSeccion">
            <div id="Titulos">
                <h1>Formulario de Denuncias.</h1>
                <h4 style="color:gray; padding:5px 0px;">Estaremos encantados de responder su denuncia.</h4>
            </div>
            
            <div id="Formulario">
                <div class="for-nombres">
                    <form>
                        <input type="text" name="NombreApellido" placeholder="Nombre y Apellido">
                    </form>
                </div>
                <div class="for-ciudad">
                    <form>
                        <input type="text" name="Ciudad" placeholder="Ciudad">
                    </form>
                </div>
                <div class="for-problema">
                    <form>
                        <input type="text" name="problema" placeholder="Problema">
                    </form>
                </div>
                <div class="for-direccion">
                    <form>
                        <input type="text" name="Direccion" placeholder="Dirección">
                    </form>
                </div>
                <div class="for-descripcion">
                    <div>
                        <textarea name="Descripcion" placeholder="Escriba aqui su descripción..." rows="5">
                    </textarea>
                        
                    </div>  
                    <a href="#" style="padding:5px">Subir Foto...</a>
                </div>
                <div class="categorias">
                    <br>
                    Categorias:
                    <form action="/action_page.php">
                        <select name="cars">
                                <option value="robo">Robo</option>
                                <option value="servicios">Servicios</option>
                            <option value="transito">Transito</option>
                            <option value="animales">Animales</option>
                        </select>
                        <br><br>
                    </form>
                </div>
               
                <br>
                
                    </div>
                    <a id="btn_post" href="#">Publicar</a>
                                <br>
                                
                                
                </div>
			
            
			</div>
	
		<!-- End content -->

	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/preloader.gif">
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>

</html>
