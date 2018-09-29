<?php

include_once("config.php");
include_once("template.php");
$result = mysqli_query($mysqli, "SELECT * FROM mgenre ORDER BY id asc");
?>
<div class="container panel panel-default">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="addbukuproses.php" method="POST" name="formsubmit">
		<div class="form-group">
			<label>Kode Buku</label>
			<input class="form-control" id="kode" name="kode"></input>
		</div>
		<div class="form-group">
			<label>Judul Buku</label>
			<input class="form-control" id="judul" name="judul"></input>
		</div>
		<div class="form-group">
		<label> Genre</label>
			<select class="form-control" id="ref_genre" name="ref_genre">
				<option></option>
			<?php  
    		while($data = mysqli_fetch_array($result)) {      
        echo "<option value='".$data['id']."'>".$data['nama']."</option>";
    }
    ?>
			</select>
		</div>
		<div class="form-group">
		<label>Kategori</label><br>

			<input type="radio" name="ktg" value="Sewa"> Sewa<br>
  			<input type="radio" name="ktg" value="Beli"> Beli<br>
		</div>

		<div class="form-group">
			<label>Tanggal Beli</label>
			<input class="form-control tgl" id="tglbeli" name="tglbeli"></input>
		</div>
		<div class="form-group">
			<label>Harga Beli</label>
			<input type="number" class="form-control" id="hrgbeli" name="hrgbeli"></input>
		</div>
		<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label>Tanggal Sewa (dari)</label>
			<input class="form-control tgl" id="tsawal" name="tsawal"></input>
			</div>	
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label>Tanggal Sewa (akhir)</label>
			<input class="form-control tgl" id="tsakhir" name="tsakhir"></input>
			</div>	
			</div>
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