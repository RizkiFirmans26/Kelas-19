<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';
$koneksi = mysqli_connect($host, $user, $password, $database);
if (isset($_GET['menu'])) {
   $menu = $_GET['menu'];
   $id = $_GET['id'];
//    echo $menu;
//    echo $id;
   if ($menu == 'edit') {
     $sql = "SELECT * FROM siswa WHERE id=$id";
     echo $sql;
     mysqli_query($koneksi, $sql);
   }
}


?>
<form action="" method="post">
        nama :
        <input type="text" name="nama" placeholder="Masukan Nama">
        <br>
        alamat :
        <input type="text" name="alamat" placeholder="Masukan Alamat" >

        <input type="submit" value="Simpan" name="simpan">
      
    </form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO siswa VALUE ('','$nama','$alamat')";
    echo $sql;
    mysqli_query($koneksi, $sql);
}
    if (isset($_GET["menu"])) {
        $menu=$_GET['menu'];
        $id=$_GET['id'];
        if ($menu=='hapus') {
            $sql = "DELETE FROM siswa WHERE id = $id";
            echo $sql;
            mysqli_query($koneksi, $sql);
            }
        }
    // echo $menu;
    // echo $id;
   



$query = "SELECT * FROM siswa";
// echo $query;

$result = mysqli_query($koneksi, $query);
// var_dump($result);  

$nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo'<h1>Data Siswa</h1>';
echo '<table border=1>';
echo '<thead>
    <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Edits</th>

        </tr>
        </thead>
        <tbody';
    
while($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.' <a href="?id='.$row[0].'&menu=hapus">hapus</a>'.'</td>';
    echo '<td>'.'<a href="?id='.$row[0].'$menu=edit">edit</a>'.'</td>';
    echo '</tr>';

}
    echo '</tbody>';
    echo '</table>';

    $query = "SELECT * FROM kelas";

    $result = mysqli_query($koneksi, $query);

    $nama = mysqli_fetch_assoc($result);

    echo '<h1>Data Sekolah</h1>';
    echo '<table border=1>';
    echo '<thead>
        <tr>
            <th>Id</th>
            <th>KELAS</th>
            <th>KETERANGAN</th>
            <th>Hapus</th>
    </tr>
    </thead>
    <tbody';

while($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.'hapus'.'</td>';    
    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
        
   
    

?>