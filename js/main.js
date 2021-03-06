$(document).ready(function() {

  var naviAnim = 0;

  /* Compute heights */


  /* That's just bad */
  function setBoxHeights() {
    function conPer(num,  per) {
      var result = (num / 100) * per;
      console.log(result);
      return result;
    }

    var allHeight = $(".zimmer-left").height();

    $(".anfrage").animate({"height": conPer(allHeight, 10)},300);
    $(".preis-box").animate({"height": conPer(allHeight,23)}, 300);
    $(".middle-box").animate({"height": conPer(allHeight,27)},300);
    $(".bottom-box").animate({"height": conPer(allHeight,40) - 16},300, function() {
      $(".zimmer-right").animate({"opacity": 1}, 400);
    });

  }

  setTimeout(function() {
    setBoxHeights();
  }, 400);

  /*************************/

  function computeHeights() {
    var itemLeftHeight = $(".overview-item-left img").height();
    $(".overview-item-right").css({"height": itemLeftHeight});
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
        // In case it gets stuck
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
        top = ["-25px", "80px", "27px", "132px"];
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
        top = ["-25px", "80px", "27px", "132px"];
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

  if(document.cookie.indexOf('animation=') != -1) {
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
    var name = $("#kName").val();
    var email = $("#kEmail").val();
    var subject = $("#kSubject").val();
    var msg = encodeURIComponent($("#kMsg").val());

    $.get('./sendmail.php?name=' + name + "&email=" + email + "&subject=" + subject + "&msg=" + msg, function(data) {
      $("#submitForm").val(data);
      setTimeout(function() {
        $("#kName").val("");
        $("#kEmail").val("");
        $("#kSubject").val("");
        $("#kMsg").val("");
        $("#submitForm").val("Senden");
      },2000);
    });

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

  /* Karte zeigen */

  $("#karteZeigen").on("click", function(e) {
    e.preventDefault();
    if($("#karteZeigen").html() === "Karte zeigen") {
      $(".container-kontakt").css("zIndex", "-9999");
      $(".karte-overlay").css("display", "none");
      $("#karteZeigen").html("Karte verbergen");
    }
    else {
      $(".container-kontakt").css("zIndex", "1");
      $(".karte-overlay").css("display", "block");
      $("#karteZeigen").html("Karte zeigen");
    }

  })

  /* Datenschutz Nag */
  $(".datenschutz-nag button").on("click", function() {
    $(this).parent().css("display", "none");
    document.cookie = 'ds=ok;expires=' + d.toUTCString() + '; path=/';
  });

  /* Karte an Wohnung anpassen */

  function getCookie(name) {
    var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
  }

  var wohnungName = getCookie('betreff');
  switch(wohnungName) {
    case 'Pele':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4286.070834970013!2d9.322626079247446!3d49.75438135841993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2ace8f28e8637%3A0xab4daf1121f50d02!2sFichtenweg+1%2C+97896+Freudenberg!5e1!3m2!1sen!2sde!4v1542363133673')
    break;
    case 'Maradona':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4286.070834970013!2d9.322626079247446!3d49.75438135841993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2ace8f28e8637%3A0xab4daf1121f50d02!2sFichtenweg+1%2C+97896+Freudenberg!5e1!3m2!1sen!2sde!4v1542363133673')
    break;
    case 'Totti':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3420.863021183516!2d9.560274648216184!3d49.773629257477545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2a526c68ec74b%3A0xa77ae65e3a50c119!2sAm+M%C3%BChlacker+4%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363288036')
    break;
    case 'Puskas':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3420.863021183516!2d9.560274648216184!3d49.773629257477545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2a526c68ec74b%3A0xa77ae65e3a50c119!2sAm+M%C3%BChlacker+4%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363288036')
    break;
    case 'Del Piero':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3420.863021183516!2d9.560274648216184!3d49.773629257477545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2a526c68ec74b%3A0xa77ae65e3a50c119!2sAm+M%C3%BChlacker+4%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363288036')
    break;
    case 'Zidane':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.402569612392!2d9.497605951266285!3d49.757113444858106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2af838f110347%3A0x32fb0ed5c9d2dd3d!2sBerliner+Ring+159%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363426572')
    break;
    case 'Buffon':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4532.184474959318!2d9.4976945850261!3d49.755744556734356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2af81a86e4c71%3A0x5f138a720c02a88c!2sAm+Reinhardshof+53%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363523156')
    break;
    case 'Rooney':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.370206669948!2d9.497075951266279!3d49.757673444818224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2af847f0d4001%3A0xaf050a61a61e8a1!2sBerliner+Ring+165%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363595087')
    break;
    case 'Drogba':
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.370206669948!2d9.497075951266279!3d49.757673444818224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2af847f0d4001%3A0xaf050a61a61e8a1!2sBerliner+Ring+165%2C+97877+Wertheim!5e1!3m2!1sen!2sde!4v1542363595087')
    break;
    default:
      $(".karte-iframe iframe").prop('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79970.97652341181!2d9.439070949138149!3d49.74331983190482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a2a57944d74753%3A0xcb6679b81c015cf!2s97877+Wertheim+am+Main!5e0!3m2!1sen!2sde!4v1542358462244')
  }

});
