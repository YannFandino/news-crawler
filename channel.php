<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio - NewsCrawler</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>	
	<!-- CABECERA -->
	<?php
        require 'class/ConexionDB.php';
        require 'class/User.php';
		require_once('header.php');

		// Obtener canal si el usuario lo ha establecido
        $channel = isset($_GET['channelname']) ? $_GET['channelname']:"";

        // Obtener lista RSS de usuario
        $user = $_SESSION['user'];
        $listaRSS = $user->getListaRSS();
	?>
<body>
	<section class="rss-container">
		<?php
        if ($channel !== "") {
            $conexion = new ConexionDB();
            $channel = [$conexion->getRssUrl($channel)];
        } elseif ($listaRSS != null) {
            $channel = $listaRSS;
            header('Location: mychannels.php');
        } else {
            //header('Location: xml.php');
        }

        for ($i = 0; $i < count($channel); $i++) {

            $xml = new DOMDocument();
            $xml->load($channel[$i]);
            //$xml->load('http://feeds.weblogssl.com/xataka2');
            //$xml->load('http://feeds2.feedburner.com/Wwwhatsnew');

            $canal = $xml->getElementsByTagName("channel")->item(0);
            $items = $xml->getElementsByTagName('item');


            foreach ($items as $item) {
                $item_title = $item->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
                $item_link = $item->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
                $item_desc = $item->getElementsByTagName('description')->item(0)->nodeValue; // para xml donde todo el contenido esta dentro de la etiqueta description
                $item_content = $item->getElementsByTagName('encoded')->item(0); // Para xml con etiquetas content:encoded

                $html = new DOMDocument();
                libxml_use_internal_errors(true);
                if ($item_content != null) {
                    $html->loadHTML($item_content->nodeValue);
                } else {
                    $html->loadHTML($item_desc);
                }

                $img = $html->getElementsByTagName('img')->item(0)->getAttribute('src');
                $desc = utf8_decode($html->getElementsByTagName('p')->item(1)->nodeValue);
                $author = $item->getElementsByTagName('creator')->item(0)->nodeValue;
        ?>
                <a href="<?php echo $item_link ?>" target="_blank">
                    <div class="channel-news">
                        <div class="img-news">
                            <img src="<?php echo $img ?>" width="270" height="170"/>
                        </div>
                        <div class="news">
                            <h3><?php echo $item_title ?></h3>
                            <p><?php echo $desc ?></p>
                            <p class="autor">Escrito por: <strong><?php echo $author ?></strong></p>
                        </div>
                    </div>
                </a>
        <?php
            }
        }
        ?>
	</section>
</body>
</html>