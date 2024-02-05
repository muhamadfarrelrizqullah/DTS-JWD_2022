<?php 
include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
$query = "DELETE FROM datamahasiswa WHERE id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);
 
header("location:index.php?");
?>