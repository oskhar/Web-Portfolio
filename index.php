<?php
// if (!isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'on') {
//     header("Location: https://moskhar.my.id/portfolio");
// }

$conn = mysqli_connect("localhost", "moskharm_user", "g8N7a6O5d4S3e2T1", "moskharm_oskhar");
// g8N7a6O5d4S3e2T1
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function getIPAddress() {  
 if(isset($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
 }  elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
 }  else{  
         $ip = $_SERVER['REMOTE_ADDR'];  
 }  
 return $ip;  
}  
$ip = getIPAddress();  
$result = mysqli_query($conn, "SELECT * FROM viewers");
$vlu = 0;
while ( $dataToken = mysqli_fetch_assoc($result) ) {
    $vlu += 1;
}

$conn = mysqli_connect("localhost", "moskharm_user", "g8N7a6O5d4S3e2T1", "moskharm_oskhar");
$query = "INSERT INTO viewers
    VALUES
    ('$ip')";
mysqli_query($conn,$query);
$vlu += 1;

$conn2 = mysqli_connect("localhost", "moskharm_user", "g8N7a6O5d4S3e2T1", "moskharm_oskhar");
$result2 = mysqli_query($conn2, "SELECT * FROM dataKomentar");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"><link href="pp.webp" alt="iniGambar" rel="icon" type="image/x-icon">
    <title>Mos Khar Official</title>
    <meta property="og:description" content="[Web Portfolio] Web Portofolio muhamad oskhar mubarok, calon Programmer">
    <meta property="og:image" content="pp.webp" alt="iniGambar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
        Author: Muhamad Oskhar Mubarok,
        Category: Web Portfolio,
        Date: December 2020,
        Purpose: Training;
    ">
</head>

