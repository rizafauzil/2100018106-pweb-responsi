<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$fp = fopen("nota.txt", "a+");
fputs($fp, "$nama|$alamat|$jenis|$jumlah|$harga\n");
fclose($fp);

header('Location: back.php')
 ?>

