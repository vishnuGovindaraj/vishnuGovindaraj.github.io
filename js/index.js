/*

$("a[href$='ContactButton']").click(function() {
  $("html, body").animate({
    scrollTop: $("#Contact").offset().top - 150
  }, 1000);
  return true;
});
$("a[href$='PortfolioButton']").click(function() {
  $("html, body").animate({
    scrollTop: $("#Portfolio").offset().top - 150
  }, 1000);
  return true;
});
$("a[href$='AboutMeButton']").click(function() {
  $("html, body").animate({
    scrollTop: $("#AboutMe").offset().top - 150
  }, 1000);
  return true;
});


//collapsable menu
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
*/
module.exports = function(width, height){
  return width * height;
};
