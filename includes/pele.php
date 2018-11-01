<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Pele">
      Anfrage
    </div>
    <div class="preis-ab-mobile">
      ab 15 €
    </div>
    <div class="clear-both"></div>
  </div>

  <div class="zimmer-left">
    <div class="albery-container">
      <div class="albery-wrapper">

        <?php
          for($i = 1; $i <= 18; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/pele/' . $i . '.jpg" alt="">
            </div>
            ';
          }
        ?>

      </div>

      <div class="move-right">
        <a href="#" id="rightArrow"></a>
      </div>
      <div class="move-left">
        <a href="#" id="leftArrow"></a>
      </div>

    </div>

    <div class="pagination-container">
      <div class="pagination-wrapper">

        <?php
          for($i = 1; $i <= 18; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/pele/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Pele">
      <span>Anfrage</span>
    </div>

    <div class="preis-box">
      Preis: ab 15 € <br>
      pro Mann
    </div>
    <div class="middle-box">
      <ul>
        <span>INKLUSIVE</span>
        <li>TV & Wlan</li>
        <li>Waschmaschine</li>
        <li>Bettwäsche</li>
        <li>Handtücher</li>
        <li>Endreinigung</li>
      </ul>
    </div>
    <div class="bottom-box">
      <ul>
        <span>AUSSTATTUNG</span>
        <li>135 m<sup>2</sup></li>
        <li>3 Schlafzimmer 3/3/2</li>
        <li>Bad mit WC</li>
        <li>WC</li>
        <li>großes Wohnzimmer (+2)</li>
        <li>alle Zimmer mit Rolladen</li>
        <li>großer Balkon</li>
        <li>Nichtraucherwohnung</li>
      </ul>
    </div>
  </div> <!-- zimmer right end -->

  <div class="clear-both"></div>

  <div class="zimmer-gray-stripe">
    <ul class="zimmer-social-icons">
      <li><a href="#">p</a></li>
      <li><a href="#">r</a></li>
      <li><a href="#">q</a></li>
      <li><a href="#">s</a></li>
      <li><a href="#">t</a></li>
    </ul>
    <div class="zimmer-ort">
      97896 Freudenberg
    </div>
  </div>
  <div class="zimmer-green-stripe">
    <div class="zimmer-titel">
      <span class="name">Pel&eacute;</span>
      <span class="name-add">4 - 8 Mann (+2)</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Zentrale Lage im ruhigen Wohngebiet mit guter Infrastruktur <br>
      Erdgeschosswohnung 135m2 im Haus mit „Maradona“ <br>
      Supermarkt: 200m
    </p>
    <ul class="ul-beschreibung-full">
      WOHNZIMMER
      <li>35 m<sup>2</sup></li>
      <li>Parkettboden</li>
      <li>Zwei Schlafsofas (optional von zwei zusätzlichen Personen nutzbar)</li>
      <li>TV</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>3 Einzelbetten</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten, Kleiderschrank, kleiner Tisch mit Stuhl</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 3
      <li>3 Einzelbetten, Kleiderschrank, offenes Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>2 große Standkühlschränke mit Gefrierfach</li>
      <li>Kaffemaschine</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
      <li>Herd mit Cerankochfeld und Backofen</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ESSBEREICH
      <li>offener und heller Sitzbereich</li>
      <li>Esstisch mit Bank und Stühlen</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Tageslichtbad</li>
      <li>Dusche</li>
      <li>Badewanne</li>
      <li>Waschmaschine</li>
      <li>WC</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WC
      <li>Tageslicht, Waschbecken</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BALKON
      <li>Westbalkon</li>
      <li>sehr großer, heller Balkon über die gesamte Hauslänge</li>
    </ul>
  </div>

</div> <!-- container end -->


<script>
    var containerWidth = $(".zimmer-left").width();
    $(".albery-container").albery({
      speed: 500,
      imgWidth: containerWidth,
      paginationItemWidth: 138,
    });

</script>
