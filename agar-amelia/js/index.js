var cultureTag = document.getElementById('#culture');
var cultureImages = document.getElementById('#cultureImages')


// when hover on var cultureTag, append var cultureImages css. make it display:initial;//




document.getElementById("culture").onmouseover = function() {mouseOver()};
document.getElementById("culture").onmouseout = function() {mouseOut()};

function mouseOver() {
  document.getElementById("cultureImages").style.display = "initial";
}

function mouseOut() {
  document.getElementById("cultureImages").style.display = "none";
}