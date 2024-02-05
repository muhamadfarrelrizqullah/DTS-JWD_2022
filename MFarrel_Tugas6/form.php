<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi</title>
</head>
<body>
	<h1>Membuat Form Validasi Dengan PHP</h1>
	<?php
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan! </h4>";
		}
	} 

	if (isset($_GET['alamat'])){
		if($_GET['alamat'] == "kosong"){
			echo "<h4 style='color:red'>Alamat Belum Di Masukkan! </h4>";
		}
	} 

	if (isset($_GET['tempat'])){
		if($_GET['tempat'] == "kosong"){
			echo "<h4 style='color:red'>Tempat Belum Di Masukkan! </h4>";
		}
	} 

	if (isset($_GET['jeniskelamin'])){
		if($_GET['jeniskelamin'] == "kosong"){
			echo "<h4 style='color:red'>Jenis Kelamin Belum Di Masukkan! </h4>";
		}
	} 

	if (isset($_GET['usia'])){
		if($_GET['usia'] == "kosong"){
			echo "<h4 style='color:red'>Usia Belum Di Masukkan! </h4>";
		}
	} 
	?>

	<h4>Masukkan Biodata Anda :</h4>
		<form action="cek.php" method="post">
			<table>
				<tr>
					<td>Nama&emsp;&emsp;&emsp;&emsp;:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat&emsp;&emsp;&emsp;&ensp;:</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Tempat&emsp;&emsp;&emsp;&ensp;:</td>
					<td><input type="text" name="tempat"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin&ensp; :</td>
					<td><input type="radio" name="jeniskelamin" value="laki laki">Laki laki</td>
				</tr>
			    <tr>
			        <td></td>
			        <td><input type="radio" name="jeniskelamin" value="perempuan">Perempuan</td>
			    </tr>    
				<tr>
					<td>Usia&ensp;&emsp;&emsp;&emsp;&emsp;:</td>
					<td><input type="text" name="usia"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Cek"></td>
					<td><input type="reset"></td>
				</tr>
			</table>
		</form>
</body>
</html>