<!DOCTYPE html>
<html>
<head>
	<title>Digital Talent</title>
	<link rel="stylesheet" type="text/css" href="styleLanding.css">
	<style type="text/css">
		h2, a, table{
			margin-left: 20px;
			margin-top: 10px;
		}

		p{
			margin-left: 20px;
			margin-top: 5px;

		}

		h2{
			height: 35px;
		}

		a{
			color: black;
			text-decoration: none;	
		}

		table {
			margin-top: 10px;
		    font-family: sans-serif;
		    color: #00000;
		    border-collapse: collapse;
		}
		 
		table, th, td {
		    border: 1px solid #00000;
		    padding: 8px 20px;
		}

		th {
		    background-color: #95A5A6;
		    text-transform: uppercase;
		    letter-spacing: 0.03em;
		}

		.edit_btn {
		    text-decoration: none;
		    padding: 3px 6px;
		    background: #314E52;
		    color: white;
		    border-radius: 5px;
		}

		.del_btn {
		    text-decoration: none;
		    padding: 3px 6px;
		    color: white;
		    border-radius: 5px;
		    background: #DC143C;
        }
	</style>
</head>

<body>
	<nav>
	  <div class="nav-item">
	    <a class="nav-link" href="https://digitalent.kominfo.go.id/"><img src="https://digitalent.ai/wp-content/uploads/2021/12/DIGITALENT_logotype_couleur@3x.png" style="width:80px;height:15px;margin-top: 2px;"></a>
	  </div>
	  <div class="nav-item">
	    <a class="nav-link" href="landing.php"><b>Beranda</b></a>
	  </div>
	  <div class="nav-item">
	    <a class="nav-link active" href="index.php"><b>Calon Peserta</b></a>
	  </div>
	  <div class="nav-item">
	    <a class="nav-link" href="input.php"><b>Daftar Baru</b></a>
	  </div>
	</nav>

	<h2>List Mahasiswa Calon Peserta Digital Talent</h2>
	<p>Berikut ini Daftar Calon Peserta Digital Talent 2022 :</p>
	
	<table border="1">
		<tr>
			<th><b>No</b></th>
			<th><b>Nim</b></th>
			<th><b>Nama</b></th>
			<th><b>Gender</b></th>
			<th><b>Jurusan<b></th>
			<th><b>Action</b></th>
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
			<a href='edit.php?id_mhs=$row[id_mhs]' class='edit_btn'>Edit</a>
            <a href='delete.php?id_mhs=$row[id_mhs]' class='del_btn'>Delete</a>
            </td>
			</tr>";
			$no++;
		}
		?>
	</table>
</body>
</html>