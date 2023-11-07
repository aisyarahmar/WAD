<?php   
require 'connect.php';
$toko = query("SELECT * FROM budget") //ini blm diganti
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tracker Page</title>
</head>
<body>
    <h1>Tracker Page</h1>

    <a href="add.php">Add data</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($trackerpage as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"]; ?>" >Edit</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('Are you sure?');">Delete</a>
            </td>
            <td><?= $row["Tanggal"]; ?></td>
            <td><?= $row["Jenis"]; ?></td>
            <td><?= $row["Jumlah"]; ?></td>
            <td><?= $row["Keterangan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body> 