<?php
include "koneksi.php";

$Id_Penduduk = $_POST['Id_Penduduk'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Usia = $_POST['Usia'];
$Status_Perkawinan = $_POST['Status_Perkawinan'];

$query = "INSERT INTO sospen (Id_Penduduk,Nama,Alamat,Tempat_Lahir,Usia,Status_Perkawinan)
          VALUES ('$Id_Penduduk','$Nama', '$Alamat', '$Tempat_Lahir', '$Usia', '$Status_Perkawinan')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);


if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL".mysqli_connect_error();
}

    echo "<a href='sospen.php'>Lihat Data</a>";