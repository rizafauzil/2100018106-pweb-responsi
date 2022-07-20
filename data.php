<?php 

echo "<head><title>Data Orderan</title></head>";
$fp = fopen("nota.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Produk dibeli: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Jumlah: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Harga: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='index.php'> Kembali Ke Toko </a>";

?>
