<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$jeniskelamin = $_POST['jeniskelamin'];
$usia = $_POST['usia'];

if($nama == "") {
	header("location:form.php?nama=kosong");
} else {
	echo "<table>Nama Anda adalah ". $nama;
}

if($alamat == "") {
	header("location:form.php?alamat=kosong");
} else {
	echo "</br>Alamat Anda adalah ". $alamat;
}

if($tempat == "") {
	header("location:form.php?tempat=kosong");
} else {
	echo "</br>Tempat Anda adalah ". $tempat;
}

if($jeniskelamin == "") {
	header("location:form.php?jeniskelamin=kosong");
} else {
	echo "</br>Jenis Kelamin Anda adalah ". $jeniskelamin;
}

if($usia == "") {
	header("location:form.php?usia=kosong");
} else {
	echo "</br>Usia Anda adalah ". $usia;
}
?>