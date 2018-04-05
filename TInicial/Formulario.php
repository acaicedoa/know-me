<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2>Escríbenos</h2>
						<span class="byline">Envíanos un mensaje</span>
					</header>
					<form action="recived.php" method="GET">
						<div  class="form">
							<input name="N" type="text" placeholder=" Nombre completo" 
							 class="<?php if(empty($_GET['nombre'])) echo 'nombre' ?>" required>

							<input name="T" type="number" placeholder="Teléfono" 
							class="<?php if(empty($_GET['telefono'])) echo 'telefono' ?>"  required >

							<input name="CE" type="mail" placeholder="Correo electrónico"
							class="<?php if(empty($_GET['correo']))  echo'correo' ?>"  required>

							<br>

							<input name="A" type="text" placeholder="Asunto"
							class="<?php if(empty($_GET['asunto']))  echo'asunto' ?>" required>

							<br>

							<textarea  placeholder="Cuerpo del mensaje" required name="CM" id="" cols="10" rows="10"
							 class="<?php if(empty($_GET['cuerpo']))  echo'cuerpo' ?>" >
								
							</textarea>

							
							<br>
							
							<input type="Submit" >
						</div>
					</form>						

				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
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