(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready



  // function setactive(setActive) {
  //   // if (title[1] == setActive) {
  //   if ($(".hide-on-med-and-down li").hasClass("active")) {
  //     $(".hide-on-med-and-down li").removeClass("active");
  //     console.log("===> "+setActive);
  //   }
  //     if(setActive) {
  //      $("." + setActive).addClass("active");
  //     }
  //   // }
  // }
  //
  // $(function(){
  //   $(".hide-on-med-and-down a").click(function () {
  //    setactive(this.id);
  //   });
  //});
})(jQuery); // end of jQuery name space

$(document).ready(function () {
  var title = $(document).find("title").text().split("::");
  console.log(title[1]);

  function setActiveLink(setActive){
    console.log('====x> '+setActive);
    if ($("nav ul li").hasClass('active')) {
      $("nav ul li").removeClass('active');
    }

    if (setActive)
      $("nav ul li."+ setActive).addClass('active');
    console.log("." + setActive);
    //   $(".hide-on-med-and-down li ."+setActive).addClass('active');
  }

  $(function() {
    $("a").click(function() {
      setActiveLink(this.id);
    });
  });
})