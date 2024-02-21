<?php
include 'koneksi.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM buku WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>alert("Record deleted successfully"); window.location.href = "admin.php";</script>';
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
