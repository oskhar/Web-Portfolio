
var bkk = 0;
var tgNav = 600;
var tBtn2 = 1200;
if (window.innerWidth < 1250) {
    tgNav = 400;
    tBtn2 = 2050;
}
window.onscroll = function() {myFunction()};

function hover1(arg, arg1) {
    if (arg == 0) {
        document.getElementById('hover'+arg1).style.animation = "none";

    }else{
        document.getElementById('hover'+arg1).style.animation = "lebar 600ms forwards";
    }
}
function myFunction() { 
    if (window.pageYOffset > tgNav){
        document.getElementById('navbarContent').style.position = "fixed";
        document.getElementById('navbarContent').style.animation = "bukaNavbar 1.5s forwards";
    }else{
        document.getElementById('navbarContent').style.position = "absolute";
        document.getElementById('navbarContent').style.animation = "none";

    }
    if (window.pageYOffset > 300){
        // document.getElementById('about').style.animation = "keluar 2s forwards";
        // document.getElementById('skill').style.animation = "muncul 1500ms forwards";
        // document.getElementById('skill').style.animationDelay = "2s";
    }
}

// 100% = 360, Python 40 * 360/100, PHP 18 * 360/100, JavaScript 20 * 360/100, C++ 17 * 360/100, Java 5 * 360/100
var canvas = document.getElementById("can");
var ctx = canvas.getContext("2d");
var lastend = 0;
var data = [64.8, 126, 43.2, 108, 18];
var myTotal = 0;
var myColor = ['#0a0', '#1b458b', '#a04', '#f80', '#08f'];
var labels = ['18%', '35%', '12%', '30%', '5%'];

for(var e = 0; e < data.length; e++)
{
  myTotal += data[e];
}

var off = 10
var w = (canvas.width - off) / 2
var h = (canvas.height - off) / 2
for (var i = 0; i < data.length; i++) {
  ctx.fillStyle = myColor[i];
  ctx.strokeStyle ='white';
  ctx.lineWidth = 2;
  ctx.beginPath();
  ctx.moveTo(w,h);
  var len =  (data[i]/myTotal) * 2 * Math.PI
  var r = h - off / 2
  ctx.arc(w , h, r, lastend,lastend + len,false);
  ctx.lineTo(w,h);
  ctx.fill();
  ctx.stroke();
  ctx.fillStyle ='white';
  ctx.font = "12px Arial";
  ctx.textAlign = "center";
  ctx.textBaseline = "middle";
  var mid = lastend + len / 2
  ctx.fillText(labels[i],w + Math.cos(mid) * (r/2) , h + Math.sin(mid) * (r/2));
  lastend += Math.PI*2*(data[i]/myTotal);
}

var posisi = 0;
var listTombol = ["tombol1", "tombol2", "tombol3", "tombol4", "tombol5", "tombol6"];

function kanan(arg) {
    window.clearInterval(game);
    game = setInterval(autoKanan,17000);
    for (var i = listTombol.length - 1; i >= 0; i--) {
        document.getElementById(listTombol[i]).style.zIndex = "55";
        document.getElementById(listTombol[i]).style.animation = "keluarKanan 10s forwards";
      // setTimeout(function(){
        document.getElementById("hilang"+(i+1)).style.animation = "lenyap 3s forwards";
        document.getElementById("penanda"+(i+1)).style.background = "black";
        // document.getElementById("hilang"+(i+1)).style.animationDelay = "3s";
      // },3000);
    }
    document.getElementById(listTombol[arg]).style.zIndex = "56";
    if (arg == (listTombol.length-1)) {
        arg = -1;
        posisi = -1;
    }
    document.getElementById(listTombol[arg+1]).style.animation = "keKanan 1200ms forwards";
    document.getElementById(listTombol[arg+1]).style.zIndex = "60";
    document.getElementById("hilang"+(arg+2)).style.animation = "muncul 1000ms forwards";
    document.getElementById("penanda"+(arg+2)).style.background = "white";
    document.getElementById("hilang"+(arg+2)).style.animationDelay = "1200ms";
    posisi += 1;
}

