<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$keterangan=$_GET['keterangan'];
	$row = mysqli_query($koneksi, "DELETE FROM iuran WHERE keterangan = '$keterangan'");
	header('location:iuran.php');
}

elseif ($act=='input'){
	$keterangan = $_POST["keterangan"];
	$tanggal = $_POST["tanggal"];
	$bulan = $_POST["bulan"];
	$tahun = $_POST["tahun"];
	
	$sql = "INSERT INTO iuran VALUES ('$keterangan','$tanggal','$bulan','$tahun')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:iuran.php');
	}
	else {echo "gagal";}

}

elseif ($act=='update'){
	$keterangan = $_POST["keterangan"];
	$tanggal = $_POST["tanggal"];
	$bulan = $_POST["bulan"];
	$tahun = $_POST["tahun"];
	$sql = "UPDATE iuran SET tanggal='$tanggal', bulan='$bulan' , tahun='$tahun' WHERE keterangan='$keterangan'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:iuran.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
