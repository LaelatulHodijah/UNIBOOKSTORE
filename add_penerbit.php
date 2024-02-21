<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $id_penerbit = $_POST['id_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO penerbit (id_penerbit, nama, alamat, kota, telepon) VALUES ('$id_penerbit', '$nama', '$alamat', '$kota', '$telepon')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New penerbit added successfully"); window.location.href = "admin.php";</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi database
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Penerbit</title>
</head>
<body>
    <h1>Add Penerbit</h1>
    
    <!-- Form untuk menambahkan penerbit -->
    <form action="add_penerbit.php" method="POST">
        <label for="id_penerbit">Id:</label><br>
        <input type="text" name="id_penerbit" id="id_penerbit"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat"><br>
        <label for="kota">Kota:</label><br>
        <input type="text" name="kota" id="kota"><br>
        <label for="telepon">Telepon:</label><br>
        <input type="text" name="telepon" id="telepon"><br>
        <button type="submit" name="submit">Add Penerbit</button>
    </form>
</body>
</html>
