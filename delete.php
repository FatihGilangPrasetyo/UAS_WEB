<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$keterangan = $_GET['keterangan'];
$tanggal = $_GET['tanggal'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun']; 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM iuran WHERE keterangan=$keterangan");
$result = mysqli_query($mysqli, "DELETE FROM iuran WHERE tanggal=$tanggal");
$result = mysqli_query($mysqli, "DELETE FROM iuran WHERE bulan=$bulan");
$result = mysqli_query($mysqli, "DELETE FROM iuran WHERE tahun=$tahun");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>