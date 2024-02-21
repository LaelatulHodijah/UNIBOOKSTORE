<?php
include 'koneksi.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    // Mengambil nilai id buku dari URL
    $id = $_GET['id'];

    $sql = "SELECT * FROM penerbit WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_penerbit = $row['id_penerbit'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $kota = $row['kota'];
        $telepon = $row['telepon'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penerbit</title>
</head>
<body>
    <h1>Edit Penerbit</h1>
    
    <form action="update_penerbit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <b><label for="id_penerbit">Kode Penerbit:</label><br></b> 
        <input type="text" name="id_penerbit" id="id_penerbit" value="<?php echo $id_penerbit; ?>"><br>
        <b><label for="nama">Nama Penerbit:</label><br></b> 
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br>
        <b><label for="alamat">Alamat:</label><br></b>
        <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>"><br>
        <b><label for="kota">Stok:</label><br></b>
        <input type="text" name="kota" id="kota" value="<?php echo $kota; ?>"><br>
        <b><label for="telepon">Telepon:</label><br></b>
        <input type="text" name="telepon" id="telepon" value="<?php echo $telepon; ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
<?php
    } else {
        echo "Book not found.";
    }
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
