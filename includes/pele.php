<div class="spacer-102"></div>

<div class="container fade-opacity">
  <div class="logo-zimmer">
    <img src="img/logo.svg" alt="">
  </div>

  <div class="zimmer-left">
    <div class="albery-container">
      <div class="albery-wrapper">

        <div class="albery-item">
          <img src="img/gallery/pele/1.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/2.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/3.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/4.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/5.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/6.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/7.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/8.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/9.jpg" alt="">
        </div>
        <div class="albery-item">
          <img src="img/gallery/pele/10.jpg" alt="">
        </div>

      </div>

      <div class="move-right">
        <a href="#" id="rightArrow">▶</a>
      </div>
      <div class="move-left">
        <a href="#" id="leftArrow">◀</a>
      </div>

    </div>

    <div class="pagination-container">
      <div class="pagination-wrapper">
        <div class="pagination-item" data-item="1">
          <img src="img/gallery/pele/1_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="2">
          <img src="img/gallery/pele/2_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="3">
          <img src="img/gallery/pele/3_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="4">
          <img src="img/gallery/pele/4_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="5">
          <img src="img/gallery/pele/5_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="6">
          <img src="img/gallery/pele/6_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="7">
          <img src="img/gallery/pele/7_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="8">
          <img src="img/gallery/pele/8_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="9">
          <img src="img/gallery/pele/9_thumb.jpg" alt="">
        </div>
        <div class="pagination-item" data-item="10">
          <img src="img/gallery/pele/10_thumb.jpg" alt="">
        </div>
      </div>
    </div>
  </div> <!-- zimmer-left end -->

  <div class="zimmer-right">
    <div class="anfrage">
      <span>Anfrage</span>
    </div>
    <div class="preis-etc">
      <div>
        Preis: ab 15 € <br>
        pro Mann
      </div>
    </div>
  </div>

</div> <!-- container end -->
<script>
    var containerWidth = $(".zimmer-left").width();
    $(".albery-container").albery({
      speed: 500,
      imgWidth: containerWidth,
      paginationItemWidth: 146,
    });
</script>
