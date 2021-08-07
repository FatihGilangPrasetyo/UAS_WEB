<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Warga</title>
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
						$nik = $_GET['nik'];
						$sqlquery = "SELECT * FROM warga WHERE nik='$nik'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>
					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Warga</div>
						<div class='panel-body'>
							<form method='post' action='aksi_warga.php?act=update'>
								<div class='form-group'>
									<input type="hidden" name="nik" id="nik" value="<?php echo $row["nik"]; ?>">
									<label>nama</label>
									<input type='text' class='form-control' name='nama' value="<?php echo $row["nama"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>jk</label>
									<input type='text class='form-control' name='jk' value="<?php echo $row["jk"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>alamat</label>
									<input type='text' class='form-control' name='alamat' value="<?php echo $row["alamat"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>no_rumah</label>
									<input type='text' class='form-control' name='no_rumah' value="<?php echo $row["no_rumah"]; ?>" required/>
								</div>
								<button type='input' name='update' class='btn btn-success'>Edit</button>
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