<?php
require 'connect.php';

if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('data added successfully!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data failed to add!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Add data</title>
</head>
<body>
    <h1>Add data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="tanggal">Tanggal : </label><br>
                <input type="date" name="tanggal" id="tanggal" required>
            </li>
            <li>
                <label for="jenis">Jenis  : </label><br>
                <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="gambar">Jumlah  : </label><br>
                <input type="text" name="jumlah" id="jumlah" required><br><br>
            </li>
            <li>
                <label for="gambar">Keterangan  : </label><br>
                <input type="text" name="keterangan" id="keterangan" required><br><br>
            </li>
            <li>
                <input type="submit" name="submit" id="submit"><br><br>
                <a href="trackerpage.php">Backa</a>
            </li>
        </ul>
    </form>
</body>
</html>