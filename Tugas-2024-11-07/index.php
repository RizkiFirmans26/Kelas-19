<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMPN 6 Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
        <div class="logo">
           <a href="index.php"><img src="images/logo.jpg" alt=""></a>
            </div>
      
        <div class="sekolah">
            <h2>SMPN 6 SIDOARJO</h2>
            </div>
        <div class="nav">
            <ul>
            <li><a href="?menu=home">home</a></li>
            <li><a href="?menu=umpan">umpan</a></li>
            <li><a href="?menu=pembaruan">pembaruan</a></li>
            <li><a href="?menu=profil">profil</a></li>
            <li><a href="?menu=kegiatan">kegiatan</a></li>
            </ul>
        </div>
        </div>
        <div class="content">

        <?php
        if (isset($_GET["menu"])) {
           $menu = $_GET["menu"];
           echo $menu;

           if ($menu == "home") {
            require_once("pages/home.php");
           }
           if ($menu == "umpan") {
            require_once("pages/umpan.php");
           }
           if ($menu == "pembaruan") {
            require_once("pages/pembaruan.php");
           }
           if ($menu == "profil") {
            require_once("pages/profil.php");
           }
           if ($menu == "kegiatan") {
            require_once("pages/kegiatan.php");
           }
        }else(
            require_once("pages/home.php")
             )
             
             ?>

        </div>
        <div class="footer">
            <p>Web ini dibuat oleh : PIzx.CUY</p>
        </div>
    </div>

</body>
</html>