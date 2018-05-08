<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Secciones - NewsCrawler</title>
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
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6"><a href="#"></a>
                   <div class="thumbnail img-thumb1-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Noticias de</a></div>
                           <div class="title"><a href="#">ACTUALIDAD Y POLÍTICA</a></div>
                           <div class="content">
                               <p>Para estar a la última de lo que sucede.</p>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="thumbnail img-thumb1-bg img-thumb2-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Noticias de</a></div>
                           <div class="title"><a href="#">CIENCIA</a></div>
                           <div class="content">
                               <p><a href="#">Los últimos descubrimientos científicos.</a></p>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="thumbnail img-thumb1-bg img-thumb3-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Noticias de</a></div>
                           <div class="title"><a href="#">TECNOLOGÍA</a></div>
                           <div class="content">
                               <p><a href="#">Las últimas novedades del sector.</a></p>
                           </div>
                       </div>
                   </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="thumbnail img-thumb1-bg img-thumb4-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Noticias de</a></div>
                           <div class="title"><a href="#">SALUD</a></div>
                           <div class="content">
                               <p><a href="#">Noticias y consejos para cuidarte más.</a></p>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="thumbnail img-thumb1-bg img-thumb5-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Noticias de</a></div>
                           <div class="title"><a href="#">DEPORTES</a></div>
                           <div class="content">
                               <p><a href="#">Quién ganó el partido?</a></p>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                   <div class="thumbnail img-thumb1-bg img-thumb6-bg">
                       <div class="overlay"></div>
                       <div class="caption">
                           <div class="tag"><a href="#">Para ponerte en</a></div>
                           <div class="title"><a href="#">CONTACTO</a></div>
                           <div class="content">
                               <p><a href="#">Estaremos encantados de leerte!</a></p>
                           </div>
                       </div>
                   </div>
				   
            </div>
        </div>
    </section>
		
</html>