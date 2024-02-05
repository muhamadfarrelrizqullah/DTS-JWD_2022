<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
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
    <nav>
      <div class="nav-item">
        <a class="nav-link" href="https://digitalent.kominfo.go.id/"><img src="https://digitalent.ai/wp-content/uploads/2021/12/DIGITALENT_logotype_couleur@3x.png" style="width:80px;height:15px;margin-top: 2px;"></a>
      </div>
      <div class="nav-item">
        <a class="nav-link" href="landing.php"><b>Beranda</b></a>
      </div>
      <div class="nav-item">
        <a class="nav-link" href="index.php"><b>Calon Peserta</b></a>
      </div>
      <div class="nav-item">
        <a class="nav-link active" href="input.php"><b>Daftar Baru</b></a>
      </div>
    </nav>

    <h2>Form Pendaftaran Calon Peserta Digital Talent</h2>
    <p>Berikut ini Form Pendaftaran Calon Peserta Digital Talent 2022 :</p>

	<form id="inputData" action="simpan.php" method="POST">
    <table>
        <tr>
            <td><b>Nim &nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;:</b></td>
            <td><input type="ntext" name="nim"></td>
        </tr>
        <tr>
            <td><b>Nama &emsp;&emsp;&emsp;&emsp;:<b></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin :<b></td>
            <td>
            	<input type="radio" name="jenis_kelamin" value="P"> Perempuan
            	<input type="radio" name="jenis_kelamin" value="L"> Laki laki
            </td>
        </tr>
        <tr>
            <td><b>Jurusan &emsp;&emsp;&ensp;&nbsp;:<b></td>
            <td>
            	<select name="jurusan">
            		<option value="Teknik Informatika">Teknik Informatika</option>
            		<option value="Teknik Mesin">Teknik Mesin</option>
            		<option value="Teknik Kimia">Teknik Kimia</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td><b>Alamat &emsp;&emsp;&emsp;&nbsp;:<b></td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" value="Simpan">Simpan</button></td>
        </tr>
    </table>
</form>

</body>
</html>