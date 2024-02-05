<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
$query = "INSERT INTO datamahasiswa (nim, nama, jurusan, jenis_kelamin, alamat) VALUES ('$nim','$nama', '$jurusan', '$jenis_kelamin', '$alamat')";
mysqli_query($koneksi, $query);

header("location:index.php");

?>