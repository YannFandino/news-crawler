<header>
	<!-- LOGO -->
	<a href="index.php"><div class="nc-logo"></div></a>

	<div class="nc-right-menu">
		<!-- BUSCADOR -->
		<form class="search-form">
			<div class="input-container">
				<i class="material-icons">search</i>
				<input type="text" name="search" placeholder="Buscar" />
			</div>
		</form>

	<?php
	session_start();
	if (isset($_SESSION['user'])) {
	?>
        <!-- MENU DROPDOWN -->
        <div class="dropdown">
            <i class="material-icons icon-menu">menu</i>
            <div class="dropdown-content">
                <a href="#">Editar perfil</a>
                <a href="#">Editar RSS</a>
                <a href="controlador.php?action=salir">
                    <span style="vertical-align: middle;">Salir</span>
                    <i class="material-icons" style="vertical-align: middle;">exit_to_app</i>
                </a>
            </div>
        </div>
	<?php
	} else {
	?>
        <!-- BOTÓN LOGIN -->
        <button id="btn-login" class="btn btn-rvs">
            Iniciar Sesión
        </button>
	<?php
	}
	?>
	</div>
</header>