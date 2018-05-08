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

        // Obtener lista RSS de usuario
        $user = $_SESSION['user'];
        $listaRSS = $user->getListaRSS();
	?>
<body>
	<section class="rss-container">
		<?php
        if ($listaRSS != null) {
            $channel = $listaRSS;
        } else {
            //header('Location: xml.php');
        }

        for ($i = 0; $i < count($channel); $i++) {

            $xml = new DOMDocument();
            $xml->load($channel[$i]);

            $canal = $xml->getElementsByTagName("channel")->item(0);

                $canal_title = $canal->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
                $canal_link = $canal->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
                $canal_link = getDomainName($canal_link);
                $canal_desc = $canal->getElementsByTagName('description')->item(0)->nodeValue; // para xml donde todo el contenido esta dentro de la etiqueta description
                $canal_img = $canal->getElementsByTagName('image')->item(0); // Para xml con etiquetas content:encoded
                $canal_img = $canal_img != null ? $canal_img->childNodes->item(1)->nodeValue:"img/noimage.png";

        ?>
                <a href="channel.php?channelname=<?php echo $canal_link  ?>" target="_self">
                    <div class="channel-news">
                        <div class="img-news">
                            <img src="<?php echo $canal_img ?>" width="270" height="170"/>
                        </div>
                        <div class="news">
                            <h3><?php echo $canal_title ?></h3>
                            <p><?php echo $canal_desc ?></p>
                        </div>
                    </div>
                </a>
        <?php
        }

        function getDomainName($url) {
            $parts = ['https', 'http', ':', '/','www.'];
            $domain = explode('.',str_replace($parts,'',$url))[0];

            return $domain;
        }
        ?>
	</section>
</body>
</html>