<style type="text/css">@import url('https://fonts.googleapis.com/css?family=Kanit:800');@import url('https://fonts.googleapis.com/css?family=Nunito');@import url('https://fonts.googleapis.com/css?family=Baloo Bhaijaan 2');
body{
    height: auto;
    z-index: -11;
    background: white;
}#latar{
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    overflow: hidden;
    height: auto;
}#back{background: /*#00#af98*/ /*#006d5e*//*#0090e7*/#191c24;
    width: 100%;
    height: 600px;
    position: relative;
    left: 0;
    top: 0;
    box-shadow: 0 10px 10px rgb(0, 0, 0,0.6);
}#salam{
    color: white;
    font: bold 52px "Kanit", sans-serif;
    text-shadow: 1px 1px #0090e7,1px 2px #0090e7,1px 3px #0090e7,1px 4px #0090e7,1px 5px #0090e7,3px 7px 7px rgb(0,0,0,0.6);
    position: absolute;
    left: 200px;
    top: 280px;
    white-space: pre;
    line-height: 52px;
}#foto{
    height: 350px;
    width: 270px;
    background: white;
    position: absolute;
    top: 150px;
    right: 150px;
    border-radius: 5px;
    box-shadow: 
    0px 0px 2px rgb(0,0,0,0.4),25px 25px #0090e7,32px 32px 14px rgb(0,0,0,0.4);
}#img{
    height: 310px;
    width: 230px;
    left: 20px;
    top: 20px;
    background: url("Pfoto1.webp");
    background-position: top;
    background-size: cover;
    position: absolute;
    border-radius: 3px;
    opacity: 0;
}#navbar{
    background: transparent;
    height: 60px;
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 600px;
    z-index: 99;
}#navbarContent{
    background: #0090e7;
    height: 0px;
    width: 0%;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 0px;
    z-index: 100;
    /*animation: bukaNavbar 3s forwards;
    */
}#navbarPlus button{
    position: relative;
    margin-right: 15px;
    border: none;
    background: transparent;
    color: white;
    z-index: 101;
    justify-items: center;
    text-align: center;
    align-items: center;
    height: 40px;
    font-size: 20px;
}
@KeyFrames fontAnimation{
    0%{top: 0;}
    5%{top: -10px;}
    10%{top: 0;}
    100%{top: 0;}
}
@KeyFrames bukaFoto{
    0%{
        width: 0;
        height: 10px;
        border-radius: 0;
        top: 325px;
        right: 285px;
    }
    40%{
        width: 270px;
        height: 10px;
        border-radius: 0;
        top: 325px;
        right: 150px;
    }
    41%{
        border-radius: 270px;
    }
    90%{
        border-radius: 30px;
    }
    100%{
        border-radius: 5px;
        width: 270;
        height: 350px;
        top: 150px;
        right: 150px;
    }
}
@KeyFrames muncul{
    to{opacity: 1;}
}
@KeyFrames lenyap{
    to{opacity: 0;}
}
@KeyFrames bukaNavbar{
    0%{
        height: 0;
        width: 10px;
        border-radius: 0;
    }
    20%{
        height: 60px;
        width: 10px;
        border-radius: 0;
    }
    21%{
        border-radius: 50px;
    }
    90%{
        border-radius: 20px;
    }
    100%{
        height: 60px;
        width: 100%;
        border-radius: 0;
    }
}
@KeyFrames lebar{
    to{width: 100%;}
}@KeyFrames keluar{
    0%{
        top: 200px;
        border-bottom: 50px solid #0090e7;
    }
    100%{
        top: 700px;
        /*box-shadow: none;*/
        border-bottom: 0px solid #0090e7;
    }
}
@KeyFrames keKanan{
    0%{left: 100%;}
    100%{left: 0%;}
}
@KeyFrames keKiri{
    0%{left: -100%;}
    100%{left: 0%;}
}
@KeyFrames keluarKanan{
    0%{left: 0%;}
    100%{left: -100%;}
}
@KeyFrames keluarKiri{
    0%{left: 0%;}
    100%{left: 100%;}
}
@keyframes pembesarBulat{
    0%{
        width: 0;
        height: 0;
        border-bottom-left-radius: 1000px;
    }
    100%{
        width: 100%;
        height: 100%;
        border-bottom-left-radius: 10%;
    }
}
@keyframes pengecilbulat{
    0%{
        width: 100%;
        height: 100%;
        border-bottom-left-radius: 100px;
    }
    100%{
        width: 0;
        height: 0;
        border-bottom-left-radius: 1000px;
    }
}
#buttonNavbar {
    position: absolute;
    right: 0;
    top: 10px;
}
#hover1,#hover2,#hover3,#hover4{
    height: 4px;
    width: 0;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    bottom: 0;
    background: white;
}
#navbarPlus{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    z-index: 100;
}
#navbarPlus h2{
    color: white;
    font-family: Kanit, sans-serif;
    font-weight: 100;
    left: 20px;
    top: -10px;
    position: absolute;
    text-shadow: 1px 1px #0090e7,2px 3px 3px rgb(0,0,0,0.6);
    font-size: 26px;
}
#about,#skill{
    position: absolute;
    top: 700px;
    left: 0;
    right: 0;
    margin: auto;
    width: 1000px;
    height: 500px;
    border-radius: 5px;
    z-index: 61;
    overflow: hidden;
    box-shadow: 0px 0px 12px rgb(0, 0, 0, 0.6);
    /*border-bottom: 50px solid #0090e7;
    */
    background: white;
}
#isiAbout, #isiSkill{
    position: relative;
    left: 100px;
    top: 50px;
    width: 400px;
    height: 400px;
}
#about h2,#skill h2{
    font-family: Nunito, sans-serif;
    margin-top: 50px;
    text-align: left;
    color: #191c24;
    line-height: 10px;
    font-size: 46px;
    font-weight: bold;
    width:1000px;
}
#about p,#skill p{
    font-family: "Baloo Bhaijaan 2", arial;
    color: #606060;
    font-size: 17px;
    font-weight: normal;
    line-height: 20px;
}
#isiCorak1,#isiCorak2,#isiCorak3{
    position: absolute;
    background: black;
    z-index: -2;
}
#imgAbout{
    height: 150px;
    width: 150px;
    position: absolute;
    background: #0090e7;
    right: 100px;
    top: 130px;
    border-radius: 50%;
    z-index: 2;
}
#imgAbout::after{
    content: '';
    height: 100%;
    width: 100%;
    position: absolute;
    background: url('Pfoto2.webp');
    background-size: 100% 100%;
    left: -30px;
    top: -20px;
    border-radius: 50%;
    border: 3px solid white;
}
#contactCenter{
    position: relative;
    margin-top: 100px;
    height: auto;
    width: auto;
}.btn{
    position: relative;
    background: #0090e7;
    display: inline;
    height: 34px;
    width: 34px;
    border: none;
    margin-left: 15px;
    border-radius: 3px;
}.btn:hover{
    background: #191c24;
}
#contactCenter button img{
    position: absolute;
    left: 7px;
    top: 7px;
    height: 20px;
    width: 20px;
}
#contactCenter button p{
    font-size: 20px;
    font-weight: bold;
    top: -3px;
    left: 12px;
    position: absolute;
    line-height: 0px;
    color: white;
    font-family: sans-serif;
}
#contactCenter #contactButton1{
    margin-left: 0px;
}
#skill{
    position: absolute;
    top: 1300px;
    height: 700px;
    width: 100%;
    border-bottom: none;
    opacity: 1;
    box-shadow: 0px 2px 2px rgb(0, 0, 0, 0.5);
    border-radius: 0;
    background: #191c24;
}
#isiSkill{
    top: 0;
    margin-top: 30px;
    display: inline-block;
    color: white;
}
#skill h2{
    font-family: sans-serif;
    margin-top: 120px;
    /*margin: auto;*/
    text-align: center;
    line-height: 0;
    color: white;
    width:100%;
}.pnnd h3 div{
    position: relative;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    display: inline-block;
    color: white;
}
#skill p{
    color: white;
}
#l1{
    position: absolute;
    right: 200px;
    top: 170px;
    height: auto;
    width: auto;
    color: white;
}.pnnd{
    position: relative;
    display: block;
    font-family: sans-serif;
    font-size: 12px;
    color: white;
    margin-top: 35px;
}
#pnnd h3{
    /*display: inline;*/
    position: relative;
}
#python h3 div{
    background: #1b458b;
}
#javascript h3 div{
    background: #f80;
}
#php h3 div{
    background: #0a0;
}
#cpp h3 div{
    background: #a04;
}
#java h3 div{
    background: #08f;
}
#can{
    position: absolute;
    left: 650px;
    top: 290px;
    height: 220px;
    width: 220px;
}
#namaGrafik{
    height: auto;
    width: 220px;
    position: absolute;
    font-family: arial;
    font-size: 16px;
    font-weight: bold;
    left: 650px;
    top: 230px;
    color: white;
}
#myProject{
    height: 40px;
    width: 170px;
    position: absolute;
    font-family: sans-serif;
    font-size: 24px;
    color: white;
    bottom: 0px;
    right: 50px;
    background: #0090e7;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    text-align: center;
    padding-top: 20px;
}
#tombol{
    height: 640px;
    width: 100%;
    position: absolute;
    /*overflow: hidden;
    */
    top: 2000px;
    left: 0;
    right: 0;
    margin: auto;
    background: transparent;
    /*z-index: -10;
    */
}
#tombol #tombol1, #tombol #tombol2, #tombol #tombol3, #tombol #tombol4, #tombol #tombol5, #tombol #tombol6{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    background: white;
    box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.5);
    border-radius: 3px;
    /*z-index: 55;
    */
}
#tombol #tombol1{
    background: url('back6.webp');
    background-size: cover;
    left: 100%;
    animation: keKanan 0s forwards;
}
#tombol h2{
    position: relative;
    font-size: 40px;
    font-family: "Baloo Bhaijaan 2",sans-serif;
    font-weight: bold;
    color: #191c24;
    margin-left: 820px;
    margin-top: 130px;
    line-height: 25px;
    width: 400px;
}
#tombol p{
    font-size: 17px;
    line-height: 22px;
    font-family: "Baloo Bhaijaan 2";
    color: #505050;
    width: 420px;
    margin-left: 820px;
    margin-top: -5px;
}
#tombol h3{
    font-size: 14px;
    position: absolute;
    right: 50px;
    bottom: 20px;
    font-family: sans-serif;
}
#tombol img{
    height: 360px;
    width: auto;
    position: absolute;
    top: 120px;
    left: 120px;
    border-radius: 5px;
    border: 5px solid #0c0c0d;
}
#tombol h3 img{
    height: 15px;
    width: 13px;
    border-radius: 0;
    position: relative;
    display: inline;
    border: none;
    top: 3px;
    left: 0;
}
#btnTombol1{
    height: 40px;
    width: auto;
    padding-left: 20px;
    padding-right: 20px;
    position: absolute;
    top: 440px;
    left: 820px;
    border: none;
    border-radius: 5px;
    background: #0090e7;
    font-size: 16px;
    font-weight: bold;
    color: white;
}
#tombol4 #btnTombol1{
    left: 120px;
}
#tombol4 #btnTombol1,#tombol3 #btnTombol1{
    top: 420px;
}
#tombol #tombol2, #tombol #tombol4{
    background: url('back2.webp');
    background-size: cover;
    left: 100%;
    /*animation: keKanan 3s forwards;
    */
}
#tombol2 h2, #tombol4 h2{
    margin-left: 120px;
    margin-top: 160px;
    line-height: 40px;
}
#tombol2 p, #tombol4 p{
    margin-left: 120px;
    margin-top: -5px;
}
#tombol2 h3, #tombol4 h3{
    right: 0;
    left: 50px;
    font-family: sans-serif;
}
#tombol2 img, #tombol4 img{
    left: 580px;
    border-color:#1c1c25;
}
#tombol5 h2{
    margin-left: 200px;
    margin-top: 120px;
    line-height: 40px;
    color: white;
}
#tombol5 p{
    width: 700px;
    margin-left: 200px;
    margin-top: -5px;
    color: white;
    font-size: 18px;
    white-space: pre-wrap;
}
#tombol5 img{
    left: 580px;
    border-color:#1c1c25;
}
#tombol #tombol3{
    background: url('back1.webp');
    background-size: cover;
    left: 100%;
    /*animation: keluarKanan 0s forwards;
    */
}
#tombol #tombol4{
    background: url('back2.webp');
    background-size: cover;
    left: 100%;
    /*animation: keluarKanan 0s forwards;
    */
}
#tombol #tombol5{
    background: url('back4.webp');
    background-size: cover;
    z-index: 60;
    left: 100%;
    /*animation: keKanan 0s forwards;
    */
    animation: keluarKanan 0s forwards;
}
#tombol #tombol6{
    background: url('back2.webp');
    background-size: cover;
    z-index: 60;
    left: 100%;
    /*animation: keKanan 0s forwards;
    */
    animation: keluarKanan 0s forwards;
}
#hilang1,#hilang2,#hilang3,#hilang4,#hilang5{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: transparent;
    opacity: 0;
    background: rgb(255, 255, 255, 0.3);
}
#hilang1{
    animation: muncul 0s forwards;
}
#hilang5{
    background: rgb(0, 0, 0, 0.5);
    animation: muncul 0s forwards;
}
#kanan,#kiri{
    height: auto;
    width: auto;
    background: transparent;
    font-family: Kanit;
    font-size: 65px;
    color: #0090e7;
    position: absolute;
    top: 230px;
    border: none;
    /*font-weight: bold;
    */
    z-index: 70;
}
#kanan{
    right: 20px;
}
#kiri{
    left: 20px;
}
#penanda{
    position: absolute;
    height: 20px;
    width: 155px;
    bottom: 30px;
    left: 0;
    right: 0;
    margin: auto;
    background: transparent;
    z-index: 70;
}
#penanda div{
    position: relative;
    display: inline-block;
    top: 0;
    margin-left: 10px;
    height: 9px;
    width: 9px;
    background: black;
    border-radius: 50%;
    border: 3px solid black;
}
#penanda #penanda1{
    background: /*#0090e7*/white;
}
#penutup{
    position: relative;
    margin-top: 2040px;
    height: 1000px;
    width: 100%;
    background: #191c24;
}
#penutup *,#isiContact *{
  display: block;
}
#penutup p,#isiContact p{
  font-family: sans-serif;
  font-weight: bold;
  color: white;
  width: 80%;
  margin: auto;
  margin-top: 20px;
  font-size: 16px;
  text-align: center;
}
#penutup p *, #isiContact p *{
  display: inline;
  position: relative;
}
#penutup p #l{
  width: 14px;
  height: 14px;
}
#penutup p #e, #isiContact #e{
  width: 16px;
  height: 16px;
  top: 2px;
  display: inline-block;
}
#logo{
    position: relative;
    text-align: center;
    width: 100px;
    height: auto;
    margin: auto;
    left: 9px;
    padding-top: 600px;
    text-shadow: 1px 1px #0090e7,1px 2px #0090e7,1px 3px #0090e7,3px 6px 6px rgb(0,0,0,0.5);
    color: white;
    font-family: sans-serif;
    font-size: 50px;
    font-weight: bold;
}
#isiCorak1{
    top: 600px;
    height: 600px;
    width: 600px;
    right: 0;
    /*background: linear-gradient(to right,#28fe86,#0090e7#28fe86,#2eceff,#a75eeb);
    */
    background: #191c24;
    clip-path: polygon(2% 0, 6% 5%, 10% 11%, 14% 18%, 18% 24%, 23% 29%, 28% 32%, 34% 33%, 41% 32%, 48% 29%, 54% 25%, 61% 21%, 67% 19%, 77% 17%, 86% 16%, 93% 16%, 100% 16%, 100% 0);
}
#isiCorak2{
    top: 900px;
    height: 800px;
    width: 800px;
    left: 0;
    /*background: linear-gradient(#28fe86,#2eceff,#a75eeb,#a75eeb);
    */
    background: #191c24;
    clip-path: polygon(0 0, 3% 7%, 7% 14%, 11% 20%, 15% 26%, 19% 32%, 22% 39%, 23% 48%, 23% 57%, 21.5% 66%, 18% 76%, 15% 82%, 10% 88%, 5% 92%, 0 95%);
}
#isiCorak3{
    top: 1100px;
    height: 600px;
    width: 600px;
    border-radius: 50%;
    right: -300px;
    /*background: linear-gradient(to right, #28fe86,#2eceff,#a75eeb,#a75eeb);
    */
    background: #191c24;
}
#isiMynotes,#isiContact{
    height: 0;
    width: 0;
    position: fixed;
    top: 0;
    right: 0;
    overflow: hidden;
    background: #0080ca;
    z-index: 110;
}
#pMyNotes1{
    top: 30%;
    position: absolute;
    left: 0;
    width: 100%;
    height: auto;
}
#isiMynotes p{
    width: 80%;
    font-family: sans-serif;
    font-size: 16px;
    margin: auto;
    position: relative;
    margin-top: 20px;
    color: white;
    text-shadow: 1px 1px #0080ca,2px 1px #0080ca,5px 3px 5px rgb(0,0,0,0.6);
    font-weight: 600;
}
#isiContact a{
    font-weight: normal;
    text-align: center;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
    margin: auto;
    margin-top: 20px;
}
#tutupIsi{
    height: 100px;
    width: 100px;
    position: absolute;
    border: none;
    left: 0;
    bottom: 0;
    background: white;
    border-top-right-radius: 20px;
}
#tutupIsi h2{
    transform: rotate(-45deg);
    font-size: 40px;
    padding-top: 0;
    line-height: 0px;
    font-family: Kanit;
    position: absolute;
    top: 0;
    right: 20px;
    color: #0080ca;
}/*#pMyNotes{
height: 100%;width: 100%;position: absolute;top: 0;left: 0;background: transparent;opacity: 0;}*/


