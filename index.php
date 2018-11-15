<?php
  if(isset($_COOKIE['betreff'])) {
    $cValue = "Anfrage für Wohnung " . $_COOKIE['betreff'];
  }
  else {
    $cValue = "";
  }
  unset($_COOKIE["betreff"]);
  setcookie("betreff", null, -1, '/');


  /* Extract everything before ? possibly added by facebook, if you click on a link on a shared page */
  $uri = $_SERVER['REQUEST_URI'];
  if(preg_match("/(.+)\?/", $uri, $uri_match)) {
    $uri = $uri_match[1];
  }
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <?php
      switch($uri) {
        case '/Pele':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Pel&eacute;&ldquo;" />
          <meta property="og:description" content="in Freudenberg / Main für 4 - 8 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Pele" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/pele/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Maradona':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Maradona&ldquo;" />
          <meta property="og:description" content="in Freudenberg / Main für 2 - 5 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Maradona" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/maradona/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Totti':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Totti&ldquo;" />
          <meta property="og:description" content="in Bettingen / Main für 4 - 6 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Totti" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/totti/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/DelPiero':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Del Piero&ldquo;" />
          <meta property="og:description" content="in Bettingen / Main für 2 - 5 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/DelPiero" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/delpiero/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Zidane':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Zidane&ldquo;" />
          <meta property="og:description" content="in Wertheim / Main für 2 - 5 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Zidane" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/zidane/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Buffon':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Buffon&ldquo;" />
          <meta property="og:description" content="in Freudenberg / Main für 2 - 6 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Buffon" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/buffon/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Rooney':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Rooney&ldquo;" />
          <meta property="og:description" content="in Wertheim / Main für 2 - 6 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Rooney" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/rooney/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;
        case '/Drogba':
        echo '
          <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
          <meta property="og:title" content="Monteurwohnung &bdquo;Drogba&ldquo;" />
          <meta property="og:description" content="in Wertheim / Main für 2 - 5 Mann ab 15 € die Nacht" />
          <meta property="og:url" content="http://mcsleepy.tk/Drogba" />
          <meta property="og:image" content="http://mcsleepy.tk/img/gallery/drogba/fb.jpg" />
          <meta property="og:image:width" content="900" />
          <meta property="og:image:height" content="470" />
        ';
        break;

        default:
          echo '
            <meta name="description" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren. Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich">
            <meta property="og:title" content="mcsleepy.de - Spezialisiert auf die Bedürfnisse von Monteuren." />
            <meta property="og:description" content="Unkompliziert - hoher Schlafkomfort in Einzelbetten - TV und WLAN - Männerfreundlich" />
            <meta property="og:url" content="http://mcsleepy.tk" />
            <meta property="og:image" content="http://mcsleepy.tk/img/fbimage.jpg" />
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />
          ';
      }
    ?>
    <meta property="og:type" content="Website" />

		<link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48 64x64" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css?v=09112018">
		<link rel="stylesheet" type="text/css" href="albery/css/albery.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="albery/js/albery.min.js"></script>

		<title>
			<?php
				switch($uri) {
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
  <script src="https://apis.google.com/js/platform.js" async defer>{lang: 'de'}</script>
	</head>

	<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=182084536032749&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
        <span class="debug"></span>
				<div class="container">
						<?php
							switch($uri) {
								case '/Kontakt':
								echo '
								<div class="logo-kontakt">
									<img src="img/logo.svg" alt="">
								</div>
								';
                break;
                case '/Impressum':
								echo '
								<div class="logo-kontakt">
									<img src="img/logo.svg" alt="">
								</div>
								';
                break;
                case '/Datenschutz':
								echo '
								<div class="logo-kontakt">
									<img src="img/logo.svg" alt="">
								</div>
								';
                break;
                case '/FAQ':
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

      <div class="content">

			<?php
				switch($uri) {
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
          case '/Impressum':
            include('includes/impressum.php');
            break;
          case '/Datenschutz':
            include('includes/datenschutz.php');
            break;
					default: include('includes/overview.php');
				}
			?>

    </div> <!-- Content end -->

			<footer>
        <div class="container footer-container">
          <ul>
            <li><a href="/Impressum">IMPRESSUM</a></li>
            <li><a href="/Datenschutz">DATENSCHUTZ</a></li>
            <li><a href="/Kontakt">KONTAKT</a></li>
          </ul>
        </div>
        <div class="container">
          <div class="copyright">
            &copy;
        <script>
          var d = new Date();
          document.write(d.getFullYear());
        </script>
        mcsleepy.de
		      </div>
        </div>
			</footer>

		</div> <!-- wrap end -->

		<script src="js/main.js?v=09112018"></script>
	</body>
</html>
