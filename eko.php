<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body>
        <div class="jumbotron" style="text-align: center; background-color:darkslategray;">
        <h1 style="color:dodgerblue; font-size: 60px; font-family:Arial, Helvetica, sans-serif">Pertanian dan Perkebunan</h1>
        <p style="color:lightblue">Badan Pusat Statistik</p> 
        </div>
        <div class="container">
        <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="tambahdata1.php">Tambahkan Data</a>
        </li>
        </div>
    <br>
    <center>
    <table width='80%' border=1>
    <tr>
    <th bgcolor='skyblue'>Luas Lahan</th>
    <th bgcolor='skyblue'>Wilayah</th>
    <th bgcolor='skyblue'>Pemilik</th>
    <th bgcolor='skyblue'>Aksi 1</th>  
    <th bgcolor='skyblue'>Aksi 2</th>
    
    </tr>
    <?php
    include "koneksi.php";
    $query = "select * from eko";
    $sql = mysqli_query($connect,$query);
    while($user_data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$user_data['Luas_Lahan']."</td>";
        echo "<td>".$user_data['Wilayah']."</td>";
        echo "<td>".$user_data['Pemilik']."</td>";
        echo "<td><a href='edit1.php?Pemilik=".$user_data['Pemilik']."'>Edit</a> | ";
        echo "<td><a href='delete1.php?Pemilik=".$user_data['Pemilik']."'>Hapus</a></td>";
     
    }
    ?>
    </center></table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
</body>
</html>