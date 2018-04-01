<!-- CABECERA -->
<header>
	<!-- LOGO -->
	<div class="nc-logo"></div>

	<div class="nc-right-menu">
		<!-- BUSCADOR -->
		<form class="search-form">
			<div class="input-container">
				<i class="material-icons">search</i>
				<input type="text" name="search" placeholder="Buscar" />
			</div>
		</form>

	<?php
	if (isset($_SESSION['user'])) {
	?>
		<!-- BOTÓN LOGIN -->
		<button id="btn-login" class="btn btn-rvs">
			Iniciar Sesión
		</button>
	<?php
	} else {
	?>
		<div class="dropdown">
			<i class="material-icons icon-menu">menu</i>
			<div class="dropdown-content">
				<a href="#">Editar perfil</a>
				<a href="#">Editar RSS</a>
				<a href="#">Salir <i class="material-icons">exit_to_app</i></a>
			</div>
		</div>
	<?php
	}
	?>
	</div>
</header>