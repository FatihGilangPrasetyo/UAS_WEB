<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$nik=$_GET['nik'];
	$row = mysqli_query($koneksi, "DELETE FROM warga WHERE nik = '$nik'");
	header('location:warga.php');
}

elseif ($act=='input'){
	$nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$jk = $_POST["jk"];
	$alamat = $_POST["alamat"];
	$no_rumah = $_POST["no_rumah"];

	$sql = "INSERT INTO warga VALUES ('$nik','$nama','$jk','$alamat','$no_rumah')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:warga.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$nim = $_POST["nik"];
	$nama = $_POST["nama"];
	$jk = $_POST["jk"];
	$alamat = $_POST["alamat"];
	$no_rumah = $_POST["no_rumah"];

	$sql = "UPDATE warga SET nama='$nama', jk='$jk', alamat='$alamat', no_rumah='$no_rumah' WHERE nik='$nik'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:warga.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
