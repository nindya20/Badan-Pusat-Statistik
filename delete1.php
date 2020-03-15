<?php

include './koneksi.php';
$Pemilik = $_GET['Pemilik'];
$query = "DELETE FROM eko WHERE Pemilik = '$Pemilik'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);


if ($num > 0){
    echo "Berhasil Hapus Data <br>";

} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='eko.php'>Lihat Data</a>";
?>