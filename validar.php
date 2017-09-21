<?php
	//require de la conexion
	include("conexion.php");
	$username=$_POST['usuario'];
	$pass=md5($_POST['clave']);

	//Consulta a la base
	$consulta="SELECT*FROM usuarios WHERE Nombre='$username' and clave='$pass'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);
	$idtipo=mysqli_fetch_array($resultado);
	//echo $idtipo['Tipos_usuarios_idTipos_usuarios'];
		if($filas>0){
			//Variabled de section
			session_start();
			$_SESSION['usuario']=$username;
			$_SESSION['tipo_usuario']=$idtipo['Tipos_usuarios_idTipos_usuarios'];///Aqui lleva un array
			//$_SESSION['tipo_usuario']=100;
			header("location:home.php?$username");
		}
		else{
			$regreso='index.html';
			echo "Error en la autentificacion";
			header("location: $regreso");

		}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>
