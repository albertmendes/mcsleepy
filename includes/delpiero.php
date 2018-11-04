<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Del Piero">
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
          for($i = 1; $i <= 9; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/delpiero/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 9; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/delpiero/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Del Piero">
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
        <li>105 m<sup>2</sup></li>
        <li>2 Schlafzimmer 2/2</li>
        <li>Bad</li>
        <li>WC</li>
        <li>offenes Wohnzimmer (+1)</li>
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
      97877 Bettingen
    </div>
  </div>
  <div class="zimmer-green-stripe">
    <div class="zimmer-titel">
      <span class="name">Del Piero</span>
      <span class="name-add">2 - 5 (+1)</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Sehr ruhige Lage im Ortskern trotz direkter Anbindung an die A3 <br>
      Erstes Obergeschoss, 105 m2, im Haus mit „Totti“ und „Hagi“ <br>
      Supermarkt: 8km
    </p>

    <ul class="ul-beschreibung-full">
      Vor Ort:
      <li>Dorfladen 500m</li>
      <li>großer Autohof mit Restaurant und Shop</li>
      <li>Mc Donald / Burger King</li>
      <li>Outletcenter „Wertheim Village“ (180 Boutiquen)</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WOHNZIMMER mit Essbereich
      <li>offener Wohn- und Essbereich</li>
      <li>29 m<sup>2</sup></li>
      <li>Zwei Schlafsofas (optional von einer weiteren Person nutzbar)</li>
      <li>TV</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>2 Einzelbetten</li>
      <li>große Schrankwand</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten</li>
      <li>Schrank, Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>Einbauküche mit großem Kühlschrank / Gefrierschrank</li>
      <li>Herd mit Cerankochfeld und Backofen</li>
      <li>Spülmaschine</li>
      <li>Kaffeemaschine</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
      <li>Toaster</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ESSBEREICH
      <li>Esstisch im offenen und hellen Sitzbereich mit Balkonzugang</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Tageslicht</li>
      <li>Dusche</li>
      <li>Waschmaschine</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WC
      <li>Tageslicht, Waschbecken</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BALKON
      <li>Westbalkon</li>
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
