<?php
include_once("config.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "DELETE FROM mbuku WHERE id=$id");

header("Location:masterbuku.php");
?>