<?php
include 'header.php';
?>
<body>
    <form action="index.php" method="GET">
        <h3><label for="search">Search by Book Name:</label></h3>
        <input type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>

    <h2>Book List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM buku";
        if(isset($_GET['search']) && !empty($_GET['search'])) {
            $search = $_GET['search'];
            $sql .= " WHERE nama_buku LIKE '%$search%'";
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_buku"]. "</td>";
                echo "<td>" . $row["nama_buku"]. "</td>";
                echo "<td>" . $row["harga"]. "</td>";
                echo "<td>" . $row["stok"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
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
