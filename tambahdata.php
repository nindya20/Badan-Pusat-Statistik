<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Login</h1>
    <form action="create.php" method="POST">
    <label for="Id_Penduduk">Id_Penduduk</label>
    <input type="text" name="Id_Penduduk" placeholder="Id_Penduduk" required>
    <p>
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" placeholder="Nama" required>
    <p>
    <label for="Alamat">Alamat</label>
    <input type="text" name="Alamat" placeholder="Alamat" required>
    <p>
    <label for="Tempat_Lahir">Tempat_Lahir</label>
    <input type="text" name="Tempat_Lahir" placeholder="Tempat_Lahir" required>
    <p>
    <label for="Usia">Usia</label>
    <input type="text" name="Usia" placeholder="Usia" required>
    <p>
    <label for="Status_Perkawinan">Status Perkawinan</label>
    <input type="text" name="Status_Perkawinan" placeholder="Status_Perkawinan" required>
    <p>
    <input type="hidden" name="Id_Penduduk">
    <input type="submit" name="LOGIN" value="LOGIN" required>
    </form>
</body>
</html>