<?php

include './koneksi.php';
$Id_Penduduk = $_GET['Id_Penduduk'];
$query = "DELETE FROM sospen WHERE Id_Penduduk = '$Id_Penduduk'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);


if ($num > 0){
    echo "Berhasil Hapus Data <br>";

} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='sospen.php'>Lihat Data</a>";
?>