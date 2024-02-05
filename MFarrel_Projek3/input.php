<?php

    include 'koneksiInput.php';

    if(isset($_POST['namamerk']) && isset($_POST['warna']) && isset($_POST['jumlah'])){
    $namamerk = $_POST['namamerk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO printer (nama_merk, warna, jumlah) VALUES ('$namamerk','$warna', $jumlah)";
    if($conn->query($sql) === TRUE){
    	echo "Data berhasil disimpan!";
    }else{
    	echo "Error: ".$sql."<br>".$conn -> error;
    }

    }else{
    	echo "<h3>Data belum lengkap!</h3>";
    }

    $sql = "SELECT * FROM printer";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
    	echo "<table border='1'>";
    	echo "<tr>";
    	echo "<td>No</td><td>Nama Merk</td><td>Warna</td><td>Jumlah</td>";
    	echo "</tr>";
    	while ($row = $result -> fetch_Assoc()) {
    		echo "<tr>";
    		echo "<td>".$row['no']."</td>";
    		echo "<td>".$row['nama_merk']."</td>";
    		echo "<td>".$row['warna']."</td>";
    		echo "<td>".$row['jumlah']."</td>";
    		echo "</tr>";
    	}
    	echo "</table>";
    }else{
    	echo "Tidak ada data ";
    }

    $conn->close();
    echo "<a href='form.html'>Kembali</a>";

?>