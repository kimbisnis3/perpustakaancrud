<?php

include_once("config.php");
 
if(isset($_POST['update']))
{	
		$id 		= $_POST['id'];
		$kode 		= $_POST['kode'];
		$judul 		= $_POST['judul'];
		$ref_genre 	= $_POST['ref_genre'];
		$ktg 		= $_POST['ktg'];
		$tglbeli 	= date('Y-m-d', strtotime($_POST['tglbeli']));
		$hrgbeli 	= $_POST['hrgbeli'];
		$tsawal 	= date('Y-m-d', strtotime($_POST['tsawal']));
		
		$tsakhir	= date('Y-m-d', strtotime($_POST['tsakhir']));
		
	include_once("config.php");

	$result = mysqli_query($mysqli, "UPDATE mbuku 
SET 
	kode 	= '$kode',
	judul 	= '$judul',
	ref_genre = '$ref_genre',
	ktg 	= '$ktg',
	tglbeli = '$tglbeli',
	hrgbeli = '$hrgbeli',
	tsawal 	= '$tsawal',
	tsakhir = '$tsakhir' 
WHERE
	id = $id");
	
	header("Location: masterbuku.php");
}
?>
