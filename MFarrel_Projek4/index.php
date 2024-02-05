<!DOCTYPE html>
<html>
<head>
	<title>Digital Talent</title>
</head>

<body>
	<h2>List Mahasiswa</h2>
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
			<a href=''>Edit</a>
			<a href=''>Delete</a>
			</td>
			</tr>";
			$no++;
		}
		?>
	</table>
</body>
</html>