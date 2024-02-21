<?php
include 'koneksi.php';
if(isset($_POST['id']) && isset($_POST['id_penerbit']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kota']) && isset($_POST['telepon'])){
    $id = $_POST['id'];
    $id_penerbit = $_POST['id_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE penerbit SET id_penerbit='$id_penerbit', nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Record update penerbit successfully"); window.location.href = "admin.php";</script>';
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
