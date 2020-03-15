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
        <h1 style="color:dodgerblue; font-size: 60px; font-family:Arial, Helvetica, sans-serif">Kependudukan</h1>
        <p style="color:lightblue">Badan Pusat Statistik</p> 
        </div>
        <div class="container">
        <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="tambahdata.php">Tambahkan Data</a>
        </li>
        </div>
    <br>
    <center>
    <table width='80%' border=1>
    <tr>
    <th bgcolor='skyblue'>Id Penduduk</th>
    <th bgcolor='skyblue'>Nama</th>
    <th bgcolor='skyblue'>Alamat</th>
    <th bgcolor='skyblue'>Tempat Lahir</th>
    <th bgcolor='skyblue'>Usia</th>
    <th bgcolor='skyblue'>Status Perkawinan</th>  
    <th bgcolor='skyblue'>Aksi 1</th>  
    <th bgcolor='skyblue'>Aksi 2</th>
    
    </tr>
    <?php
    include "koneksi.php";
    $query = "select * from sospen";
    $sql = mysqli_query($connect,$query);
    while($user_data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$user_data['Id_Penduduk']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Alamat']."</td>";
        echo "<td>".$user_data['Tempat_Lahir']."</td>";
        echo "<td>".$user_data['Usia']."</td>";
        echo "<td>".$user_data['Status_Perkawinan']."</td>";
        echo "<td><a href='edit.php?Id_Penduduk=".$user_data['Id_Penduduk']."'>Edit</a> | ";
        echo "<td><a href='delete.php?Id_Penduduk=".$user_data['Id_Penduduk']."'>Hapus</a></td>";
     
    }
    ?>
    </center></table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
</body>
</html>