<?php

include_once("config.php");
 
		$id 		= $_POST['id'];
		$kode 		= $_POST['kode'];
		$nama 		= $_POST['nama'];
		$ket 		= $_POST['ket'];
		
	//include_once("config.php");
	
	$result = mysqli_query($mysqli, "UPDATE mgenre 
SET kode = '$kode',
nama = '$nama',
ket = '$ket'
WHERE
	id = $id");
	
	header("Location: mastergenre.php");

?>
