<?php
include 'koneksi.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM buku WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_buku = $row['id_buku'];
        $nama_buku = $row['nama_buku'];
        $harga = $row['harga'];
        $stok = $row['stok'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <b><label for="id_buku">Kode Buku:</label><br></b> 
        <input type="text" name="id_buku" id="id_buku" value="<?php echo $id_buku; ?>"><br>
        <b><label for="nama_buku">Nama Buku:</label><br></b> 
        <input type="text" name="nama_buku" id="nama_buku" value="<?php echo $nama_buku; ?>"><br>
        <b><label for="harga">Harga:</label><br></b>
        <input type="text" name="harga" id="harga" value="<?php echo $harga; ?>"><br>
        <b><label for="stok">Stok:</label><br></b>
        <input type="text" name="stok" id="stok" value="<?php echo $stok; ?>"><br>
        <button type="submit" name="update_book">Update</button>
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
