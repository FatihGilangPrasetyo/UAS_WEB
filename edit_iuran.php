<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Iuran</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("include/css.php"); ?>
	</head>
	<body>
		<header>
			<?php include("include/header.php"); ?>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
						<?php
						$keterangan = $_GET['keterangan'];
						$sqlquery = "SELECT * FROM iuran WHERE keterangan='$keterangan'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>

					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Iuran</div>
						<div class='panel-body'>
							<form method='post' action='aksi_iuran.php?act=update'>
								<div class='form-group'>
								<input type="hidden" name="keterangan" id="keterangan" value="<?php echo $row["keterangan"]; ?>">
									<label>tanggal</label>
									<input type='text' class='form-control' name='tanggal' value="<?php echo $row["tanggal"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>bulan</label>
									<input type='text' class='form-control' name='bulan' value="<?php echo $row["bulan"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>tahun</label>
									<input type='text' class='form-control' name='tahun' value="<?php echo $row["tahun"]; ?>" required/>
								</div>
								
								<button type='input' name='input' class='btn btn-success'>Edit</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
