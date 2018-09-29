
<?php

include_once("config.php");
include_once("template.php");
$result = mysqli_query($mysqli, "SELECT
  *
FROM
  mpasien
ORDER BY
  id ASC");
?>


<div class="container">
<div>
  <div class="row">
  <div class="col-md-2">
	<a href="add.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
    
  </div>
 
  </div>
</div>

<br>
<div>
	<table class="table" id="table"> 
		<thead>
			<tr>
				<td>Kode</td>
				<td>Nama</td>
		        <td>Jenis Kelamin</td>
				<td>Alamat</td>
		        <td>No. Telepon</td>
		        <td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php  
    		while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['kode']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['kelamin']."</td>";
        echo "<td>".$data['alamat']."</td>";  
        echo "<td>".$data['telp']."</td>";
        echo "<td><a class='btn btn-sm btn-warning' href='edit.php?id=$data[id]'>Edit</a> | <a class='btn btn-sm btn-danger' href='delete.php?id=$data[id]'>Hapus</a></td></tr>";        
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