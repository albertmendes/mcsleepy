<?php
  if(isset($_COOKIE['betreff'])) {
    $cValue = "Anfrage für Wohnung " . $_COOKIE['betreff'];
  }
  else {
    $cValue = "";
  }
  unset($_COOKIE["betreff"]);
  setcookie("betreff", null, -1, '/');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
		<link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48 64x64" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css?v=01112018">
		<link rel="stylesheet" type="text/css" href="albery/css/albery.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="albery/js/albery.min.js"></script>
		<title>
			<?php
				switch($_SERVER['REQUEST_URI']) {
					case '/Zimmer':
						echo 'mcsleepy.de';
						break;
					case '/FAQ':
						echo 'Häufige Fragen - mcsleepy.de';
						break;
					case '/Kontakt':
						echo 'Kontaktieren Sie uns - mcsleepy.de';
						break;
					case '/Impressum':
						echo 'Impressum - mcsleepy.de';
						break;
					case '/Pele':
						echo 'Monteurzimmer / Ferienwohnung Pel&eacute; in Freudenberg - mcsleepy.de';
						break;
					case '/Maradona':
						echo 'Monteurzimmer / Ferienwohnung Maradona in Freudenberg - mcsleepy.de';
						break;
					case '/Totti':
						echo 'Monteurzimmer / Ferienwohnung Totti in Bettingen - mcsleepy.de';
						break;
					case '/DelPiero':
						echo 'Monteurzimmer / Ferienwohnung Del Piero in Bettingen - mcsleepy.de';
						break;
					case '/Zidane':
						echo 'Monteurzimmer / Ferienwohnung Zidane in Wertheim - mcsleepy.de';
						break;
					case '/Buffon':
						echo 'Monteurzimmer / Ferienwohnung Buffon in Wertheim - mcsleepy.de';
						break;
					case '/Rooney':
						echo 'Monteurzimmer / Ferienwohnung Rooney in Wertheim - mcsleepy.de';
						break;
					case '/Drogba':
						echo 'Monteurzimmer / Ferienwohnung Drogba in Wertheim - mcsleepy.de';
						break;
					default:
						echo 'mcsleepy.de';
				}
			?>
	</title>
	</head>

	<body>


		<div class="burgerBun">
			<div class="burgerMenu">
				<span class="menu1"></span>
				<span class="menu2"></span>
				<span class="menu3"></span>
			</div>
		</div>

		<div class="mobile-menu">
			<ul>
				<li><a href="/Zimmer">Zimmer</a></li>
				<li><a href="/FAQ">FAQ</a></li>
				<li><a href="/Kontakt">KONTAKT</a></li>
				<li><a href="/Impressum">IMPRESSUM</a></li>
			</ul>
		</div>

		<div class="wrap">
			<div class="navi">
				<div class="container">
						<?php
							switch($_SERVER['REQUEST_URI']) {
								case '/Kontakt':
								echo '
								<div class="logo-kontakt">
									<img src="img/logo.svg" alt="">
								</div>
								';
							}
						?>
						<ul>
							<li><a href="./">Zimmer</a></li>
							<li><a href="./FAQ">Faq</a></li>
							<li><a href="./Kontakt">Kontakt</a></li>
							<li><a href="./Impressum">Impressum</a></li>
						</ul>
				</div> <!-- container end -->
			</div> <!-- navi end -->

			<?php
				switch($_SERVER['REQUEST_URI']) {
					case '/Pele':
						include('includes/pele.php');
						break;
					case '/Maradona':
						include('includes/maradona.php');
						break;
					case '/Totti':
						include('includes/totti.php');
						break;
					case '/DelPiero':
						include('includes/delpiero.php');
						break;
					case '/Zidane':
						include('includes/zidane.php');
						break;
					case '/Buffon':
						include('includes/buffon.php');
						break;
					case '/Rooney':
						include('includes/rooney.php');
						break;
					case '/Drogba':
						include('includes/drogba.php');
						break;
					case '/Kontakt':
						include('includes/kontakt.php');
						break;
					case '/FAQ':
						include('includes/faq.php');
						break;
					default: include('includes/overview.php');
				}
			?>

			<footer>

			</footer>

		</div> <!-- wrap end -->

		<!--<span class="debug"></span>-->
		<script src="js/main.js?v=01112018"></script>
	</body>
</html>
