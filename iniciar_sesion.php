<html>
  <head> 
    <title>Formulario de login</title>
    <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="StyleSheet" type="text/css" href="css/est.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <!--Atributo  -->
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
		<h1>¡inicia sesion!</h1>
		<h6><a href="registrar_cliente.php">¡No tengo una cuenta!</a></h6>
	</div>					 
	<form class="formu_log" action="validar_cliente.php" method="POST">
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
				<label for="floatingDir"  class="label"><i class="bi bi-signpost"></i>Direccion</label>				  
			</div>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button type="submit" class="btn btn-outline-Primary">Enviar</button>
			</div>	
	</form>
											
								<script src="icon_eye.js"></script>
									<!-- FOOTER-->
	  <div class="iconos">
		<a class="icon_enlace" href="#"><i class="bi bi-facebook" title="Facebook"></i></a>
		<a href="#"><i class="bi bi-google" title="Google"></i></a>
		<a href="#"><i class="bi bi-instagram" title="Instagram"></i></a>
	  </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
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
<!--		<script  type="text/javascript">
			body{
				background: url('imagenes/bosque.jpg');
			}
		</script>-->
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