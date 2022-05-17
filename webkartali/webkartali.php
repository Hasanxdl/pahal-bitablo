<?php ob_start(); session_start();

try{
	  $connn = new PDO('mysql:host=localhost;dbname=webka_mobil;charset=utf8','root','');
	}catch(PDOException $e){
		echo 'Hata: '.$e->getMessage();
	}

$title     = "Webkartalı V.01";  
$kullanici = "admin";
$sifresi   = "123";


?>