@media (max-width: 1250px){

#isiMynotes p{
    font-size: 18px;
}
#isiContact a{
    font-size: 22px;
}
@KeyFrames bukaNavbar{0%{height: 0;width: 10px;border-radius: 0;}30%{height: 80px;width: 10px;border-radius: 0;}31%{border-radius: 90px;}90%{border-radius: 20px;}100%{height: 80px;width: 100%;border-radius: 0;}}
#navbar{height: 80px;top: 1400px;z-index: 99;}
#navbarPlus button{height: 65px;font-size: 16px;margin-right: 0px;}
#navbarPlus{height: 65px;}
#navbarPlus h2{left: 15px;top: 6px;font-size: 20px;}
/*#back{height: 700px;}*/
#salam{top: 450px;left: 50px;font-size: 30px;line-height: 30px;}
@KeyFrames bukaFoto{0%{width: 0;height: 10px;border-radius: 0;top: 200px;right: 145px;}40%{width: 150px;height: 10px;border-radius: 0;top: 200px;right: 70px;}41%{border-radius: 150px;}90%{border-radius: 30px;}100%{border-radius: 3px;width: 150px;height: 200px;top: 120px;right: 70px;}}
@KeyFrames fontAnimation{0%{top: 0;}5%{top: -10px;}10%{top: 0;}100%{top: 0;}}
#foto{top: 2000px;right: 250px;height: 280px;width: 350px;box-shadow: 
0px 0px 5px rgb(0,0,0,0.5),20px 20px #0090e7,27px 27px 8px rgb(0,0,0,0.5);}
#img{left: 10px;top: 10px;height: 180px;width: 130px;background-size: auto 150px;}
#about{top: 670px;width: 380px;height: 540px;}
#isiCorak2{width: 400px;}
#isiAbout, #isiSkill{position: relative;left: 9%;top: 50px;width: 82%;height: 400px;}
#about h2,#skill h2{margin-top: 4px;font-size: 28px;line-height: 2px;}
#about p,#skill p{font-size: 17px;line-height: 17px;}
#skill p{text-align: justify;}
#about h2{margin-top: 150px; width: 1000px;}
#imgAbout{height: 110px;width: 110px;right: 0;left: 0;margin: auto;left: 50px;top: 50px;}
#contactCenter{margin-top: 10px;}
/*.btn{height: 60px;width: 60px;}*/
/*#contactCenter button img{left: 10px;top: 10px;height: 40px;width: 40px;}
#contactCenter button p{font-size: 34px;left: 18px;}*/
#skill{height: 1250px;top: 1300px;}
#isiSkill{top: 0;margin-top: 30px;display: inline-block;}
#skill h2{margin-top: 100px;font-size: 28px;}
.pnnd h3 div{width: 10px;height: 10px;}
#l1{top: 930px;width: 82%;left: 0;right: 0;margin: auto;}.pnnd{display: inline-block;font-size: 12px;margin-top: 0;position: absolute;}
#python{left: 0;top: 0;}
#javascript{left: 180px;top: 0;}
#php{left: 0;top: 50px;}#cpp{left: 180px;top: 50px;}#java{left: 0;top: 100px;}#pnnd h3{/*display: inline;*/
position: relative;}
#can{left: 170px;top: 700px;height: 180px;width: 180px;}
#namaGrafik{width: 120px;font-family: arial;font-size: 13px;left: 12%;top: 700px;}
#myProject{width: 140px;height: 25px;font-size: 20px;}
#isiCorak1{height: 700px;top: 530px;}#isiCorak2{top: 1000px;}#isiCorak3{top: 1100px;right: -450px;}
#tombol{top: 2550px;height: 700px;width: 100%;}
#tombol h2{font-size: 30px;margin-left: 10%;margin-top: 300px;line-height: 20px;width: 80%;color: #191c24;}
#tombol2 h2{line-height: 30px;}
#tombol p{font-size: 14px;line-height: 16px;width: 80%;margin-left: 10%;color: #191c24;text-align: justify;}
#tombol h3{font-size: 12px;position: absolute;bottom: 50px;right: 10%;}
#tombol img{height: 180px;width: 80%;top: 80px;left: 10%;}

