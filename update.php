<?php

include './koneksi.php';

$Id_Penduduk = $_POST['Id_Penduduk'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Usia = $_POST['Usia'];
$Status_Perkawinan = $_POST['Status_Perkawinan'];

$query = "UPDATE sospen SET Nama = '$Nama', Alamat = '$Alamat', Tempat_Lahir = '$Tempat_Lahir', Usia = '$Usia' WHERE Id_Penduduk = '$Id_Penduduk' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='sospen.php'>Lihat Data</a>";
?>