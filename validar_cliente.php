<?php
session_start();
 //error_reporting(E_ALL^E_NOTICE);
	$usuario=$_POST['usuario'];
 	$pass=$_POST['pass'];

		//conectar con la base de datos
	  $mysql= new mysqli("localhost", "root", "","rotiseria");
	if($mysql->connect_error)
	die("Error de conexión");
	
	$consulta="SELECT * FROM clientes WHERE usuario='$usuario' and pass='$pass' ";
	$resultado=mysqli_query($mysql, $consulta);
					 //$sql = "select usuarios.nombre, logineventos.Fecha_Acceso from usuarios inner join logineventos on\n"."logineventos.DNI_Accedido=usuarios.dni";

	$filas=mysqli_num_rows($resultado);
		
	if($filas>0)
	{
	 while($reg = mysqli_fetch_array($resultado))
		{
			$_SESSION['id_cliente']=$reg['id_cliente'];//con la variable creo la variable de session
			$_SESSION['usuario']=$reg['usuario'];
			$_SESSION['pass']=$reg['pass'];
			$_SESSION['dir']=$reg['dir'];
		}
	 header("location:principal.php");
	}
	else {?>
			<script language='javascript'>
				alert('Error con la autentificacion. Usuario y/o Contraseña incorrectos');
				location.href='form_login.html';
			</script>
					<?php
			/*header("location:form_login.html");*/
		}
?>