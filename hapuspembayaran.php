<?php
include 'koneksi.php';
$id_pembayaran = $_GET['id_pembayaran'];
$query = "delete from pembayaran where id_pembayaran='$id_pembayaran'";
mysqli_query($koneksi, $query);
header("location:tbl_pembayaran.php");
?>