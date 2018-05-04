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
		require_once('header.php');
	?>
<body>
	<section class="rss-container">
		<?php

			$xml = new DOMDocument();
			$xml->load('http://feeds.weblogssl.com/xataka2');
			//$xml->load('http://feeds2.feedburner.com/Wwwhatsnew');

			$canal = $xml->getElementsByTagName("channel")->item(0);
			$items = $xml->getElementsByTagName('item');


			foreach($items as $item) {
				$item_title=$item->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
				$item_link=$item->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
				$item_desc=$item->getElementsByTagName('description')->item(0)->nodeValue;

				$html = new DOMDocument();
				libxml_use_internal_errors(true);
				$html->loadHTML($item_desc);

				$img = $html->getElementsByTagName('img')->item(0)->getAttribute('src');
		?>
				<div class="channel-news">
					<div class="img-news">
						<img src="<?php echo $img ?>" width="270" height="170"/>
					</div>
					<div class="news">
						<h3><?php echo $item_title ?></h3>
						<p>Descripcion</p>
					</div>
				</div>
		<?php
			}

		?>
	</section>
</body>
</html>