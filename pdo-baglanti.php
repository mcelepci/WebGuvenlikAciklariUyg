<?php
try{
	$dns = 'mysql:host=localhost;dbname=kou_siber';
	$user = 'root';
	$pass = '';
	$db = new PDO($dns, $user, $pass);
	$db -> exec("SET CHARACTER SET UTF8 ");
}catch(PDOException $e ){
	die('baglantı yok : '.$e->getMessage());
	
}



?>

