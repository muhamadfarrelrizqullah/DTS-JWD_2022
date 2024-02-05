<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Inputan Data</title>
</head>

<body>
	<form id="inputData" action="simpan.php" method="POST">
    <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            	<input type="radio" name="jenis_kelamin" value="P">Perempuan
            	<input type="radio" name="jenis_kelamin" value="L">Laki laki
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            	<select name="jurusan">
            		<option value="Teknik Informatika">Teknik Informatika</option>
            		<option value="Teknik Mesin">Teknik Mesin</option>
            		<option value="Teknik Kimia">Teknik Kimia</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" value="Simpan">Simpan</button></td>
        </tr>
    </table>
</form>

</body>
</html>