<?php
require 'connect.php';

$id = $_GET["id"];
$tes = query("SELECT * FROM budget where id = $id")[0];

if (isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data edited successfully!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data failed to edit!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Edit data</title>
</head>
<body>
    <h1>Edit data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tes["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Tanggal : </label><br>
                <input type="text" name="tanggal" id="tanggal" required value ="<?= $tes["Tanggal"]; ?>">
            </li>
            <li>
                <label for="harga">Jenis  : </label><br>
                <input type="text" name="jenis" id="jenis" required value ="<?= $tes["Jenis"]; ?>">
            </li>
            <li>
                <label for="gambar">Jumlah  : </label><br>
                <input type="text" name="jumlah" id="jumlah" required value ="<?= $tes["Jumlah"]; ?>"><br><br>
            </li>
            <li>
                <label for="gambar">Keterangan  : </label><br>
                <input type="text" name="keterangan" id="keterangan" required value ="<?= $tes["Keterangan"]; ?>"><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Edit data</button>
            </li>
        </ul>
    </form>
</body>
</html>