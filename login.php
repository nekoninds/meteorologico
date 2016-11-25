
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<?php
	include("header.php")
?>

					<!-- Menu.................. Aqui Hay que hacerlo a la izquierda-->
					<div class="main-navigation"><!---->
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button><!--Icono del menu-->
						<ul class="menu"><!--Tabla del menu-->
							<li class="menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
							<li class="menu-item"><a href="contact.php">Contact Us</a></li><!--Contactanos-->
							<li class="menu-item current-menu-item"><a href="login.php">Login</a></li>
						</ul> <!-- .Termina menu -->
					</div> <!-- . Termina main-navigation -->

					<div class="mobile-navigation"></div><!---->
				</div>
			</div> <!-- .site-header -->
			<div class="container">
					<div class="breadcrumb1">
						<a href="index.php">Home</a>
						<span>Login</span>
					</div>
			</div>
			<div class="Contenedorlogin" >

				<div class="login" style="margin-bottom:30px;">
					<div class="fullwidth2-block">
						<div class="container2" id="contenedor">

							<h2 class="section2-title">Login</h2>


    								<p class="colophon" style='text-align: center;'>Solo administradores pueden acceder</p>
								<form class="contact-form" action="verificarUsuario.php" method="post">
									<div class="row">
										<div class="col2-md-6"><input type="text" name="nickname" placeholder="Username"></div>
									</div>
									<div class="row">
										<div class="col3-md-6"><input type="password" name="password" placeholder="Password"></div>
									</div>
									<div class="text1-right">
										<input id="login" type="submit" placeholder="Send message">
									</div>
								</form>




						</div>
					</div>
					<h1 id="TextoMapa"><!--Aqui pondremos informacion relacionada al municipio con el evento mouseover-->

					</h1>
				</div>
			</div>



		<footer class="site-footer">
			<div class="container">

						<div class="social-links" style="margin: 0px auto;">
							<a href="https://www.facebook.com/" ><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
							<a href="https://es.pinterest.com/"><i class="fa fa-pinterest"></i></a>


				<p class="colophon2" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Tlaloc Group. All rights reserved</p>
			</div>
		</footer> <!-- .site-footer -->


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
