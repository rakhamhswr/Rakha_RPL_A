<?php  ?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>lihat data</title>
	<link rel="stylesheet" type="text/css" href="lihat.css">
</head>
<body >
<h1>Data User</h1>
<?php 
	include("sambung.php");
	$sql="SELECT * FROM user";
	$query=mysqli_query($con,$sql);

 ?>
	

	<br>

	<table  border="1" class="table table-dark">
		<thead>
			<tr>
				<th>ID</th>
				<th>nama</th>
				<th>no. telpon</th>
				<th>alamat</th>
				<th>no. rekening</th>
				<th>jaminan</th>
				<th colspan="2">Hapus/Edit</th>
			</tr>
		</thead>	
		<tbody>
		<?php foreach ($query as $row): ?>
			<tr>
				<td><?= $row['id']; 	  ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['no_telpon']; ?></td>
				<td><?= $row['alamat'];	  ?></td>
				<td><?= $row['no_rekening']; ?></td>
				<td><?= $row['jaminan'] ?></td>
				<td>
					<?php

						 echo " <a href='hapus1.php?id=$row[id]'>Delete</a>";

					?>
				</td>
				<td>
					<?php

						 echo "<a href='ubah.php?id=$row[id]'>Edit</a>";

					?>
				</td>

				
			</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
	<nav>
		<a href="register.php">[+] Tambah username</a>
	</nav>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>