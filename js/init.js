(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function () {
  // console.log($(document).find("title").text());
  var title = $(document).find("title").text().split("::");
  console.log(title[1]);
  if (title[1]=='cart'){
    removeCls();
    $('nav ul li.cart').addClass('active');
  } else if(title[1]=='women'){
    removeCls();
    $('nav ul li.women').addClass('active');
  } else if (title[1]=='men'){
    removeCls();
    $('nav ul li.men').addClass('active');
  }else if (title[1]=='about us'){
    removeCls();
    $('nav ul li.about').addClass('active');
  }else if (title[1]=='contact'){
    removeCls();
    $('nav ul li.contact').addClass('active');
  }else{
    removeCls();
    $('nav ul li.home').addClass('active');
  }

  function removeCls() {
    if($('nav ul li').hasClass('active')) {
      $('nav ul li').removeClass('active');
    }
  }
});