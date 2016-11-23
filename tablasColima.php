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
						<a href="Colima.php">Campus Colima</a>
						<span>Tablas</span>
					</div>
				</div>
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<div class="post single">
									<h2 class="entry-title">Campus Colima</h2>
									
										<table>
							  				<tr>
							    			<th class="day">ID</th>
							   				<th class="day">Sensor</th>
							   				<th class="day">Dato</th>
							   				<th class="day">Fecha</th>
							   				<th class="day">Hora</th>
							   				<th class="day">Ubicación</th>
							   				<th class="day">Accion</th>
							  				</tr>
																
											<?php
												if(isset($_GET["bySensor"]))
												{
													$datos = "SELECT *  FROM datos WHERE ubicacion = 'colima' order by idSensor";
												}
												else if(isset($_GET["byFecha"]))
												{
													$datos = "SELECT *  FROM datos WHERE ubicacion = 'colima' order by fecha asc";
												}
												else
												{
													$datos = "SELECT *  FROM datos WHERE ubicacion = 'colima'";
												}

												
												$result = mysqli_query($con, $datos);
													if (mysqli_num_rows($result) > 0) 
													{
												    // output data of each row
													    while($row = mysqli_fetch_assoc($result))
														{
														    $_SESSION['idDato']= $row["idDato"];
														    if($row["idSensor"]==1) $sensor='Temperatura';
														    if($row["idSensor"]==2) $sensor='Humedad';
														    if($row["idSensor"]==3) $sensor='Luminosidad';

														    //$_SESSION['idSensor']= $row["idSensor"];
														    $_SESSION['dato']= $row["dato"];
														    $_SESSION['fecha']= $row["fecha"];
														    $_SESSION['hora']= $row["hora"];
														    $_SESSION['ubicacion']= $row["ubicacion"];

												    		echo "<tr>";
															echo "<td>" . $row["idDato"]. "</td>";
															echo "<td>" .$sensor. "</td>";
															echo "<td>" . $row["dato"]. "</td>";
															echo "<td>" . $row["fecha"]. "</td>";
															echo "<td>" . $row["hora"]. "</td>";
															echo "<td>" . $row["ubicacion"]. "</td>";
															echo "<td><a href='editarRegistro.php?idDato=".$row['idDato']."'> Editar </a>&nbsp;&nbsp;<a href='eliminarRegistro.php?idDato=".$_SESSION['idDato']."'>Borrar</a></td>";
															//include('calendario.php');
														}	
													}
													else
													{
														echo "<tr>";
														echo "<td colspan='7'>0 results</td>";
													    echo "</tr>";
													}

											?>

										</table>
									

								</div>

							</div>
							<div class="sidebar col-md-3 col-md-offset-1"> 	 
								<?php
								if (isset($_SESSION['nickname']))
								{
									echo "
									<div class='widget' style='margin-top: 54px'>
										<h3 class='widget-title'>Ordenar por: </h3>
										<ul class='arrow-list'>
											
											<li><a href='tablasColima.php?bySensor'>Sensor</a></li>
											<li><a href='tablasColima.php?byFecha'>Fecha</a></li>
											
											<li><a href='tablasColima.php'>ID</a></li>
										</ul>
									</div>";

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
<scrip

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