#tombol h3 img{height: 17px;width: 17;padding-left: 30px;top: 4px;padding-right: 30px;left: 10%;font-size: 12px;}
#tombol4 #btnTombol1,#tombol3 #btnTombol1{top: 250px;left: 10%;}
#kanan,#kiri{font-size: 70px;top: 200px;}
#tombol4 #btnTombol1{left: 10%;}
#tombol4 #btnTombol1,#tombol3 #btnTombol1{top: 500px;}
#tombol #tombol2, #tombol #tombol4{background: url('back2.webp');background-size: cover;left: 100%;}
#tombol2 h2, #tombol4 h2{margin-left: 10%;margin-top: 300px;line-height: 30px;}
#tombol2 p, #tombol4 p{margin-left: 10%;}
#tombol2 h3, #tombol4 h3{right: 0;left: 10%;font-family: sans-serif;}
#tombol2 img, #tombol4 img{left: 10%;border-color:#1c1c25;}
#tombol5 h2{margin-left: 10%;margin-top: 130px;line-height: 40px;color: white;}
#tombol5 p{width: 80%;margin-left: 10%;margin-top: -5px;color: white;}
#penutup{margin-top: 2650px;}
#penutup p #e, #isiContact #e{  width: 14px;  height: 14px;}
#penutup p,#isiContact p{font-size: 14px;}
#penutup p #l{width: 12px;height: 12px;}
#tutupIsi{height: 50px;width: 50px;border-top-right-radius: 10px;}
#tutupIsi h2{font-size: 20px;right: 20px;}
}
#komen{width:60px;
    /*height: 60px;*/
    bottom: 50px;
    right: 30px;
    position: fixed;
    background: url(komen.webp);
    background-size: auto;
    z-index: 109;
    border: none;
}
@KeyFrames komen{
    0%{width: 0;height: 0;border-radius: 50%;right: 60px;bottom: 80px;}
    50%{width: 120px;height: 120px;border-radius: 50%;right: 0;bottom: 0;}
    100%{width: 100%;height: 100%;border-radius: 0%;}

}
#isiKomen{
    position: fixed;
    overflow: hidden;
    right: 0px;
    bottom: 0px;
    height: 0;
    width: 0;
    background: rgb(230, 230, 230);
    /*animation: komen 3s forwards;*/
    z-index: 108;
}

