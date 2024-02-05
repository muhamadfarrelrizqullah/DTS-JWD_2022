<?php 
include 'koneksi.php';

$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
echo "$id_mhs";

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
$query = "UPDATE datamahasiswa SET nim = '$nim', nama ='$nama', jurusan = '$jurusan', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE id_mhs = '$id_mhs'";
mysqli_query($koneksi, $query);

header("location:index.php");

?>

