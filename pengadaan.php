<?php
include 'header.php';
?>
<body>
    <h1>Pengadaan Buku</h1>
    <h2>Buku Perlu Pengadaan Segera</h2>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Stok Buku</th>
        </tr>
        <?php
        include 'koneksi.php';
        $sql = "SELECT nama_buku, penerbit, stok FROM buku ORDER BY stok ASC LIMIT 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nama_buku"]. "</td>";
                echo "<td>" . $row["penerbit"]. "</td>";
                echo "<td>" . $row["stok"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No books need immediate procurement.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    
    <h2>Penerbit</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Penerbit</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Telpon</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM penerbit";
        if(isset($_GET['search']) && !empty($_GET['search'])) {
            $search = $_GET['search'];
            $sql .= " WHERE nama LIKE '%$search%'";
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_penerbit"]. "</td>";
                echo "<td>" . $row["nama"]. "</td>";
                echo "<td>" . $row["alamat"]. "</td>";
                echo "<td>" . $row["kota"]. "</td>";
                echo "<td>" . $row["telepon"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    </div>
</body>
</html>
