<?php
include_once("config.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "DELETE FROM mgenre WHERE id=$id");

header("Location:mastergenre.php");
?>