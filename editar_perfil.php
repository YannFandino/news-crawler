<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Editar Perfil - NewsCrawler</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

	<!-- HOJA DE ESTILOS PARA LA GRILLA -->
	<link rel="stylesheet" href="CSS/extra.css">

	<!-- ENLACES A BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
	
	<!-- CABECERA -->
	<?php
		require_once('header.php');

		/*if (isset($_SESSION['user'])) {
		    header('Location: channel.php');
        }*/
	?>
	
	<!-- CONTENIDO -->
	
		<!-- ENLACES SECCIONES DE MOMENTO DESACTIVADOS-->
			<!--<ul>
				<li><a href="Actualidad">Actualidad</a></li>
				<li><a href="Ciencia">Ciencia</a></li>
				<li><a href="Tecnologia">Tecnologia</a></li>
				<li><a href="Salud">Salud</a></li>
				<li><a href="Actualidad">Deportes</a></li>
				<li><a href="Contacto">Contacto</a></li>

			</ul> -->

		<!-- CAJAS SECCIONES-->



<section><br><br>
	<div class="container">
		<h2>Editar perfil:</h2><br>
		  <form action="editar_perfil.php">
		    <div class="row">
		      <div class="col-25">
		        <label for="fname">Nombre: </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="nombre" name="nombre">
		      </div>
		    </div>

		    <div class="row">
		      <div class="col-25">
		        <label for="lname">Email: </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="email" name="email">
		      </div>
		    </div>
 
 		    <div class="row">
		      <div class="col-25">
		        <label for="lname">Password: </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="password" name="password">
		      </div>
		    </div>

 		    <div class="row">
		      <div class="col-25">
		        <label for="lname">Confirmar Password: </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="confirmar_password" name="confirmar_password">
		      </div>
		    </div>
    
			<br><br>
		    <div class="row">
	      		<input type="submit" value="Eliminar Cuenta">
	      		<div class="col-25"></div>
	      		<div class="col-25">
		      		<input type="submit" id="guardar" value="Guardar Cambios">
	      		</div>
		    </div>
		  </form>
	</div>
</section>


		
</html>