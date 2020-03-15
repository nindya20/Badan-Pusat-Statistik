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
$Pemilik = $_GET['Pemilik'];
$query = "SELECT * FROM eko WHERE Pemilik = '$Pemilik'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>
    <form action="update1.php" method="post">
    <table>
    <tr>
    <td><label for="Luas_Lahan">Luas_Lahan</label></td>
    <td>:</td>
    <td><input type="text" name="Luas_Lahan" id="Luas_Lahan" value="<?php echo $row['Luas_Lahan']; ?>"></td>
    </tr>
    <tr>
    <td><label for="Wilayah">Wilayah</label></td>
    <td>:</td>
    <td><input type="text" name="Wilayah" id="Wilayah" value="<?php echo $row['Wilayah']; ?>"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="hidden" name="Pemilik" value="<?php echo $row['Pemilik']; ?>"></td>
    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
    </form>
</body>
</html>