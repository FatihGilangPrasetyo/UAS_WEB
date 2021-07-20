<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data Warga</title>
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
					<div class='panel panel-success'>
						<div class='panel-heading'>Tambah Data Warga</div>
						<div class='panel-body'>
							<form method='post' action='aksi_warga.php?act=input'>
								<div class='form-group'>
									<label>nik</label>
									<input type='text' class='form-control' name='nik' required/>
								</div>
								<div class='form-group'>
									<label> nama </label>
									<input type='text' class='form-control' name='nama' required/>
								</div>
								<div class='form-group'>
									<label>jk</label>
									<input type='text' class='form-control' name='jk' required/>
                               </div>
								<div class='form-group'>
									<label>alamat</label>
									<input type='text' class='form-control' name='alamat' required/>
                                </div>
								<div class='form-group'>
									<label>no_rumah</label>
									<input type='text' class='form-control' name='no_rumah' required/>
                               
                                </div>

                                
								<button type='input' name='input' class='btn btn-success'>Simpan</button>
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
