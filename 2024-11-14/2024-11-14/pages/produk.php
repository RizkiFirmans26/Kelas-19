<div class="produk">
<?php
    $sql = "SELECT * FROM produk";

    $hasil = mysqli_query($koneksi, $sql);
    $baris = mysqli_num_rows($hasil);
    // echo $baris;
    if ($baris == 0) {
       echo "<h1>Produk Kosong</h1>";
    }
    else {
       while($row = mysqli_fetch_array($hasil)) {
        ?>

    <h1>Produk</h1>
    <div class="detail-produk">
        <link rel="stylesheet" href="style.css">
        <h3><?= $row[1]?></h3>
        <img src="./images/<?= $row[5]?>" alt="">
        <p><?= $row[2]?></p>
        <p>stok : <Strong><?= $row[4]?></Strong></p>
        <h3><?= $row[3]?></h3>
        <a href="?menu=cart&add=<?= $row[0]?>"><button>BELI</button></a>
    </div>

        <?php
       }
    }
?>
</div>
