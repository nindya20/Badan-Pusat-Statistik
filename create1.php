<?php
include "koneksi.php";

$Luas_Lahan = $_POST['Luas_Lahan'];
$Wilayah = $_POST['Wilayah'];
$Pemilik = $_POST['Pemilik'];

$query = "INSERT INTO eko (Luas_Lahan, Wilayah, Pemilik)
          VALUES ('$Luas_Lahan','$Wilayah', '$Pemilik')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);


if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL".mysqli_connect_error();
}

    echo "<a href='eko.php'>Lihat Data</a>";