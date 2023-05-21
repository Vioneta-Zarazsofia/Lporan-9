<?php
include('koneksi.php');
// Create table
$sql =" CREATE TABLE tb_siswa (
    id_siswa int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255) NOT NULL,
    kelas varchar(100) NOT NULL,
    alamat varchar(255) NOT NULL
    )";

if(mysqli_query($koneksi, $sql)){
    echo "New record created succesfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>