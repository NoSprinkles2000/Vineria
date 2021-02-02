<?php
    //$error="";
    if(isset($_POST['submit'])){


        $usuario=$_POST['email'];
        $password=$_POST['contrasena'];
        $nombre=$_POST['nombre'];
        //*****Conexion a la Base de Datos ***/
        $conexion=mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"vineriabd");
        
        /**** 
            CONSULTA 
                mysql_real_escape_string, evita las injecciones SQL dañinas.
        ***/
       // $consulta=sprintf("SELECT * FROM usuarios WHERE email='%s' AND contrasena='%s'",mysqli_real_escape_string($conexion,$usuario),mysqli_real_escape_string($conexion,$password));
        $consulta=sprintf("INSERT INTO usuarios (email, nombre, contrasena, permiso) VALUES ('%s','%s','%s', 0)",
         mysqli_real_escape_string($conexion,$usuario),
         mysqli_real_escape_string($conexion,$password),
         mysqli_real_escape_string($conexion,$nombre));
        mysqli_query($conexion,$consulta);
        echo "usuario registrado";

    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Golden</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="./css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="./css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="./css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="./css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="./css/style.css">

	<!-- Modernizr JS -->
	<script src="./js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
    <body>	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.php">The Golden</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="./single.html">Tienda</a></li>
						<li><a href="./about.php">Acerca de</a></li>
						<li><a href="./contact.php">Contacto</a></li>
						<li><a href="./login.php">Ingresar</a></li>
					</ul>
                </div>
			</div>
		</div>
	</nav>

	<div class="col-md-8 col-md-offset-2">
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
					<div id="wrapper">           
						<div id="contenido">                
							<form action="" class="inline" method="post">
								<br>
								<br>
								<div>Email: <br> <input type="email" class="form-control" placeholder="ejemplo@ejemplo.com" name="email"></div>
								<div>Nombre: <br> <input type="text" class="form-control" placeholder="Jose Perez" name="nombre"></div>
                                <br>
                                <div>Contraseña: <br> <input type="password" class="form-control" name="contrasena"></div>
								<br>
								<div><button type="submit" class="btn btn-default btn-block" name="submit">Registrar</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
    </body>
</html>
