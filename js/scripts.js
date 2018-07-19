var $ = jQuery;
$(document).ready(function() {
  $(".menu_toggle").on("click",function() {
    $(this).toggleClass("expanded");
  });

  if($(".background_image").length) {
    $backgrounds = $(".background_image").data("background");
    $bgbp = "lg";
  }
  windowResize();
  $(window).resize(function() { windowResize(); });
});

function windowResize() {
  $w = $(window).width();

  if($w < 425) {
    $bp = "sm";
  } else {
    $bp = "lg";
  }

  if($(".background_image").length) {
    checkBackground();
  }
}

function checkBackground() {
  if($bgbp != $bp) {
    $bgbp = $bp;
    setBackground();
  }
}

function setBackground() {
  if($bgbp == "sm") {
    $(".background_image").css("background-image","url("+$backgrounds.mobile+")");
  } else {
    $(".background_image").css("background-image","url("+$backgrounds.full+")");
  }
}
