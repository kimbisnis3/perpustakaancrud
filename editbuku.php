<?php

$id = $_GET['id'];
include_once("config.php");
include_once("template.php");
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT
  mbuku.*,
  mgenre.nama namagenre
FROM
  mbuku
  LEFT OUTER JOIN mgenre ON mgenre.id = mbuku.ref_genre  WHERE mbuku.id=$id");
$genre = mysqli_query($mysqli, "SELECT * FROM mgenre ORDER BY id asc");
 
while($data = mysqli_fetch_array($result))
{
	$kode 	= $data['kode'];
	$judul 	= $data['judul'];
	$ref_genre 	= $data['ref_genre'];
	$namagenre 	= $data['namagenre'];
	$ktg 	= $data['ktg'];
	$tglbeli = $data['tglbeli'];
	$hrgbeli = $data['hrgbeli'];
	$tsawal = $data['tsawal'];
	$tsakhir = $data['tsakhir'];
}
?>

<div class="container panel panel-default">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="editbukuproses.php" method="POST" name="formsubmit">
		<div class="form-group">
			<label>Kode Buku</label>
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>"></input>
			<input class="form-control" id="kode" name="kode" value="<?php echo $kode; ?>"></input>
		</div>
		<div class="form-group">
			<label>Judul Buku</label>
			<input class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>"></input>
		</div>
		<div class="form-group">
		<label> Genre</label>
			<select class="form-control" id="ref_genre" name="ref_genre">
				<option value="<?php echo $ref_genre; ?>"><?php echo $namagenre; ?> </option>
			<?php  
    		while($datagenre = mysqli_fetch_array($genre)) {      
        echo "<option value='".$datagenre['kode']."'>".$datagenre['nama']."</option>";
    }
    ?>
			</select>
		</div>
		<div class="form-group">
		<label>Kategori</label><br>

			<input type="radio" name="ktg" class="sewa" value="Sewa"> Sewa<br>
  			<input type="radio" name="ktg" class="beli" value="Beli"> Beli<br>
		</div>
		<div class="form-group">
			<label>Tanggal Beli</label>
			<input class="form-control tgl" id="tglbeli" name="tglbeli" value="<?php echo $tglbeli; ?>"></input>
		</div>
		<div class="form-group">
			<label>Harga Beli</label>
			<input class="form-control" id="hrgbeli" name="hrgbeli" value="<?php echo $hrgbeli; ?>"></input>
		</div>
		<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label>Tanggal Sewa (dari)</label>
			<input class="form-control tgl" id="tsawal" name="tsawal" value="<?php echo $tsawal; ?>"></input>
			</div>	
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label>Tanggal Sewa (akhir)</label>
			<input class="form-control tgl" id="tsakhir" name="tsakhir" value="<?php echo $tsakhir; ?>"></input>
			</div>	
			</div>
		</div>
		<!--<button type="submit" class="btn btn-primary">Simpan</button>-->
		<input type="submit" class="btn btn-primary" name="Update" value="Update">
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