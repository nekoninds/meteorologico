<?php
//manejo de sessión
session_start();
//Conexion a la BD
include("conexion.php");

//Recepcion de datos via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nickname=$_POST['nickname'];
	$password=$_POST['password'];

	$nickname=str_replace("'", "", $nickname);
	$password=str_replace("'", "", $password);

	//sentencia SQL para la recuperación de registros
	$sql = "SELECT * FROM `usuario` WHERE nickname='$nickname' and password='$password'";

	//Regresa el resultado de la consulta
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		//$_SESSION["nomUsuario"];
		$_SESSION["nickname"]=$row["nickname"];
		/*echo "<script>
			alert('Usuario valido');
		</script>";*/
		header('Location: index.php');
	}else{
		echo "<script>
			alert('Usuario incorrecto');
			window.location.href='login.php';
		</script>";
		//include("login.php");
	}
	mysqli_close($con);
}

?>