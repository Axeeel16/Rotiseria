<html>
	<head>
		<title>Ver Detalle del Usuario</title>
		<meta charset="UTF-8">    
		<link rel="StyleSheet" type="text/css" href="css/estilo.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
		<body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>

			<div class="container">
			<header class="he  bg-light">
				 <h5 class="titu_head_bienv">Ver Detalle de Usuario</h5>				 
						<nav class="navbar navbar-expand-lg bg-light">
							  <div class="container-fluid">
									<a class="navbar-brand" href="#">
									  <img src="imagenes/bootstrap-logo.svg" alt="" width="30" height="24">
									</a>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
									  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item">
										  <a id="naveg" class="nav-link active" aria-current="page" href="bienvenido.php">Principal</a>
										</li>
										<li class="nav-item">
										  <a id="naveg" class="nav-link active" aria-current="page" href="form_import.php">Importar Datos a MySQL</a>
										</li>
										<li class="nav-item">
										  <a  id="naveg" class="nav-link active" aria-current="page" href="export_excel.php">Exportar Datos</a>
										</li>
										<li class="nav-item">
										  <a id="naveg" class="nav-link active" aria-current="page" href="form_alta.php">Nuevo</a>
										</li>
										<li class="nav-item">
										  <a id="naveg" class="nav-link active" aria-current="page" href="baja_usuar.php">Eliminar</a>
										</li>
									  </ul>
									</div>
							  </div>
						</nav> 
			</header><br><br><br>
<?php
session_start();//Inicio de sesion
error_reporting(E_ALL^E_NOTICE);


$DNI=$_GET['valor'];
		$apellido=$_SESSION['apellido'];//Carga los datos del usuario obtenidos de la base de datos

    $consulta="SELECT * FROM usuarios where dni =  '$DNI'"; //selecciona el id_usuario de la base de datos y crea una consulta
	$msql= mysqli_connect("localhost", "root", "","bd_usuario"); 

	$resultado=mysqli_query($msql, $consulta);
	
	$filas=mysqli_num_rows($resultado);
    $matriz=mysqli_fetch_array($resultado); //convierte el resultado en una matriz y genera una tabla
  
  
  $id=$matriz['id_usuario'];
  $dni=$matriz['dni'];
  $nombre=$matriz['nombre'];
  $apellido=$matriz['apellido'];
  $cargo=$matriz['cargo'];
  $dir=$matriz['dir'];
  $tel=$matriz['tel'];
  $cel=$matriz['cel'];
  $usuario=$matriz['usuario'];
  $pass=$matriz['pass'];
  $edad=$matriz['edad'];
  $fecha=$matriz['fechaNac'];
  $permiso=$matriz['permiso'];
  
?>					
		<form action='bienvenido.php' method='POST' class='formu_log'>
					 <h3 class="titu_form_login mb-5">Vista de Registro</h3>
							<div class="form-floating mb-3">
							  <input type="text" name="id_usuario" class="form-control" id="floatingInput" disabled="" value='<?php echo $id?>'>
							  <label for="floatingInput" class="label">ID Usuario</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="dni" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $DNI?>'>
							  <label for="floatingInput" class="label">DNI</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="nombre" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $nombre?>'>
							  <label for="floatingInput" class="label">Nombre</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="apellido" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $apellido?>'>
							  <label for="floatingInput" class="label">Apellido</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="cargo" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $cargo?>'>
							  <label for="floatingInput" class="label">Cargo</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="dir" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $dir?>'>
							  <label for="floatingInput" class="label">Direccion</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="tel" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $tel?>'>
							  <label for="floatingInput" class="label">Telefono</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" name="cel" class="form-control" id="floatingPassword" disabled="" placeholder="Password" value='<?php echo $cel?>'>
								<label for="floatingPassword"  class="label">Celular</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="usuario" class="form-control" id="floatingInput" disabled="" placeholder="name@example.com" value='<?php echo $usuario?>'>
							  <label for="floatingInput" class="label">Usuario</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" name="pass" class="form-control" id="floatingPassword" disabled="" placeholder="Password" value='<?php echo $pass?>'>
								<label for="floatingPassword"  class="label">Contraseña</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" name="edad" class="form-control" id="floatingPassword" disabled="" placeholder="Password" value='<?php echo $edad?>'>
								<label for="floatingPassword"  class="label">Edad</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" name="fechanac" class="form-control" id="floatingPassword" disabled="" placeholder="Password" value='<?php echo $fecha?>'>
								<label for="floatingPassword"  class="label">Fecha de Nacimiento</label>
							</div>
							<div class="form-floating">
								<input type="text" name="permiso" class="form-control" id="floatingPassword" disabled="" placeholder="Password" value='<?php echo $permiso?>'>
								<label for="floatingPassword"  class="label">Permiso</label>
							</div><br><br>
							<div class="d-grid gap-2 col-6 mx-auto">
								<button type="submit" class="btn btn-Primary">Volver</button>
							</div>
		</form>
					
						
				<footer>
		   <div class="container-fluid">
			<div class="row p-5 pb-2 bg-light text-black">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h3">Codigo AV</p>
					<p class="text-secondary">Argentina, Buenos Aires</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Codigos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">html</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">css</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">php</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">JavaScript</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Links</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Torms & conditions</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Privacy Policy</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Contactos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Instagram</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Facebook</a>
					</div>
					<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Youtube</a>
							</div>
							<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Twitter</a>
							</div>
				</div>
				<div class="col-xs-12 pt-4">
					<p class="text-secondary text-center">Copyright - All rights reserved &copy; 2022</p>
				</div>
				
			</div>
		
		</div>
	</footer>
			</div>
		</body>
</html>