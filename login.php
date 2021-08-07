<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Login</title>
			<link rel="stylesheet" href="css/stylelogin.css" />
		</head>
		<body>
			<?php
				require('config.php');
				session_start();
				// If form submitted, insert values into the database.
				if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($koneksi,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($koneksi,$password);
		
	//Checking is user existing in the database or not
        $sql = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($koneksi,$sql) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "
			<div class='form'>
				<h3>Username/password Salah.</h3>
				<br/>Silahkan Klik disini 
				<a href='login.php'>Login</a>
			</div>";
				}
    }else{
?>
			<div class="form">
			<fieldset style="margin-top: 100px;">
				<center><p><h1>LOGIN SISTEM AKADEMIK</h1></p></center>
				<form action="" method="post" name="login">
					
					<center>
						<input type="text" name="username" placeholder="Username" required />
					</center>
					<center><input type="password" name="password" placeholder="Password" required /></center>
						<input name="submit" type="submit" value="Login" />
				</form>
				<center>				<p>Belum terdaftar? 
					<a href='registrasi.php'>Silahkan Daftar Disini</a>
				</p>
				</center>

				</fieldset>
			</div>
			<?php } ?>
		</body>
	</html>
