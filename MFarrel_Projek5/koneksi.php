<?php

$servername="localhost";
$username="root";
$password="";
$db="mahasiswa";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn -> connect_error) {
	die("Gagal terhubung dengan database : ".$conn -> connect_error."<br/>");
}else{
	/*echo "Berhasil terkoneksi...";*/
}

?>