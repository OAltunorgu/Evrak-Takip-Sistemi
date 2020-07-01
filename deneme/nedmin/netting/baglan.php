<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=deneme;charset=utf8",'root','43361710');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>