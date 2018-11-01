<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Buffon">
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
          for($i = 1; $i <= 11; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/buffon/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 11; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/buffon/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Buffon">
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
        <li>74 m<sup>2</sup></li>
        <li>3 Schlafzimmer 1/2/3</li>
        <li>Bad</li>
        <li>WC</li>
        <li>Vorhänge</li>
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
      97877 Wertheim
    </div>
  </div>
  <div class="zimmer-green-stripe">
    <div class="zimmer-titel">
      <span class="name">Buffon</span>
      <span class="name-add">2 - 6 Mann</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Sagenhafter Weitblick ins Main- und Taubertal <br>
      zentrale Lage, gute Infrastruktur<br>
      Hochhaus - 6. Obergeschoss, 74 m<sup>2</sup>, <br>Supermarkt: 700m
    </p>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>1 Einzelbett</li>
      <li>Schlafsofa</li>
      <li>TV</li>
      <li>Esstisch</li>
      <li>Balkon</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten</li>
      <li>Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 3
      <li>3 Einzelbetten</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>Großer Standkühlschrank / Gefrierfach</li>
      <li>Herd mit Backofen</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Badewanne mit Duscharmatur</li>
      <li>Waschmaschine</li>
    </ul>

    <ul class="ul-beschreibung-full">
      WC
    </ul>

    <ul class="ul-beschreibung-full">
      BALKON
      <li>Südbalkon</li>
      <li>mit Sitzgelegenheit</li>
      <li>Überdachung</li>
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
