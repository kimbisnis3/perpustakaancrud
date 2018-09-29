<?php

include_once("config.php");
include_once("template.php");
$result = mysqli_query($mysqli, "SELECT * FROM mgenre ORDER BY id asc");
?>
<div class="container panel panel-default">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="addgenreproses.php" method="POST" name="formsubmit">
		<div class="form-group">
			<label>Kode Genre</label>
			<input class="form-control" id="kode" name="kode"></input>
		</div>
		<div class="form-group">
			<label>Nama Genre</label>
			<input class="form-control" id="nama" name="nama"></input>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input class="form-control" id="ket" name="ket"></input>
		</div>
		<!--<button type="submit" class="btn btn-primary">Simpan</button>-->
		<input type="submit" class="btn btn-primary" name="Submit" value="Simpan">
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