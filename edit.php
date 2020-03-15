<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include './koneksi.php';
$Id_Penduduk = $_GET['Id_Penduduk'];
$query = "SELECT * FROM sospen WHERE Id_Penduduk = '$Id_Penduduk'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td><label for="Nama">Nama</label></td>
    <td>:</td>
    <td><input type="text" name="Nama" id="Nama" value="<?php echo $row['Nama']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Alamat">Alamat</label></td>
    <td>:</td>
    <td><input type="text" name="Alamat" id="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Tempat_Lahir">Tempat_Lahir</label></td>
    <td>:</td>
    <td><input type="text" name="Tempat_Lahir" id="Tempat_Lahir" value="<?php echo $row['Tempat_Lahir']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Usia">Usia</label></td>
    <td>:</td>
    <td><input type="text" name="Usia" id="Usia" value="<?php echo $row['Usia']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Status_Perkawinan">Status_Perkawinan</label></td>
    <td>:</td>
    <td><input type="text" name="Status_Perkawinan" id="Status_Perkawinan" value="<?php echo $row['Status_Perkawinan']; ?>"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="hidden" name="Id_Penduduk" value="<?php echo $row['Id_Penduduk']; ?>"></td>
    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
    </form>
</body>
</html>