<?php

require "koneksi.php";
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$sql = "INSERT INTO customer VALUES ('', '$nama', '$no_hp', '$email')";

    mysqli_query ($conn, $sql);
    header ("location : datacustomer.php");

?>