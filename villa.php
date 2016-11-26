<?php
	include("header.php")
?>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item current-menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
							<li class="menu-item"><a href="contact.php">Contact Us</a></li><!--Contactanos-->
							<?php
								if (!isset($_SESSION['nickname']))
								{
									echo "<li class='menu-item'><a href='login.php'>Login</a></li>";
								}
							?>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->




				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
						<span>Campus Villa de Álvarez</span>
					</div>
				</div>
				<?php //Ejemplo curso PHP aprenderaprogramar.com
					$time = time();

				?>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<div class="post single">
									<h2 class="entry-title">Campus Villa de Álvarez</h2>
									<div class="featured-image"><img src="images/villa.jpg" alt=""></div>


									<div class="entry-content">
										<div class="tabla"><div class="forecast-table">
										<div class="container" style="padding-left: 0px; width: 962px;">
										<div class="forecast2-container" style="margin-top: 30px">

											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-518400);?></div>
																	</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div>
														<?php
															$Prom6="SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 518400)."' ORDER BY idDato";
															$ResProm6 = mysqli_query($con, $Prom6);
															if (mysqli_num_rows($ResProm6) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm6))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],2);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor6="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 518400)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor6 = mysqli_query($con, $Mayor6);
															if (mysqli_num_rows($ResMayor6) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor6))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor6="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time -518400)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor6 = mysqli_query($con, $Menor6);
															if (mysqli_num_rows($ResMenor6) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor6))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-432000);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div>
														<?php
															$Prom5="SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 432000)."' ORDER BY idDato";
															$ResProm5 = mysqli_query($con, $Prom5);
															if (mysqli_num_rows($ResProm5) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm5))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],2);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor5="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 432000)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor5 = mysqli_query($con, $Mayor5);
															if (mysqli_num_rows($ResMayor5) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor5))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor5="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 432000)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor5 = mysqli_query($con, $Menor5);
															if (mysqli_num_rows($ResMenor5) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor5))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-345600);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div>
														<?php
															$Prom4="SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 345600)."' ORDER BY idDato";
															$ResProm4 = mysqli_query($con, $Prom4);
															if (mysqli_num_rows($ResProm4) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm4))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],2);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor4="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 345600)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor4 = mysqli_query($con, $Mayor4);
															if (mysqli_num_rows($ResMayor4) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor4))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor4="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 345600)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor4 = mysqli_query($con, $Menor4);
															if (mysqli_num_rows($ResMenor4) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor4))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-259200);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div>
														<?php
															$Prom3="SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 259200)."' ORDER BY idDato";
															$ResProm3 = mysqli_query($con, $Prom3);
															if (mysqli_num_rows($ResProm3) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm3))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],2);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor3="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 259200)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor3 = mysqli_query($con, $Mayor3);
															if (mysqli_num_rows($ResMayor3) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor3))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor3="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 259200)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor3 = mysqli_query($con, $Menor3);
															if (mysqli_num_rows($ResMenor3) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor3))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-172800);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div>
														<?php
															$Prom2="SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 172800)."' ORDER BY idDato";
															$ResProm2 = mysqli_query($con, $Prom2);
															if (mysqli_num_rows($ResProm2) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm2))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],1);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor2="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 172800)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor2 = mysqli_query($con, $Mayor2);
															if (mysqli_num_rows($ResMayor2) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor2))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor2="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 172800)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor2 = mysqli_query($con, $Menor2);
															if (mysqli_num_rows($ResMenor2) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor2))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day"><?php echo date("Y-m-d ", $time-86400);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">

													<div>
														<?php
															$Prom = "SELECT AVG(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time - 86400)."'";
															$ResProm = mysqli_query($con, $Prom);
															if (mysqli_num_rows($ResProm) > 0)
															{

																while($row = mysqli_fetch_assoc($ResProm))
																{
																	echo "Promedio: " .round($row['AVG(dato)'],2);

																}
															}



														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Mayor="SELECT MAX(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 86400)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMayor = mysqli_query($con, $Mayor);
															if (mysqli_num_rows($ResMayor) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMayor))
																{
																	echo "Maxima: ".$row['MAX(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
													<div>
														<?php
															$Menor="SELECT MIN(dato) FROM datos WHERE idSensor = '1' AND ubicacion = 'villa'AND fecha = '".date("Y-m-d ", $time - 86400)."'";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$ResMenor = mysqli_query($con, $Menor);
															if (mysqli_num_rows($ResMenor) > 0)
															{
																while($row = mysqli_fetch_assoc($ResMenor))
																{
																	echo "Minima: ".$row['MIN(dato)'];
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?>
														<sup>o</sup>C
													</div>
												</div>
											</div>
											<!--Dia Actual-->
											<div class="today forecast" style="width: 210px;">
												<div class="forecast-header">
													<div class="date"><span> Hoy es: </span><?php echo date("Y-m-d ", $time);?></div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="location">Colima</div>
													<div class="degree">
														<div >
															<?php
																$ultTemp="SELECT * FROM datos WHERE idSensor = '1' AND ubicacion = 'villa' AND fecha = '".date("Y-m-d ", $time)."' ORDER BY idDato desc limit 1";
																$result1 = mysqli_query($con, $ultTemp);
																if (mysqli_num_rows($result1) > 0)
																{
																	while($row = mysqli_fetch_assoc($result1))
																	{
																		echo $row['dato'];
																		//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																	}
																}
															?><sup>o</sup>C


														</div>
																<img src="images/icons/temp.png" alt="" width=25 style="padding-top: 0px;margin-top: 0px;margin-left: 0px;width: 25px;padding-bottom: -15;padding-bottom: -30;">


													</div>
													<div class="degree">
														<?php
															$ultHum="SELECT * FROM datos WHERE idSensor = '2' AND ubicacion = 'colima' AND fecha = '".date('Y-m-d ', $time)."' ORDER BY idDato desc limit 1";
															//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
															$result2 = mysqli_query($con, $ultHum);
															if (mysqli_num_rows($result2) > 0)
															{
																while($row = mysqli_fetch_assoc($result2))
																{
																	echo $row['dato']."%";
																	//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
																}
															}
														?><img src="images/icons/hum.png" alt="" width=25 style="padding-top: 0px;margin-top: 0px;margin-left: 0px;width: 25px;padding-bottom: -15;padding-bottom: -30;">
													</div>
													<div class="degree">
														<?php
														$ultLum="SELECT * FROM datos WHERE idSensor = '3' AND ubicacion = 'colima' AND fecha = '".date('Y-m-d ', $time)."' ORDER BY idDato desc limit 1";
														//$ultimo = "SELECT MAX(idDato) FROM datos WHERE idSensor = '1'";
														$result3 = mysqli_query($con, $ultLum);
														if (mysqli_num_rows($result3) > 0)
														{
															while($row = mysqli_fetch_assoc($result3))
															{
																echo $row['dato']."%";
																//$ActualColima = "id= ".$row['idSensor']."Hora: ".$row['hora']."Dato: ".$row['dato'];
															}
														}
														?>
														<img src="images/icons/lum.png" alt="" width=25 style="padding-top: 0px;margin-top: 0px;margin-left: 0px;width: 25px;padding-bottom: -15;padding-bottom: -30;">
													</div>

												</div>
											</div>
										</div>
									</div>
								</div></div>
										<div class="antecedentes">
											<p><h1>Medidas de Prevención</h1></p>
											<p>Es importante tomar algunas de las siguientes precauciones en caso de un desastre natural, dar clic en los enlaces para mas información.</p>
											<ul class="arrow-list">
												<li><a href="http://proteccioncivil.jalisco.gob.mx/monitoreo/volcan-el-colima" target="_blank">En caso de ERUPCIÓN VOLCÁNICA</a></li>
												<li><a href="http://proteccioncivil.jalisco.gob.mx/servicios-y-programas/capacitacion/incendios" target="_blank">En caso de INCENDIO</a></li>
												<li><a href="http://bienestar.salud180.com/salud-dia-dia/precauciones-en-caso-de-inundaciones" target="_blank">En caso de INUNDACION</a></li>
												<li><a href="http://www.cenapred.gob.mx/es/Publicaciones/archivos/256-INFOGRAFAPREPRATEPARAELINVIERNO.PDF" target="_blank"> En caso de INVIERNO</a></li>
												<li><a href="http://www.cenapred.unam.mx:8080/reporteSismos/" target="_blank">En caso de SISMO</a></li>
												<li><a href="http://www.cenapred.gob.mx/es/Publicaciones/archivos/302-INFOGRAFATORMENTASELCTRICAS.PDF" target="_blank">En caso de TORMENTA ELECTRICA</a></li>
											</ul>
										</div>
										<div>

										</div>
									</div>

								</div>

							</div>
							<div class="sidebar col-md-3 col-md-offset-1">
								<?php
								if (isset($_SESSION['nickname']))
								{
									echo "
									<div class='widget' style='margin-top: 54px'>
										<h3 class='widget-title'>Consulta: </h3>
										<ul class='arrow-list'>
											<li><a href='graficasVilla.php'>Graficas</a></li>
											<li><a href='tablasVilla.php'>Tablas</a></li>
										</ul>
									</div>";
								}

								?>
								<!-- mapa de google -->
							<div class="mapa2" style="width: 266px; margin-top: 60px">
								<div class="contact-details">
									<div class="map" data-latitude="19.2490983" data-longitude="-103.699527"></div>
									<div class="contact-info">
									<address>
										<img src="images/icon-marker.png" alt="">
										<p>Estación Meteorológica <br>

										Avenida Universidad 333, Las Víboras, 28040 Colima, Col.   </p>
									</address>
									</div>
								</div>
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

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbuykDwQI1f_dhwNFm_O-OAOovsKW5huI&sensor=false"></script>
	</body>

</html>
