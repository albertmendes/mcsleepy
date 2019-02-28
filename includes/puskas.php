<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Puskas">
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
          for($i = 1; $i <= 8; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/puskas/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 8; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/puskas/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Puskas">
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
        <li>39 m<sup>2</sup></li>
        <li>1 Zimmer 2/2</li>
        <li>Bad mit WC</li>
        <li>alle Räume mit Rolladen</li>
        <li>Terrasse</li>
        <li>Nichtraucherwohnung</li>
      </ul>
    </div>
  </div> <!-- zimmer right end -->

  <div class="clear-both"></div>

  <div class="zimmer-gray-stripe">
    <ul class="zimmer-social-icons">
      <li><a href="whatsapp://send?text=https://mcsleepy.de/Puskas">p</a></li>
      <li>
        <div class="custom-fb-wohnung">
          <a class="fblike-icon" href="#">r</a>
          <span style="opacity: 0.001 !important">
            <div class="fb-share-button" data-href="https://mcsleepy.de/Puskas" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmcsleepy.de%2FDrogba&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
          </span>
        </div>
      </li>

      <li>
        <div class="custom-gplus-wohnung">
          <a class="gplus-icon" href="#">s</a>
          <span>
            <div class="g-plus" data-action="share" data-href="https://mcsleepy.de/Puskas"></div>
          </span>
        </div>
      </li>
      <li>
        <div class="custom-twitter-wohnung">
          <a class="twitter-icon" href="#">t</a>
          <span style="opacity: 0.001 !important">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-url="https://mcsleepy.de/Puskas" data-hashtags="Monteurzimmer" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </span>
        </div>
      </li>
    </ul>
    <div class="zimmer-ort">
      97877 Bettingen
    </div>
  </div>
  <div class="zimmer-green-stripe">
    <div class="zimmer-titel">
      <span class="name">Puskás</span>
      <span class="name-add">2 - 4 Mann</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Sehr ruhige Lage im Ortskern trotz direkter Anbindung an die A3
      Untergeschoss, 39 m<sup>2</sup>, im Haus mit „Totti“ und „Del Piero“
      Supermarkt: 8km
    </p>
    <p>
      Vor Ort:<br>
      Dorfladen 500m <br>
      großer Autohof mit Restaurant und Shop <br>
      Mc Donald's / Burger King <br>
      Outletcenter „Wertheim Village“ (180 Boutiquen)
    </p>

    <ul class="ul-beschreibung-full">
      EINZIMMERAPPARTEMENT
      <li>Souterrain, 39 m<sup>2</sup></li>
      <li>offener Wohn- und Schlafbereich mit Terassen- bzw. Gartenanbindung</li>
      <li>Zwei Einzelbetten</li>
      <li>Zwei Schlafsofas (optional von zwei weiteren Personen nutzbar)</li>
      <li>TV</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>Einbauküche mit großem Kühlschrank / Gefrierschrank</li>
      <li>Herd mit Cerankochfeld und Backofen</li>
      <li>Spülmaschine</li>
      <li>Kaffeemaschine</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
      <li>Toaster</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD mit WC
      <li>Tageslicht</li>
      <li>Dusche</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KELLERRAUM
      <li>mit Waschmaschine</li>
    </ul>

    <ul class="ul-beschreibung-full">
      TERRASSE
      <li>überdachte, geflieste Terasse mit Treppenaufgang
        in den Garten und Zugang zum Hof.
      </li>


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
