
function moveMask() {
  TweenMax.set("#theSquare", {attr: {x: this.x - 950}});
}
//  regarder sur le HTML pour savoir 'button onclick = 'openNav'
function openNav(){
  document.getElementById("nav").style.width = "120vw";
  document.body.style.transform = 'translate(30w)';
  document.body.style.backgroundColor = '';
}
// idem
function closeNav(){
  document.getElementById("nav").style.width = "0";
  document.body.style.transform = 'translate(0)';
  document.body.style.backgroundColor = '';
}

