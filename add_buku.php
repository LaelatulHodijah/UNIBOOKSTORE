<?php
include 'koneksi.php';
if(isset($_POST['submit'])) {
    $id_buku = $_POST['id_buku'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $penerbit = $_POST['penerbit'];
    $sql = "INSERT INTO buku (id_buku, kategori, nama_buku, harga, stok, penerbit) VALUES ('$id_buku', '$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New buku added successfully"); window.location.href = "admin.php";</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<body>
    <h1>Add Book</h1>
    <form action="add_buku.php" method="POST">
        <label for="id_buku">Id Buku:</label><br>
        <input type="text" name="id_buku" id="id_buku"><br>
        <label for="kategori">Kategori:</label><br>
        <input type="text" name="kategori" id="kategori"><br>
        <label for="nama_buku">Nama Buku:</label><br>
        <input type="text" name="nama_buku" id="nama_buku"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" id="harga"><br>
        <label for="stok">Stok:</label><br>
        <input type="text" name="stok" id="stok"><br>
        <label for="penerbit">Penerbit:</label><br>
        <input type="text" name="penerbit" id="penerbit"><br>
        <button type="submit" name="submit">Add Book</button>
    </form>
</body>
</html>
