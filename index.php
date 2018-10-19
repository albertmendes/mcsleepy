<?php
	//echo $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48 64x64" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="albery/css/albery.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="albery/js/albery.js"></script>
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
					default:
						echo 'mcsleepy.de';
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

			<?php
				switch($_SERVER['REQUEST_URI']) {
					case '/Pele':
						include('includes/pele.php');
						break;
					case '/FAQ':
						include('includes/faq.php');
						break;
					default: include('includes/overview.php');
				}
			?>

		</div> <!-- wrap end -->


		<script src="js/main.js"></script>
	</body>
</html>
