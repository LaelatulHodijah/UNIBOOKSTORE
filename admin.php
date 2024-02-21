<?php
include 'header.php';
?>
<body>
    <h2>Admin Panel</h2>
    <form action="add_buku.php" method="POST">
        <label for="nama_buku">Tambah Buku Baru:</label>
        <button type="submit" name="add">Add Book</button>
    </form>

    <h2>Table Buku</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_buku"] . "</td>";
                echo "<td>" . $row["nama_buku"] . "</td>";
                echo "<td>" . $row["harga"] . "</td>";
                echo "<td>" . $row["stok"] . "</td>";
                echo "<td>";
                echo "<a href='edit_buku.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete_buku.php?id=" . $row["id"] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>

    <h2>Table Penerbit</h2>
    <form action="add_penerbit.php" method="POST">
        <label for="nama">Tambah Penerbit:</label>
        <button type="submit" name="add">Add Penerbit</button>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Telpon</th>
            <th>Action</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM penerbit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_penerbit"]. "</td>";
                echo "<td>" . $row["nama"]. "</td>";
                echo "<td>" . $row["alamat"]. "</td>";
                echo "<td>" . $row["kota"]. "</td>";
                echo "<td>" . $row["telepon"]. "</td>";
                echo "<td>";
                echo "<a href='edit_penerbit.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete_penerbit.php?id=" . $row["id"] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>