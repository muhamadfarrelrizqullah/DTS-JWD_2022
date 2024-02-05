<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
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

	<form id="updateData" action="update.php" method="POST">
    <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim" value="<?php echo $nim?>"</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $nama?>"</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            	<select name="jenis_kelamin">
            		<option value="P" <?php echo $jenis_kelamin == 'P' ? 'selected="selected"' : '' ?>>Perempuan</option>
            		<option value="L" <?php echo $jenis_kelamin == 'L' ? 'selected="selected"' : '' ?>>Laki laki</option>
            	</select>
            </td>
            
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            	<select name="jurusan">
            		<option value="Teknik Informatika" <?php echo $jurusan == 'Teknik Informatika' ? 'selected="selected"' : '' ?>>Teknik Informatika</option>
            		<option value="Teknik Mesin" <?php echo $jurusan == 'Teknik Mesin' ? 'selected="selected"' : '' ?>>Teknik Mesin</option>
            		<option value="Teknik Kimia" <?php echo $jurusan == 'Teknik Kimia' ? 'selected="selected"' : '' ?>>Teknik Kimia</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" value="Simpan">Simpan</button></td>
            <td colspan="2"><button type="reset" value="Reset">Reset</button></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id_mhs" value="<?php echo $id_mhs; ?>"></td>
        </tr>
    </table>
</form>

</body>
</html>