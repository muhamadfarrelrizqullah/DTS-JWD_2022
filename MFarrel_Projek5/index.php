<!DOCTYPE html>
<html>
<head>
	<title>Digital Talent</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h2>List Mahasiswa</h2>
	<a class="tombol" href="input.php">Input Data Baru</a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
		$mahasiswa = mysqli_query($koneksi, "SELECT * FROM datamahasiswa");
		$no = 1;
		foreach ($mahasiswa as $row) {
			$jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' :'Laki laki';
			echo "<tr>
			<td>$no</td>
			<td>". $row['nim'] ."</td>
			<td>". $row['nama'] ."</td>
			<td>". $jenis_kelamin ."</td>
			<td>". $row['jurusan'] ."</td>
			<td>
			<a href='edit.php?id_mhs=$row[id_mhs]'>Edit</a>
            <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
            </td>
			</tr>";
			$no++;
		}
		?>
	</table>
</body>
</html>