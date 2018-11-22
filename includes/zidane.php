<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="anfrage-mobile-wrapper">
    <div class="anfrage-mobile" data-url="Zidane">
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
          for($i = 1; $i <= 15; $i++) {
            echo '
            <div class="albery-item">
              <img src="img/gallery/zidane/' . $i . '.jpg" alt="">
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
          for($i = 1; $i <= 15; $i++) {
            echo '
            <div class="pagination-item" data-item="' . $i . '">
              <img src="img/gallery/zidane/' . $i . '_thumb.jpg" alt="">
            </div>
            ';
          }
        ?>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage" data-url="Zidane">
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
        <li>3 Schlafzimmer 2/2/1(+1)</li>
        <li>Bad mit WC</li>
        <li>WC</li>
        <li>Jalousien / Vorhänge</li>
        <li>Balkon</li>
        <li>Nichtraucherwohnung</li>
      </ul>
    </div>
  </div> <!-- zimmer right end -->

  <div class="clear-both"></div>

  <div class="zimmer-gray-stripe">
    <ul class="zimmer-social-icons">
      <li><a href="whatsapp://send?text=https://mcsleepy.de/Zidane">p</a></li>
      <li>
        <div class="custom-fb-wohnung">
          <a class="fblike-icon" href="#">r</a>
          <span style="opacity: 0.001 !important">
            <div class="fb-share-button" data-href="https://mcsleepy.de/Zidane" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmcsleepy.de%2FZidane&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
          </span>
        </div>
      </li>

      <li>
        <div class="custom-gplus-wohnung">
          <a class="gplus-icon" href="#">s</a>
          <span>
            <div class="g-plus" data-action="share" data-href="https://mcsleepy.de/Zidane"></div>
          </span>
        </div>
      </li>
      <li>
        <div class="custom-twitter-wohnung">
          <a class="twitter-icon" href="#">t</a>
          <span style="opacity: 0.001 !important">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-url="https://mcsleepy.de/Totti" data-hashtags="Monteurzimmer" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </span>
        </div>
      </li>
    </ul>
    <div class="zimmer-ort">
      97877 Wertheim
    </div>
  </div>
  <div class="zimmer-green-stripe">
    <div class="zimmer-titel">
      <span class="name">Zidane</span>
      <span class="name-add">2 - 5 Mann (+1)</span>
    </div>
  </div>
  <div class="zimmer-beschreibung-full">
    <h2>Beschreibung:</h2>
    <p>
      Sagenhafter Weitblick ins Main- und Taubertal<br>
      Hochhaus, ganz oben - 7. Obergeschoss, 74 m<sup>2</sup>,<br>
      gute Infrastruktur<br>
      Supermarkt: 800m
    </p>

    <ul class="ul-beschreibung-full">
      ZIMMER 1
      <li>1 Einzelbett</li>
      <li>Schlafsofa (optional für eine weitere Person nutzbar)</li>
      <li>TV</li>
      <li>Balkon</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 2
      <li>2 Einzelbetten</li>
      <li>Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      ZIMMER 3
      <li>2 Einzelbetten</li>
      <li>Regal</li>
    </ul>

    <ul class="ul-beschreibung-full">
      KÜCHE
      <li>Einbauküche mit 2 großen Standkühlschränken / Gefrierfächern</li>
      <li>Herd mit Backofen</li>
      <li>Mikrowelle</li>
      <li>Wasserkocher</li>
    </ul>

    <ul class="ul-beschreibung-full">
      BAD
      <li>Badewanne mit Duscharmatur</li>
      <li>Waschmaschine</li>
      <li>WC</li>
    </ul>

    <ul class="ul-beschreibung-full">
      Abstellkammer
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
  var paginationWidth = $(".zimmer-left").width() / 5;
  $(".albery-container").albery({
    speed: 500,
    imgWidth: containerWidth,
    paginationItemWidth: paginationWidth,
  });
</script>
