<?php
session_start();
include("conexion.php");

$idDato=$_GET['idDato'];

$eliminar = "DELETE FROM datos WHERE idDato = '$idDato'";

if (mysqli_query($con, $eliminar)) 
{
    
    echo "<script>
				alert('Record deleted successfully');
				window.location.href='tablasColima.php';
			</script>";
		
}
else 
{
	echo "<script>
				alert('Error deleting record: '". mysqli_error($con);");
				window.location.href='tablasColima.php';
			</script>";
}

mysqli_close($con);
?>

