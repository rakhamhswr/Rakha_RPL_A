<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>registrasi</title>
	<link rel="stylesheet" type="text/css" href="register.css">
<body>

<nav class="w-nav">
		
	<div class="navigasi">
			
		<a href="">Beranda</a>
		<a href="">Armada</a>
		<a href="">Paket Wisata</a>
		<a href="">Hubungi Kami</a>

	</div>

</nav>
<div class="bg-image">
		
	<div class="shadow-image">
		


	</div>

</div>


<h2> <center>Input registrasi</center> </h2>	
	<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
	<div class="kotak">
 	<form method="post" action="simpan1.php">
 	<div class="tulisan">
 			<div style="margin: 15px," align="center" >
	 		<input type="Text" name="nama" placeholder="Nama" >
	 		</div>
	 		<div style="margin: 15px" align="center">
	 		<input type="number" name="no_telpon" placeholder="No. Telpon">
			</div>
			<div style="margin: 15px" align="center" >
	 		<input type="Text" name="alamat" placeholder="Alamat">
	 		</div>
	 		<div style="margin:15px" align="center">
	 		<input type="number" name="no_rekening" placeholder="No. Rekening">
	 		</div>
	 		<div style="margin:15px" align="center">
	 		<p>PILIH JAMINAN</p>
	 		<input type="radio" name="jaminan" value="BPKB">BPKB
			<input type="radio" name="jaminan" value="KTP">KTP
			</div>
			<div style="margin: 15px" align="center">
	 		<input type="submit" value="SIMPAN" name="daftar">
	 		</div>
	 		<div class="data">
	 		<a href="lihat.php"> lihat data</a>	
	 		</div>
	</form>
	</div>
	</div>	
	</div>

	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>