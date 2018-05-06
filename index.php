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
		if (isset($_SESSION['user'])) {
		    header('Location: channel.php');
        }
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
			<form class="registro-form" id="registro-form" action="controlador.php" method="post" onsubmit="return checkForm(this.id)">
                <div id="registro-form-error" style="display: none;margin-bottom: 8px;color: red;font-size: .8em;"></div>
				<input type="text" name="name" placeholder="Nombre" />
				<input type="email" name="email" placeholder="Correo electrónico" />
				<input type="password" name="password" placeholder="Contraseña" />
				<input type="hidden" name="action" value="registro" />
				<button class="btn btn-nc">Regístrate</button>
			</form>
		</div>
	</section>
	
	<!-- LOGIN -->
	<section id="modal-login" class="login-modal">
		<form class="login-form" id="login-form" action="controlador.php" method="post" onsubmit="return checkForm(this.id)">
			<i class="material-icons icon-clear">clear</i>
            <div id="login-form-error" style="display: none;margin-bottom: 8px;color: red;font-size: .8em;"></div>
			<input type="email" name="email" placeholder="Correo electrónico" />
			<input type="password" name="password" placeholder="Contraseña" />
            <input type="hidden" name="action" value="login"/>
			<button class="btn btn-nc">Iniciar Sesión</button><br>
			<div>¿No recuerdas tu contraseña?</div>
		</form>
	</section>
	
</body>
<script src="js/js.js"></script>
<?php
	if (isset($_SESSION['error_login'])) {
		$msg = "";
		switch($_SESSION['error_login']) {
			case 'Error1':
				$msg = "Datos de usuario incorrectos";
				break;
			case 'Error2':
				$msg = "El email no esta registrado";
				break;
		}
?>
	<script>
		var modal = document.getElementById('modal-login');
    	modal.style.opacity = "1";
        modal.style.zIndex = "2";
		
		showError("login-form", "<?php echo $msg; ?>");
	</script>
<?php
	}
?>
</html>