$(document).ready(function() {

  var naviAnim = 0;

  /* Compute heights */

  function computeHeights() {
    var itemLeftHeight = $(".overview-item-left img").height();
    $(".overview-item-right").animate({"height": itemLeftHeight},500);
    var zimmerLeftHeight = $(".zimmer-left").height();
    $(".zimmer-right").css("height", zimmerLeftHeight);
  }
  computeHeights();

  $(window).on("resize", function() {
    computeHeights();
    //$(".debug").html(window.innerWidth);
  });

  /* Fade in items */
  $(".fade-in").each(function(b) {
    $(this).delay(344 * b).animate({
      opacity: 1,
      left: 0
    },800, function() {
      if($(".overview-item-left img").height() !== $(".overview-item-right").height()) {
        computeHeights();
      }
    });
  });

  /* Animation  */
  function doAnimation(device) {
    var left;
    var top;
    switch(device) {
      case 'tablet':
        left = ["124px", "124px", "240px", "10px"];
        top = ["0px", "130px", "63px", "195px"];
        break;
      case 'mobile':
        left = ["100px", "100px", "192px", "7px"];
        top = ["0px", "105px", "52px", "157px"];
        break;
      default:
        left = ["124px", "124px", "239px", "6px"];
        top = ["0px", "134px", "66px", "200px"];
    }
    setTimeout(function() {
      $(".comb-logo").animate({
        left: left[0],
        top: top[0],
        opacity: 1
      },1000);
      $(".comb-logo").addClass("anim");
    },500);

    setTimeout(function() {
      $(".comb-phone").animate({
        left: left[1],
        top: top[1],
        opacity: 1,
      },1000);
      $(".comb-phone").addClass("anim");
    },700);

    setTimeout(function() {
      $(".comb-price").animate({
        left: left[2],
        top: top[2],
        opacity: 1,
      },1000);
      $(".comb-price").addClass("anim");
    },900);
    setTimeout(function() {
      $(".comb-bed").animate({
        left: left[3],
        top: top[3],
        opacity: 1,
      },1000);
      $(".comb-bed").addClass("anim");
    },900);
  }

  function showCombs(device) {
    var left;
    var top;
    switch(device) {
      case 'tablet':
        left = ["144px", "144px", "260px", "30px"];
        top = ["0px", "130px", "63px", "195px"];
        break;
      case 'mobile':
        left = ["80px", "80px", "172px", "-13px"];
        top = ["0px", "105px", "52px", "157px"];
        break;
      default:
        left = ["124px", "124px", "239px", "6px"];
        top = ["0px", "134px", "66px", "200px"];
    }
    $(".comb-logo").css({
      left: left[0],
      top: top[0],
      opacity: 1
    });
    $(".comb-phone").css({
      left: left[1],
      top: top[1],
      opacity: 1,
    });
    $(".comb-price").css({
      left: left[2],
      top: top[2],
      opacity: 1,
    });
    $(".comb-bed").css({
      left: left[3],
      top: top[3],
      opacity: 1,
    });
  }

  if(document.cookie.split(';').filter(function(item) {
    return item.indexOf('animation') >= 0;
  }).length) {
    console.log(window.innerWidth);
    if(window.innerWidth <= 768) {
      showCombs('mobile');
    }
    else if(window.innerWidth > 768 && window.innerWidth <= 1024) {
      showCombs('tablet');
    }
    else {
      showCombs();
    }

  }
  else {
    if(window.innerWidth <= 768) {
      doAnimation('mobile');
    }
    else if(window.innerWidth > 768 && window.innerWidth <= 1024) {
      doAnimation('tablet');
    }
    else {
      doAnimation();
    }
  }
  /* Animation END */

  /* Set cookie for animation */
  var d = new Date();
  var time = d.getTime();
  time += 3600 * 1000; // One hour
  d.setTime(time);
  document.cookie = 'animation=done;expires=' + d.toUTCString() + '; path=/';


  $(".anfrage-mobile").on("click", function() {
    console.log(this.dataset.url);
  });

  $(".logo-zimmer").on("click", function() {
    window.location.href = "./";
  });

  // Moving navigation
  $(window).scroll(function() {
    if(window.innerWidth > 750) {
      var top = $(this).scrollTop();
      if(top > 155 && naviAnim == 0) {
        $(".navi").css({opacity: "0", position: "fixed", top: "-55px", "z-index": "3"});
        $(".navi").animate({top: "0px", opacity: "1"}, 500);
        naviAnim = 1;
      }
      else if(top == 0 && naviAnim == 1) {
        $(".navi").css({position: "absolute", "z-index": "2"});
        naviAnim = 0;
      }
    }
  });

  /* Kontaktformular */
  $(".kontakt-formular form").on("submit", function(e) {
    e.preventDefault();
    console.log("hey");
  });

  /* Mobile menu */
  var menuToggle = false;
  $(".burgerMenu").on("click", function() {
    if(menuToggle === false) {
      $(this).toggleClass("active");
      $(".mobile-menu").addClass("menu-toggle");
      menuToggle = true;
      $(".burgerMenu span").css("background", "#333");
    }
    else {
      $(this).toggleClass("active");
      $(".mobile-menu").removeClass("menu-toggle");
      menuToggle = false;
      $(".burgerMenu span").css("background", "#eee");
    }
  });

  $(".overview-item").on("click", function() {
    console.log(this.dataset.link);
    window.location.href = this.dataset.link;
  });

  $(".logo-kontakt").on("click", function() {
    window.location.href = "/";
  });

  /* Checkbox Kontaktformular */
  $("#checkSubmit").on("click", function() {
    var ischecked = document.getElementById("checkSubmit").checked;
    if(ischecked === true) {
      $("#submitForm").prop('disabled', false);
    }
    else {
      $("#submitForm").prop('disabled', true);
    }
  });

  $(".anfrage, .anfrage-mobile").on("click", function() {
    document.cookie = "betreff=" + this.dataset.url;
    window.location.href = '/Kontakt';
  });

});
