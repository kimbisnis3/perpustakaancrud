<?php

include_once("config.php");
include_once("template.php");
$result = mysqli_query($mysqli, "SELECT * FROM mgenre ORDER BY id DESC");
?>


<div class="container">
<div>
	<a href="addgenre.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
</div>

<br>
<div>
	<table class="table" id="table"> 
		<thead>
			<tr>
				<td>Kode</td>
				<td>Nama</td>
				<td>Keterangan</td>
				<td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php  
    		while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['kode']."</td>";
        echo "<td>".$data['nama']."</td>";  
        echo "<td>".$data['ket']."</td>";  
        echo "<td><a class='btn btn-sm btn-warning' href='editgenre.php?id=$data[id]'>Edit</a> | <a class='btn btn-sm btn-danger' href='deletegenre.php?id=$data[id]'>Delete</a></td></tr>";        
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