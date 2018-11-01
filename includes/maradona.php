<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Maradona">
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
          for($i = 1; $i <= 14; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/maradona/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 14; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/maradona/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage">
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
        <li>84 m<sup>2</sup></li>
        <li>2 Schlafzimmer 2/2</li>
        <li>Bad mit WC</li>
        <li>WC</li>
        <li>offenes Wohnzimmer (+1)</li>
        <li>Rolladen / Rollos</li>
        <li>Balkon</li>
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
      <span class="name">Maradona</span>
      <span class="name-add">2 - 5 Mann (+1)</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Zentrale Lage im ruhigen Wohngebiet mit guter Infrastruktur. <br>
      Dachgeschosswohnung, gehobene Ausstattung, 74 m<sup>2</sup>,<br>
      im Haus mit „Pelé“ <br>
      Supermarkt: 200m
    </p>
    <ul class="ul-beschreibung-full">
      WOHNZIMMER / OFFENE KÜCHE
      <li>offener Wohn- und Essbereich</li>
      <li>29 m<sup>2</sup></li>
      <li>Parkettboden</li>
      <li>Zwei Schlafsofas (optional von einer weiteren Person nutzbar)</li>
      <li>TV</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>2 Einzelbetten</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten, Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      OFFENE KÜCHE
      <li>Einbauküche mit großem Kühlschrank / Gefrierfach</li>
      <li>Kaffemaschine</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
      <li>Toaster</li>
      <li>Herd mit Cerankochfeld und Backofen</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ESSBEREICH
      <li>großer Esstisch, offener und heller Sitzbereich</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Tageslichtbad</li>
      <li>12 m<sup>2</sup></li>
      <li>Dusche</li>
      <li>Eckbadewanne</li>
      <li>Waschmaschine</li>
      <li>WC</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WC
      <li>Tageslicht, Waschbecken</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BALKON
      <li>Südbalkon</li>
      <li>mit Sitzgelegenheit</li>
      <li>Überdachung</li>
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
