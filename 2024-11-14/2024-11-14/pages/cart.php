
<div class="cart">
    <h1>Cart</h1><?php
    if (!isset($_SESSION['email'])) {
        header("location:index.php?menu=login");
    }
    if (!isset($_SESSION['cart'])) {
      echo "<h1>Keranjang Kosong/h1>";
    }
    if (isset($_GET['add'])) {
       $id = $_GET['add'];
       $sql = "SELECT * FROM produk WHERE id=$id";
       $hasil = mysqli_query($koneksi, $sql);
       $row = mysqli_fetch_array($hasil);
       echo $row[1];
       echo $row[3];
       $_SESSION['cart'][$id]=
    }
?>

</div>