#kumpulanKomen font{
    color: rgb(40, 40, 40);
    font-family: sans-serif;
    font-size: 16px;
    padding-left: 10px;
    border-radius: 5px;
    border: 1px solid rgb(40, 40, 40);
    position: relative;
    left: 9%;
    width: 83%;
    margin-top: 8px;
    display: block;
    background: white;
}
#kumpulanKomen p{
    display: block;
    line-height: 16px;
}
#masukKomen::hover{
    border: 2px solid #0090e8;
}

</style><body>
    <div id="loader" style="position: fixed;height: 100%;width: 100%;left: 0;top: 0;background: #0090e7;z-index: 111;">
        <style type="text/css">
            #loader #pendd1{
                display: block;
                position: absolute;
                top: 20%;
                left: 0;
                right: 0;
                margin: auto;
                height: 100px;
                width: 100px;
                background: transparent;
                border-radius: 50%;
                animation: loader 3s infinite;
                border: 5px solid #0090e7;
                border-top: 5px solid white;
                border-bottom: 5px solid white;
            }
            @KeyFrames loader{
                0%{transform: rotate(0deg);}
                100%{transform: rotate(360deg);}
            }
        </style>
        <div id="pendd1"></div>
        <p style="color: white; display:block; font-size:24px; font-family: sans-serif; position:absolute; top:45%; left:0; right:0; margin:auto;text-align:center;">Loading</p>
    </div>
    <button id="komen" onclick="
    if (bkk == 0) {
        document.getElementById('isiKomen').style.animation= 'komen 3s forwards';
        bkk = 1;
}else{
        document.getElementById('isiKomen').style.animation= 'none';
        bkk = 0;
}
    "><img src="komen.webp" alt="iniGambar" width="60" height="60">
    </button>
    <div id="isiKomen">
        <div style="position: relative;margin-top: 40px;left: 6%;">
            <label id="ketikKomen" style="font-size: 20px;">(<p id="ipAnda" style="display:inline;font-weight:bold;"><?php echo $ip ?></p>) Komentar anda</label>
            <input type="text" name="komen" id="masukKomen" style="font-size: 20px;panding 5px;display:block;"> <!--  onkeydown="if (event.key === 'Enter'){ komen() }" -->
            <button type="button" onclick="komen()" id="submit" style="font-size: 20px;panding 5px;display:inline;">Kirim</button>
        </div>
        <div id="kumpulanKomen" style="position: relative;top: 30px;overflow-y: scroll;height: 60%;">
