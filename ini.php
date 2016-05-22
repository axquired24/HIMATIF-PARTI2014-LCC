<?php 
$host = "localhost";
$login = array("root","root");
$dbname = "lcc2014";
$koneksi = mysql_connect($host,$login[0],$login[1]) or die("Koneksi Gagal");
$db = mysql_select_db($dbname) or die("Database tidak ditemukan");
?>