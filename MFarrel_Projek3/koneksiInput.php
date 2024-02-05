<?php

$servername="localhost";
$username="root";
$password="";
$db="db_printer";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn -> connect_error) {
	die("Gagal terhubung dengan database : ".$conn -> connect_error."<br/>");
}

?>