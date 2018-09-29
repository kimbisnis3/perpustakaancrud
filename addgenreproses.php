<?php
		include_once("config.php");
		$kode 		= $_POST['kode'];
		$nama 		= $_POST['nama'];
		$ket 		= $_POST['ket'];

		$result = mysqli_query($mysqli, "INSERT INTO mgenre(kode,nama,ket) VALUES('$kode','$nama','$ket')");
		
		header('location:mastergenre.php');
	?>