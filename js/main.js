(function() {
  'use strict';


  $(document).ready(function() {

    var naviAnim = 0;

    /* Compute heights */

    function computeHeights() {
      var itemLeftHeight = $(".overview-item-left img").height();
      $(".overview-item-right").animate({"height": itemLeftHeight},500);
    }
    computeHeights();

    $(window).on("resize", function() {
      computeHeights();
    });

    /* Fade in items */
    $(".fade-in").each(function(b) {
      $(this).delay(344 * b).animate({
        opacity: 1,
        left: 0
      },800);
    });

    /* Animation  */
    function doAnimation() {
      setTimeout(function() {
        $(".comb-logo").animate({
          left: "344px",
          top: "0",
          opacity: 1
        },1000);
        $(".comb-logo").addClass("anim");
      },500);

      setTimeout(function() {
        $(".comb-phone").animate({
          left: "344px",
          top: "130px",
          opacity: 1,
        },1000);
        $(".comb-phone").addClass("anim");
      },700);

      setTimeout(function() {
        $(".comb-price").animate({
          left: "460px",
          top: "63px",
          opacity: 1,
        },1000);
        $(".comb-price").addClass("anim");
      },900);
      setTimeout(function() {
        $(".comb-bed").animate({
          left: "230px",
          top: "195px",
          opacity: 1,
        },1000);
        $(".comb-bed").addClass("anim");
      },900)
    }

    function showCombs() {
      $(".comb-logo").css({
        left: "344px",
        top: "0",
        opacity: 1
      });
      $(".comb-phone").css({
        left: "344px",
        top: "130px",
        opacity: 1,
      });
      $(".comb-price").css({
        left: "460px",
        top: "63px",
        opacity: 1,
      });
      $(".comb-bed").css({
        left: "230px",
        top: "195px",
        opacity: 1,
      });
    }

    if(document.cookie.split(';').filter(function(item) {
      return item.indexOf('animation') >= 0
    }).length) {
      showCombs();
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
