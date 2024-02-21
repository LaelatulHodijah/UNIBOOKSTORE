<?php
include 'koneksi.php';

if(isset($_POST['id']) && isset($_POST['id_buku']) && isset($_POST['nama_buku']) && isset($_POST['harga'])){
    $id = $_POST['id'];
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE buku SET id_buku='$id_buku', nama_buku='$nama_buku', harga='$harga', stok='$stok' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();    
} else {
    echo "Invalid request.";
}
if(isset($_POST['id']) && isset($_POST['id_penerbit']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kota']) && isset($_POST['telepon'])){
    $id = $_POST['id'];
    $id_penerbit = $_POST['id_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE penerbit SET id_penerbit='$id_penerbit', nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Record update book successfully"); window.location.href = "admin.php";</script>';
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
} else {
    echo "Invalid request.";
}

?>