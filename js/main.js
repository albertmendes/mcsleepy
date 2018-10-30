(function() {
  'use strict';


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
      $(".debug").html(window.innerWidth);
    });

    /* Fade in items */
    $(".fade-in").each(function(b) {
      $(this).delay(344 * b).animate({
        opacity: 1,
        left: 0
      },800);
    });

    /* Animation  */
    function doAnimation(device) {
      var left;
      var top;
      switch(device) {
        case 'tablet':
          left = ["124px", "124px", "240px", "10px"];
          top = "0px";
          break;
        default:
          left = ["124px", "124px", "240px", "10px"];
      }
      setTimeout(function() {
        $(".comb-logo").animate({
          left: left[0],
          top: "0",
          opacity: 1
        },1000);
        $(".comb-logo").addClass("anim");
      },500);

      setTimeout(function() {
        $(".comb-phone").animate({
          left: left[1],
          top: "130px",
          opacity: 1,
        },1000);
        $(".comb-phone").addClass("anim");
      },700);

      setTimeout(function() {
        $(".comb-price").animate({
          left: left[2],
          top: "63px",
          opacity: 1,
        },1000);
        $(".comb-price").addClass("anim");
      },900);
      setTimeout(function() {
        $(".comb-bed").animate({
          left: left[3],
          top: "195px",
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
          top = "0px";
          break;
        case 'mobile':
          left = ["94px", "94px", "210px", "-20px"];
          break;
        default:
          left = ["144px", "144px", "260px", "30px"];
      }
      $(".comb-logo").css({
        left: left[0],
        top: "0",
        opacity: 1
      });
      $(".comb-phone").css({
        left: left[1],
        top: "130px",
        opacity: 1,
      });
      $(".comb-price").css({
        left: left[2],
        top: "63px",
        opacity: 1,
      });
      $(".comb-bed").css({
        left: left[3],
        top: "195px",
        opacity: 1,
      });
    }

    if(document.cookie.split(';').filter(function(item) {
      return item.indexOf('animation') >= 0;
    }).length) {
      console.log(window.innerWidth);
      if(window.innerWidth <= 425) {
        showCombs('mobile');
      }
      else if(window.innerWidth > 425 && window.innerWidth <= 768) {
        showCombs('tablet');
      }
      else {
        showCombs();
      }

    }
    else {
      doAnimation();
    }
    /* Animation END */

    /* Set cookie for animation */
    var d = new Date();
    var time = d.getTime();
    time += 3600 * 1000; // One hour
    d.setTime(time);
    document.cookie = 'animation=done;expires=' + d.toUTCString() + '; path=/';

    console.log(document.cookie);


    $(window).scroll(function() {
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
    });

  });

})();
