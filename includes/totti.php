<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Totti">
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
          for($i = 1; $i <= 12; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/totti/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 12; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/totti/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Totti">
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
        <li>3 Schlafzimmer 2/2/2(+1)</li>
        <li>Bad</li>
        <li>WC</li>
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
      <li><a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=http%3A%2F%2Fmcsleepy.tk/Totti&display=popup&ref=plugin&src=share_button" target="_blank">r</a></li>
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
      <span class="name">Totti</span>
      <span class="name-add">4 - 6 Mann (+1)</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Sehr ruhige Lage im Ortskern trotz direkter Anbindung an die A3<br>
       Erdgeschoss, 105 m2, im Haus mit „Del Piero“ und „Hagi“ <br>
       Supermarkt: 8km
    </p>
    <ul class="ul-beschreibung-full">
      Vor Ort:
      <li>Dorfladen 500m<sup>2</sup></li>
      <li>großer Autohof mit Restaurant und Shop</li>
      <li>Mc Donald / Burger King</li>
      <li>Outletcenter „Wertheim Village“ (180 Boutiquen)</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>21 m<sup>2</sup></li>
      <li>2 Einzelbetten, Schrank</li>
      <li>TV</li>
      <li>große Fensterfront mit Terassenzugang</li>
      <li>Schlafsofa (optional von einer weiteren Person nutzbar)</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten, Schrank</li>
      <li>Sitzecke</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 3
      <li>2 Einzelbetten</li>
      <li>Schrank, Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>Einbauküche mit zwei Kühlschränken / Gefrierschrank</li>
      <li>Herd mit Cerankochfeld und Backofen</li>
      <li>Spülmaschine</li>
      <li>Kaffeemaschine</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
      <li>Toaster</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ESSZIMMER
      <li>gemütliches, helles Esszimmer mit Küchen- und Terassenanbindung</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Tageslichtbad</li>
      <li>Dusche</li>
      <li>Waschmaschine</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WC
      <li>Tageslicht, Waschbecken</li>
    </ul>

    <ul class="ul-beschreibung-full">
      TRASSE
      <li>Westseite mit Sitzgelegenheit</li>
    </ul>
  </div>

</div> <!-- container end -->


<script>
  var containerWidth = $(".zimmer-left").width();
  var paginationWidth = $(".zimmer-left").width() / 5;
  $(".albery-container").albery({
    speed: 500,
    imgWidth: containerWidth,
    paginationItemWidth: paginationWidth,
  });
</script>
