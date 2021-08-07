
<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'sistemkas';
$databaseUsername = 'root';
$databasePassword = '';
$hari_ini = date("Y-m-d");
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>