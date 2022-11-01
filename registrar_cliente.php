<!doctype html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registrar cuenta</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="StyleSheet" type="text/css" href="css/est.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">		
  </head>
  <body>
  			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>
	
	<div class="container">
	 <header class="headArriba">
		<h1></h1>
	 </header>
	 <div>
	 <img src="imagenes/pizza.webp" class="rounded mx-auto mb-4 d-block" width="100px" alt="Imagen pantalla principal">
	 </div>
	<div class="Bienv"> 
		<h1>¡Crea una cuenta!</h1>
		<h6><a href="iniciar_sesion.php">¡Ya tengo cuenta!</a></h6>
	</div> 

	<form class="formu_log" action="registrar_cliente.php"  method="POST">
		<h2 class="titu_form_login">Formulario de Login</h2>						
			<div class="form-floating mb-3">
			   <input type="text" name="usuario" maxlength="15" minlength="4" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput" class="label"><i class="bi bi-envelope"></i> Email</label>
			</div>
			<div class="form-floating mb-3">
				<input type="password" name="pass" maxlength="7" minlength="3" id="Input" class="form-control" id="floatingPassword" placeholder="Password" >
				<label for="floatingPassword"  class="label"><i class="bi bi-file-lock"></i>Password</label><i class='bi bi-eye-fill'  id='eye' onclick="mostrar()"></i>				  
			</div>
			<div class="form-floating mb-3">
				<input type="text" name="dir" maxlength="50" minlength="9" id="Input" class="form-control" id="floatingDir" placeholder="Dir" >
				<label for="floatingDir"  class="label"><i class="bi bi-signpost"></i></i>Direccion</label>				  
			</div>
			<div class="d-grid gap-2 col-6 mx-auto">
				<input class="btn btn-outline-primary" type="submit" name="enviar" value="Enviar">
			</div>	
	</form>
								<script src="icon_eye.js"></script>
	  
	  
	  
	  <?php
 //session_start();
 error_reporting(0); //E_ALL^E_NOTICE: elimina todos los reportes de notificacion			(0): elimina todos tipo de reporte de errores
 
    if($_POST['enviar']!=""){ //si el boton no está vacio, se hace lo siguiente
    $msql= new mysqli("localhost", "root", "","rotiseria");
    if($msql->connect_error)
		 die("Error de conexión");
	 
		$msql->query("insert into clientes(usuario, pass, dir)values( '$_POST[usuario]', '$_POST[pass]', '$_POST[dir]')")
		or die($msql->error);

	?>
	<script language='javascript'>
		alert('El usuario se ha almacenado correctamente.');
		location.href='principal.php';
	</script>
	<?php 
	$msql->close();
	}/*else{
		echo"error";
	}*/
?>
	  <!--FOOTER-->
	  <div class="iconos">
		<a class="icon_enlace" href="#"><i class="bi bi-facebook" title="Facebook"></i></a>
		<a href="#"><i class="bi bi-google" title="Google"></i></a>
		<a href="#"><i class="bi bi-instagram" title="Instagram"></i></a>
	  </div>
	</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function mostrar()
	{
		var entrada = document.getElementById('Input');
		var ojo = document.getElementById('eye');
			if(entrada.type == "password")
			{
				entrada.type = "text";
				eye.style.opacity=0.8;
			}else
				{
					entrada.type = "password";
					eye.style.opacity=0.2;
				}	
	}
</script>