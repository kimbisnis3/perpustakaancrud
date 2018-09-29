<?php

include_once("config.php");
include_once("template.php");
$result = mysqli_query($mysqli, "SELECT
  mbuku.*,
  mgenre.nama namagenre
FROM
  mbuku
  LEFT OUTER JOIN mgenre ON mgenre.id = mbuku.ref_genre 
ORDER BY
  id ASC");
?>


<div class="container">
<div>
  <div class="row">
  <div class="col-md-2">
	<a href="addbuku.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
    
  </div>
  <form method="get" action="hasil.php" name="formfilter">
  <div class="col-md-3">
    <label></label>
    <input type="text" class="form-control filter" name="tsawal" placeholder="Dari"></input>
  </div>
  <div class="col-md-3">
    <label></label>
    <input type="text" class="form-control filter" name="tsakhir" placeholder="Ke"></input>
  </div>
  <div class="col-md-3">
    <label></label>
    <button class="btn btn-primary" type="submit">Filter</button>
  </div>
  </form>
  </div>
</div>

<br>
<div>
	<table class="table" id="table"> 
		<thead>
			<tr>
				<td>Kode</td>
				<td>Judul</td>
				<td>Genre</td>
        <td>Kategori</td>
        <td>Tgl Beli</td>
        <td>Harga</td>
        <td>Tgl Sewa Awal</td>
        <td>Tgl Sewa Akhir</td>
        <td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php  
    		while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['kode']."</td>";
        echo "<td>".$data['judul']."</td>";
        echo "<td>".$data['namagenre']."</td>";
        echo "<td>".$data['ktg']."</td>";  
        echo "<td>".$data['tglbeli']."</td>";
        echo "<td>".number_format($data['hrgbeli'])."</td>";
        echo "<td>".$data['tsawal']."</td>";
        echo "<td>".$data['tsakhir']."</td>";
        echo "<td><a class='btn btn-sm btn-warning' href='editbuku.php?id=$data[id]'>Edit</a> | <a class='btn btn-sm btn-danger' href='deletebuku.php?id=$data[id]'>Delete</a></td></tr>";        
    }
    ?>
		</tbody>
	</table>
</div>
</div>
<script src="assets/datatables/jquery.dataTables.js"></script>
<script>
	
	$(document).ready(function() {

      table = $('#table').DataTable();  


      });
</script>
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

<script>
  
  $(function () {
          $('.filter').datepicker({
            format: "yyyy-mm-dd",
            todayHighlight: true,
            singleDatePicker: true,
            timePicker: false, 
            autoclose : true,
          });
        });
</script>