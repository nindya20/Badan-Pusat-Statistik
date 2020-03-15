<?php

include './koneksi.php';

$Luas_Lahan = $_POST['Luas_Lahan'];
$Wilayah = $_POST['Wilayah'];
$Pemilik = $_POST['Pemilik'];

$query = "UPDATE eko SET Luas_Lahan = '$Luas_Lahan', Wilayah = '$Wilayah' WHERE Pemilik = '$Pemilik' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='eko.php'>Lihat Data</a>";
?>