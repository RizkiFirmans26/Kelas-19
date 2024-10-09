<form action="" method="POST">
    <!-- <input type="text" name="nama" placeholder="Masukan Nama">
    <input type="text" name="alamat" placeholder="Masukan Alamat">
    <input type="email" name="email" placeholder="Masukan Email" >
    <input type="password" name="password" placeholder="Masukan Password"> -->
    <input type="number" name="Bulan" placeholder="Masukan Bulan">
    <input type="number" name="tanggal" placeholder="Masukan Tanggal">
    <input type="submit" value="kirim" name="tombol">


</form>

<?php

    // echo "Belajar PHP";
if (isset($_POST["tombol"])) {
    # code...

    // $nama = $_POST["nama"];
    // $alamat = $_POST["alamat"];
    // $email = $_POST["email"];
    // $password = $_POST["password"];
     $Bulan = $_POST["Bulan"];
     $tanggal = $_POST["tanggal"];


    // echo $nama;
    // echo "<br>";
    // echo $alamat;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $password;
    // echo "<br>";
     //echo $Bulan;
    // echo "<br>";
     //echo $tanggal;

    // $Keterangan = "Salah";

    if ($Bulan > 0 && $Bulan < 13 &&  $tanggal > 0 && $tanggal < 32) {
        
        if ($Bulan < 13 && $tanggal > 21 || $Bulan > 0 && $tanggal < 20) {
          
               $Keterangan = "Capicorn";
            }

            if ($Bulan > 0  && $tanggal > 19 || $Bulan > 1 && $tanggal < 19) {
          
                $Keterangan = "Aquarius";
             }

             if ($Bulan < 1 && $tanggal > 18 || $Bulan > 2 && $tanggal < 21) {
          
                $Keterangan = "Pisces";
             }
        }

        

        }
        
        // $Keterangan = "Benar";

        echo $Keterangan;

        
    
?>
