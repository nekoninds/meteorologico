<?php
session_start();
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en"  charset="utf-8">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		
		<title>Estacion Metereologica</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
		<script type="text/javascript">
			function writeText(txt)
			{
    			document.getElementById("TextoMapa").innerHTML = txt;
			}


		</script>
		<style>
    #chart_div {
        width: 100%;
        height: 100%;
    }   
</style>
    
<!--Load the AJAX API-->

<?php
	include('temperaturaColimaGrafica.php');
	include('HumedadColimaGrafica.php');
	include('LuminocidadColimaGrafica.php');
?>

	</head>


	<body>
		<?php

			if (isset($_SESSION['nickname']))
			{
				$nickname = $_SESSION['nickname'];
				
				echo "<p style='text-align: right';>".$nickname . "  ";
				echo "<a href='desconexion.php'>Logout</a></p>";
		
			}
			//$nickname=$_SESSION["nickname"];


		?>
		<div class="site-content"><!-- div contenedor de toda la pagina-->
			<div class="site-header"><!-- Encabezado div exterior-->
				<div class="hero" data-bg-image="images/nubes-banner2.jpg">
					<div class="container"><!--Encabezado div interior-->
						<a href="index.php" class="branding">
							<img src="images/logo.png" alt="" class="logo"><!--Logo de la pagina-->
							<div class="logo-type"><!--Contenedor del titulo-->
								<h1 class="site-title">Tlaloc</h1><!--Titulo de la pagina-->
								<small class="site-description">Estación Meteorológica</small><!--Letras pequeñas-->
							</div>
						</a>