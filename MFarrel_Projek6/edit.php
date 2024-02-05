<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="styleLanding.css">
    <style type="text/css">
        h2, table{
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

        table{
            border-spacing: 10px;
        }

        button{
            margin-top: 10px;
            border: none;
            padding: 6px 15px;
            background-color: white; 
            color: black; 
            border: 1px solid #000000;
            border-radius: 8px;
        }

        button:hover {
            background-color: #314E52;
            color: white;
        } 

    </style>
</head>

<body>
    <?php
    include('koneksi.php');
    $id_mhs = (isset($_GET['id_mhs']))?$_GET['id_mhs']:'';
     
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
    $query = mysqli_query($koneksi, "SELECT * FROM datamahasiswa WHERE id_mhs='$id_mhs'");
    $data = mysqli_fetch_array($query);
     
    $id_mhs = $data['id_mhs'];
    $nim = $data['nim'];
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $jurusan = $data['jurusan'];
    $alamat = $data['alamat'];
    ?>

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

    <h2>Form Edit Calon Peserta Digital Talent</h2>
    <p>Berikut ini Form Edit Calon Peserta Digital Talent 2022 :</p>

	<form id="updateData" action="update.php" method="POST">
    <table>
        <tr>
            <td><b>Nim &nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;:</b></td>
            <td><input type="text" name="nim" value="<?php echo $nim?>"</td>
        </tr>
        <tr>
            <td><b>Nama &emsp;&emsp;&emsp;&emsp;:<b></td>
            <td><input type="text" name="nama" value="<?php echo $nama?>"</td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin :<b></td>
            <td>
            	<input type="radio" name="jenis_kelamin" value="P" <?php echo $jenis_kelamin== 'P' ? 'checked="checked"' : '' ?>> Perempuan
                <input type="radio" name="jenis_kelamin" value="L" <?php echo $jenis_kelamin== 'L' ? 'checked="checked"' : '' ?>> Laki laki
            </td>
            
        </tr>
        <tr>
            <td><b>Jurusan &emsp;&emsp;&ensp;&nbsp;:<b></td>
            <td>
            	<select name="jurusan">
            		<option value="Teknik Informatika" <?php echo $jurusan == 'Teknik Informatika' ? 'selected="selected"' : '' ?>>Teknik Informatika</option>
            		<option value="Teknik Mesin" <?php echo $jurusan == 'Teknik Mesin' ? 'selected="selected"' : '' ?>>Teknik Mesin</option>
            		<option value="Teknik Kimia" <?php echo $jurusan == 'Teknik Kimia' ? 'selected="selected"' : '' ?>>Teknik Kimia</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td><b>Alamat &emsp;&emsp;&emsp;&nbsp;:<b></td>
            <td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" value="Simpan">Simpan</button></td>
        </tr>
        <tr>
            <td ><input type="hidden" name="id_mhs" value="<?php echo $id_mhs; ?>"></td>
        </tr>
    </table>
</form>

</body>
</html>