function autoKanan(){

    kanan(posisi)
    for (var i = 4; i > 0; i--) {
      setTimeout(function(){

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if ( xhr.readyState == 4 && xhr.status == 200 ) {
                    document.getElementById("kumpulanKomen").innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET','komen.php',true);
            xhr.send();

        document.getElementById("hilang"+(i+1)).style.animationDelay = "3s";
      },2000*i);
    }
}
let game = setInterval(autoKanan,17000);

function kiri(arg) {
    window.clearInterval(game);
    game = setInterval(autoKanan,17000);
    for (var i = listTombol.length - 1; i >= 0; i--) {
        document.getElementById(listTombol[i]).style.zIndex = "55";
        document.getElementById(listTombol[i]).style.animation = "keluarKiri 10s forwards";
      // setTimeout(function(){
        document.getElementById("hilang"+(i+1)).style.animation = "lenyap 3s forwards";
        document.getElementById("penanda"+(i+1)).style.background = "black";
        // document.getElementById("hilang"+(i+1)).style.animationDelay = "3s";
      // },3000);
    }
    document.getElementById(listTombol[arg]).style.zIndex = "56";
    if (arg == 0) {
        arg = (listTombol.length);
        posisi = (listTombol.length);
    }
    document.getElementById(listTombol[arg-1]).style.animation = "keKiri 1200ms forwards";
    document.getElementById(listTombol[arg-1]).style.zIndex = "60";
    document.getElementById("hilang"+(arg)).style.animation = "muncul 1000ms forwards";
    document.getElementById("penanda"+(arg)).style.background = "white";
    document.getElementById("hilang"+(arg)).style.animationDelay = "1200ms";
    posisi -= 1;
}

function scrollWin(objc1,objc2,objc3,objc4) {
 // for(var i = 0;i < 500; i++){
  if (objc1 < objc2) {
      objc1 = objc1 + 1;
  }else if (objc1 > objc2) {
      objc1 = objc1 - 1;
  }else if (objc1 == objc2){
      return;
  }
  objc3 = objc3 + objc4;
  setTimeout(function(){
   window.scrollTo(0,objc1);
  },objc3);
 // }
 if (objc1 != objc2) {
     scrollWin(objc1,objc2,objc3,objc4);
 }
}


// var int=self.setInterval(showComments,2000);
// function showComments() {
//     $.post( "ajax_comments.php", function( data ) {
//       $("#comments").html( data );
//     });

    // }
// }
function komen() {
    var xhr2 = new XMLHttpRequest();
    var param = "pesan="+ document.getElementById("masukKomen").value + "&ip=" + document.getElementById("ipAnda").innerHTML;
    xhr2.open('POST','kirim.php',true);
    xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr2.send(param);
    document.getElementById("masukKomen").value = "";
}
function hapus(i) {
    var sandiAkses = prompt("Masukan PASSWORD untuk mendapat AKSES:");
    var xhr3 = new XMLHttpRequest();
    // xhr3.onreadystatechange = function(){
    //     if ( xhr3.readyState == 4 && xhr3.status == 200 ) {
    //         document.getElementById("kumpulanKomen").innerHTML = xhr3.responseText;
    //     }
    // }
    var param = "komen="+ document.getElementById("listKomen"+i).innerHTML + "&sandiAkses=" + sandiAkses;
    xhr3.open('POST','hapus.php',true);
    xhr3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr3.send(param);
}
window.addEventListener("load", function () {
    document.getElementById("loader").innerHTML = "";
    document.getElementById("loader").parentNode.removeChild(document.getElementById("loader"));
    document.getElementById("foto").style.animation = "bukaFoto 2000ms forwards";
    document.getElementById("img").style.animation = "muncul 2000ms forwards";
    document.getElementById("img").style.animationDelay = "2200ms";
});
