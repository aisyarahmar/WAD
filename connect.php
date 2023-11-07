<?php 

$conn = mysqli_connect('localhost', 'root', '', 'budget'); 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ad($data) {
    global $conn;

    $tanggal = htmlspecialchars($data["Tanggal"]);
    $jenis = htmlspecialchars($data["Jenis"]);
    $jumlah = htmlspecialchars($data["Jumlah"]);
    $keterangan = htmlspecialchars($data["Keterangan"]);

    $query = "INSERT INTO budget
        VALUES
        ('','$tanggal','$jenis','$jumlah','$keterangan')
        ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM budget WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $tanggal = htmlspecialchars($data["Tanggal"]);
    $jenis = htmlspecialchars($data["Jenis"]);
    $jumlah = htmlspecialchars($data["Jumlah"]);
    $keterangan = htmlspecialchars($data["Keterangan"]);

    $query = "UPDATE budger SET
            tanggal = '$tanggal',
            jenis = '$jenis',
            jumlah = '$jumlah'
            keterangan = '$keterangan'
            WHERE id = $id
            ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);   
}
?>