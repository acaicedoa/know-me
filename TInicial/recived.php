
 <!DOCTYPE HTML>
<html>
	<head>
		<title>Inicio</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<style> 
			.mensaje{
				text-align: center;
				font-size: 25px;
				font-family: century gothic;
				padding: 12px;
			}
		</style>
	</head>
	<body>
		

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="Biografia.html">Biografia</a></li>
						<li><a href="Aspiraciones.html">Aspiraciones</a></li>
						<li class="active"><a href="Formulario.php">Formulario</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Angelica Caicedo </a></h1>
					<span class="tag">"Todo tiene su momento oportuno; hay un tiempo para todo lo que se hace bajo el cielo."</span>
				</div>
			</div>
		</div>
	<?php 


		if (isset($_GET['N']) && empty($_GET['N']) || !ctype_alpha($_GET['N'])) {
			
			$error="nombre = Error de nombre";
		}else{
			$Name =$_GET['N'];
			$NO="Nom=$Name";
		}

		if (isset($_GET['T']) && empty($_GET['T']) || !is_numeric($_GET['T'])) {
			
			$error.="telefono = Error de telefono";
		}else{
			$Phone =$_GET['T'];
			$PO = "tel=$Phone";
		}

		if (empty($_GET['CE'])) {
			$error.="correo = Error de correo electronico";
		}else{
			
			$Mail =$_GET['CE'];
			$M = "cor=$Mail";
		}

		if (isset($_GET['A']) && empty($_GET['A']) || !ctype_alnum($_GET['A'])) {
			$error.="asunto = Error de Asunto";

		}
		else{
			$asun =$_GET['A'];
			$as = "Asunto=$asun";
		}


		if (isset($_GET['CM']) && empty($_GET['CM'])) {
			$error.="cuerpo = Error de mensaje";
		}else{
			$mej =$_GET['CM'];
			$S = "Men=$mej";
		}

		if(isset($_GET['N']) && !empty($_GET['N']) && isset($_GET['T']) && !empty($_GET['T']) && isset($_GET['CE']) &&
			!empty($_GET['CE']) && isset($_GET['A']) && !empty($_GET['A']) && isset($_GET['CM']) && !empty($_GET['CM'])){

			$nombre =$_GET['N'];
			$telefono =$_GET['T'];
			$correoE =$_GET['CE'];
			$asunto =$_GET['A'];
			$cuerpo =$_GET['CM'];

			echo "<div class='mensaje'>Nombre: ".$nombre."<br> Telefono: ".$telefono."<br> Correo electronico: ".$correoE."<br> Asunto: ".$asunto."<br> Cuerpo: ".$cuerpo."</div>";
}

		if (isset($error)) {
			header('location:Formulario.php ?' .$error);
		}
		?>

		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;La fortuna de estar vivos para crear y vivir nuestra propia historia.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Redes Sociales</h2>
						<span class="byline">Siguenos en:</span>
					</header>
					<ul class="contact">
						<li><a title="Twitter" href="https://twitter.com/Caicedo571" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a title="Facebook" href="https://www.facebook.com/caicedo88" class="fa fa-facebook"><span>Facebook</span></a></li>

						<li><a title="Tumblr" href="http://angelicacaicedo.tumblr.com/" class="fa fa-tumblr"><span>Tmblr+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: KIKAS READ
			</div>
		</div>


	</body>
</html>