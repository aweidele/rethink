var $ = jQuery;
$(document).ready(function() {
  $(".menu_toggle").on("click",function() {
    $(this).toggleClass("expanded");
  });
});
