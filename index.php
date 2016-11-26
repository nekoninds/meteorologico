
<?php
session_start();
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Estacion Metereologica</title>

		<!-- Loading third party fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script src="js/mapster.js"></script>
	</head>
<body>
<?php include("mail.php") ?>
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
							<img src="images/logo.jpg" alt="" class="logo" style="width: 362px; height: 120px; padding-right: 0px; margin-right: 0px;margin-bottom: 10px;"> <!--Logo de la pagina-->
						</a>

					<!-- Menu.................. Aqui Hay que hacerlo a la izquierda-->
					<div class="main-navigation" style="padding-top: 50px;
"><!---->
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button><!--Icono del menu-->
						<ul class="menu"><!--Tabla del menu-->
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
							<li class="menu-item"><a href="contact.php">Contact Us</a></li><!--Contactanos-->
							<?php
								if (!isset($_SESSION['nickname']))
								{
									echo "<li class='menu-item'><a href='login.php'>Login</a></li>";
								}
							?>
						</ul> <!-- .Termina menu -->
					</div> <!-- . Termina main-navigation -->

					<div class="mobile-navigation"></div><!---->

				</div>
			</div> <!-- .site-header -->
			<div class="antecedentes">
				
							
				<p><h3> Colima es un pequeño estado del occidente de México que colinda con Jalisco, Michoacán y el océano Pacífico. 
				En su estrecho territorio se encierra un sinfín de atractivos y una amplia gama de hermosos lugares, como Villa de Álvarez, Comala, Suchitlán, el Parque Nacional Nevado de Colima y Volcán de Fuego, y Quesería Tecomán, y bellas playas como Manzanillo, capital mundial del pez vela, entre muchas otras.<br>

				Tiene un clima tropical con una temperatura promedio de 25° C, subhúmedo en la mayoría del estado, con unos 1,000 mm anuales de precipitación pluvial. En la parte norte del municipio que colinda con el de Cuauhtémoc, la temperatura mejora en unos dos grados aproximadamente de 22 °C a 24°C, lluvia media anual de 1,000 a 1,300 mm.<br>

				En los poblados Estampilla y Las Tunas, el clima es semiseco y muy cálido con temperatura de 26 a 28°C y precipitación anual de 600 a 700 mm.</p> <br> </h3>
			</div>


				<!--Mapa colima Coordenadas-->
			<div class="ContenedorMapa">

					<?php
						if (isset($_SESSION['nickname']))
						{
							echo "<h1>Bienvenido " . $nickname . "</h1>";
						}

					?>

					<?php

							//conseguir el ultimo registro:
							$ultTemp="SELECT * FROM datos WHERE idSensor = '1' AND ubicacion = 'colima' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result1 = mysqli_query($con, $ultTemp);
							if (mysqli_num_rows($result1) > 0)
							{
								while($row = mysqli_fetch_assoc($result1))
								{
									$tempColima = "La temperatura: ".$row['dato']."&#176;";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}
							$ultHum="SELECT * FROM datos WHERE idSensor = '2' AND ubicacion = 'colima' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result2 = mysqli_query($con, $ultHum);
							if (mysqli_num_rows($result2) > 0)
							{
								while($row = mysqli_fetch_assoc($result2))
								{
									$HumColima = "La Humedad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}


							$ultLum="SELECT * FROM datos WHERE idSensor = '3' AND ubicacion = 'colima' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result3 = mysqli_query($con, $ultLum);
							if (mysqli_num_rows($result3) > 0)
							{
								while($row = mysqli_fetch_assoc($result3))
								{
									$LumColima = "La Luminocidad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}

							$climaColima ="Clima actual:"."<br>".$tempColima."<br>".$HumColima."<br>".$LumColima;

							////////////////////////////////////////
							//conseguir el ultimo registro:
							$ultTemp1="SELECT * FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result4 = mysqli_query($con, $ultTemp1);
							if (mysqli_num_rows($result4) > 0)
							{
								while($row = mysqli_fetch_assoc($result4))
								{
									$tempVilla = "La temperatura: ".$row['dato']."&#176;";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}
							$ultHum1="SELECT * FROM datos WHERE idSensor = '2' AND ubicacion = 'villa' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result5 = mysqli_query($con, $ultHum1);
							if (mysqli_num_rows($result5) > 0)
							{
								while($row = mysqli_fetch_assoc($result5))
								{
									$HumVilla = "La Humedad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}


							$ultLum1="SELECT * FROM datos WHERE idSensor = '3' AND ubicacion = 'villa' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result6 = mysqli_query($con, $ultLum1);
							if (mysqli_num_rows($result6) > 0)
							{
								while($row = mysqli_fetch_assoc($result6))
								{
									$LumVilla = "La Luminocidad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}

							$climaVilla ="Clima actual:"."<br>".$tempVilla."<br>".$HumVilla."<br>".$LumVilla;
														////////////////////////////////////////
							//conseguir el ultimo registro:
							$ultTemp2="SELECT * FROM datos WHERE idSensor = '1' AND ubicacion = 'coquimatlan' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result7 = mysqli_query($con, $ultTemp2);
							if (mysqli_num_rows($result7) > 0)
							{
								while($row = mysqli_fetch_assoc($result7))
								{
									$tempCoquimatlan = "La temperatura: ".$row['dato']."&#176;";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}
							$ultHum2="SELECT * FROM datos WHERE idSensor = '2' AND ubicacion = 'coquimatlan' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result8 = mysqli_query($con, $ultHum2);
							if (mysqli_num_rows($result8) > 0)
							{
								while($row = mysqli_fetch_assoc($result8))
								{
									$HumCoquimatlan = "La Humedad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}


							$ultLum2="SELECT * FROM datos WHERE idSensor = '3' AND ubicacion = 'coquimatlan' ORDER BY idDato desc limit 1";
							//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
							$result9 = mysqli_query($con, $ultLum2);
							if (mysqli_num_rows($result9) > 0)
							{
								while($row = mysqli_fetch_assoc($result9))
								{
									$LumCoquimatlan = "La Luminocidad: ".$row['dato']."%";
									//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
								}
							}

							$climaCoquimatlan ="Clima actual:"."<br>".$tempCoquimatlan."<br>".$HumCoquimatlan."<br>".$LumCoquimatlan;
							mysqli_close($con);

						?>
				<div class="Mapa"  style="padding-left: 33%;"">
						<img id="MapaColima"  src="images/estadoColima.png" style="border: 0px;position: absolute;left: 0px;top: 0px;padding: 0px;opacity: 0;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px; "" usemap="#EstadoColima"/>
		    			<div id="selections" style="float:right;"></div>

						<script type="text/javascript">
					$(document).ready(function () {
						var image = $('#MapaColima');
						var xref = {
					        Colima: '<?=$climaColima?>',
					        Villa:'<?=$climaVilla?>',
					        Coquimatlan: '<?=$climaCoquimatlan?>'

					    };
					    var defaultDipTooltip = 'I know you want the dip. But it\'s loaded with saturated fat, just skip it '
			        		+'and enjoy as many delicious, crisp vegetables as you can eat.';
		    			var defaultColima= '<?=$climaColima?>';
			        	var defaultVilla = '<?=$climaVilla?>';
			        	var defaultCoquimatlan = '<?=$climaCoquimatlan?>';

		    			image.mapster(
				    	{
				        fillOpacity: 0.4,
				        fillColor: "d42e16",
				        stroke: true,
				        strokeColor: "3320FF",
				        strokeOpacity: 0.8,
				        strokeWidth: 4,
				        singleSelect: true,
				        mapKey: 'name',
				        listKey: 'name',



				        onMouseover: function (e) {

				            var newToolColima = defaultColima;
				            var newToolVilla = defaultVilla;
				            var newToolCoquimatlan = defaultCoquimatlan;

				            // update text depending on area selected
				            //$('#selections').html(xref[e.key]);

				            // if Asparagus selected, change the tooltip
				            /*if (e.key === 'Colima') {
				                newToolTip = "OK. I know I have come down on the dip before, but let's be real. "
				                    +"Raw asparagus without any of that delicious ranch and onion dressing "
				                    +"slathered all over it is not so good.";
				            }*/
				            image.mapster('set_options', {
				                areas: [{
				                    key: "Colima",
				                    toolTip: newToolColima
				                    },
				                    {
				                    	key: "Villa",
				                    toolTip: newToolVilla
				                    },
				                    {
				                    	key: "Coquimatlan",
				                    toolTip: newToolCoquimatlan
				                    }

				                    ]
				                });
				        },

				        showToolTip: true

				    	});
					});
						</script>


						<map name="EstadoColima" id="Estado" >
						<!--<area shape="rect" coords="598,398,600,400" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_76650" />-->
							<area id="VillaAlvarez" name="Villa" href="#" alt="Villa" title="Villa de Alvarez" shape="poly" coords="317.00001220703126,120.00000228881837,318.00001220703126,115.00000228881837,317.00001220703126,112.00000228881837,328.00001220703126,102.00000228881837,328.00001220703126,97.00000228881837,335.00001220703126,100.00000228881837,335.00001220703126,92.00000228881837,343.00001220703126,93.00000228881837,354.00001220703126,101.00000228881837,362.00001220703126,95.00000228881837,365.00001220703126,104.00000228881837,377.00001220703126,99.00000228881837,379.00001220703126,105.00000228881837,390.00001220703126,98.00000228881837,397.00001220703126,103.00000228881837,393.00001220703126,106.00000228881837,397.00001220703126,117.00000228881837,402.00001220703126,113.00000228881837,403.00001220703126,119.00000228881837,412.00001220703126,124.00000228881837,417.00001220703126,121.00000228881837,424.00001220703126,125.00000228881837,421.00001220703126,128.00000228881837,426.00001220703126,133.00000228881837,428.00001220703126,124.00000228881837,436.00001220703126,126.00000228881837,433.00001220703126,121.00000228881837,448.00001220703126,105.00000228881837,453.00001220703126,104.00000228881837,455.00001220703126,93.00000228881837,462.00001220703126,86.00000228881837,461.00001220703126,79.00000228881837,457.00001220703126,77.00000228881837,465.00001220703126,73.00000228881837,458.00001220703126,65.00000228881837,476.00001220703126,66.00000228881837,478.00001220703126,74.00000228881837,475.00001220703126,77.00000228881837,476.00001220703126,83.00000228881837,469.00001220703126,79.00000228881837,465.00001220703126,84.00000228881837,467.00001220703126,92.00000228881837,466.00001220703126,100.00000228881837,463.00001220703126,102.00000228881837,461.00001220703126,100.00000228881837,459.00001220703126,103.00000228881837,466.00001220703126,107.00000228881837,449.00001220703126,125.00000228881837,446.00001220703126,136.00000228881837,438.00001220703126,140.00000228881837,433.00001220703126,144.00000228881837,425.00001220703126,144.00000228881837,420.00001220703126,141.00000228881837,411.00001220703126,134.00000228881837,407.00001220703126,138.00000228881837,397.00001220703126,137.00000228881837,394.00001220703126,140.00000228881837,380.00001220703126,138.00000228881837,363.00001220703126,132.00000228881837,356.00001220703126,132.00000228881837,356.00001220703126,130.00000228881837,345.00001220703126,122.00000228881837,332.00001220703126,126.00000228881837,324.00001220703126,122.00000228881837"/>

							<area id="Coquimatlan" name="Coquimatlan" href="#" alt="Coquimatlan" title="Coquimatlan"  shape="poly" coords="387,227.0000030517578,391,202.0000030517578,382,203.0000030517578,375,196.0000030517578,369,205.0000030517578,357,196.0000030517578,344,197.0000030517578,331,189.0000030517578,311,181.0000030517578,299,181.0000030517578,305,176.0000030517578,302,171.0000030517578,287,162.0000030517578,281,154.0000030517578,292,152.0000030517578,299,146.0000030517578,297,140.0000030517578,306,140.0000030517578,312,134.0000030517578,313,129.0000030517578,303,126.00000305175782,297,125.00000305175782,302,122.00000305175782,303,116.00000305175782,313,123.00000305175782,320,127.00000305175782,325,125.00000305175782,333,128.0000030517578,343,126.00000305175782,352,130.0000030517578,359,137.0000030517578,369,139.0000030517578,380,142.0000030517578,395,143.0000030517578,411,140.0000030517578,417,147.0000030517578,418,156.0000030517578,417,163.0000030517578,416,171.0000030517578,414,178.0000030517578,404,184.0000030517578,399,188.0000030517578,400,196.0000030517578,417,213.0000030517578,413,223.0000030517578"/>

							<area id="Colima" name="Colima" href="#" alt="Colima" title="Colima" shape="poly" coords="507,301,511,286,523,280,530,270,536,264,542,258,540,242,540,231,529,221,528,212,529,199,540,174,533,158,514,157,510,151,479,168,479,161,474,156,476,150,466,147,472,135,461,134,472,112,467,110,447,141,425,148,422,176,416,185,402,191,420,208,424,218,441,220,446,210,478,223,476,239,491,236,502,249,505,263,502,275,506,284,503,290"/>
						</map>

				</div>
			</div>



			<main class="main-content">


				<div class="fullwidth-block" data-bg-color="#262936">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="news">
									<h3><a href="#">Visión </a></h3>
									<p style="text-align: justify;">Ser la empresa de referencia en el ámbito de las redes digitales y el monitoreo a distancia a nivel nacional.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<h3><a href="#">Misión</a></h3>
									<p style="text-align: justify;"> Acelerar la transición del mundo a un mundo conectado.</p>

								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<h3><a href="#">Objetivo </a></h3>
									<p style="text-align: justify;"> Nuestro más grande objetivo como empresa, es que nuestros clientes adquieran sistemas de monitoreo de calidad y de larga duración.</p>

								</div>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			<footer class="site-footer">
			<div class="container">

						<div class="social-links" style="margin: 0px auto;">
							<a href="https://www.facebook.com/" ><i class="fa fa-facebook" style="padding-top: 10px;"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter" style="padding-top: 10px;"></i></a>
							<a href="https://plus.google.com/"><i class="fa fa-google-plus" style="padding-top: 10px;"></i></a>
							<a href="https://es.pinterest.com/"><i class="fa fa-pinterest" style="padding-top: 10px;"></i></a>

				<p class="colophon2" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Digital Systems. All rights reserved</p>
				<p class="colophon">with love... 5 B ♥</p>
			</div>
			</div>
		</footer> <!-- .site-footer -->

			
		</div>
	</div>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
