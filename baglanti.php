<?php

$user = "root"; //veritabanı kullanıcı adı
$pwd = ""; //veritabanı şifresi
$host = "Localhost"; //mysql server
$db = "kou_siber"; //veritabanı adı


$connect = @mysql_connect($host,$user,$pwd) or die("Sizlere daha iyi hizmet vermek amacıyla bakımdayız. Teşekkürler.".mysql_error());
@mysql_select_db($db) or die("Veritabani secilemedi!!!".mysql_error());

mysql_query("SET CHARACTER SET UTF-8 ");
mysql_query("SET NAMES UTF8");
date_default_timezone_set('Asia/Kuwait');
?>

