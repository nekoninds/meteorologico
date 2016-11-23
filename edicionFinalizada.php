<?php
	session_start();
	include("conexion.php");
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
		$idDato=$_POST['idDato'];
		$idSensor=$_POST['idSensor'];
		$dato=$_POST['dato'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$ubicacion=$_POST['ubicacion'];

		

		$consulta="UPDATE datos Set dato='$dato',fecha='$fecha',hora='$hora',ubicacion='$ubicacion' where idDato='$idDato'";
		//$consulta="insert into datos values ('$idDato','$idSensor','$dato','$fecha','$hora','$ubicacion')";
		
		
		if (mysqli_query($con,$consulta)) {	
			echo "<script>
				alert('Campos modificados');
				window.location.href='tablasColima.php';
			</script>";
		}
		else {
			echo "<script>
				alert('Campos No modificados');
				window.location.href='tablasColima.php';
			</script>";
		}

		mysqli_close($con);
	}
?>