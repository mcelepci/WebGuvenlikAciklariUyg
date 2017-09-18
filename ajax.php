<?php

$user = "root"; //veritabaný kullanýcý adý
$pwd = ""; //veritabaný þifresi
$host = "Localhost"; //mysql server
$db = "kou_siber"; //veritabaný adý


$connect = @mysql_connect($host,$user,$pwd) or die("Sizlere daha iyi hizmet vermek amacıyla bakımdayız. Teşekkürler.".mysql_error());
@mysql_select_db($db) or die("Veritabani secilemedi!!!".mysql_error());

mysql_query("SET CHARACTER SET UTF-8 ");
mysql_query("SET NAMES UTF8");
date_default_timezone_set('Asia/Kuwait');
error_reporting(0);
?>
<?php
if($_GET){
	$uyeid = $_GET['id'];
	$sqlsorgu = mysql_query("SELECT id FROM id=$uyeid");
	
	
	 while($yazdir=mysql_fetch_array($sqlsorgu)){//Metin Alanýný Metin Deðiþkenine Çekiyoruz.
	 	extract($yazdir);
	 	$ad = $yazdir['ad'];
	 	$soyad = $yazdir['soyad'];
	 	$mail = $yazdir['mail'];
	 	$array["veriler"] = dadasd;
	 } 
	 echo json_encode($array);
	}
	?>