<?php $vlue = 1; ?>
<?php while ( $dataKomentar = mysqli_fetch_assoc($result2) ): ?>
    <font style=""><p style="font-weight: bold;">IP pengirim (<?php echo $dataKomentar['ip'] ?>):</p><p id="listKomen<?php echo $vlue ?>"><?php echo $dataKomentar['komen'] ?></p><h3 style="color: red; position: absolute; right: 10px; top: -10px;font-size: 20px;" onclick="hapus(<?php echo $vlue ?>)">x</h3></font>
    <?php $vlue = $vlue + 1; ?>
<?php endwhile; ?>
</div>
    </div>
    <div id="isiContact"><div id="pMyNotes1" style="opacity: 0;"><a href="https://www.instagram.com/m_oskhar09">IG: m_oskhar09</a><a href="https://api.whatsapp.com/send?phone=6281386380481">WA: 6281386380481</a><p style="font-weight: normal;"><font style="display: inline;font-family:'Baloo Bhaijaan 2';font-weight: bold;"><img src="email.webp" alt="iniGambar" id="e"> Email:</font><font style="color: white;text-shadow: 3px 3px #0090e7,4px 6px 6px rgb(0,0,0,0.6);"> muhamadoskhar@gmail.com</font></p></div><button id="tutupIsi" onclick="document.getElementById('isiContact').style.animation= 'pengecilbulat 3s forwards';document.getElementById('pMyNotes1').style.animation= 'lenyap 1s forwards';"><h2>></h2></button></div><div id="isiMynotes"><div id="pMyNotes2" style="opacity: 0;"><p style="margin-top:13%;">Sejujurnya masih merasa sangat kurang dan jauh dari kata cukup untuk suatu kemajuan. Kedepannya masih harus lebih banyak belajar, jika hari ini merasa sudah mencapai batasnya, maka besok harus melampaui batasan itu.</p><p>Sejauh ini hanya belajar melalui buku, dan media internet. Kupikir menekuni hal diluar kemampuan dan minat hanya menyia nyiakan potensi.</p></div><button id="tutupIsi" onclick="document.getElementById('isiMynotes').style.animation= 'pengecilbulat 3s forwards';document.getElementById('pMyNotes2').style.animation= 'lenyap 1s forwards';"><h2>></h2></button></div><div id="latar"><div id="navbar"><div id="navbarContent"></div></div><div id="navbarPlus"><h2>Mos Khar</h2><div id="buttonNavbar"><button id="tombolNavbar1" onmouseover="hover1(1,1)" onmouseout="hover1(0,1)" onclick="document.getElementById('isiContact').style.animation= 'pembesarBulat 2s forwards';document.getElementById('pMyNotes1').style.animation= 'muncul 800ms forwards';document.getElementById('pMyNotes1').style.animationDelay= '2s';">Contact<div id="hover1"></div></button>
        <button id="tombolNavbar2" onmouseover="hover1(1,2)" onmouseout="hover1(0,2)">
            <a href="https://moskhar.my.id" style="color: white;text-decoration: none;">
            Home</a><div id="hover2"></div>
        </button>
        <button id="tombolNavbar4" onmouseover="hover1(1,4)" onmouseout="hover1(0,4)" onclick="document.getElementById('isiMynotes').style.animation= 'pembesarBulat 2s forwards';document.getElementById('pMyNotes2').style.animation= 'muncul 800ms forwards';document.getElementById('pMyNotes2').style.animationDelay= '2s';">MyNotes<div id="hover4"></div></button></div></div><div id="back"><font id="salam"><font style="animation: fontAnimation 3s infinite;position: relative;">H</font><font style="animation: fontAnimation 3s infinite;animation-delay: 300ms;position: relative;">E</font><font style="animation: fontAnimation 3s infinite;animation-delay: 600ms;position: relative;">L</font><font style="animation: fontAnimation 3s infinite;animation-delay: 900ms;position: relative;">L</font><font style="animation: fontAnimation 3s infinite;animation-delay: 1200ms;position: relative;">O</font><font> ,</font> &
   WELCOME</font><div id="foto"><div id="img"></div></div></div><div id="isiCorak1"></div><div id="isiCorak2"></div><div id="isiCorak3"></div><div id="about"><div id="isiAbout"><h2><font style="font-family: arial;font-weight: lighter;">Calon</font> Programmer.</h2><p>Saya seorang fresh graduate SMA dalam proses menempa pendidikan prodi T. Informatika Universitas Islam Negeri Jakarta🎓, dengan passion besar merintis karir di ranah pemrograman seperti Software Developer, Web Developer, dan Data Scientist.
