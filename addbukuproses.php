<?php
		include_once("config.php");
		$kode 		= $_POST['kode'];
		$judul 		= $_POST['judul'];
		$ref_genre 	= $_POST['ref_genre'];
		$ktg 		= $_POST['ktg'];
		$tglbeli 	= date('Y-m-d', strtotime($_POST['tglbeli']));
		$hrgbeli 	= $_POST['hrgbeli'];
		$tsawal 	= date('Y-m-d', strtotime($_POST['tsawal']));
		
		$tsakhir	= date('Y-m-d', strtotime($_POST['tsakhir']));

		$result = mysqli_query($mysqli, "INSERT INTO mbuku(kode,judul,ref_genre,ktg,tglbeli,hrgbeli,tsawal,tsakhir) VALUES('$kode','$judul','$ref_genre','$ktg','$tglbeli','$hrgbeli','$tsawal','$tsakhir')");
		
		header('location:masterbuku.php');
	?>