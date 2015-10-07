    $(document).ready(function() {
     
      //прокрутка вверх плавная
       $("a.totop").click(function() {
          $("html, body").animate({
             scrollTop: $($(this).attr("href")).offset().top + "px"
          }, {
             duration: 1000,
             easing: "swing"
          });
          return false;
       });
     
     
    });