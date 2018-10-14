<?php
	//echo $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>
			<?php
				switch($_SERVER['REQUEST_URI']) {
					case '/Zimmer':
						echo 'monteur-bett.de';
						break;
					case '/FAQ':
						echo 'Häufige Fragen - monteur-bett.de';
						break;
					case '/Kontakt':
						echo 'Kontaktieren Sie uns - monteur-bett.de';
						break;
					case '/Impressum':
						echo 'Impressum - monteur-bett.de';
						break;
					default:
						echo 'monteur-bett.de';
				}
			?>
	</title>
	</head>

	<body>

		<div class="wrap">
			<div class="navi">
				<div class="container">
						<ul>
							<li><a href="./">Zimmer</a></li>
							<li><a href="./FAQ">Faq</a></li>
							<li><a href="./Kontakt">Kontakt</a></li>
							<li><a href="./Impressum">Impressum</a></li>
						</ul>
				</div> <!-- container end -->
			</div> <!-- navi end -->
			<div class="header">
				<div class="container">
					<div class="comb-wrapper">
						<img src="img/Logo.svg" class="comb comb-logo" alt="">
						<img src="img/comb_bed.svg" class="comb comb-bed" alt="">
						<img src="img/comb_phone.svg" class="comb comb-phone" alt="">
						<img src="img/comb_price.svg" class="comb comb-price" alt="">
					</div>
				</div>
			</div>

			<div class="green-stripe">
				<div class="container-small">
					<div class="social-icons-top">
						<a href="#">t</a>
						<a href="#">s</a>
						<a href="#">q</a>
						<a href="#">r</a>
						<a href="#">p</a>
					</div>
				</div>
			</div>

			<div class="container-small">
				<div class="uppercase headline">
					spezialisiert auf die Bedürfnisse von Monteuren:
				</div>
				<div class="sub-headline fl-right">
					Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich
				</div>
			</div>

			<div class="spacer-55"></div>

			<!-- WOHNUNG PELE -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/pele/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97896 Freundenberg / Main
						</div>
						<div class="item-descr">
							<span class="name">Pelé</span> <strong>4 - 8 Mann</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<br>
			<!-- WOHNUNG MARADONA -->

			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/maradona/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97896 Freundenberg / Main
						</div>
						<div class="item-descr">
							<span class="name">Maradona</span> <strong>2 - 5 Mann (+1)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Totti -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/totti/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Bettingen / Main
						</div>
						<div class="item-descr">
							<span class="name">Totti</span> <strong>4 - 6 Mann (+1)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Del Piero -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/delpiero/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Bettingen / Main
						</div>
						<div class="item-descr">
							<span class="name">Del Piero</span> <strong>2 - 5 Mann (+1)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Zidane -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/zidane/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Wertheim / Main
						</div>
						<div class="item-descr">
							<span class="name">Zidane</span> <strong>2 - 5 Mann (+1)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Buffon -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/buffon/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Wertheim / Main
						</div>
						<div class="item-descr">
							<span class="name">Buffon</span> <strong>2 - 6 Mann</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Rooney -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/rooney/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Wertheim / Main
						</div>
						<div class="item-descr">
							<span class="name">Rooney</span> <strong>2 - 5 Mann (+2)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

			<!-- Wohnung Drogba -->
			<div class="container-small fade-in">
				<div class="overview-item">
					<div class="overview-item-left">
						<div class="overview-image">
							<img src="img/gallery/drogba/1_thumb.jpg" alt="">
						</div>
					</div>

					<div class="overview-item-right">
						<div class="item-head">
							97877 Wertheim / Main
						</div>
						<div class="item-descr">
							<span class="name">Drogba</span> <strong>2 - 5 Mann (+2)</strong>
						</div>
						<a href="#" class="item-details-link">Details</a>
					</div>
				</div>
			</div>

		</div> <!-- wrap end -->


		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