</p><p>👇Kontak dan sosial media👇</p><div id="contactCenter"><a href="https://api.whatsapp.com/send?phone=6281386380481"><button class="btn" id="contactButton1"><img src="msg.webp" alt="iniGambar"></button></a><a href="https://www.instagram.com/m_oskhar09"><button class="btn" id="contactButton2"><img src="ins.webp" alt="iniGambar"></button></a><a href="https://www.youtube.com/channel/UCilzV733l3Ic3R5StBCP-8A"><button class="btn" id="contactButton3"><img src="ytb.webp" alt="iniGambar"></button></a><a href="mailto:muhamadoskhar@gmail.com"><button class="btn" id="contactButton4"><img src="gEmail.webp" alt="iniGambar"></button></a></div></div><div id="imgAbout"></div></div><div id="skill"><h2><font style="text-shadow: 1px 1px rgb(27,69,139),2px 2px rgb(27,69,139,0.9),3px 3px rgb(27,69,139,0.7),4px 4px rgb(27,69,139,0.5),5px 5px rgb(27,69,139,0.3),6px 6px rgb(27,69,139,0.2),7px 7px rgb(27,69,139,0.1),8px 8px rgb(27,69,139,0.1),9px 9px rgb(27,69,139,0.1);">SKI</font><font style="text-shadow: 1px 1px rgb(255,136,0),2px 2px rgb(255,136,0,0.9),3px 3px rgb(255,136,0,0.7),4px 4px rgb(255,136,0,0.5),5px 5px rgb(255,136,0,0.3),6px 6px rgb(255,136,0,0.2),7px 7px rgb(255,136,0,0.1),8px 8px rgb(255,136,0,0.1),9px 9px rgb(255,136,0,0.1);">LL,</font> <font style="text-shadow: 1px 1px rgb(0,134,116),2px 2px rgb(0,134,116,0.9),3px 3px rgb(0,134,116,0.7),4px 4px rgb(0,134,116,0.5),5px 5px rgb(0,134,116,0.3),6px 6px rgb(0,134,116,0.2),7px 7px rgb(0,134,116,0.1),8px 8px rgb(0,134,116,0.1),9px 9px rgb(0,134,116,0.1);">&
E</font><font style="text-shadow: 1px 1px rgb(0,170,0),2px 2px rgb(0,170,0,0.9),3px 3px rgb(0,170,0,0.7),4px 4px rgb(0,170,0,0.5),5px 5px rgb(0,170,0,0.3),6px 6px rgb(0,170,0,0.2),7px 7px rgb(0,170,0,0.1),8px 8px rgb(0,170,0,0.1),9px 9px rgb(0,170,0,0.1);">XPE</font><font style="text-shadow: 1px 1px rgb(170,0,68),2px 2px rgb(170,0,68,0.9),3px 3px rgb(170,0,68,0.7),4px 4px rgb(170,0,68,0.5),5px 5px rgb(170,0,68,0.3),6px 6px rgb(170,0,68,0.2),7px 7px rgb(170,0,68,0.1),8px 8px rgb(170,0,68,0.1),9px 9px rgb(170,0,68,0.1);">RIE</font><font style="text-shadow: 1px 1px rgb(0,136,255),2px 2px rgb(0,136,255,0.9),3px 3px rgb(0,136,255,0.7),4px 4px rgb(0,136,255,0.5),5px 5px rgb(0,136,255,0.3),6px 6px rgb(0,136,255,0.2),7px 7px rgb(0,136,255,0.1),8px 8px rgb(0,136,255,0.1),9px 9px rgb(0,136,255,0.1);">NCE</font></h2><div id="isiSkill"><p>Saat SMA aktif di organisasi OSIS dan ekskul sekolah, serta belajar pemrograman dengan terus meningkatkan progres setiap harinya, semua itu saya lakukan tanpa menggangu pelajaran sekolah dan lulus dengan baik hingga masuk perguruan tinggi negeri jalur SBMPTN. Kelas 11 berpengalaman memprogram kalkulator khusus untuk menyelesaikan materi semester, pengembangan 2 web statis, dan 1 Web Dinamis(belum memakai modal secara material). Kelas 12 project Web portfolio, lalu pengembangan web aplikasi dengan domain hosting berbayar.
</p><p>Saya cukup memahami perancangan program yang berlandaskan konsep bahwa setiap element adalah objek yang memiliki sifat serta karakteristik tertentu (OOP), dan yakin mampu menerapkannya pada Python Javascript.
</p></div><div id="l1">
    <div class="pnnd" id="python">
        <h3><div></div> Python</h3>
    </div>
    <div class="pnnd" id="javascript">
        <h3><div></div> JavaScript</h3>
    </div>
    <div class="pnnd" id="php">
        <h3><div></div> PHP</h3>
    </div>
    <div class="pnnd" id="cpp">
        <h3><div></div> C++</h3>
    </div>
    <div class="pnnd" id="java">
        <h3><div></div> Java</h3>
    </div>
