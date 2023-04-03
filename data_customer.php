<?php
require 'koneksi.php';
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn,$sql);
?>

<!doctype html>
<head></head>

<body>
<a href="form_customer.html">Tambah Data customer</a>
    <table border=4px solid yellow>
         <tr>
            <th>ID Customer</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $row['id_customer'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                <a href="editform_customer.php?id_customer=<?=$row['id_customer']?>" ?>Edit</a>
                <a href="delete_customer.php?id_customer=<?=$row['id_customer']?>" ?>Hapus</a>
            </td>
            </tr>
        <?php endwhile; ?>
    </body>
 </html>