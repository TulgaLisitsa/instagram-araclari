<?php 

include("../db/index.php");
$bag = new db();


if ($_POST) {
	$id = $_POST["id"];
	$k = $_POST["kadi"];
	$sil = $bag->sil("etkilesim", "WHERE id=?", array($id));
	if ($sil){
	  echo "Başarılu";
	  	header('Refresh:1.1; url=index.php');
	 
	}else{
	  echo "Hata";
	  header('Refresh:1.1; url=index.php');

	}
}






 ?>