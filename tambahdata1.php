<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Login</h1>
    <form action="create1.php" method="POST">
    <label for="Luas_Lahan">Luas_Lahan</label>
    <input type="text" name="Luas_Lahan" placeholder="Luas_Lahan" required>
    <p>
    <label for="Wilayah">Wilayah</label>
    <input type="text" name="Wilayah" placeholder="Wilayah" required>
    <p>
    <label for="Pemilik">Pemilik</label>
    <input type="text" name="Pemilik" placeholder="Pemilik" required>
    <p>
    <input type="hidden" name="Pemilik">
    <input type="submit" name="LOGIN" value="LOGIN" required>
    </form>
</body>
</html>