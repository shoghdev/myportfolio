$(document).ready(function () {
    $(window).scroll(function rotateScenes(){
        let scroll = $(window).scrollTop(),
            relPos = scroll / height,
            angle = 90 * relPos;
            

        if(scroll >= height){
          section1.css({
            "transform" : "rotateX(90deg)",
            "display" : "none"
          });
          let cont = section2.css({
            "transform" : "rotateX(0deg)",
          });

          if(cont) {
            $("header").css({
              "display" : "block"
            })
            $("footer").css({
              "display" : "block"
            })
          }
        } else {
          section1.css({
            "display" : "block"
          });
          $("header").css({
            "display" : "none"
          })
          $("footer").css({
            "display" : "none"
          })
        }
        
        section1.css("transform" , "rotateX(" + (angle) + "deg)");
        section2.css("transform" , "rotateX(-" + (90 - angle) + "deg)");
      })
      
      let section1 = $("#top"),
          section2 = $("#content"),
          height = $(window).height();
    
});