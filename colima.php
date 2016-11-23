<?php
	include("header.php")
?>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li><!--Pagina principal-->
							<li class="menu-item current-menu-item"><a href="colima.php">Colima</a></li><!--Clima Colima-->
							<li class="menu-item"><a href="coquimatlan.php">Coquimatlan</a></li><!--Clima Coquimatlan-->
							<li class="menu-item"><a href="villa.php">Villa de Alvarez</a></li><!--Clima Villa de Alvarez-->
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
						<span>Campus Colima</span>
					</div>
				</div>
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<div class="post single">
									<h2 class="entry-title">Campus Colima</h2>
									<div class="featured-image"><img src="images/telematicaOk.jpg" alt=""></div>
									

									<div class="entry-content">
										<div class="tabla"><div class="forecast-table">
										<div class="container" style="padding-left: 0px; width: 962px;">
										<div class="forecast2-container" style="margin-top: 30px">
											<div class="today forecast">
												<div class="forecast-header">
													<div class="day">Monday</div>
													<div class="date">6 Oct</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="location">New York</div>
													<div class="degree">
														<div class="num">23<sup>o</sup>C</div>
														<div class="forecast-icon" style="
														    width: 100px;
    														margin-bottom: 0px;
  														 	height: 30px;">
															<img src="images/icons/icon-1.svg" alt="" width=50 style="padding-top: 15px; margin-top: -63px; margin-left: 120px;">
														</div>	
													</div>
													<span><img src="images/icon-umberella.png" alt="">20%</span>
													<span><img src="images/icon-wind.png" alt="">18km/h</span>
													<span><img src="images/icon-compass.png" alt="">East</span>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Tuesday</div>
																	</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-3.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Wednesday</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-5.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Thursday</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-7.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Friday</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-12.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Saturday</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-13.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
											<div class="forecast">
												<div class="forecast-header">
													<div class="day">Sunday</div>
												</div> <!-- .forecast-header -->
												<div class="forecast-content">
													<div class="forecast-icon">
														<img src="images/icons/icon-14.svg" alt="" width=48>
													</div>
													<div class="degree">23<sup>o</sup>C</div>
													<small>18<sup>o</sup></small>
												</div>
											</div>
										</div>
									</div>
								</div></div>
										<div class="antecedentes">
											<p><h1>Medidas de Prevención</h1></p>	
											<p>Es importante tomar algunas de las siguientes precauciones en caso de un desastre natural, dar clic en los enlaces para mas información.</p>
											<ul class="arrow-list">
												<li><a href="http://www.gob.mx/segob/acciones-y-programas/sismos-en-mexico-preparate-antes-actua-durante-revisa-despues" target="_blank">En caso de SISMO</a></li>
												<li><a href="http://www.camafu.org.mx/index.php/noticias/articles/recomendaciones-para-prevenir-y-atender-incendios-forestales-catastroficos-que-pueden-danar-a-la-poblacion-los-bienes-y-los-recu.html" target="_blank">En caso de INCENDIO</a></li>
												
												<li><a href="http://bienestar.salud180.com/salud-dia-dia/precauciones-en-caso-de-inundaciones" target="_blank">En caso de INUNDACION</a></li>
												<li><a href="http://skyalert.mx/medidas-de-prevencion-que-hacer-en-caso-de-tormenta-electrica/" target="_blank">En caso de TORMENTA ELECTRICA</a></li>
												<li><a href="http://www.proteccioncivil.col.gob.mx/boletin.php?c=NzA0MQ" target="_blank">En caso de ERUPCIÓN VOLCÁNICA</a></li>
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
											<li><a href='graficasColima.php'>Graficas</a></li>
											<li><a href='tablasColima.php'>Tablas</a></li>
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
					<p class="colophon" style="text-align: center;">Copyright 2016 Universidad de Colima. Designed by Tlaloc Group. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbuykDwQI1f_dhwNFm_O-OAOovsKW5huI&sensor=false"></script>
	</body>

</html>