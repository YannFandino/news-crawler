<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio - NewsCrawler</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<!-- CABECERA -->
	<?php
		require_once('header.php');
	?>
	
	<!-- CONTENIDO -->
	<section class="home-landing">
		<!-- LANDING -->
		<div class="hl-info">
			<h2 class="hl-title">Todas las noticias <br />en un solo lugar</h2>
			<img src="img/newsfeed.png" alt="Ilustración" height="450"/>
		</div>
		<!-- FORMULARIO REGISTRO -->
		<div class="hl-form">
			<form class="registro-form">
				<input type="text" placeholder="Nombre" />
				<input type="email" placeholder="Correo electrónico" />
				<input type="password" placeholder="Contraseña" />
				<button class="btn btn-nc">Regístrate</button>
			</form>
		</div>
	</section>
	
	<!-- LOGIN -->
	<section id="modal-login" class="login-modal">
		<form class="login-form">
			<i class="material-icons icon-clear">clear</i>
			<input type="email" placeholder="Correo electrónico" />
			<input type="password" placeholder="Contraseña" />
			<button class="btn btn-nc">Iniciar Sesión</button><br>
			<div>¿No recuerdas tu contraseña?</div>
		</form>
	</section>
	
</body>
<script>
	
	// Función para mostrar/ocultar el modal de inicio de sesión
	function showHideModal(id) {
		var modal = document.getElementById(id);
		modal.style.transition = "opacity 1s"
		if (modal.style.opacity == 0) {
			modal.style.opacity = "1";
			modal.style.zIndex = "3";
		} else {
			modal.style.opacity = "0";
			setTimeout(function(){
				modal.style.zIndex = "-1";
			}, 1000);
		}
	}
	
	/* Añadir evento para mostrar y ocultar modal de inicio de sesión
	   a botones
	*/
	var btnLogin = document.getElementById("btn-login");
	var btnExit = document.getElementsByClassName("icon-clear")[0];
	btnLogin.addEventListener("click", function() {
		showHideModal("modal-login");
	});
	btnExit.addEventListener("click", function() {
		showHideModal("modal-login");
	});
	
</script>
</html>