</div>
<font id="namaGrafik">Perioritas Bahasa Pemrograman</font>
<div id="myProject">My Project</div>
<canvas id="can" height="220" width="220" /></div>
<div id="tombol">
    <div id="tombol1">
        <div id="hilang1"><h2>Web resmi OSIS.</h2><p>Performa maksimal dalam tampilan serta pemrosesan datanya karena programnya dirancang dari nol, sehingga kecil kemunkinan terjadi pembengkakan kode.</p><p>Pengembangan Web ini masih terus berlanjut dalam kendali saya hingga Oktober 2023.</p><p>Meski merngerjakan project web pada masa sekolah bukan ide yang bagus, tapi ini cukup menyenangkan untuk dijalani sebagai hobi.</p><img src="project1.webp" alt="iniGambar"><a href="http://osis-sman96.rf.gd"><button id="btnTombol1">BUKA</button></a></div><h3><img src="kalender.webp" alt="iniGambar"> Oktober 2021 - Oktober 2023</h3>
    </div>
    <div id="tombol2">
        <div id="hilang2"><h2>Project Kalkulator Super.</h2><p>Sejujurnya sebelum terjun ke pemrograman Web saya terlebih dahulu mencicipi beberapa pembuatan perangkat lunak yang dioprasikan pada terminal.</p><p>Kalkulator ini digunakan untuk menyelesaikan permasalahan Matematika dengan sangat cepat pada materi semester yang saya pelajari di sekolah.</p><img src="project2.webp" alt="iniGambar"></div><h3><img src="kalender.webp" alt="iniGambar"> Juli 2021</h3>
    </div>
    <div id="tombol3">
        <div id="hilang3"><h2>Game Arcade I.</h2><p>Project Januari 2022, saya ingin mencoba pengembangan game dengan merancang beberapa game ringan. Untuk pertama saya memilih game "Snake" karena cukup sederhana dan bagus untuk mengasah diri</p><!-- <div id="gmbr"></div> --><img src="project3.webp" alt="iniGambar"><a href="https://moskhar.my.id/projectGame/snake"><button id="btnTombol1">BUKA</button></a></div><h3><img src="kalender.webp" alt="iniGambar"> Januari 2022</h3>
    </div>
    <div id="tombol4">
        <div id="hilang4"><h2>Game Arcade II.</h2><p> Selesai UTBK saya menantang diri untuk membuat game yang jauh lebih kompleks lebih menantang dari sebelumnya, tengat waktu hanya 3 hari. Game catur secara live play serta fitur Room server, persaingan catur dengan memanfaatkan javascript, php, MySQL, dan yang pasti sangat kental dengan logika pemrograman.</p><!-- <div id="gmbr"></div> --><img src="project4.webp" alt="iniGambar"><a href="https://moskhar.my.id/projectGame/catur"><button id="btnTombol1">BUKA</button></a></div><h3><img src="kalender.webp" alt="iniGambar"> Juni 2022</h3>
    </div>
    <div id="tombol5" >
        <div id="hilang5"><h2>Catatan Project</h2><p>Setelah lulus SMA nanti saya pasti akan memfokuskan diri pada dunia Pemrograman, dan tetap konsisten membangun setiap progress saya.</p><p>Urutan project pada 2021 - 2023:</p><p>- Juli 2021 [ Project KALKULATOR SUPER ]</p><p>- Agustus 2021 - September 2021 [ Eksperimen UI dengan pengembangan 2 web statis ]</p><p>- Oktober 2021 - Oktober 2023 [ Web resmi OSIS 96 ]</p><p>- November 2021 - Desember 2021 [ Web Portofolio ]</p><p>- Akhir Desember 2021 [ Istirahat ]</p><p>- Januari 2022 [ Project ARCADE GAME I ]</p><p>- Februari 2022 - Juni 2022 Saya paham betul pentingnya SBMPTN</p><p>- Juni 2022 [ Project ARCADE GAME II ]</p><p>- Juni[ Pengembangan Design 3D CSS & JS ]</p></div>
    </div>
    <div id="tombol6">
        <div id="hilang6"><h2>Program Animasi</h2><p> Ingin mencari tau sampai sejauh mana manusia bisa mewujudkan imajinasinya dalam bentuk karya visual.</p><p>Data akumulasi views diambil dari API YOUTUBE.</p><img src="project5.webp" alt="iniGambar"><a href="http://moskhar.my.id/projectAnimation/"><button id="btnTombol1">BUKA</button></a></div><h3><img src="kalender.webp" alt="iniGambar"> Juni 2022</h3>
    </div>
<button id="kanan" onclick="kanan(posisi)">></button><button id="kiri" onclick="kiri(posisi)"><</button><div id="penanda"><div id="penanda1"></div><div id="penanda2"></div><div id="penanda3"></div><div id="penanda4"></div><div id="penanda5"></div><div id="penanda6"></div></div></div>
<div id="penutup"><div id="viewers" style="position: absolute; top: 150px;left: 0;right: 0;margin: auto;background: transparent;border-bottom: 5px solid #0090e7;border-radius: 5px;height: 210px;width: 50%;"><img src="viewers.webp" alt="iniGambar" style="height:120px;width: 120px;position: absolute;left: 0;right: 0;margin: auto;"> <p id="textv" style="font-size: 24px;position: absolute; top: 120px;text-shadow: 3px 3px #0090e7,4px 6px 6px rgb(0,0,0,0.6);font-family: Kanit;left:0;right:0;margin:auto;">views: <?php echo $vlu; ?></p></div><h2 id="logo">O<font style="left: -18px;top: 16px;position: relative;display: inline-block;">S</font></h2><p style="margin-top: 60px;color: white;">Maaf jika ada kata kata yang kurang berkenang, semoga web ini dapat bermanfaat</p>
<p style="font-weight: normal;"><font style="display: inline;font-family:'Baloo Bhaijaan 2';font-weight: bold;"><img src="location.webp" alt="iniGambar" id="l"> Lokasi:</font> Jakarta</p>
<p style="margin-top: -10px;font-weight: normal;"><font style="display: inline;font-family:'Baloo Bhaijaan 2';font-weight: bold;"><img src="email.webp" alt="iniGambar" id="e"> Email:</font><font style="color: #0090e7;"> muhamadoskhar@gmail.com</font></p>
<p style="color: white;font-family: arial; position: absolute;bottom: 20px;left: 20px;text-align: left;">&copy; MUH OSKHAR M 2021</p></div></div></body><script type="text/javascript">

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

</script>
</html>