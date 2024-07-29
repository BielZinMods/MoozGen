

console.log('MSG: OK 00')

function downAnimation() {
  console.log("Função chamada down");
  var loading = document.getElementById("open");
  var loading2 = document.getElementById("fora");
  var openOrFechar = document.getElementById("open");
  var login = document.getElementById("login-container");
  openOrFechar.style.animation = "down 1s";

  setTimeout(function () {
    loading2.style.opacity = "0";
    loading.style.display = "none";
    login.style.display = "";
    loading.style.opacity = "0";
    openOrFechar.style.animation = "";
    loading.classList.add("on");
  }, 1000);
}

function openAnimation() {
  var login = document.getElementById("login-container");
  login.style.display = "none";
  var loading = document.getElementById("open");
  var loading2 = document.getElementById("fora");
  loading2.style.opacity = "";
  loading.style.display = "";
  loading.style.opacity = "";

  if (loading.classList.contains("on")) {
    let fora = document.getElementById("fora");
    fora.style.display = "none";

    let box = document.getElementById("boxes");
    box.style.display = "block";

    let random = Math.floor(Math.random() * (51 - 0)) + 0;

    setTimeout(function () {
      // console.log('random:' + random);
      // console.log('tem')
    }, 800);

    setTimeout(downAnimation, 1800);
  } else {
    let random = Math.floor(Math.random() * (51 - 0)) + 0;

    setTimeout(function () {
      //  console.log('random:' + random);
      let loading = document.getElementById("54845");
      loading.style.width = "400px";
      //  console.log('nao tem')
    }, 800);
    setTimeout(downAnimation, 1800);
  }
}

function B4ZKKJ() {
  setTimeout(function () {
    //  console.log('funf')
    openAnimation();
  }, 1500);
}

var openOrFechar = document.getElementById("open");
openOrFechar.addEventListener("animationstart", openAnimation);

function moverElemento(event) {
  const mouseX = event.clientX;
  const mouseY = event.clientY;
  // console.log('X ' + mouseX + ', Y ' + mouseY);

  let bola = document.getElementById("canvas");
  bola.style.top = mouseY + "px";
  bola.style.left = mouseX + "px";
}

document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("mousemove", moverElemento);
});




console.log('MSG: OK')