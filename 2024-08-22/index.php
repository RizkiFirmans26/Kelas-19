<?php
 require_once("content.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebSekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <div class="header">
        <h1>ini adalah header</h1>
        <li><a href="?page=">home</a></li>
        <?php
    
    foreach ($pages as $key => $value) {
      ?>
<li><a href="?page=<?= $value?>"><?= $key?></a></li>
      <?php

    }
    ?>
    </div>

    <div class="content">
        <h1>ini adalah konten</h1>
        
        <?php 
        if (isset($_GET["page"])){
            $page = $_GET["page"];

            if ($page == "contact"){
        require_once("pages/contact.php");
    }
    if ($page == "jurusan"){
        require_once("pages/jurusan.php");
    }
    if ($page == "sejarah"){
        require_once("pages/sejarah.php");
    }
    if ($page == "prestasi"){
        require_once("pages/prestasi.php");
    }
} else {
    echo "<h2?>Ini Adalah Home</h2>";
            }

        ?>
    </div>

    <div class="footer">
        <h1>ini adalah footer</h1>
    </div>


<?php
        foreach ($gambars as $key) {
    ?>
    <!-- <img src="images/1.jpg" alt="" srcset=""> -->
        <img src="images/<?= $key?>" alt="" srcset="">
    <?php  
        }
    ?>
  

  <ul>
      
      <!-- <li><a href="pages/contact.php">contact</a></li>
      <li><a href="pages/jurusan.php">jurusan</a></li>
      <li><a href="pages/sejarah.php">sejarah</a></li>
      <li><a href="pages/prestasi.php">prestasi</a></li>
      <li><a href="index.php">Home</a></li> -->
  </ul>

</body>
</html>
