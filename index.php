<?php
include("config.php");
?>

<!DOCTYPE html>

<html>

<head>

  <title>Homepage</title>

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

        <div class="jumbotron">

          <center>
            <h1>Data Iuran Kas </h1>

            <p>Aplikasi Sistem Iuran Kas</p>

            <p>

              

              <a class='btn btn-info' href='warga.php'>Data Warga</a>
              
              <a class='btn btn-primary' href='anggota.php'>Iuran</a>
  

              <a class='btn btn-success' href='laporan.php'>Laporan dan Cetak</a>
              

            </center>

          </div>

        </div>

      </div>

    </div>
    <?php include("include/footer.php"); ?>
  </body>
  <?php include("include/js.php"); ?>
</html>