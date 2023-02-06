<?php

$str = file_get_contents('http://example.com/example.json/');
$json = json_decode($str, true);
$serverConfig = $json['server'];
$conn = mysqli_connect($serverConfig['url'], $serverConfig['hostname'], $serverConfig['password'], $serverConfig['dbname']);
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
    <meta charset="utf-8"><link href="lib/icon/pp.webp" alt="iniGambar" rel="icon" type="image/x-icon">
    <meta property="og:description" content="[Web Portfolio] Web Portofolio muhamad oskhar mubarok, calon Programmer">
    <meta property="og:image" content="lib/icon/pp.webp" alt="iniGambar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
        Author: Muhamad Oskhar Mubarok,
        Category: Web Portfolio,
        Date: December 2020,
        Purpose: Training;
    ">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Mos Khar Official</title>
</head>
<body>

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
<p style="color: white;font-family: arial; position: absolute;bottom: 20px;left: 20px;text-align: left;">&copy; MUH OSKHAR M 2021</p></div>
</div>
</body>
<script src="source.js"></script>
</html>