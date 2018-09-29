<?php

$id = $_GET['id'];
include_once("config.php");
include_once("template.php");
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mgenre WHERE id=$id");
$genre = mysqli_query($mysqli, "SELECT * FROM mgenre ORDER BY id asc");
 
while($data = mysqli_fetch_array($result))
{
	$kode 	= $data['kode'];
	$nama 	= $data['nama'];
	$ket 	= $data['ket'];
}
?>

<div class="container panel panel-default">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="editbukuproses.php" method="POST" name="formsubmit">
		<div class="form-group">
			<label>Kode Genre</label>
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>"></input>
			<input class="form-control" id="kode" name="kode" value="<?php echo $kode; ?>"></input>
		</div>
		<div class="form-group">
			<label>Nama Genre</label>
			<input class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>"></input>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>"></input>
		</div>
		<!--<input type="submit" class="btn btn-primary" name="Update" value="Update">-->
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
	</div>
</div>
</div>

<script>
	
	$(function () {
          $('.tgl').datepicker({
            format: "dd-mm-yyyy",
            todayHighlight: true,
            singleDatePicker: true,
            timePicker: false, 
            autoclose : true,
          });
        });
</script>