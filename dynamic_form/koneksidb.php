<?php
$db_host	= 'localhost'; 
$db_usn		= 'root'; //nama username
$db_pwd		= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db_name	= 'wika_release'; //nama database

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>
<!-- 
<?
//Define Database Connection6
$dbhostname		= "dbhcis.wika.co.id";
$dbusername		= "sa"; 
$dbpassword		= "WIKAhcis@2017";
$dbname			= "hris_wika";
$dbname_rec		= "hris_wika_rec.dbo";
?> -->