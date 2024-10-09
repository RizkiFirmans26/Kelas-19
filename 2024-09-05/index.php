<?php
for ($i=1; $i <= 10; $i++) { 
   echo $i;
}

echo "<br>";

for ($i=10; $i >= 1; $i--) { 
    echo $i;
}

echo "<br>";

$ganjil=7%2;

echo $ganjil;

echo "<br>";


for ($i=1; $i <100; $i++) { 
  
   $ganjil=$i % 2;

    if ($ganjil==1) {
        
        echo $i;
    }
}

echo "<br>";

$kkn = 80;
$nilai = 90;
if ($nilai>$kkn) {
    echo "LULUUS";
}
else {
    echo "TIDAK LULUS";
}

echo "<br>";
$status = "tidak lulus";

if ($nilai>$kkn) {
    $status= "lulus";
}

echo $status;
echo "<br>";

    $raport =0;
    $tugas =1;


        if ($tugas == 1) {
            $raport = 80;
        }

        echo $raport;

       echo "<br>";



        $bulan = 7;
        $tanggal = 1;

        // $keterangan = "salah";

        if ($bulan > 0 && $bulan < 13) {
        //    $keterangan = "benar";

            if ($tanggal > 0 && $tanggal <32) {
            //    $keterangan = "benar";
            }

            
            echo "<br>";
            
            if ($bulan == 12 && $tanggal > 0 && $tanggal < 19) {
            $keterangan = "Capicorn";

            echo $keterangan;
            }
            if ($bulan == 1 && $tanggal > 0 && $tanggal < 19) {
                $keterangan = "Aquarius";

                echo $keterangan;
                
            }
            if ($bulan == 2 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Pisces";


                echo $keterangan;
            }
            if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aries";

                echo $keterangan;

            }
            if ($bulan == 4 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Taurus";

                echo $keterangan;


            }
            if ($bulan == 5 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Gemini";

                echo $keterangan;

                
            }
            if ($bulan == 6 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Cencer";

                echo $keterangan;


            }
            if ($bulan == 7 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Leo";

                echo $keterangan;


            }
            if ($bulan == 8 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Virgo";

                echo $keterangan;

                
            }
            if ($bulan == 9 && $tanggal > 0 && $tanggal < 21) {
                $keterangan = "Libra";

                echo $keterangan;


            }
            if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Scorpio";

                echo $keterangan;


            }
            if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Sagetarius";

                echo $keterangan;


            }

          
        }



        

      
?>
